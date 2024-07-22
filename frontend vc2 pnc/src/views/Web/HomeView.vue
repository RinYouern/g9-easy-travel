<template>
  <section v-if="store.users.user_role === 'admin'">
    <WebLayoutAdmin> </WebLayoutAdmin>
  </section>

  <section v-if="store.users.user_role === 'traveler'">
      <Traveler></Traveler>
  </section>

  <section v-if="store.users.user_role === 'carOwner'">
      <CarOwner> </CarOwner>
  </section>

  <section v-if="store.users.user_role === 'hotelOwner'">
      <HotelOwner> </HotelOwner>
  </section>
  <section v-if="store.users.user_role === 'driver'">
      <Driver> </Driver>
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
import Driver from '@/views/User/Driver/DriverView.vue'
export default {
  name: 'user-list',
  components: {
    WebLayout,
    WebLayoutAdmin,
    //user components
    AdminPage,
    Traveler,
    CarOwner,
    HotelOwner,
    Driver
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