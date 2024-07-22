<template>
  <div class="container mt-5">
    <h2>Book a Car</h2>
    <form @submit.prevent="submitBooking">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="vehicle_id">Vehicle ID</label>
          <input type="text" class="form-control" id="vehicle_id" v-model="form.vehicle_id" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="start_date">Start Date</label>
          <input type="date" class="form-control" id="start_date" v-model="form.start_date" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="end_date">End Date</label>
          <input type="date" class="form-control" id="end_date" v-model="form.end_date" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="total_cost">Total Cost</label>
          <input type="number" class="form-control" id="total_cost" v-model="form.total_cost" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="where">Location</label>
        <input type="text" class="form-control" id="where" v-model="form.where" required>
      </div>
      <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" v-model="form.name" required>
      </div>
      <div class="mb-3">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" v-model="form.phone" required>
      </div>
      <div class="mb-3">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" id="quantity" v-model="form.quantity" required>
      </div>
      <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      form: {
        vehicle_id: '',
        start_date: '',
        end_date: '',
        total_cost: '',
        where: '',
        name: '',
        phone: '',
        quantity: ''
      }
    };
  },
  methods: {
    async submitBooking() {
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/bookingCar', this.form);
        alert('Booking successful!');
        // Clear the form after successful submission
        this.form = {
          vehicle_id: '',
          start_date: '',
          end_date: '',
          total_cost: '',
          where: '',
          name: '',
          phone: '',
          quantity: ''
        };
      } catch (error) {
        console.error('There was an error!');
      }
    }
  }
};
</script>

<style scoped>
.container {
  max-width: 600px;
}
</style>
