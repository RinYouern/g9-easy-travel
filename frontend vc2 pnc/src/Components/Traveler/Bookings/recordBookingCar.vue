<template>
  <div class="container">
    <table class="table table-striped" v-if="!loading && !error">
      <thead class="text-center">
        <tr>
          <th>Company Name</th>
          <th>Email</th>
          <th>Location</th>
          <th>Vehicle ID</th>
          <th>Where</th>
          <th>Price</th>
          <th>Dates</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr v-for="booking in store.RecordsCar" :key="booking.name">
          <td>{{ booking.CompanyName }}</td>
          <td>{{ booking.Email }}</td>
          <td>{{ booking.Location }}</td>
          <td>{{ booking.VehicleID }}</td>
          <td>{{ booking.Where }}</td>
          <td>{{ booking.Price }} $</td>
          <td>{{ booking.go }} - {{ booking.back }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
  
  <script setup>
import { ref, onMounted } from 'vue'
import { listCarStore } from '@/stores/recordBookingCar.ts'

const store = listCarStore()

const loading = ref(true)
const error = ref(null)

onMounted(async () => {
  try {
    await store.fetchCars()
  } catch (err) {
    error.value = 'Failed to load bookings records'
  } finally {
    loading.value = false
  }
})
</script>
  
  <style scoped>
.container {
  max-height: 450px; /* Adjust height as needed */
  overflow-y: auto; /* Enable vertical scrolling */
  padding: 2% 10% 0 10%;
}

.loading,
.error {
  text-align: center;
  font-size: 1.5em;
  color: #ff6f61;
}

.bookings-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.booking-card {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  padding: 20px;
  transition: transform 0.2s, box-shadow 0.2s;
}

.booking-card:hover {
  transform: scale(1.02);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #eee;
  padding-bottom: 10px;
  margin-bottom: 10px;
}

.card-header h2 {
  margin: 0;
  font-size: 1.5em;
  color: #333;
}

.card-header .status {
  margin-right: 10px;
}

.card-body,
.card-footer {
  margin-bottom: 10px;
}

.card-body p,
.card-footer p {
  margin: 5px 0;
}

.card-body p strong,
.card-footer p strong {
  color: #333;
}

.dates {
  font-size: 0.9em;
  color: #888;
}

@media (max-width: 768px) {
  .container {
    max-width: 800px;
    max-height: 500px;
    margin: 0 auto;
    padding: 10px;
  }
  .card-header {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid #decdcd;
    padding-bottom: 10px;
    margin-bottom: 10px;
    align-items: start;
  }
}
</style>
  