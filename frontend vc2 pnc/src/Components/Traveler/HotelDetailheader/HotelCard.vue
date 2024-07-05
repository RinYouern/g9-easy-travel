<template>
  <div class="container mt-3">
    <div class="hotel-card-row" v-for="room in rooms" :key="room.id">
      <div class="hotel-card">
        <div class="hotel-image">
          <img src="@/assets/image/hotel/hotelheader.jpg" alt="" />
        </div>
        <div class="hotel-info">
          <div class="d-flex justify-content-between align-items-center">
            <h3>Room Id: {{ room.room_id }}</h3>
            <p style="font-size: 30px" class="text-warning">{{ room.price }} $</p>
          </div>
          <p>{{ room.description }}
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
          <button class="btn btn-primary">Show prices</button>
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
.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.hotel-card-row {
  width: 100%;
  display: flex;
  justify-content: center;
}

.hotel-card {
  display: flex;
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  overflow: hidden;
  width: 80%;
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
i{
  color: green;
}
</style>