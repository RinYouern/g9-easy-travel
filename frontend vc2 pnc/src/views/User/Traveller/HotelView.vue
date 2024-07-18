<template>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
  />
  <Header></Header>
  <div class="container d-flex flex-column mt-5">
    <div
      class="card d-flex flex-row mt-3"
      v-for="hotel in hotels"
      :key="hotel.id"
      style="margin: auto"
    >
      <div class="image-container">
        <img
          src="https://ak-d.tripcdn.com/images/220j050000000iape685E_R_960_660_R5_D.jpg"
          class="img-fluid"
          alt="Hotel Image"
        />
        <div class="image-overlay d-flex justify-content-center align-items-center">
          <div class="image-text">View Gallery</div>
        </div>
      </div>
      <div class="d-flex flex-column justify-content-between p-3" style="width: 100%">
        <div class="bg-white" style="height: 50%">
          <div class="d-flex align-items-center">
            <h1 class="me-2">{{ hotel.name }}</h1>
            <span class="star text-warning" v-if="hotel.rating == 3">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </span>
            <span class="star text-warning" v-if="hotel.rating >= 3.5 && hotel.rating < 4">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </span>
            <span class="star text-warning" v-if="hotel.rating == 4">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
            </span>
            <span class="star text-warning" v-if="hotel.rating == 4.5">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <i class="bi bi-hand-thumbs-up text-primary">Very Good</i>
            </span>
            <span class="star text-warning" v-if="hotel.rating >= 5">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-hand-thumbs-up text-primary">Very Good</i>
            </span>
          </div>
          <div class="d-flex align-items-center">
            <span class="rate text-white bg-primary p-1 rounded"
              ><strong>{{ hotel.rating }}/5</strong></span
            >
            <span class="text-primary ms-2"><q>Good Look, View</q></span>
            <span class="ms-2"><q>Good Place</q></span>
            <span class="ms-2"><q>Good Stay</q></span>
          </div>
          <div class="d-flex flex-column">
            <div class="d-flex">
              <span class="me-2">Location:</span>
              <span>{{ hotel.location }}</span>
              <a href="#" class="text-primary">Show on Map</a>
            </div>
          </div>
        </div>
        <div
          class="bg-warning mt-3 p-3 d-flex justify-content-between align-items-center"
          style="height: 50%"
        >
          <div class="d-flex flex-column text-left">
            <h3>Hotel Booking Guarantee</h3>
            <div class="d-flex align-items-center">
              <span class="text-primary">We Price Match</span>
            </div>
            <div class="d-flex align-items-center">
              <span class="text-primary">Hotel Stay Guarantee</span>
            </div>
          </div>
          <div class="d-flex flex-column align-items-end">
            <div class="d-flex align-items-center">
              <span class="text-decoration-line-through me-2">$37</span>
              <span class="fs-4 fw-bold">$30</span>
            </div>
            <div class="text-danger">10% Off</div>
            <div>Total (incl. taxes): $2</div>
            <button class="btn btn-primary">Check Availability</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Header from '@/Components/Traveler/header/header.vue'
import axios from 'axios'

export default {
  name: 'place-traveler',
  components: {
    Header
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
        const response = await axios.get('http://127.0.0.1:8000/api/users/role/hotelOwner')
        this.hotels = response.data.data
        this.filteredHotels = this.hotels
      } catch (error) {
        console.error('Error fetching data', error)
      }
    },
    showId(id) {
      console.log('Selected hotel ID:', id)
    }
  },
  mounted() {
    this.fetchCompanies()
  }
}
</script>

<style scoped>
.card {
  width: 80%;
}
.image-container {
  position: relative;
  width: 300px;
  height: 300px;
  overflow: hidden;
  border-radius: 8px;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s;
}

.image-container:hover .image-overlay {
  opacity: 1;
}

.image-text {
  color: #fff;
  font-size: 16px;
  font-weight: bold;
}
.rate {
  font-size: 0.8rem;
}
.star{
  display: flex;
  gap: 2px;
}
</style>