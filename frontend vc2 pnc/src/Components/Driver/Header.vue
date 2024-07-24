<template>
  <div class="welcome-message bg p-5 text-center text-white rounded">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- Header Section -->
    <div class="top-right d-flex align-items-center justify-content-end">
      <button class="btn btn-secondary mt-3 notification-button" @click="fetchNotifications">
        <Icon icon="mdi:bell-outline" width="24" height="24" style="color: white" />
      </button>
      <button class="btn btn-primary mt-3 logout-button" @click="showLogoutConfirmation">
        Logout
      </button>
      <div class="profile d-flex gap-3">
        <div class="profile-dropdown">
          <div class="profile-btn border:none" @click="toggleDropdown">
            <img
              :src="user.users.profile"
              alt="Profile Picture"
              class="profile-picture"
              style="
                width: 40px;
                height: 40px;
                margin-top: 10px;
                margin-left: -30px;
                border-radius: 50%;
              "
            />
          </div>
          <div class="dropdown-content" v-if="isOpen">
            <b-dropdown right>
              <b-dropdown-item href="#" v-if="isOpen">
                <div class="text-center mb-3 w-70">
                  <img
                    :src="user.users.profile"
                    class="image-profile rounded-circle mb-2"
                    alt="Profile Image"
                  />
                  <h5 class="text-dark">{{ user.users.name }}</h5>
                  <p class="text-dark">{{ user.users.email }}</p>
                </div>
              </b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>
            </b-dropdown>
            <a href="/information"><i class="bx bxs-user-circle icon"></i> Profile</a>
            <a href="#"><i class="bx bxs-edit icon"></i> Change Password</a>
            <a href="/homepage" @click="logout"><i class="bx bxs-log-out-circle"></i> Logout</a>
          </div>
        </div>
      </div>
    </div>

    <div id="cover">
      <h1>
        <span class="welcome-text">Welcome </span>
        <span class="driver-text">Driver</span>
      </h1>
      <p>
        We're thrilled to have you as a part of our travel community. As a driver, you are an
        essential part of our mission to provide exceptional travel experiences to our customers. We
        are here to support you and ensure you have all the resources you need to excel.
      </p>
    </div>

    <!-- Logout Confirmation Modal -->
    <el-dialog v-model="logoutConfirmation" title="Logout Confirmation">
      <p class="text-dark">Are you sure you want to logout?</p>
      <template #footer>
        <el-button type="danger" @click="logoutConfirmation = false">Cancel</el-button>
        <el-button type="primary" @click="handleLogout">OK</el-button>
      </template>
    </el-dialog>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { Icon } from '@iconify/vue'
import { ElDialog, ElButton } from 'element-plus'
import { userStore } from '@/stores/user-list'

const user = userStore()
const logoutConfirmation = ref(false)

const showLogoutConfirmation = () => {
  logoutConfirmation.value = true
}

const handleLogout = () => {
  logoutConfirmation.value = false
  user.logout()
  // Optionally you can use router to navigate
  window.location.href = '/homepage' // or use this.$router.push('/login')
}

const fetchNotifications = () => {
  // Function to handle showing notifications
  alert('Show notifications')
}
</script>

<style scoped>
.welcome-message {
  position: relative;
  padding-top: 60px;
}

.top-right {
  position: absolute;
  top: 0;
  right: 0;
  padding: 10px 20px;
}

.notification-button {
  background-color: transparent;
  border: none;
  margin-right: 30px;
}

.logout-button {
  background-color: #007bff;
  color: white;
  margin-right: 50px;
  margin-left: -10px;
}

.logout-button:hover {
  background-color: #0056b3;
}

.profile-image {
  width: 55px;
  height: 55px;
  border-radius: 50%;
}

.bg {
  background-image: url('https://images.pexels.com/photos/1628037/pexels-photo-1628037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
  background-size: cover;
  background-position: center;
  border-radius: 10px;
  height: 300px;
}

h1 {
  display: flex;
  justify-content: flex-start;
}

.welcome-text {
  color: white;
  font-weight: bold;
}

.driver-text {
  color: orange;
  font-weight: bold;
}

p {
  color: whitesmoke;
  border-radius: 10px;
  padding: 15px;
  text-align: justify;
}

#cover {
  width: 600px;
  background: #0000006b;
  margin: 0 auto;
  padding: 20px;
}
</style>
