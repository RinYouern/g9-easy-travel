<template>
  <div style="margin-left: -50px">
    <h1 class="text-dark fw-bold">Customers Payment</h1>
    <table class="table mt-3">
      <thead class="text-center">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Total pay</th>
          <th scope="col">Date</th>
          <th scope="col">Active</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr v-for="customer in listBookingOwner" :key="customer.id">
          <td>{{ customer.name }}</td>
          <td>{{ customer.phone }}</td>
          <td>{{ customer.email }}</td>
          <td>{{ customer.arrival_date }} - {{ customer.departure_date }}</td>
          <td>$ {{ customer.amount }}</td>
          <td>
            <button class="btn btn-danger p-2" @click="deleteCustomer(customer.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import { useListBookingOwnerStore } from '@/stores/list-booking-hotel-owner'

export default {
  name: 'BookingOwnerList',
  data() {
    return {
      listBookingOwner: []
    }
  },
  created() {
    this.fetchData()
  },
  methods: {
    async fetchData() {
      const listBookingOwnerStore = useListBookingOwnerStore()
      await listBookingOwnerStore.fetchBookings()
      this.listBookingOwner = listBookingOwnerStore.listBookingOwner
    }
  }
}
</script>

<style scoped>
h1 {
  font-size: 24px;
  color: #333;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  padding: 8px 0;
}
</style>