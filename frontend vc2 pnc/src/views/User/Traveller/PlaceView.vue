<template>
  <div>
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
        style="width: 300px;"
        placeholder="Enter your location or vehicle type"
      />
      <button class="btn btn-primary ms-3">Search</button>
    </div>
  </div>
</div>

      </div>
      
    </div>
    <div class="d-flex justify-content-center">
      <div class="card m-3" style="width: 18rem">
        <img
          class="card-img-top"
          src="https://i.pinimg.com/474x/fd/ec/31/fdec319b8efbdb17a28278c743d9ffaf.jpg"
          style="height: 150px; object-fit: cover"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title">Card Title 1</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the bulk of the card's
            content.
          </p>
        </div>
      </div>

      <div class="card m-3" style="width: 18rem">
        <img
          class="card-img-top"
          src="https://i.pinimg.com/474x/92/2f/24/922f2494e08203b4d8014da570153774.jpg"
          style="height: 150px; object-fit: cover"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title">Card Title 2</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the bulk of the card's
            content.
          </p>
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
  