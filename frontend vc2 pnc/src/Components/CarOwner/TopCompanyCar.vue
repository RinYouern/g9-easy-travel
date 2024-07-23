<template>
<div class="container">
      <h2 class="text-left">Trending destinations</h2>
      <div class="row flex-nowrap overflow-auto">
        <div class="col-md-3 mb-4" v-for="item in hotels" :key="item.name">
          <router-link :to="'/car-detail/' + item.id" class="text-decoration-none">
          <div class="card">
            <img :src="item.profile" class="card-img-top" :alt="item.name" />
            <div class="text-left p-2">
              <strong>{{ item.name }}</strong>
              <p style="font-size: small;">{{ item.province }}</p>
              <p><span class="border p-2 bg-warning rounded-pill">{{ item.rating }}</span> Exceptionals</p>
            </div>
          </div>
          </router-link>
        </div>
      </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'HelloWorld',
  data() {
    return {
      hotels: []
    }
  },
  created() {
    this.fetchTopHotels();
  },
  methods: {
    async fetchTopHotels() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users/rate/carowner');
        this.hotels = response.data.data; 
      } catch (error) {
        console.error('Error fetching top hotels:', error);
      }
    },
  }
}
</script>

<style scoped>
/* Add any relevant styles here */
</style>
