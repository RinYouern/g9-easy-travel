<template>
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
            v-model="searchQuery"
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
      <div class="col-md-2 col-6" v-for="place in filteredPlaces" :key="place.id">
        <div class="card">
          <img :src="place.images.length > 0 ? place.images[0] : 'default-image.jpg'" class="card-img-top" :alt="place.name" />
          <div class="card-body">
            <star-rating :rating="place.rating"></star-rating>
            <h5 class="card-title">{{ place.name }}</h5>
            <p class="card-text">{{ place.location }}</p>
            <a href="/place-detail" class="btn btn-primary">Go Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '@/Components/Traveler/navbarTraveler.vue';
import StarRating from '@/Components/Traveler/StarRating.vue';
import axios from 'axios';

export default {
  name: 'place-traveler',
  components: {
    Navbar,
    StarRating
  },
  data() {
    return {
      places: [],
      searchQuery: '',
      filteredPlaces: []
    };
  },
  methods: {
    async fetchPlaces() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/getAllPlce');
        this.places = response.data;
        this.filteredPlaces = this.places;
      } catch (error) {
        console.error('Error fetching data', error);
      }
    },
    searchVehicles() {
      this.filteredPlaces = this.places.filter(place =>
        place.name.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
        place.location.toLowerCase().includes(this.searchQuery.toLowerCase())
      );
    }
  },
  mounted() {
    this.fetchPlaces();
  }
};
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
  background-image: url('@/assets/image/place/bg.jpg');
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
