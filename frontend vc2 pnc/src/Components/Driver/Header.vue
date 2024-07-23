<template>
  <div class="welcome-message bg p-5 text-center text-white rounded">
    <!-- Header Section -->
    <div class="top-right d-flex align-items-center justify-content-end">
      <button class="btn btn-secondary mt-3 notification-button" @click="fetchNotifications">
        <Icon icon="mdi:bell-outline" width="24" height="24" style="color: black" />
      </button>
      <button class="btn btn-primary mt-3 logout-button" @click="showLogoutConfirmation">
        Logout
      </button>
      <img src="/src/assets/image/adminpic/titi.jpg" alt="Profile Image" class="profile-image" />
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
      <p>Are you sure you want to logout?</p>
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
  window.location.href = '/login' // or use this.$router.push('/login')
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
  margin-right: 20px;
}

.logout-button {
  background-color: #007bff;
  color: white;
  margin-right: 20px;
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
