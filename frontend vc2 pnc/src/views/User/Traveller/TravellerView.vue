<template>
  <div class="bg-light">
    <div class="bg-white m-3 p-3" id="content">
        <slide> </slide>
        <h3 class="text-center">Find your trip here!</h3>
    </div>
    <div class="bg-white m-3 p-3" id="content">
      <h4 class="">Popular Attractions</h4>
      <place></place>
    </div>
    <div class="bg-white m-3 p-3" id="content">
      <h4 class="">
        Recommended Car Rentals
      </h4>
      <car></car>
    </div>
    <div class="bg-white m-3 p-3" id="content">
      <h4 class="">Featured Properties</h4>
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
  name: 'traveller',
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
#content {
  height: 400px;
}
</style>
  