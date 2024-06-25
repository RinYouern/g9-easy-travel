<template>
  <section v-if="store.users.user_role === 'admin'">
    <WebLayoutAdmin> </WebLayoutAdmin>
    <listUser></listUser>
  </section>

  <section v-if="store.users.user_role === 'traveler'">
    <WebLayout>
      <Traveler></Traveler>
    </WebLayout>
  </section>

  <section v-if="store.users.user_role === 'carOwner'">
    <WebLayout>
      <CarOwner> </CarOwner>
    </WebLayout>
  </section>

  <section v-if="store.users.user_role === 'hotelOwner'">
      <HotelOwner> </HotelOwner>
  </section>
</template>


<script>
import WebLayout from '@/Components/Layouts/users/WebLayout.vue'
import WebLayoutAdmin from '@/Components/Layouts/admin/AdminLayout.vue'
import listUser from '@/Components/Layouts/admin/ListUserLayout.vue'
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