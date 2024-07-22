<template>
  <HeaderMenu />
  <Header />
  <div class="container">
    <div class="row text-center mt-5">
      <a href="" class="col-md-4 mb-4 btn">
        <div class="bg-dark">
          <div class="p-4 text-white rounded">
            <div class="h4">Bookings</div>
            <div class="display-4 text-success">{{ totalBooking }}</div>
          </div>
        </div>
      </a>

      <a href="/list-accepted" class="col-md-4 mb-4 btn">
        <div class="bg-dark">
          <div class="p-4 text-white rounded">
            <div class="h4">Accepted</div>
            <div class="display-4 text-success">{{ approveReject }}</div>
          </div>
        </div>
      </a>
      <a href="" class="col-md-4 mb-4 btn">
        <div class="bg-dark">
          <div class="p-4 text-white rounded">
            <div class="h4">List</div>
            <div class="display-4 text-success">{{ pendingDone }}</div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <listBooking />
</template>

<script>
import HeaderMenu from '@/Components/HeaderMenu.vue'
import listBooking from '@/Components/Driver/ListBooking.vue'
import Header from '@/Components/Driver/Header.vue'

export default {
  components: {
    HeaderMenu,
    listBooking,
    Header
  },
  name: 'DriverDashboard',
  data() {
    return {
      totalBooking: 5,
      approveReject: 3,
      pendingDone: '2/3'
    }
  }
}
</script>

<style scoped>
body {
  margin: 0;
  padding: 0;
}

.table-hover tbody tr:hover {
  background-color: #f5f5f5;
}

.text-success {
  color: orange !important;
}

.display-4 {
  font-size: 2.5rem;
  font-weight: bold;
}

.text-primary {
  color: orange !important;
}

.text-warning {
  color: orange !important;
}
</style>