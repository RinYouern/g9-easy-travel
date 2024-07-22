
<template>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
  />
  <body>
    <div class="sidebar">
      <div class="logo">
        <img src="/src/assets/image/logo2.png" />
      </div>
      <ul>
        <a href="/hotelowner">
          <li class="d-flex">
            <span class="material-symbols-outlined mx-3">dashboard</span>Dashboard
          </li>
        </a>
        <a href="/top-hotel">
          <li class="active d-flex">
            <span class="material-symbols-outlined mx-3">hotel</span>Top Hotels
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
      </ul>
    </div>
    <div class="container">
  <h2 class="text-left">Trending destinations</h2>
  <div class="row flex-nowrap overflow-auto">
    <div class="col-md-3 mb-4" v-for="item in hotels" :key="item.index">
      <div class="card">
        <img :src="item.profile" class="card-img-top" style="height: 100px;" :alt="item.name" />
        <div class="text-left p-2">
          <strong>{{ item.name }}</strong>

          <p style="font-size: small;">{{ item.province }}</p>
          <p><span class="border p-2 bg-warning rounded-pill">{{ item.rating }}</span> Exceptionals</p>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
</template>
  
<script>
import axios from 'axios';

export default {
  name: 'Sidebar',
  data() {
    return {
      hotels: []
    };
  },
  mounted() {
    this.fetchTopHotel();
  },
  methods: {
    async fetchTopHotel() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users/rate/hotelOwner');
        this.hotels = response.data.data;
      } catch (error) {
        console.error('Error fetching top hotels:', error);
      }
    }
  }
};
</script>

<style scoped>
.wrapper {
  display: flex;
}

.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 25%;
  background: #2b3136;
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
  padding: 15px;
  cursor: pointer;
  font-size: 18px;
  display: flex;
  align-items: center;
}

.sidebar ul a {
  text-decoration: none;
  color: white;
}

.sidebar ul a.active,
.sidebar ul li:hover {
  background: white;
  color: #178de7;
}

.container {
  margin-left: 27%;
  padding-right: 20px;
  width: 73%;
}

.material-symbols-outlined {
  font-size: 24px;
}

.card {
  width: 100%;
  border: 1px solid #e0e0e0;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}
</style>