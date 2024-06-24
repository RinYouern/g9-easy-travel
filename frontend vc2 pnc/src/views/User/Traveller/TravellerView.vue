<template>
    <h1>Hello traveller</h1>
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
  