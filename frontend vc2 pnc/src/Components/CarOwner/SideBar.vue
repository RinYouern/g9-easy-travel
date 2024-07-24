<template>
  <aside class="col-md-3 col-lg-2 bg-black text-white sidebar " >

    <div class="text-center profile-section mt-3">
      <div class="position-relative d-inline-block">
        <img :src="profileImage" alt="Profile Image" class="rounded-circle profile-img mb-2 w-50" />
      </div>
      <h2>{{ userName }}</h2>
    </div>
    <nav class="menu mt-4" width="50">
      <ul class="nav flex-column" >
        <li class="nav-item" v-for="item in menuItems" :key="item.text">
          <router-link
            v-if="item.text !== 'Logout'"
            :to="item.path"
            class="nav-link text-white d-flex align-items-center"
          >
            <font-awesome-icon :icon="item.icon" class="me-2 menu-icon" />
            {{ item.text }}
          </router-link>
          <a
            v-else
            href="#"
            class="nav-link text-white d-flex align-items-center"
            @click.prevent="showLogoutConfirmation"
          >
            <font-awesome-icon :icon="item.icon" class="me-2 menu-icon" />
            {{ item.text }}
          </a>
        </li>
      </ul>
    </nav>
    
  </aside>

  <el-dialog v-model="logoutConfirmation" style="width:30%;color:black">
    <p style="font-size:25px;color:black">Are you sure you want to logout?</p>
    <template #footer>
      <el-button type="danger" @click="logoutConfirmation = false">Cancel</el-button>
      <el-button type="primary" @click="handleLogout">OK</el-button>
    </template>
  </el-dialog>
</template>

<script>
import { ElMessage } from 'element-plus'

export default {
  data() {
    return {
      userName: '',
      profileImage: '/src/assets/image/logo2.png',
      menuItems: [
        { text: 'Dashboard', icon: 'tachometer-alt', path: '/' },
        { text: 'List Cars', icon: 'list', path: '/list-car' },
        { text: 'List of Driver', icon: 'users', path: '/driverslist' },
        { text: 'Booking Car', icon: 'book', path: '/listBookingCars' },
        { text: 'Logout', icon: 'sign-out', path: '/homepage' }
      ],
      logoutConfirmation: false
    }
  },
  methods: {
    showLogoutConfirmation() {
      this.logoutConfirmation = true
    },
    handleLogout() {
      this.logoutConfirmation = false
      alert('Logout successful.')
      // redirect to the login page
      this.$router.push('/homepage')
    },
    handleCancelLogout() {
      this.logoutConfirmation = false
      alert('Logout failed.')
    }
  }
}
</script>

<style>

.profile-section {
  position: relative;
}
.edit-profile {
  background-color: #3498db;
  margin: 88px 65px 0 0;
  padding: 6px;
}
.sidebar .nav-item {
  margin: 5px 0;
}
.sidebar .nav-link {
  padding: 10px 15px;
  border-radius: 5px;
  transition:
    background-color 0.3s ease,
    transform 0.3s ease;
}
.sidebar .nav-link:hover {
  background-color: #3498db;
  transform: translateX(5px);
}
.sidebar .nav-link.active {
  background-color: #3498db;
}
aside{
  height: 100vh;
}
</style>
