<template>
  <div class="mt-5 p-3 bg-light rounded">
    <h2 class="mb-4">List Booking</h2>
    <table class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Date-start</th>
          <th>Date-end</th>
          <th>Destination</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="booking in filteredBookings" :key="booking.id" class="align-middle">
          <template v-if="store.users.company == booking.owner_id && booking.status !== 'accepted'">
            <td>{{ booking.name }}</td>
            <td>{{ booking.phone }}</td>
            <td>{{ formatDate(booking.start_date) }}</td>
            <td>{{ formatDate(booking.end_date) }}</td>
            <td>{{ booking.where }}</td>
            <td class="text-success fw-bold text-center">
              <button class="btn btn-primary" @click="fetchRespondBooking(booking.id)">
                Accept
              </button>
            </td>
          </template>
        </tr>
      </tbody>
    </table>
  </div>
</template>
  
  <script>
import { userStore } from '@/stores/user-list'
import axios from 'axios'

export default {
  name: 'ListBooking',
  data() {
    return {
      store: userStore(),
      bookings: [],
      selectedBooking: {}
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
          driver_id: this.store.users.id
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
    showDetailModal(booking) {
      this.selectedBooking = booking
      const modal = new bootstrap.Modal(document.getElementById('bookingDetailModal'))
      modal.show()
    },
    formatDate(dateString) {
      return dateString ? dateString.split('T')[0] : ''
    },
    fetchUser() {
      this.store.fetchUser()
    }
  },
  computed: {
    filteredBookings() {
      return this.bookings
    }
  }
}
</script>
  
  <style>
/* Add any custom styles here if needed */
</style>
  