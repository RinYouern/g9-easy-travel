<template>
  <HeaderMenu />
  <!-- <div class="container my-5"> -->
  <body>
    <div class="welcome-message bg p-5 text-center text-white rounded">
      <div id="cover">
        <h1 >Welcome Driver</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt itaque placeat ut tempore
        assumenda nostrum, alias et laudantium? Non pariatur rem a ab velit assumenda accusamus
        tenetur sed reprehenderit ad!
      </p>
      </div>

    </div>
    <div class="container">
      <div class="row text-center mt-5">
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-dark text-white rounded">
            <div class="h4">Total Booking</div>
            <div class="display-4 text-primary">{{ totalBooking }}</div>
            <!-- Blue color -->
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-dark text-white rounded">
            <div class="h4">Approve/Reject</div>
            <div class="display-4 text-success">{{ approveReject }}</div>
            <!-- Green color -->
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="p-4 bg-dark text-white rounded">
            <div class="h4">Pending/Done</div>
            <div class="display-4 text-warning">{{ pendingDone }}</div>
            <!-- Orange color -->
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
            <th>Name</th>
            <th>Date-start</th>
            <th>Date-end</th>
            <th>Detination</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
  <tr v-for="booking in bookings" :key="booking.id" class="align-middle">
    <td class="text-center"><img :src="booking.image" alt="Booking Image" style="width: 50px" /></td>
    <td>{{ booking.name }}</td>
    <td>{{ booking.startDate }}</td>
        <td>{{ booking.endDate }}</td>
    <td>{{ booking.detination }}</td>
    <td class="text-success fw-bold text-center"><button class="btn btn-primary">Accept</button></td>
  </tr>
</tbody>
      </table>
    </div>
  </body>

  <!-- </div> -->
</template>
<script>
import HeaderMenu from '@/Components/HeaderMenu.vue'
export default {
  components: {
    HeaderMenu
  },
  name: 'DriverDashboard',

  data() {
    return {
      totalBooking: 5,
      approveReject: '3/2',
      pendingDone: '2/3',
      bookings: [
        {
          id: 1,
          name: 'dufy',
          startDate: '22/06/2024',
          endDate: '24/06/2024',
          image: 'https://i.pinimg.com/474x/34/c3/33/34c3332cb8eb6c448bb4544cd7df4bcd.jpg',
          detination: 'Kampot',
        },
        {
          id: 2,
          name: 'dufy',
          startDate: '22/06/2024',
          endDate: '24/06/2024',
          image: 'https://i.pinimg.com/474x/34/c3/33/34c3332cb8eb6c448bb4544cd7df4bcd.jpg',
          detination: 'Kampot',
        },
        {
          id: 3,
          name: 'dufy',
          startDate: '22/06/2024',
          endDate: '24/06/2024',
          image: 'https://i.pinimg.com/474x/34/c3/33/34c3332cb8eb6c448bb4544cd7df4bcd.jpg',
          detination: 'Kampot',
        },
        {
          id: 4,
          name: 'dufy',
          startDate: '22/06/2024',
          endDate: '24/06/2024',
          image: 'https://i.pinimg.com/474x/34/c3/33/34c3332cb8eb6c448bb4544cd7df4bcd.jpg',
          detination: 'Kampot',
        },
        {
          id: 5,
          name: 'dufy',
          startDate: '22/06/2024',
          endDate: '24/06/2024',
          image: 'https://i.pinimg.com/474x/34/c3/33/34c3332cb8eb6c448bb4544cd7df4bcd.jpg',
          detination: 'Kampot',
        }
      ]
    }
  }
}
</script>
<style scoped>
body {
  margin: 0;
  padding: 0;
}

.bg {
  background-image: url('https://images.pexels.com/photos/1628037/pexels-photo-1628037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
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
#cover {
  width: 600px;
  background: #0000006b;
  margin: 0 auto;
  padding: 20px;
}

</style>
