<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-white">
    <div class="container">
      <a class="navbar-brand" style="margin-left: 7%" href="#"
        ><img src="/src/assets/image/logo.png" />
      </a>
      <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: 7%">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <button class="btn btn-primary mt-3" @click="logout">Logout</button>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              <img
                src="https://i.pinimg.com/474x/60/07/0e/60070ed889df308cbe80253e8c36b3a3.jpg"
                alt="Profile Image"
                style="width: 50px; height: 50px; border-radius: 50%; margin-left: 10px"
              />
            </a>
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
</script>

<style>
</style>