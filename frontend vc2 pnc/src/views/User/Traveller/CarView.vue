<template>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
  />
  <div>
    <navbar></navbar>
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

    <div class="d-flex justify-content-center mt-5">
      <div
        class="card m-3"
        style="width: 18rem"
        v-for="vehicle in filteredVehicles"
        :key="vehicle.id"
      >
        <img
          class="card-img-top"
          :src="vehicle.image"
          style="height: 150px; object-fit: cover"
          :alt="vehicle.name"
        />
        <div class="card-body">
          <div class="d-flex">
            <div class="d-flex justify-content-center">
              <div class="d-flex">
                <i class="bi bi-star text-warning"></i>
                <i class="bi bi-star text-warning"></i>
                <i class="bi bi-star text-warning"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
              </div>
              <div class="d-flex align-items-center ml-3">
                <p class="mr-2"><i class="bi bi-coin"></i> {{ vehicle.price }}</p>
              </div>
              <div class="d-flex align-items-center ml-3">
                <p class="mr-2"><i class="bi bi-people"></i> {{ vehicle.capacity }}</p>
              </div>
            </div>
          </div>
          <div class="button d-flex justify-content-center">
            <button class="btn btn-primary" @click="bookVehicle(vehicle)">Book Now</button>
            <button class="btn btn-primary ms-2" @click="viewVehicleDetails(vehicle)">
              View Details
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '@/Components/Traveler/navbarTraveler.vue'

export default {
  name: 'place-traveler',
  components: {
    Navbar
  },
  data() {
    return {
      searchText: '',
      vehicles: [
        {
          id: 1,
          name: 'Bus',
          type: 'bus',
          capacity: 40,
          price: 20,
          rating: 4.5,
          image: 'https://i.pinimg.com/474x/fd/ec/31/fdec319b8efbdb17a28278c743d9ffaf.jpg'
        },
        {
          id: 2,
          name: 'Sedan',
          type: 'car',
          capacity: 4,
          price: 30,
          rating: 4.2,
          image: 'https://i.pinimg.com/474x/fd/ec/31/fdec319b8efbdb17a28278c743d9ffaf.jpg'
        },
        {
          id: 3,
          name: 'Van',
          type: 'van',
          capacity: 8,
          price: 45,
          rating: 4.7,
          image: 'https://i.pinimg.com/474x/fd/ec/31/fdec319b8efbdb17a28278c743d9ffaf.jpg'
        },
        {
          id: 4,
          name: 'Tuk Tuk',
          type: 'tuk-tuk',
          capacity: 3,
          price: 10,
          rating: 3.9,
          image: 'https://i.pinimg.com/474x/fd/ec/31/fdec319b8efbdb17a28278c743d9ffaf.jpg'
        }
      ]
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
    searchVehicles() {
      // Add any additional logic to search for vehicles based on the searchText
    }
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