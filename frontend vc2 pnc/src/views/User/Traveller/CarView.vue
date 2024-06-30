<template>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
  />
  <div>
    <Navbar></Navbar>
    <div class="bg-light">
      <div id="content" class="content-wrapper d-flex justify-content-center align-items-center">
        <div class="p-5" id="bg-warning">
          <div class="text-center mb-4">
            <h1 class="text-white">Where to Go?</h1>
            <p class="text-white">Find vehicles available in Cambodia</p>
          </div>
          <div class="d-flex justify-content-center">
            <input
              type="text"
              v-model="searchText"
              class="form-control"
              style="width: 300px"
              placeholder="Enter your location or vehicle type"
            />
            <button class="btn btn-primary ms-3" @click="searchVehicles">Search</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row m-3">
      <div v-for="vehicle in vehicles" :key="vehicle.id" class="col-md-3 mb-4">
        <div class="card" style="width: 100%">
          <img
            src="https://i.pinimg.com/474x/f4/26/cb/f426cb3e90d7b918060cd2fe0449fb3b.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h5 class="card-title">{{ vehicle.make }}</h5>
            <p class="card-text">{{ vehicle.description }}</p>
            <div class="d-flex">
              <p class="ml-2"><i class="bi bi-people"></i> {{ vehicle.traveler_capacity }}</p>
              <p class="ml-2"><i class="bi bi-coin"></i> {{ vehicle.price }} USD</p>
            </div>

            <div class="d-flex justify-content-evenly">
              <button class="btn btn-primary">See Detail</button>
              <a href="/booking-car"><button class="btn btn-primary">Book Now</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '@/Components/Traveler/navbarTraveler.vue'
import axios from 'axios'

export default {
  name: 'place-traveler',
  components: {
    Navbar
  },
  data() {
    return {
      searchText: '',
      vehicles: []
    }
  },
  computed: {
    filteredVehicles() {
      return this.vehicles.filter((vehicle) =>
        vehicle.name.toLowerCase().includes(this.searchText.toLowerCase())
      )
    }
  },
  methods: {
    searchVehicles() {},
    async fetchVehicles() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/vehicles-all')
        this.vehicles = response.data
      } catch (error) {
        console.error('Error fetching vehicles:', error)
      }
    }
  },
  mounted() {
    this.fetchVehicles()
  }
}
</script>

<style scoped>
#content {
  height: 350px;
  background-image: url('https://images.pexels.com/photos/311621/pexels-photo-311621.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
  background-size: cover;
  background-position: center;
}

#bg-warning {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background: rgba(0, 0, 0, 0.67);
  height: 250px;
  width: 800px;
  border-radius: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}
</style>