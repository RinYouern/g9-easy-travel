<template>
  <div>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />

    <!-- Welcome section -->
    <div class="welcome-text">
      <div style="text-align: left; margin-top: -50px">
        <a href="/place-traveler"
          ><i class="bi bi-arrow-left-circle" style="font-size: 2.5rem"></i
        ></a>
      </div>
      <div>
        <h1 class="title">Welcome to {{ places.place.name }}</h1>
        <p class="description">
          Explore the grandeur of this ancient temple complex, a testament to the rich cultural
          heritage of Cambodia.
        </p>
      </div>
    </div>

    <!-- Image display section -->
    <div id="all" class="d-flex" style="width: 80%; margin: auto">
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

    <!-- About section -->
    <div class="about-section">
      <div class="about-text">
        <h2 class="section-title">About {{ places.place.name }}</h2>
        <p class="description">{{ places.place.description }}</p>
        <p class="section-title m-2">Location</p>
        <iframe
          :src="places.place.location"
          width="950"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      places: {}
    }
  },
  created() {
    this.fetchPlaces()
  },
  methods: {
    async fetchPlaces() {
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/places/${this.$route.params.id}`)
        this.places = response.data
      } catch (error) {
        console.error('Error fetching data', error)
      }
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

.welcome-text {
  text-align: center;
  padding: 3rem 1rem;
  color: black;
  font-family: 'Playfair Display', serif;
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
