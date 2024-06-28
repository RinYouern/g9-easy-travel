<template>
  <div class="bg-light">
    <div class="bg-white  p-5" id="slide">
      <slide></slide>
    </div>
    <div class="bg-white m-3 p-5" id="slide">
      <h3>Popular Attractions</h3>
      <place></place>
    </div>
    <div class="bg-white m-3 p-5" id="slide">
      <h3>Recommended Car Rentals</h3>
      <car></car>
    </div>
    <div class="bg-white m-3 p-5" id="slide">
      <h3>Popular Attractions</h3>
      <hotel></hotel>
    </div>
  </div>
</template>
  
  <script>
import car from '@/Components/Traveler/CarTraveler.vue'
import hotel from '@/Components/Traveler/HotelTraveler.vue'
import place from '@/Components/Traveler/PlaceTraveler.vue'
import slide from '@/Components/Traveler/SlideShow.vue'
export default {
  name: 'travellerPage',
  components: {
    car,
    hotel,
    place,
    slide
  }
}
</script>
  
  <style>
#header {
  height: 500px;
}
#slide {
  height: 400px;
}
</style>
  