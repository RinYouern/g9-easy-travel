<template>
  <navebar></navebar>
  <div class="bg-light">
    <div class="bg-primary" id="header">

    </div>
  </div>
</template>

<script>

import navebar from '@/Components/Traveler/navbarTraveler.vue'
export default {
  name: 'place-traveler',
  components: {
    navebar
  }
}
</script>

<style>
#header {
  height: 450px;
  background-size: cover;
  background-image:url('https://dynamic-media-cdn.tripadvisor.com/media/daodao/photo-o/14/51/dc/67/caption.jpg?w=1800&h=700&s=1') ;
}
</style>
