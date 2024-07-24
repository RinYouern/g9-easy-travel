<template>
  <div class="pr-5 pl-5 bg-primary" id="header-car">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <section class="d-flex">
      <div class="m2">
        <img src="/src/assets/image/logo2.png" style="width: 80px" alt="Logo" />
      </div>
      <nav class="navbar" style="display: flex; width: 90%; justify-content: space-between">
        <ul class="navbar-menu">
          <li class="navbar-item">
            <a href="/" class="navbar-link">Home</a>
          </li>
          <li class="navbar-item">
            <a href="/place-traveler" class="navbar-link">Attractions & Tours</a>
          </li>
          <li class="navbar-item">
            <a href="/car-traveler" class="navbar-link">Cars</a>
          </li>
          <li class="navbar-item">
            <a href="/hotel-traveler" class="navbar-link">Hotels</a>
          </li>
          <li class="navbar-item">
            <a href="/ticket" class="navbar-link">Tiket</a>
          </li>
        </ul>
        <div class="profile-dropdown">
          <div class="profile-btn border:none" @click="toggleDropdown">
            <span class="text-white" >HI, {{information.users.name}}</span>
            <img
              :src="information.users.profile"
              alt="Profile Picture"
              class="profile-picture"
              style="
                width: 40px;
                height: 40px;
                margin-top: 10px;
                margin-left: 25px;
                border-radius: 50%;
              "
            />
          </div>
          <div class="dropdown-content" v-if="isOpen">
            <b-dropdown right>
              <b-dropdown-item href="#" v-if="isOpen">
                <div class="text-center mb-3 w-70">
                  <img
                    :src="information.users.profile"
                    class="image-profile rounded-circle mb-2"
                    style="
                      width: 40px;
                      height: 40px;
                      margin-top: 10px;
                      margin-left: 25px;
                      border-radius: 50%;
                    "
                    alt="Profile Image"
                  />
                  <h5 class="text-dark">{{ information.users.name }}</h5>
                  <p class="text-dark">{{ information.users.email }}</p>
                </div>
              </b-dropdown-item>
              <b-dropdown-divider></b-dropdown-divider>
            </b-dropdown>
            <a href="/information"><i class="bx bxs-user-circle icon"></i> Profile</a>
            <a href="#"><i class="bx bxs-edit icon"></i> Change Password</a>
            <a href="/homepage" @click="logout"><i class="bx bxs-log-out-circle"></i> Logout</a>
          </div>
        </div>
      </nav>
    </section>
    <section>
      <h1 class="text-white fw-bold">
        Welcome to <strong class="text-warning">Easy Travel</strong>
      </h1>
      <h1 class="text-white" style="font-size: 20px">
        Discover the best deals for your car rental adventures
      </h1>
    </section>
  </div>
</template>

<script>
import { userStore } from '@/stores/user-list'
export default {
  name: 'Header',
  data() {
    return {
      information: userStore(),
      editMode: false,
      isOpen: false,
      guests: ''
    }
  },
  methods: {
    searchCars() {
      console.log('Searching for:', this.guests)
    },
    fetchUser() {
      this.information.fetchUser()
    },
    toggleDropdown() {
      this.isOpen = !this.isOpen
    },
    logout() {
      // Implement logout functionality
    }
  },
  mounted() {
    this.fetchUser()
  }
}
</script>

<style scoped>
#header-car {
  height: 300px;
}
h1 {
  text-align: center;
}
span {
  text-align: center;
}

body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.navbar {
  padding: 10px 20px;
}

.navbar-menu {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
}

.navbar-item {
  margin: 0 5px;
}

.navbar-link {
  text-decoration: none;
  color: #ffffff;
  font-weight: 500;
  transition:
    color 0.3s,
    transform 0.3s;
  padding: 5px 10px;
  border-radius: 5px;
  display: inline-block;
}

.navbar-link:hover {
  color: #f8c145;
  background-color: rgba(255, 255, 255, 0.1);
  transform: scale(1.1);
}

/* Profile drop down  */
.profile-dropdown {
  position: relative;
  display: inline-block;
}

.profile-dropdown .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 200px;
  /* margin-left: -140px; */
  /* margin-top: 20px; */
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  padding: 12px 16px;
  z-index: 1;
}

.profile-dropdown .dropdown-content a {
  color: black;
  padding: 8px 0;
  display: block;
}

.profile-dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content {
  padding: 12px 16px;
  position: absolute;
  background-color: #d9ded9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  right: 0;
}

.dropdown-content i {
  margin-right: 8px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: black;
  color: white;
}

@media (max-width: 768px) {
  .navbar-menu {
    flex-direction: column;
    align-items: center;
  }

  .navbar-item {
    margin: 10px 0;
  }
}
</style>
