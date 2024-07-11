<template>
  <h1 class="fw-bold">List Room</h1>
  <div class="container mt-3">
    <div class="group-card shadow">
      <div class="hotel-card-row" v-for="room in rooms" :key="room.id">
        <div class="hotel-card">
          <div class="hotel-image">
            <img src="@/assets/image/hotel/hotelheader.jpg" alt="" />
          </div>
          <div class="hotel-info">
            <div class="d-flex justify-content-between align-items-center">
              <h3>Room Id: {{ room.room_id }} </h3>
              <p style="font-size: 30px" class="text-warning">{{ room.price }} $</p>
            </div>
            <p>
              {{ room.description }}
              Rooms at Hotel Kostegi provide a flat screen TV and a desk.
            </p>
            <div class="d-flex justify-content-evenly">
              <div class="d-flex mr-2">
                <i class="bi bi-check-circle-fill"></i>
                <p class="ml-2">Free internet</p>
              </div>
              <div class="d-flex mr-2">
                <i class="bi bi-check-circle-fill"></i>
                <p class="ml-2">Air conditioning</p>
              </div>
              <div class="d-flex mr-2">
                <i class="bi bi-check-circle-fill"></i>
                <p class="ml-2">Flatscreen TV</p>
              </div>
              <div class="d-flex mr-2">
                <i class="bi bi-check-circle-fill"></i>
                <p class="ml-2">Private bathrooms</p>
              </div>
            </div>
            <div class="d-flex justify-content-evenly">
              <div class="d-flex mr-2">
                <i class="bi bi-people"></i>
                <p class="ml-2">{{ room.people }}</p>
              </div>
              <div class="d-flex mr-2">
                <i class="bi bi-check-circle-fill"></i>
                <p class="ml-2">Bed</p>
              </div>
              <div class="d-flex mr-2">
                <i class="bi bi-check-circle-fill"></i>
                <p class="ml-2">Family rooms</p>
              </div>
              <div class="d-flex mr-2">
                <i class="bi bi-check-circle-fill"></i>
                <p class="ml-2">Breakfast in the room</p>
              </div>
            </div>
            <a  :href="'/booking/' + room.id" class="btn btn-primary" @click="showId(room.id)">Booking Now </a>
          </div>
         
        </div>
      </div>
    </div>

    <div class="feedback-bar">
      <div class="bg-white border rounded grid grid-cols-6 gap-2 rounded-xl p-2 text-sm shadow">
        <h1 class="text-center text-slate-200 text-xl font-bold col-span-6 text-dark">
          Send Feedback
        </h1>
        <textarea
          placeholder="Your feedback..."
          class="bg-slate-100 text-slate-600 h-28 placeholder:text-slate-600 placeholder:opacity-50 border border-slate-200 col-span-6 resize-none outline-none rounded-lg p-2 duration-300 focus:border-slate-600"
        ></textarea>
        <div class="d-flex">
          <div class="rating mr-39">
            <input value="5" name="rating1" id="star1-5" type="radio" />
            <label for="star1-5"></label>
            <input value="4" name="rating1" id="star1-4" type="radio" />
            <label for="star1-4"></label>
            <input value="3" name="rating1" id="star1-3" type="radio" />
            <label for="star1-3"></label>
            <input value="2" name="rating1" id="star1-2" type="radio" />
            <label for="star1-2"></label>
            <input value="1" name="rating1" id="star1-1" type="radio" />
            <label for="star1-1"></label>
          </div>
          <button
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
      <div
        data-bs-spy="scroll"
        data-bs-target=".list"
        class="feedback-list mt-4 bg-white p-3 border rounded shadow"
      >
        <h3 class="text-dark fw-bold">List Feedback</h3>
        <div class="list">
          <div class="border-top pt-2">
            <div class="feedback-profile d-flex">
              <img src="\src\assets\image\frog.jpg" alt="" class="profile" />
              <div class="ml-3">
                <h6 class="fw-bold m-0 p-0">Traveler</h6>
                <p class="m-0 p-0">Your service so good!</p>
              </div>
            </div>
          </div>
          <div class="border-top pt-2">
            <div class="feedback-profile d-flex">
              <img src="\src\assets\image\frog.jpg" alt="" class="profile" />
              <div class="ml-3">
                <h6 class="fw-bold m-0 p-0">Traveler</h6>
                <p class="m-0 p-0">Your service so good!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import 'bootstrap-icons/font/bootstrap-icons.css'
// import '@fortawesome/fontawesome-free/css/all.css'

export default {
  data() {
    return {

      rooms: []
    }
  },

  created() {
    this.fetchHotel()
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
    }
  }
}
</script>

<style>
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
</style>