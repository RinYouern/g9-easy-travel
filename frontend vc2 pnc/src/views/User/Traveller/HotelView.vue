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
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-6" v-for="hotel in hotels" :key="hotel.id">
        <div class="card">
          <img :src="hotel.image" class="card-img-top" :alt="hotel.name">
          <div class="card-body">
            <h5 class="card-title">{{ hotel.name }}</h5>
            <p class="card-text">{{ hotel.location }}</p>
            <star-rating :rating="hotel.rating"></star-rating>
            <a href="#" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
  <script>
import Navbar from '@/Components/Traveler/navbarTraveler.vue'
import StarRating from '@/Components/Traveler/StarRating.vue'
export default {
  name: 'place-traveler',
  components: {
    Navbar,
    StarRating
  },
  data() {
    return {
      hotels: [
        {
          id: 1,
          image: 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/84/39/f3/jaya-house-riverpark.jpg?w=1200&h=-1&s=1',
          name: 'Angkor Palace Resort',
          location: 'Siem Reab',
          rating: 4.5
        },
        {
          id: 2,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmpzKxGHvAkgGNeHhEeBd-2bbXdpMKgV_GIg&s',
          name: 'Phnom Oudong Hotel',
          location: 'Kompong Spue',
          rating: 3.8
        },
        {
          id: 3,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcrdOm-t8xReLudf1TGYSSiXeL9zEYZWHJ3A&s',
          name: 'Angkor Palace Resort',
          location: 'Siem Reab',
          rating: 4.2
        },
        {
          id: 4,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv7mA9dXVZJj6DEaD-ZAhFZ3CO-ourdaUv3g&s',
          name: 'Phnom Oudong Hotel',
          location: 'Kompong Spue',
          rating: 3.9
        },
        {
          id: 5,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIiYxEITfeLNgFovkccexXjWvGQTs5qwPMwQ&s',
          name: 'Phnom Oudong Hotel',
          location: 'Kompong Spue',
          rating: 4.1
        }
      ]
    }
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
  