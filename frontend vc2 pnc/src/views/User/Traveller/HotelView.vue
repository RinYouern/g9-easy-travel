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
        <div class="card shadow rouond">
          <img :src="hotel.image" class="card-img-top" :alt="hotel.name" />
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
  <div class="bg-white border border-slate-200 grid grid-cols-6 gap-2 rounded-xl p-2 text-sm ml-15 mr-15 mb-15 shadow round">
    <h1 class="text-center text-slate-200 text-xl font-bold col-span-6 text-dark">Send Feedback</h1>
    <textarea
      v-model="feedback"
      placeholder="Your feedback..."
      class="bg-slate-100 text-slate-600 h-28 placeholder:text-slate-600 placeholder:opacity-50 border border-slate-200 col-span-6 resize-none outline-none rounded-lg p-2 duration-300 focus:border-slate-600"
    ></textarea>
    <button
      class="emoji-button fill-slate-600 col-span-1 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-100 hover:border-slate-600 focus:fill-blue-200 focus:bg-blue-400 border border-slate-200"
    >
      <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
        <path
          d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
        ></path>
      </svg>
    </button>
    <button
      class="emoji-button fill-slate-600 col-span-1 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-100 hover:border-slate-600 focus:fill-blue-200 focus:bg-blue-400 border border-slate-200"
    >
      <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
        <path
          d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM174.6 384.1c-4.5 12.5-18.2 18.9-30.7 14.4s-18.9-18.2-14.4-30.7C146.9 319.4 198.9 288 256 288s109.1 31.4 126.6 79.9c4.5 12.5-2 26.2-14.4 30.7s-26.2-2-30.7-14.4C328.2 358.5 297.2 336 256 336s-72.2 22.5-81.4 48.1zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
        ></path>
      </svg>
    </button>
    <span class="col-span-2"></span>
    <button
      class="send-button bg-slate-100 stroke-slate-600 border border-slate-200 col-span-2 flex justify-center rounded-lg p-2 duration-300 hover:border-slate-600 hover:text-white focus:stroke-blue-200 focus:bg-blue-400"
      @click="sendFeedback"
    >
      <svg
        fill="none"
        viewBox="0 0 24 24"
        height="30px"
        width="30px"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          stroke-linejoin="round"
          stroke-linecap="round"
          stroke-width="1.5"
          d="M7.39999 6.32003L15.89 3.49003C19.7 2.22003 21.77 4.30003 20.51 8.11003L17.68 16.6C15.78 22.31 12.66 22.31 10.76 16.6L9.91999 14.08L7.39999 13.24C1.68999 11.34 1.68999 8.23003 7.39999 6.32003Z"
        ></path>
        <path
          stroke-linejoin="round"
          stroke-linecap="round"
          stroke-width="1.5"
          d="M10.11 13.6501L13.69 10.0601"
        ></path>
      </svg>
    </button>
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
      vehicle: '',
      feedback: '',
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
  },
  methods: {
    sendFeedback() {
      console.log(this.feedback);
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

.emoji-button:focus, .send-button:focus {
    background-color: #3b82f6; 
  }
</style>
