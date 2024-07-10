import { createRouter, createWebHistory } from 'vue-router'
import axiosInstance from '@/plugins/axios'
import { useAuthStore } from '@/stores/auth-store'
import { createAcl, defineAclRules } from 'vue-simple-acl'

const simpleAcl = createAcl({})
const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/admin/dashboard',
      name: 'dashboard',
      component: () => import('../views/Admin/DashboardView.vue'),
      meta: {
        requiresAuth: true,
        role: 'admin'
      }
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/Admin/Auth/LoginView.vue')
    },
    {
      path: '/',
      name: 'home',
      component: () => import('../views/Web/HomeView.vue')
    },
    {
      path: '/register',
      name: 'register',
      component: () => import('../views/Admin/Auth/RegisterView.vue')
    },
    {
      path: '/homepage',
      name: 'homepage',
      component: () => import('../HomePage.vue')
    },
    {
      path: '/hotelowner',
      name: 'hotelowner',
      component: () => import('../views/User/HotelOwner/HotelOwnerView.vue')
    },
    {
      path: '/room_managemant',
      name: 'room_managemant',
      component: () => import('../views/User/HotelOwner/page/RoomManagementView.vue')
    },
    {
      path: '/customers_payment',
      name: 'customers_payment',
      component: () => import('../views/User/HotelOwner/page/CustomerPaymentView.vue')
    },
    {
      path: '/top-hotel',
      name: 'top-hotel',
      component: () => import('../views/User/HotelOwner/page/TopHotelView.vue')
    },
    {
      path: '/listuser',
      name: 'listuser',
      component: () => import('@/Components/Layouts/admin/ListUserLayout.vue')
    },
    {
      path: '/place-traveler',
      name: 'place-traveler',
      component: () => import('@/views/User/Traveller/PlaceView.vue')
    },
    {
      path: '/car-traveler',
      name: 'car-traveler',
      component: () => import('@/views/User/Traveller/CarView.vue')
    },
    {
      path: '/hotel-traveler',
      name: 'hotel-traveler',
      component: () => import('@/views/User/Traveller/HotelView.vue')
    },
    {
      path: '/information',
      name: 'information',
      component: () => import('@/views/profile/information.vue')
    },
    {
      path: '/updateInfo',
      name: 'updateInfo',
      component: () => import('@/views/update_info/updateInfo.vue')
    },
    {
      path: '/booking-car',
      name: 'booking-car',
      component: () => import('@/views/User/Traveller/BookingFormView.vue')
    },
    {
      path: '/list-car',
      name: 'list-car',
      component: () => import('@/views/User/CarOwner/ListCarView.vue')
    },
    {
      path: '/edit',
      name: 'edit',
      component: () => import('@/views/Admin/AdminEdit.vue')
    },
    {
      path: '/detail',
      name: 'detail',
      component: () => import('@/views/Admin/DetailView.vue')
    },
    {
      path: '/hotel-detail/:id',
      name: 'hotel-detail',
      component: () => import('@/views/User/Traveller/HotelDetail/HotelDetail.vue')
    },
    {
      path: '/car-detail/:id',
      name: 'car-detail',
      component: () => import('@/views/User/Traveller/CompanyCarDetail/CompanyDetail.vue')
    },
    {
      path: '/list-accepted',
      name: 'list-accepted',
      component: () => import('@/views/User/Driver/ListAccepedBoking/ListAccepted.vue')
    },
    {
      path: '/placemanagement',
      name: 'placemanagement',
      component: () => import('@/Components/Layouts/admin/PlaceLayout.vue')
    },

    {
      path: '/form_booking',
      name: 'form_booking',
      component:()=>import('@/views/Admin/form_booking/formBooking.vue')
    },
    {
      path: '/success_form',
      name: 'success_form',
      component:()=>import('@/views/Admin/success_form/successForm.vue')
    },
    {
      path: '/place-detail',
      name: 'place-detail',
      component:()=>import('@/views/User/Traveller/PlaceDetail/ShowDetailPlace.vue')
    },
    {
      path: '/booking/:id',
      name: 'booking',
      component:()=>import('@/views/User/Traveller/BookingHotel/BookingHotel.vue')
    },


  ]
})

router.beforeEach(async (to, from, next) => {
  const publicPages = ['/login','/register','/homepage', '/hotelowner', '/room_managemant', '/customers_payment']
  const authRequired = !publicPages.includes(to.path)
  const store = useAuthStore()

  try {
    const { data } = await axiosInstance.get('/me')

    store.isAuthenticated = true
    store.user = data.data

    store.permissions = data.data.permissions.map((item: any) => item.name)
    store.roles = data.data.roles.map((item: any) => item.name)

    const rules = () =>
      defineAclRules((setRule) => {
        store.permissions.forEach((permission: string) => {
          setRule(permission, () => true)
        })
      })

    simpleAcl.rules = rules()
  } catch (error) {
    /* empty */
  }

  if (authRequired && !store.isAuthenticated) {
    next('/homepage')
  } else {
    next()
  }
})

export default { router, simpleAcl }
