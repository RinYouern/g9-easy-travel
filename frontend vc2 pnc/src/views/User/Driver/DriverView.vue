<template>
 <header class="flex justify-between px-50 py-3 bg-white items-center">
    <!-- Logo -->
    <div class="flex items-center space-x-2 bg-dark">
      <Icon icon="skill-icons:devto-dark" style="font-size: 45px" />
      <span class="text-xl font-bold">I-KNOW</span>
    </div>

    <!-- Menu Items -->
    <nav class="flex justify-center space-x-4">
      <a
        href="/post"
        class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900"
        >Post</a
      >
      <a
        href="/team"
        class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900"
        >Team</a
      >
      <a
        href="/projects"
        class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900"
        >Projects</a
      >
      <a
        href="/reports"
        class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900"
        >Reports</a
      >
    </nav>

    <!-- Sign In -->
    <button @click="logout" class="px-4 py-2 rounded font-semibold cursor-pointer">
      Logout
    </button>
  </header>
  <!-- <div class="container my-5"> -->
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
          <div class="display-4 text-primary">{{ totalBooking }}</div> <!-- Blue color -->
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 bg-dark text-white rounded">
          <div class="h4">Approve/Reject</div>
          <div class="display-4 text-success">{{ approveReject }}</div> <!-- Green color -->
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 bg-dark text-white rounded">
          <div class="h4">Pending/Done</div>
          <div class="display-4 text-warning">{{ pendingDone }}</div> <!-- Orange color -->
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
    
  <!-- </div> -->
</template>
<script>
export default {
  name: 'DriverDashboard',
  data() {
    return {
      totalBooking: 5, // Example value
      approveReject: '3/2', // Example value
      pendingDone: '2/3', // Example value
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

body{ 
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
  /* background-color: rgba(0, 0, 0, 0.7); */
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
