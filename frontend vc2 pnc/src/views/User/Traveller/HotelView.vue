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
            v-model="vehicle"
            class="form-control"
            style="width: 300px"
            placeholder="Enter your location or vehicle type"
          />
          <button class="btn btn-primary ms-3">Search</button>
        </div>
      </div>
    </div>
  </div>
  <hotel></hotel>
</template>
  
  <script>
import hotel from '@/Components/Traveler/HotelTraveler.vue'
import Navbar from '@/Components/Traveler/navbarTraveler.vue'
export default {
  name: 'place-traveler',
  components: {
    Navbar,
    hotel
  },
  data() {
    return {
      dateFrom: '',
      dateTo: ''
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
  flex-direction: column;
  align-items: center;
  background: rgba(0, 0, 0, 0.67);
  height: 250px;
  width: 800px;
  border-radius: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}
</style>
  