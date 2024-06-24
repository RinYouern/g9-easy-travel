<template>
  <section v-if="store.users.user_role === 'admin'">
    <WebLayoutAdmin> </WebLayoutAdmin>
    <listUser></listUser>
  </section>

  <section v-if="store.users.user_role === 'traveler'">
    <navbar> </navbar>
    <main>
      <Traveler></Traveler>
    </main>
  </section>

  <section v-if="store.users.user_role === 'carOwner'">
    <WebLayout>
      <CarOwner> </CarOwner>
    </WebLayout>
  </section>

  <section v-if="store.users.user_role === 'hotelOwner'">
    <WebLayout>
      <HotelOwner> </HotelOwner>
    </WebLayout>
  </section>
</template>


<script>
import WebLayout from '@/Components/Layouts/users/WebLayout.vue'
import WebLayoutAdmin from '@/Components/Layouts/admin/AdminLayout.vue'
import listUser from '@/Components/Layouts/admin/ListUserLayout.vue'
import { userStore } from '@/stores/user-list'

// add paage user
import AdminPage from '@/views/Admin/DashboardView.vue'
//taveler
import Traveler from '@/views/User/Traveller/TravellerView.vue'
import navbar from '@/Components/Traveler/navbarTraveler.vue'
import place_traveler from '@/views/User/Traveller/PlaceView.vue'

import CarOwner from '@/views/User/CarOwner/CarOwnerView.vue'
import HotelOwner from '@/views/User/HotelOwner/HotelOwnerView.vue'
export default {
  name: 'user-list',
  components: {
    WebLayout,
    WebLayoutAdmin,
    //user components
    AdminPage,
    listUser,
    //travler
    Traveler,
    navbar,
    place_traveler,

    //car owner
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