<template>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
  />
  <div>
    <body>
      <div class="sidebar">
        <div class="logo">
          <img src="/src/assets/image/logo2.png" />
        </div>
        <ul>
            <a href="/hotelowner">
              <li class=" d-flex">
                <span class="material-symbols-outlined mx-3">dashboard</span>Dashboard
              </li>
            </a>
            <a href="/room_managemant">
              <li class="d-flex">
                <span class="material-symbols-outlined mx-3">apartment</span>Rooms Management
              </li>
            </a>
            <a href="#">
              <li class="active d-flex">
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
        <listBooking />
      </div>
      
    </body>
  </div>
</template>

<script>
import listBooking from '@/Components/HotelOwner/Listofcostumer.vue'
export default {
  components: {
    listBooking
  },
  methods: {
    deleteCustomer(id) {
      this.customers = this.customers.filter((customer) => customer.id !== id)
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
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 22%;
  background:black;
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

</style>