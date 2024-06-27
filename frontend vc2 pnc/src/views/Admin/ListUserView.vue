<template>
  <div>
    <div class="role-buttons">
      <button type="button" class="btn btn-outline-white m-l2 bg-warning" @click="fetchUsers">
        All Users
      </button>
      <button type="button" class="btn btn-outline-white m-l2 bg-warning" @click="fetchTravelers">
        Travelers
      </button>
      <button type="button" class="btn btn-outline-white m-l2 bg-warning" @click="fetchCarOwners">
        Car Owners
      </button>
      <button type="button" class="btn btn-outline-white m-l2 bg-warning" @click="fetchHotelOwners">
        Hotel Owners
      </button>
    </div>

    <table class="table  table-bordered text-center">
      <thead class="thead-dark">
        <tr>
          <th scope="col"><strong>Role</strong></th>
          <th scope="col"><strong>Profile</strong></th>
          <th scope="col"><strong>Name</strong></th>
          <th scope="col"><strong>Email</strong></th>
          <th scope="col"><strong>Actions</strong></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.id">
          <th scope="row">{{ user.user_role }}</th>
          <td class="align-middle">
            <img
              v-if="user.profile"
              :src="user.profile"
              alt="Profile Picture"
              class="img-fluid rounded-circle"
              style="max-width: 40px; max-height: 40px"
            />
            <span v-else>No Profile Picture</span>
          </td>
          <td class="align-middle">{{ user.name }}</td>
          <td class="align-middle">{{ user.email }}</td>
          <td class="align-middle">
            <el-button plain @click="showUserDetails(user)"> detail </el-button>
            <button type="button" class="btn btn-danger btn-sm mx-1" @click="deleteUser(user.id)">
              Delete
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Dialog for Table -->
    <el-dialog v-model="dialogTableVisible" width="800" style="padding: 5%;">
  <div class="d-flex justify-content-center">
    <div class="d-flex align-items-center">
      <div class="profile-image-container" style="margin-right: 100px;">
        <img v-if="selectedUser.profile" :src="selectedUser.profile" alt="Profile Picture" class="img-fluid rounded-circle" />
        <span v-else>No Profile Picture</span>
      </div>
      <div class="user-info-container">
        <p><strong>Name:</strong> {{ selectedUser.name }}</p>
        <p><strong>Email:</strong> {{ selectedUser.email }}</p>
        <p><strong>Password:</strong> {{ selectedUser.password }}</p>
        <p v-if="selectedUser.user_role !== 'traveler'"><strong>Location:</strong> {{ selectedUser.location }}</p>      </div>
    </div>
  </div>
</el-dialog>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios'

const dialogTableVisible = ref(false)
const selectedUser = ref({})

const users = ref([])

const fetchUsers = () => {
  axios
    .get('http://127.0.0.1:8000/api/users/all')
    .then((response) => {
      users.value = response.data.data
    })
    .catch((error) => {
      console.error('Error fetching users:', error)
    })
}

const fetchTravelers = () => {
  axios
    .get('http://127.0.0.1:8000/api/users/role/traveler')
    .then((response) => {
      users.value = response.data.data
    })
    .catch((error) => {
      console.error('Error fetching travelers:', error)
    })
}

const fetchCarOwners = () => {
  axios
    .get('http://127.0.0.1:8000/api/users/role/carOwner')
    .then((response) => {
      users.value = response.data.data
    })
    .catch((error) => {
      console.error('Error fetching car owners:', error)
    })
}

const fetchHotelOwners = () => {
  axios
    .get('http://127.0.0.1:8000/api/users/role/hotelOwner')
    .then((response) => {
      users.value = response.data.data
    })
    .catch((error) => {
      console.error('Error fetching hotel owners:', error)
    })
}

const showUserDetails = (user) => {
  selectedUser.value = user
  dialogTableVisible.value = true
}

const deleteUser = (userId) => {
  axios
    .delete(`http://127.0.0.1:8000/api/users/${userId}`)
    .then(() => {
      fetchUsers()
    })
    .catch((error) => {
      console.error('Error deleting user:', error)
    })
}

// Fetch initial data
fetchUsers()
</script>

<style scoped>
.role-buttons {
  margin-bottom: 20px;
}
.profile-image-container {
  max-width: 200px;
  max-height: 200px;
  margin-right: 30px;
}

.user-info-container {
  flex-grow: 1;
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.rounded-circle {
  border-radius: 50%;
}
</style>