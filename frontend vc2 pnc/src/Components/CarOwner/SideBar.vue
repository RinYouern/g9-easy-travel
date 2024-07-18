<template>
  <aside class="col-md-3 col-lg-2 bg-dark text-white sidebar">
    <div class="text-center profile-section mt-4">
      <div class="position-relative d-inline-block">
        <img :src="profileImage" alt="Profile Image" class="rounded-circle profile-img mb-2 w-50" />
      </div>
      <h2>{{ userName }}</h2>
    </div>
    <nav class="menu mt-4">
      <ul class="nav flex-column">
        <li class="nav-item" v-for="item in menuItems" :key="item.text">
          <router-link 
            v-if="item.text !== 'Logout'"
            :to="item.path" 
            class="nav-link text-white d-flex align-items-center gap-3">
            <font-awesome-icon :icon="item.icon" class="me-2 menu-icon" />
            {{ item.text }}
          </router-link>
          <a 
            v-if="item.text === 'Logout'" 
            href="#" 
            @click.prevent="handleLogoutClick"
            class="nav-link text-white color:black d-flex align-items-center gap-3">
            <font-awesome-icon :icon="item.icon" class="me-2 menu-icon" />
            {{ item.text }}
          </a>
        </li>
      </ul>
    </nav>
  </aside>
</template>
<script>
import { ElMessageBox, ElMessage } from 'element-plus'

export default {
  data() {
    return {
      userName: 'Car Owner',
      profileImage: '/src/assets/image/profile.jpg',
      menuItems: [
        { text: 'Dashboard', icon: 'tachometer-alt', path: '/' },
        // { text: 'Car Category', icon: 'car', path: '/car-category' },
        { text: 'List Cars', icon: 'list', path: '/list-car' },
        { text: 'List of Driver', icon: 'users', path: '/driverslist' },
        { text: 'Booking Car', icon: 'book', path: '/booking-car' },
        { text: 'Travelers', icon: 'user-friends', path: '/travelers' },
        { text: 'Payment', icon: 'dollar-sign', path: '/payment' },
        { text: 'Logout', icon: 'sign-out', path: '/login' },
        // { text: 'Edit Profile', icon: 'edit', path: '/edit-profile' }
      ]
    }
  },
  methods: {
    handleLogoutClick(event) {
      ElMessageBox.confirm('Are you sure you want to logout?', 'Logout Confirmation', {
        confirmButtonText: 'Ok',
        cancelButtonText: 'Cancel',
        type: 'warning',
        text:'black'
      }).then(() => {
        //  logout logic here
        ElMessage({
          type: 'success',
          message: 'Successfully logged out'
        });
        // Redirect to login page 
        this.$router.push('/login'); 
      }).catch(() => {
        ElMessage({
          type: 'warning',
          message: 'Logout canceled'
          
          
        });
      });
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
    transition: background-color 0.3s ease, transform 0.3s ease;
  }
  .sidebar .nav-link:hover {
    background-color: orange;
    transform: translateX(5px);
  }
  </style>