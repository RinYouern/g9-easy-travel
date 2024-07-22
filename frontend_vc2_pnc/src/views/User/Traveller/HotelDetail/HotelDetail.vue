<template>
    <header>
        <Header/>
    </header>
    <main>
    <HotelCard></HotelCard>
      
    </main>

</template>

<script>
import Header from '@/Components/Traveler/HotelDetailheader/HeaderHotel.vue'
import HotelCard  from '@/Components/Traveler/HotelDetailheader/HotelCard.vue';
export default {
name: 'HotelDetail',
components: {
  Header,
  HotelCard
}
}
</script>

<style>

</style>