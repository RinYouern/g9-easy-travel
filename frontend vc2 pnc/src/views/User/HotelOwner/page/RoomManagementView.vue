<template>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
  />
  <div>
    <div class="sidebar">
      <div class="logo">
        <img src="/src/assets/image/logo2.png" />
      </div>
      <ul>
        <a href="/hotelowner">
          <li class="d-flex">
            <span class="material-symbols-outlined mx-3">dashboard</span>Dashboard
          </li>
        </a>
        <a href="#">
          <li class="active d-flex">
            <span class="material-symbols-outlined mx-3">apartment</span>Rooms Management
          </li>
        </a>
        <a href="/customers_payment">
          <li class="d-flex">
            <span class="material-symbols-outlined mx-3">payments</span>Customers Payment
          </li>
        </a>
        <a href="/top-hotel">
          <li class="d-flex">
            <span class="material-symbols-outlined mx-3">hotel</span>Top Hotels
          </li>
        </a>
        <a href="/login">
              <li class="d-flex">
                <span class="material-symbols-outlined mx-3">logout</span>Logout
              </li>
            </a>
      </ul>
    </div>
    <div class="container">
      <h1 class="text-dark fw-bold" style="margin-left: -20px">Rooms Management</h1>
      <div class="d-flex justify-content-start mt-3 mb-3" style="margin-left: -20px">
        <button class="btn p-2 btn_add shadow rounded" @click="showAddModal = true">
          <span class="material-symbols-outlined">add</span>
          Add Room
        </button>
      </div>
      <table class="table shadow rounded mt-3" style="margin-left: -20px">
        <thead class="text-center">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">People</th>
            <th scope="col">Price</th>
            <th scope="col">Room Type</th>
            <th scope="col">Status</th>
            <th scope="col">Active</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr v-for="room in rooms" :key="room.id">
            <th scope="row">{{ room.room_id }}</th>
            <td>{{ room.people }}</td>
            <td>{{ room.price }}$</td>
            <td>{{ room.room_type }} bad</td>
            <td :class="{ 'text-danger': room.status === 0 }">
              {{ room.status === 1 ? 'Available' : 'Not available' }}
            </td>
            <td>
              <button class="btn btn-success p-2 mx-2" @click="showEditRoomModal(room)">
                Edit
              </button>
              <button class="btn btn-danger p-2" @click="deleteRoom(room.id)">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <FormAddRoomView v-if="showAddModal" @close="closeModal" @update="getUserRooms" />
    <FormEditRoomView
      v-if="showEditModal"
      @close="closeModal"
      :room="selectedRoom"
      @update="getUserRooms"
    />
  </div>
</template>

<script>
import FormAddRoomView from './form/FormAddRoomView.vue'
import FormEditRoomView from './form/FormEditRoomView.vue'
import axios from 'axios'

export default {
  components: {
    FormAddRoomView,
    FormEditRoomView
  },
  data() {
    return {
      showAddModal: false,
      showEditModal: false,
      rooms: [],
      selectedRoom: null
    }
  },
  created() {
    this.getUserRooms()
  },
  methods: {
    async getUserRooms() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users/4/rooms')
        this.rooms = response.data
      } catch (error) {
        console.error('Error fetching user rooms:', error)
      }
    },
    showEditRoomModal(room) {
      this.selectedRoom = room
      this.showEditModal = true
    },
    closeModal() {
      this.selectedRoom = null
      this.showAddModal = false
      this.showEditModal = false
    },
    async deleteRoom(id) {
      try {
        await axios.delete(`http://127.0.0.1:8000/api/rooms/${id}`)
        this.getUserRooms()
      } catch (error) {
        console.error('Error deleting room:', error)
      }
    }
  }
}
</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: Arial, sans-serif;
  display: flex;
}
.btn_add .material-symbols-outlined {
  margin-right: 8px;
  vertical-align: middle;
}
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 22%;
  background: black;
  color: #fff;
  padding: 20px 0;
}

.sidebar .logo img {
  margin-top: -10px;
  width: 100px;
  height: 100px;
  margin-left: 30%;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}
.sidebar ul li {
  padding: 10px;
  cursor: pointer;
  font-size: 20px;
}

.sidebar ul a li.active,
.sidebar ul li:hover {
  background: white;
  color: #178de7;
}
.sidebar ul a {
  text-decoration: none;
  color: #fff;
}
.container {
  width: 75%;
  margin-left: 25%;
  padding: 20px;
}
.table thead tr th {
  background-color: #2b3136;
  color: white;
}
.btn_add {
  background-color: #178de7;
  color: #fff;
}
</style>
