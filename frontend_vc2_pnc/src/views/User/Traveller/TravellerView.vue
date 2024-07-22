<template>
  <!-- link style  -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link
    rel="stylesheet"
    href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
  />
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css" />
  <!-- style -->
  <div>
    <Header />
    <div style="padding: 2%">
      <trending :places="places" />
      <hotels :hotels="hotels" />
      <carretails :carretails="carretails" />
    </div>
    <footer>
      <Footer></Footer>
    </footer>

  </div>
</template>

<script>
import Header from '@/Components/Traveler/header/header.vue'
import trending from '@/Components/Traveler/Place/Places.vue'
import hotels from '@/Components/Traveler/Hotels/CardOfHotel.vue'
import carretails from '@/Components/Traveler/CarRetail/CardCar.vue'
import Footer from '@/Components/Traveler/header/Footer.vue'
import axios from 'axios'

export default {
  name: 'Traveler',
  components: { trending, hotels, carretails, Header, Footer },
  data() {
    return {
      places: [],
      hotels: [],
      carretails: []
    }
  },
  methods: {
    async fetchTopHotel() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users/rate/hotelOwner');
        this.hotels = response.data.data; 
      } catch (error) {
        console.error('Error fetching top hotels:', error);
      }
    },
    async fetchTopCar() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users/rate/carowner');
        this.carretails = response.data.data; 
      } catch (error) {
        console.error('Error fetching top cars:', error);
      }
    },
    async fetchTopPlace() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/places/top');
        this.places = response.data.data; 
      } catch (error) {
        console.error('Error fetching top place:', error);
      }
    }
  },
  mounted() {
    this.fetchTopHotel();
    this.fetchTopCar();
    this.fetchTopPlace();
  }
}
</script>

<style>

</style>
