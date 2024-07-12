<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
      <a class="navbar-brand" style="margin-left: 5%" href="#">
        <img style="width: 90px" src="/src/assets/image/logo2.png" />
      </a>
      <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: 7%">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <button
              class="btn btn-secondary mt-3"
              style="background-color: transparent; border: none"
              @click="fetchNotifications"
            >
              <Icon icon="mdi:bell-outline" width="24" height="24" style="color: black" />
            </button>
            <NotificationDropdown />
          </li>
          <li class="nav-item">
            <button style="align-items: center;margin-left: 25px;" class="btn btn-primary mt-3" @click="logout">
              Logout
            </button>
          </li>
          <li class="nav-item">
            <img
              src="/src/assets/image/adminpic/titi.jpg"
              alt="Profile Image"
              style="
                width: 55px;
                height: 55px;
                border-radius: 50%;
                margin-left: 50px;
                align-items: center;
              "
            />
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script setup lang="ts">
import { Icon } from '@iconify/vue'
import { userStore } from '@/stores/user-list'

const user = userStore()

const logout = () => {
  user.logout()
  window.location.reload()
}

const showNotifications = () => {
  // Function to handle showing notifications
  alert('Show notifications')
}
</script>

<style>
/*  */
</style>
