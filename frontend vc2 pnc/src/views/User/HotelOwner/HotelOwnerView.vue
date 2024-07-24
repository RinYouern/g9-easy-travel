<template>
  <div>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <body>
      <div class="dashboard">
        <div class="sidebar">
          <div class="logo mb-4">
            <img src="/src/assets/image/logo2.png" />
          </div>
          <ul>
            <a href="#">
              <li class="active d-flex">
                <span class="material-symbols-outlined mx-3">dashboard</span>Dashboard
              </li>
            </a>
            <a href="/room_managemant">
              <li class="d-flex">
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
        <div class="main-content">
          <div class="header">
            <h1 class="text-dark fw-bold">Hotel Dashboard</h1>
            <div class="profile d-flex gap-5">
              <nav>
                <form action="#">
                  <div class="form-group">
                    <!-- <input type="text" placeholder="Search..." /> -->
                    <!-- <i class="bx bx-search icon"></i> -->
                  </div>
                </form>
                <a href="#" class="nav-link">
                  <i class="bx bxs-bell icon"></i>
                  <span class="badge">5</span>
                </a>
                <a href="#" class="nav-link">
                  <i class="bx bxs-message-square-dots icon"></i>
                  <span class="badge">8</span>
                </a>
              </nav>
              <div class="profile-dropdown">
                <div class="profile-btn border:none" @click="toggleDropdown">
                  <img
                    :src="information.users.profile"
                    alt="Profile Picture"
                    class="profile-picture"
                    style="width: 40px; height: 40px; margin-top: 5px"
                  />
                </div>
                <div class="dropdown-content" v-if="isOpen">
                  <b-dropdown right>
                    <b-dropdown-item href="#" v-if="isOpen">
                      <div class="text-center mb-3 w-55 mt-3">
                        <img
                          :src="information.users.profile"
                          class="image-profile rounded-circle"
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
            </div>
          </div>
          <div
            class="welcome d-flex justify-content-around shadow rounded mt-5"
            style="margin-left: -50px"
          >
            <div class="d-flex flex-column">
              <h2 class="text-white fw-bold">Welcome Guy!</h2>
              <p class="text-white">
                Book a hotel in Cambodia online. Hotels from budget to luxury. Good rates. No reservation costs. Read hotel reviews from real guests.
              </p>
            </div>
            <div>
              <img src="\src\assets\image\hotel_icon.png" class="hotel_icon" />
            </div>
          </div>

          <div class="stats" style="margin-left: -50px">
            <div class="stat shadow rounded">
              <span class="material-symbols-outlined">monitoring</span>
              <h3>$ {{ totalPrice }}</h3>
              <p>Total Income</p>
            </div>
            <div class="stat shadow rounded">
              <span class="material-symbols-outlined">home_work</span>
              <h3>20</h3>
              <p>Total Rooms</p>
            </div>
            <div class="stat shadow rounded">
              <span class="material-symbols-outlined">location_home</span>
              <h3>16</h3>
              <p>Room not available</p>
            </div>
          </div>
          <div class="list_customer">
            <h2 class="text-dark mb-2">List Customers</h2>
            <table class="table shadow rounded">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Room</th>
                  <th scope="col">Phone number</th>
                  <th scope="col">Date of stay</th>
                  <th scope="col">Date of departure</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Chhinkeo</td>
                  <td>2C</td>
                  <td>+855 96 840 4018</td>
                  <td>6-24-2024</td>
                  <td>6-26-2024</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </body>
    
  </div>
</template>

<script>
import { userStore } from '@/stores/user-list'

export default {
  data() {
    return {
      information: userStore(),
      editMode: false,
      isOpen: false
    }
  },
  methods: {
    fetchUser() {
      this.information.fetchUser()
    },
    toggleDropdown() {
      this.isOpen = !this.isOpen
    },
    logout() {
      // Implement logout functionality
    },
    async fetchData() {
      const listBookingOwnerStore = useListBookingOwnerStore()
      await listBookingOwnerStore.fetchBookings()
      this.listBookingOwner = listBookingOwnerStore.listBookingOwner
    }
  },
  computed: {
    totalPrice() {
      return this.listBookingOwner.reduce((sum, booking) => sum + booking.amount, 0)
    }
  },
  mounted() {
    this.fetchUser()
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
  margin-left: 25%;
}

.dashboard {
  display: flex;
  height: 100vh;
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
  width: 100px;
  height: 100px;
  margin-left: 35%;
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
  color: black;
}
.sidebar ul a {
  text-decoration: none;
  color: #fff;
}

.main-content {
  margin-left: 1%;
  flex-grow: 1;
  padding: 20px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.header h1 {
  margin: 0;
}

.header .profile img {
  width: 60px;
  border-radius: 50%;
  margin-top: -14px;
  margin-left: -12px;
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
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  padding: 12px 16px;
  border-radius: 10px;
  z-index: 1;
}

.profile-dropdown .dropdown-content a {
  color: black;
  padding: 8px 0;
  font-size: 20px;
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
/* NAVBAR */
nav {
  background: var(--light);
  height: 64px;
  padding: 0 20px;
  display: flex;
  align-items: center;
  grid-gap: 28px;
  position: sticky;
  top: 0;
  left: 0;
  z-index: 100;
}
nav .toggle-sidebar {
  font-size: 18px;
  cursor: pointer;
}
nav form {
  max-width: 400px;
  width: 100%;
  margin-right: auto;
}
nav .form-group {
  position: relative;
}
nav .form-group input {
  width: 100%;
  background: var(--grey);
  border-radius: 5px;
  border: 1px solid grey;
  outline: none;
  padding: 10px 36px 10px 16px;
  transition: all 0.3s ease;
}
nav .form-group input:focus {
  box-shadow:
    0 0 0 1px var(--blue),
    0 0 0 4px var(--light-blue);
}
nav .form-group .icon {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 16px;
  color: var(--dark-grey);
}
nav .nav-link {
  position: relative;
}
nav .nav-link .icon {
  font-size: 18px;
  color: var(--dark);
}
nav .nav-link .badge {
  position: absolute;
  top: -12px;
  right: -12px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 2px solid white;
  background: red;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  font-size: 10px;
  font-weight: 700;
}
.dropdown-content i {
  margin-right: 15px;
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

.welcome {
  background: black;
  padding: 20px;
  border-radius: 20px;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
}

.welcome h2 {
  margin: 0 10px 0 0;
}

.welcome p {
  margin: 0;
  color: #555;
}
.welcome:hover .hotel_icon {
  transform: translateY(-5px);
}
.hotel_icon {
  margin-top: -80px;
  width: 250px;
  height: 200px;
  transition:
    transform 0.3s,
    box-shadow 0.3s;
}
.stats {
  display: flex;
  gap: 20px;
  margin-bottom: 20px;
}

.stat {
  background: black;
  padding: 20px;
  flex-grow: 1;
  text-align: center;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  transition:
    transform 0.3s,
    box-shadow 0.3s;
}
.stat:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
.stat img {
  width: 50px;
  margin-bottom: 10px;
}

.stat h3 {
  margin: 10px 0 0 0;
  color: orange;
}

.stat p {
  margin: 5px 0 0 0;
  color:white;
}
.stat span {
  font-size: 70px;
  color: blue;
}

.list_customer {
  border-radius: 20px;
  margin-bottom: 20px;
}
.table thead tr th {
  background-color: #2b3136;
  color: white;
}
</style>
