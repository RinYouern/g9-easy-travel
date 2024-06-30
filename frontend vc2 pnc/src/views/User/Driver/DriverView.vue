<template>
  <HeaderMenu />
  <div class="welcome-message bg p-5 text-center text-white rounded">
    <div id="cover">
      <h1>Welcome Driver</h1>
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
          <!-- <th>User-profile</th> -->
          <th>Name</th>
          <th>Phone</th>
          <th>Date-start</th>
          <th>Date-end</th>
          <th>Detination</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="booking in bookings" :key="booking.id" class="align-middle">
          <!-- <td class="text-center" v-if="store.users.company == booking.owner_id">
            <img :src="booking.image" alt="Booking Image" style="width: 50px" />
          </td> -->
          <td v-if="store.users.company == booking.owner_id && booking.status!== 'accepted'">{{ booking.name }}</td>
          <td v-if="store.users.company == booking.owner_id && booking.status!== 'accepted'">{{ booking.phone }}</td>
          <td v-if="store.users.company == booking.owner_id && booking.status!== 'accepted'">
            {{ formatDate(booking.start_date) }}
          </td>
          <td v-if="store.users.company == booking.owner_id && booking.status!== 'accepted'">{{ formatDate(booking.end_date) }}</td>
          <td v-if="store.users.company == booking.owner_id && booking.status!== 'accepted'">{{ booking.where }}</td>
          <td
            v-if="store.users.company == booking.owner_id && booking.status!== 'accepted'"
            class="text-success fw-bold text-center"
          >
            <button class="btn btn-primary" @click="fetchRespondBooking(booking.id)">Accept</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import HeaderMenu from '@/Components/HeaderMenu.vue'
import { userStore } from '@/stores/user-list'
import axios from 'axios'

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
      bookings: [],
      store: userStore()
    }
  },
  mounted() {
    this.fetchBookings()
    this.fetchUser()
  },

  methods: {
    async fetchBookings() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/recordAll')
        this.bookings = response.data.data
      } catch (error) {
        console.error(error)
      }
    },
    async fetchRespondBooking(bookingId) {
      try {
        const data = {
          status: 'accepted',
          driver_id: this.store.users.id ,
        }

        const response = await axios.put(
          `http://127.0.0.1:8000/api/bookings/${bookingId}/accept`,
          data
        )

        this.status = response.data.status
        this.driver_id = response.data.driver_id
        await this.fetchBookings()
        console.log(bookingId)
      } catch (error) {
        console.error(error)
      }
    },
    formatDate(dateString) {
      return dateString ? dateString.split('T')[0] : ''
    },
    fetchUser() {
      this.store.fetchUser()
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