<template>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
  />
  <navbar></navbar>
  <div class="bg-light">
    <div id="content" class="content-wrapper d-flex justify-content-center align-items-center">
      <div class="p-5 d-flex flex-column align-items-center justify-content-center" id="bg-warning">
        <div class="text-center mb-4">
          <h1 class="text-white">Where to Go?</h1>
          <p class="text-white">Find vehicles available in Cambodia</p>
        </div>
        <div class="d-flex justify-content-center">
          <input
            type="text"
            v-model="vehicle"
            class="form-control"
            style="width: 300px"
            placeholder="Enter your location or vehicle type"
          />
          <button class="btn btn-primary ms-3" @click="searchVehicles">Search</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-6" v-for="hotel in filteredHotels" :key="hotel.id">
        <div class="card">
          <img src="https://i.pinimg.com/474x/6a/51/59/6a5159c420d54f0daa5d28806073d7f3.jpg" class="card-img-top" :alt="hotel.name">
          <div class="card-body">
            <star-rating :rating="hotel.rating"></star-rating>
            <h5 class="card-title"><i class="bi bi-building"></i> {{ hotel.name }}</h5>
            <p class="card-text"><i class="bi bi-geo-alt-fill"></i> {{ hotel.location }}</p>
            <a href="/hotel-detail" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '@/Components/Traveler/navbarTraveler.vue'
import StarRating from '@/Components/Traveler/StarRating.vue'
import axios from 'axios';

export default {
  name: 'place-traveler',
  components: {
    Navbar,
    StarRating
  },
  data() {
    return {
      hotels: [],
      vehicle: '',
      filteredHotels: []
    }
  },
  methods: {
    async fetchCompanies() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users/role/hotelOwner');
        this.hotels = response.data.data;
        this.filteredHotels = this.hotels; 
      } catch (error) {
        console.error('Error fetching data', error);
      }
    },
    searchVehicles() {
      this.filteredHotels = this.hotels.filter(hotel =>
        hotel.name.toLowerCase().includes(this.vehicle.toLowerCase()) ||
        hotel.location.toLowerCase().includes(this.vehicle.toLowerCase())
      );
    }
  },
  mounted(){
    this.fetchCompanies();
  }
}
</script>

<style scoped>
.container {
  margin-top: 2rem;
  display: flex;
  justify-content: center;
}

.row {
  display: flex;
  justify-content: center;
  width: 100%;
}

.col-md-2.col-6 {
  flex: 0 0 20%;
  max-width: 20%;
  margin-bottom: 2rem;
  display: flex;
  justify-content: center;
}

.card {
  width: 100%;
}

.card-img-top {
  height: 120px;
  object-fit: cover;
}

#content {
  height: 350px;
  background-image: url('@/assets/image/hotel/hotel.jpg');
  background-size: cover;
  background-position: center;
}

#bg-warning {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  background: rgba(0, 0, 0, 0.67);
  height: 250px;
  width: 800px;
  border-radius: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}
</style>
