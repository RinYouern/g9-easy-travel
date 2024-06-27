<template>
  <navbar></navbar>

  <body>
    <div class="welcome-message bg p-5 text-center text-white rounded">
      <h1 class="display-4">Welcome Driver</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt itaque placeat ut tempore assumenda nostrum,
        alias et laudantium? Non pariatur rem a ab velit assumenda accusamus tenetur sed reprehenderit ad!
      </p>
    </div>
    <div class="container">
      <div class="row text-center mt-5">
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-dark text-white rounded">
            <div class="h4">Total Booking</div>
            <div class="display-4 text-primary">{{ totalBooking }}</div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-dark text-white rounded">
            <div class="h4">Approve/Reject</div>
            <div class="display-4 text-success">{{ approveReject }}</div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-dark text-white rounded">
            <div class="h4">Pending/Done</div>
            <div class="display-4 text-warning">{{ pendingDone }}</div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-5 p-3 bg-light rounded">
      <h2 class="mb-4">List Booking</h2>
      <table class="table table-hover">
        <thead class="table-dark">
          <tr>
            <th>User-profile</th>
            <th>Date-start</th>
            <th>Date-end</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="booking in bookings" :key="booking.id">
            <td><i class="bi bi-person-circle"></i></td> <!-- Icon for user-profile -->
            <td>{{ booking.startDate }}</td>
            <td>{{ booking.endDate }}</td>
            <td class="text-success fw-bold">Approve</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</template>
<script>import navbar from '@/Components/Traveler/navbarTraveler.vue'
export default {
  name: 'DriverDashboard',
  components: {
    navbar
  },
  data() {
    return {
      totalBooking: 5,
      approveReject: '3/2',
      pendingDone: '2/3',
      bookings: [
        { id: 1, startDate: '22/06/2024', endDate: '24/06/2024' },
        { id: 2, startDate: '22/06/2024', endDate: '24/06/2024' },
        { id: 3, startDate: '22/06/2024', endDate: '24/06/2024' },
        { id: 4, startDate: '22/06/2024', endDate: '24/06/2024' },
        { id: 5, startDate: '22/06/2024', endDate: '24/06/2024' },
      ]
    };
  },
};
</script>
<style scoped>
body {
  margin: 0;
  padding: 0;
}

.bg {
  background-image: url('src/assets/image/driver3.jpg');
  background-size: cover;
  background-position: center;
  border-radius: 10px;
  height: 300px;
}

h1 {
  color: white;
  font-weight: bold;
  display: flex;
  justify-content: flex-start;
}

p {
  color: whitesmoke;
  border-radius: 10px;
  padding: 15px;
}

.table-hover tbody tr:hover {
  background-color: #f5f5f5;
}

.text-success {
  color: green !important;
}

.display-4 {
  font-size: 2.5rem;
  font-weight: bold;
}

.text-primary {
  color: blue !important;
}

.text-warning {
  color: orange !important;
}
</style>
