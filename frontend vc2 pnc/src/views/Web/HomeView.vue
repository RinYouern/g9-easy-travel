<template>
    <WebLayoutAdmin v-if="store.users.user_role ==='admin'">
      <AdminPage> </AdminPage>
  </WebLayoutAdmin>

  <WebLayout v-if="store.users.user_role ==='traveler'">
    <Traveler></Traveler>
  </WebLayout>

  <WebLayout v-if="store.users.user_role ==='carOwner'">
    <CarOwner>  </CarOwner>
  </WebLayout>

  <WebLayout v-if="store.users.user_role ==='hotelOwner'">
    <HotelOwner>  </HotelOwner>
  </WebLayout>

</template>


<script>
import WebLayout from '@/Components/Layouts/WebLayout.vue'
import WebLayoutAdmin from '@/Components/Layouts/AdminLayout.vue'
import { userStore } from '@/stores/user-list'

// add paage user
import AdminPage from '@/views/Admin/DashboardView.vue'
import Traveler from '@/views/User/Traveller/TravellerView.vue'
import CarOwner from '@/views/User/CarOwner/CarOwnerView.vue'
import HotelOwner from '@/views/User/HotelOwner/HotelOwnerView.vue'
export default {
  name: 'user-list',
  components: {
    WebLayout,
    WebLayoutAdmin,
    //user components
    AdminPage,
    Traveler,
    CarOwner,
    HotelOwner
  },
  data() {
    return {
      store: userStore(),
      user: []
    }
  },
  mounted() {
    this.fetchUser()
  },
  methods: {
    fetchUser() {
      this.store.fetchUser()
    }
  }
}
</script>