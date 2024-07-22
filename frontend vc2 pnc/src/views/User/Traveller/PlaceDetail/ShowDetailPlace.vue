<template>
  <!-- <div> -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
  />
  <Header />
  <!-- Image display section -->

  <div class="bg-white p-3" style="width: 90%; margin: auto">
    <div id="all" class="d-flex">
      <div style="width: 60%">
        <div class="bg-danger" style="height: 400px">
          <img :src="places.place.images[0]" alt="" />
        </div>
      </div>
      <div id="two" class="d-flex flex-column" style="width: 40%">
        <div class="bg-warning" style="height: 200px">
          <img :src="places.place.images[1]" alt="" />
        </div>
        <div class="bg-primary" style="height: 200px">
          <img :src="places.place.images[2]" alt="" />
        </div>
      </div>
    </div>
    <div class="p-2 d-flex">
      <h5 style="font-size: 20px" class="section-title">{{ places.place.name }}</h5>
      <p style="font-weight: bold">
        <strong class="border p-1 bg-warning">{{ places.place.rating }}</strong
        >/5
      </p>
    </div>
  </div>
  <div class="bg-white p-3 mt-2" style="width: 90%; margin: auto">
    <h4 style="font-weight: bold">
      The Grand Palace Highlights: Must-See Features and Attractions
    </h4>
    <p>{{ places.place.description }}</p>
  </div>
  <div class="bg-white p-3 mt-2" style="width: 90%; margin: auto">
    <h4 style="font-weight: bold">See on the map:</h4>
    <div style="display: flex; gap: 5px">
      <iframe
        :src="places.place.location"
        width="70%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
      <div
        class="p-2"
        style="
          width: 30%;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          height: 450px;
          overflow-y: scroll;
        "
      >
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-search"></i>
          </span>
          <input
            type="text"
            class="form-control"
            placeholder="Find a place to go"
            aria-label="Search"
            aria-describedby="basic-addon1"
            v-model="searchCar"
            @input="onSearch"
          />
        </div>
        <div style="display: flex; flex-direction: column">
          <div v-for="place in filteredHotels" :key="place.id">
            <router-link
              :to="'/hotel-detail/' + place.id"
              style="display: flex; background-color: gainsboro"
              class="p-2 mt-2 text-decoration-none"
            >
              <img
                :src="place.profile"
                class="img-fluid rounded-start"
                alt="hotel image"
                style="width: 100px; height: 80px"
              />
              <div class="ml-2">
                <p class="mb-0" style="font-weight: bold">{{ place.name }}</p>
                <span
                  class="text-warning"
                  style="display: flex; gap: 1px"
                  v-if="place.rating >= 3 && place.rating < 3.5"
                >
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </span>
                <span
                  class="text-warning"
                  style="display: flex; gap: 1px"
                  v-if="place.rating >= 3.5 && place.rating < 4"
                >
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                </span>
                <span
                  class="text-warning"
                  style="display: flex; gap: 1px"
                  v-if="place.rating >= 4 && place.rating < 4.5"
                >
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <!-- <i class="bi bi-star-half"></i> -->
                </span>
                <div style="display: flex; justify-content: space-between">
                  <p class="mb-0" style="font-weight: bold">300 views</p>
                </div>
              </div>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <Footer />
  </footer>
</template>

<script>
import axios from 'axios'
import Header from '@/Components/Traveler/header/headerPlace.vue'
import Footer from '@/Components/Traveler/header/Footer.vue'

export default {
  components: {
    Header,
    Footer
  },
  data() {
    return {
      places: {},
      hotels: [],
      filteredHotels: [],
      searchCar: ''
    }
  },
  created() {
    this.fetchPlaces()
    this.fetchCompanies()
  },
  methods: {
    async fetchPlaces() {
      try {
        const response = await axios.get(
          `http://127.0.0.1:8000/api/places/${this.$route.params.id}`
        )
        this.places = response.data
      } catch (error) {
        console.error('Error fetching data', error)
      }
    },
    async fetchCompanies() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users/role/hotelOwner')
        this.hotels = response.data.data
        this.filteredHotels = this.hotels
      } catch (error) {
        console.error('Error fetching data', error)
      }
    },
    onSearch() {
      const searchTerm = this.searchCar.toLowerCase().trim()
      this.filteredHotels = this.hotels.filter(
        (place) =>
          place.name.toLowerCase().includes(searchTerm) ||
          place.province.toLowerCase().includes(searchTerm)
      )
    }
  }
}
</script>

<style scoped>
#all {
  gap: 2px;
}
#two {
  gap: 2px;
}
.p-5 {
  padding: 1.25rem;
}

.d-flex {
  display: flex;
}

.bg-danger,
.bg-warning,
.bg-primary {
  overflow: hidden;
}

.bg-danger img,
.bg-warning img,
.bg-primary img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.title {
  font-size: 3rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
  margin-bottom: 1rem;
}

.description {
  font-size: 1.2rem;
  line-height: 1.6;
  max-width: 800px;
  margin: 0 auto;
}

.about-section {
  padding: 4rem 2rem;
  background-color: #f5f5f5;
}

.about-text {
  text-align: center;
  margin-bottom: 3rem;
}

.section-title {
  font-size: 2.5rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
  color: #333;
}

.description {
  font-size: 1.2rem;
  line-height: 1.6;
  max-width: 800px;
  margin: 1rem auto 0;
  color: #555;
  text-align: justify;
}

@media (max-width: 768px) {
  iframe {
    width: 330px;
    height: 300px;
  }
}
</style>
