<template>
  <Navbar />
  <p class="text-center"><strong>Hotel Tickets</strong></p>
  <recordHotel/>
  <p class="text-center"><strong>Car Tickets</strong></p>
  <recordCars/>
</template>

<script setup>
import recordHotel from '@/Components/Traveler/Bookings/recirdBookingHotel.vue'
import Navbar from '@/Components/Traveler/header/header.vue';
import recordCars from '@/Components/Traveler/Bookings/recordBookingCar.vue';


</script>
<style scoped>
p{
  font-size: 24px;
  margin-top: 20px;
  color: #343a40;
}
</style>