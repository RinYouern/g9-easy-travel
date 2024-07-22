<template>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
  />
  <Header @search-hotels="onSearchHotels"></Header>
  <hotels :rooms="rooms" :research="research" />
  <div class="bg-white p-3 mt-2" style="width: 90%; margin: auto">
    <h4 style="font-weight: bold">See on the map:</h4>
    <div style="display: flex; gap: 5px">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15635.553652717732!2d104.9361633!3d11.5598565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951348f58fad3%3A0x43155c323a7e53f5!2sHotel%20Cambodiana!5e0!3m2!1sen!2skh!4v1721382335764!5m2!1sen!2skh"
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
              :to="'/car-detail/' + place.id"
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
                  v-if="place.rating >=4  && place.rating < 4.5"
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
  <div
    class="hotel-container p-3 bg-white mt-2"
    style="margin: auto; width: 90%; border-radius: 10px; display: flex; gap: 5px"
  >
    <div style="width: 40%">
      <div
        id="feedback-form"
        class="bg-white border rounded grid grid-cols-6 gap-2 rounded-xl p-2 text-sm shadow"
      >
        <h1 class="text-center text-slate-200 text-xl font-bold col-span-6 text-dark">
          Send Feedback
        </h1>
        <textarea
          id="feedback-content"
          v-model="content"
          placeholder="Your feedback..."
          class="bg-slate-100 text-slate-600 h-28 placeholder:text-slate-600 placeholder:opacity-50 border border-slate-200 col-span-6 resize-none outline-none rounded-lg p-2 duration-300 focus:border-slate-600"
        ></textarea>
        <div class="d-flex">
          <div class="rating mr-39">
            <input v-model="selectedRating" value="5" type="radio" name="rating" id="star-5" />
            <label for="star-5"></label>
            <input v-model="selectedRating" value="4" type="radio" name="rating" id="star-4" />
            <label for="star-4"></label>
            <input v-model="selectedRating" value="3" type="radio" name="rating" id="star-3" />
            <label for="star-3"></label>
            <input v-model="selectedRating" value="2" type="radio" name="rating" id="star-2" />
            <label for="star-2"></label>
            <input v-model="selectedRating" value="1" type="radio" name="rating" id="star-1" />
            <label for="star-1"></label>
          </div>
          <button
            id="submit-feedback"
            @click="submitFeedback"
            class="bg-slate-100 stroke-slate-600 border border-slate-200 col-span-2 flex justify-center rounded-lg p-2 duration-300 hover:border-slate-600 hover:text-white focus:stroke-blue-200 focus:bg-blue-400"
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
      </div>
    </div>
    <div style="width: 60%">
      <div
        data-bs-spy="scroll"
        data-bs-target=".list"
        class="feedback-list bg-white p-3 border rounded shadow"
      >
        <h3 class="text-dark fw-bold">List Feedback</h3>
        <div class="list">
          <div
            class="border-top pt-2"
            v-for="feedback in feedBacks.feedback_received"
            :key="feedback.id"
          >
            <div class="feedback-profile d-flex">
              <img :src="feedback.owner.profile" alt="" class="profile" />
              <div class="ml-3">
                <h6 class="fw-bold m-0 p-0">{{ feedback.owner.name }}</h6>
                <div id="star" v-if="feedback.rating === 3">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <div id="star" v-else-if="feedback.rating === 4">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <div id="star" v-else-if="feedback.rating === 5">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <p class="m-0 p-0">{{ feedback.content }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <Footer></Footer>
  </footer>
</template>

<script>
import axios from 'axios'
import Header from '@/Components/Traveler/header/headerHotel.vue'
import Footer from '@/Components/Traveler/header/Footer.vue'
import 'bootstrap-icons/font/bootstrap-icons.css'
import hotels from '@/Components/Traveler/HotelDetailheader/HotelsDetails.vue'
import axiosInstance from '@/plugins/axios'

export default {
  name: 'HotelDetail',
  components: {
    hotels,
    Footer,
    Header
  },
  data() {
    return {
      content: '',
      rooms: [],
      feedBacks: [],
      selectedRating: null,
      research: {},
      hotels: [],
      filteredHotels: [],
      searchCar: '',
    }
  },

  created() {
    this.fetchHotel()
    this.fetchFeedBack()
    this.fetchCompanies()
  },
  methods: {
    fetchHotel() {
      axios
        .get(`http://127.0.0.1:8000/api/users/${this.$route.params.id}/rooms`)
        .then((response) => {
          this.rooms = response.data
        })
        .catch((error) => {
          console.error(error)
        })
    },
    fetchFeedBack() {
      axios
        .get(`http://127.0.0.1:8000/api/feedback/${this.$route.params.id}`)
        .then((response) => {
          this.feedBacks = response.data
          console.log(response.data)
        })
        .catch((error) => {
          console.error(error)
        })
    },
    submitFeedback() {
      const payload = {
        content: this.content,
        rating: this.selectedRating,
        related_user_id: this.$route.params.id
      }

      axiosInstance
        .post('http://127.0.0.1:8000/api/feedback', payload)
        .then((response) => {
          console.log('Feedback submitted:', response.data)
          this.content = ''
          this.selectedRating = null
          this.fetchFeedBack()
        })
        .catch((error) => {
          console.error('Error submitting feedback:', error)
        })
    },
    async fetchCompanies() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users/role/carowner');
        this.hotels = response.data.data;
        this.filteredHotels = this.hotels;
      } catch (error) {
        console.error('Error fetching data', error);
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
  },
  
}
</script>

<style scoped>
* {
  color: black;
}
.container {
  gap: 20px;
  display: flex;
}
.feedback-bar {
  width: 30%;
}
.list-feedback {
  width: 70%;
}
.feedback-profile .profile {
  width: 40px;
  height: 40px;
  border: none;
  border-radius: 100%;
}
.list {
  height: 30vh;
  overflow: auto;
}
.rating {
  display: flex;
  align-items: center;
  flex-direction: row-reverse;
}

.rating input {
  display: none;
}

.rating label {
  float: right;
  cursor: pointer;
  color: #ccc;
  transition: color 0.3s;
}

.rating label:before {
  content: '\2605';
  font-size: 30px;
}

.rating input:checked ~ label,
.rating label:hover,
.rating label:hover ~ label {
  color: gold;
  transition: color 0.3s;
}

.group-card {
  width: 80%;
  height: 80vh;
  overflow: auto;
}
.hotel-card-row {
  width: 100%;
  display: flex;
  margin-bottom: 20px;
}

.hotel-card {
  display: flex;
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  overflow: hidden;
}

.hotel-image {
  position: relative;
  width: 40%;
  padding: 30px;
}

.hotel-image img {
  width: 90%;
  height: 100%;
  object-fit: cover;
  border-radius: 5px;
}

.hotel-info {
  width: 60%;
  padding: 20px;
}

.btn {
  margin-top: 10px;
}
i {
  color: green;
}
#star {
  display: flex;
  gap: 3px;
}
</style>