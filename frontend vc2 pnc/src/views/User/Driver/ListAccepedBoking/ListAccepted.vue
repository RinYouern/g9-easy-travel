<template>
  <div class="container">
    <h1 class="mb-4 pt-4 text-center">List all Accepted</h1>
    <button class="btn btn-primary mb-4" @click="goToDriverPage">Back</button>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>License Number</th>
          <th>Booking day start</th>
          <th>Booking day end</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="driver in acceptedDrivers" :key="driver.id">
          <td>{{ driver.name }}</td>
          <td>{{ driver.licenseNumber }}</td>
          <td>{{ driver.bookingDayStart }}</td>
          <td>{{ driver.bookingDayEnd }}</td>
          <td :class="{ 'text-success': driver.status === 'Accepted' }">{{ driver.status }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
  data() {
    return {
      drivers: [
        {
          id: 1,
          name: 'John Doe',
          licenseNumber: '123456789',
          status: 'Accepted',
          bookingDayStart: '8:00 AM',
          bookingDayEnd: '5:00 PM'
        },
        {
          id: 2,
          name: 'Jane Smith',
          licenseNumber: '987654321',
          status: 'Accepted',
          bookingDayStart: '9:00 AM',
          bookingDayEnd: '6:00 PM'
        },
        {
          id: 3,
          name: 'Bob Johnson',
          licenseNumber: '456789123',
          status: 'Rejected',
          bookingDayStart: '7:30 AM',
          bookingDayEnd: '4:30 PM'
        },
        {
          id: 4,
          name: 'Alice Williams',
          licenseNumber: '789123456',
          status: 'Accepted',
          bookingDayStart: '8:30 AM',
          bookingDayEnd: '5:30 PM'
        }
      ]
    }
  },
  computed: {
    acceptedDrivers() {
      return this.drivers.filter((driver) => driver.status === 'Accepted')
    }
  }
}
</script>
<style>
@import 'bootstrap/dist/css/bootstrap.min.css';
.table {
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
  border-radius: 8px;
  overflow: hidden;
}

.table thead th {
  background-color: black;
  color: white;
  font-weight: 600;
  border-bottom: none;
}

.table tbody tr:hover {
  background-color: #f8f9fa;
}

.table td,
.table th {
  padding: 1rem;
  vertical-align: middle;
  font-size: 0.9rem;
}

.text-success {
  color: green !important;
}
</style>