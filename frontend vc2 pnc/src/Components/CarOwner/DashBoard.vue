<template>
  <HeaderMenu />
  <div class="container-fluid dashboard">
    <div class="row">
      <aside class="col-md-3 col-lg-2 bg-dark text-white sidebar">
        <div class="text-center profile-section mt-4">
          <div class="position-relative d-inline-block">
            <img :src="profileImage" alt="Profile Image" class="rounded-circle profile-img mb-2 w-50" />
            <button class="btn btn-primary edit-profile position-absolute" style="top: 0; right: 0;">
              <font-awesome-icon icon="edit" />
            </button>
          </div>
          <h2>{{ userName }}</h2>
        </div>
        <nav class="menu mt-4">
          <ul class="nav flex-column">
            <li class="nav-item" v-for="item in menuItems" :key="item.text">
              <router-link :to="item.path" class="nav-link text-white d-flex align-items-center gap-3">
                <font-awesome-icon :icon="item.icon" class="me-2 menu-icon" />
                {{ item.text }}
              </router-link>
            </li>
          </ul>
        </nav>
      </aside>
      <main class="col-md-9 col-lg-10 main-content p-4">
        <section class="row stats mb-4">
          <div class="col-md-4" v-for="stat in stats" :key="stat.title">
            <div class="card text-center stat-card">
              <div class="card-body">
                <font-awesome-icon :icon="stat.icon" class="stat-icon mb-2 font-size-10 text-primary" />
                <h5 class="card-title">{{ stat.title }}</h5>
                <p class="card-text">{{ stat.value }}</p>
              </div>
            </div>
          </div>
        </section>
        <section class="cars">
          <h3 class="mt-3"><b>View Cars Booked/Not Yet</b></h3>
          <div class="d-flex justify-content-between mt-3 mb-3">
            <select class="form-select w-25 p-2" aria-label="Default select example">
              <option selected>All cars</option>
              <option value="1">Booked</option>
              <option value="2">Not yet booked</option>
            </select>
          </div>
          <div class="row car-list">
            <div class="col-md-6 col-lg-3 mb-4" v-for="car in cars" :key="car.id">
              <div class="card car-card">
                <img :src="car.image" alt="Car Image" class="card-img-top car-img" />
                <div class="card-body car-info text-start">
                  <h4 class="card-title"><b>Name: {{ car.name }}</b></h4>
                  <p class="card-text">{{ car.price }}/day</p>
                  <p class="card-text">Driver: {{ car.driver }}</p>
                  <div class="d-flex justify-content-end button-status gap-2">
                    <button 
                      v-for="status in car.status" 
                      :key="status" 
                      :class="['btn', status === 'Booked' ? 'btn-primary' : 'btn-outline-secondary']">
                      {{ status }}
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</template>

<script>
import HeaderMenu from '@/Components/HeaderMenu.vue'
export default {
  data() {
    return {
      userName: "Car Company",
      profileImage: "/src/assets/image/profile.jpg",
      stats: [
        { title: "Cars Category", value: 0, icon: "folder-open" },
        { title: "Driver for car", value: 34, icon: "user-tie" },
        { title: "Total Income", value: "$800.00", icon: "dollar-sign" },
      ],
      menuItems: [
        { text: "Dashboard", icon: "tachometer-alt", path: "#" },
        { text: "Car Category", icon: "car", path: "/car-category" },
        { text: "List Cars", icon: "list", path: "/list-cars" },
        { text: "List of Driver", icon: "users", path: "/list-drivers" },
        { text: "Booking Car", icon: "book", path: "/booking-car" },
        { text: "Travelers", icon: "user-friends", path: "/travelers" },
        { text: "Payment", icon: "dollar-sign", path: "/payment" },
        { text: "Edit Profile", icon: "edit", path: "/edit-profile" },
      ],
      cars: [
        {
          id: 1,
          name: "Car 1",
          price: "$500",
          driver: "👨‍✈️",
          status: ["NotYet", "Booked"],
          image: "/src/assets/image/car.jpg",
        },
        {
          id: 2,
          name: "Car 2",
          price: "$500",
          driver: "👨‍✈️",
          status: ["NotYet","Booked"],
          image: "/src/assets/image/car.jpg",
        },
        {
          id: 3,
          name: "Car 3",
          price: "$500",
          driver: "👨‍✈️",
          status: ["NotYet", "Booked"],
          image: "/src/assets/image/car.jpg",
        },
        {
          id: 4,
          name: "Car 4",
          price: "$500",
          driver: "👨‍✈️",
          status: [ "NotYet","Booked"],
          image: "/src/assets/image/car.jpg",
        },
        {
          id: 5,
          name: "Car 4",
          price: "$500",
          driver: "👨‍✈️",
          status: ["NotYet", "Booked"],
          image: "/src/assets/image/car.jpg",
        },
        {
          id: 6,
          name: "Car 4",
          price: "$500",
          driver: "👨‍✈️",
          status: ["NotYet","Booked"],
          image: "/src/assets/image/car.jpg",
        },
        {
          id: 7,
          name: "Car 4",
          price: "$500",
          driver: "👨‍✈️",
          status: ["NotYet", "Booked"],
          image: "/src/assets/image/car.jpg",
        },
        {
          id: 8,
          name: "Car 4",
          price: "$500",
          driver: "👨‍✈️",
          status: ["NotYet","Booked"],
          image: "/src/assets/image/car.jpg",
        },
      ],
    };
  },
  components: {
    HeaderMenu
  }
};
</script>

<style scoped>
.dashboard {
  height: auto;
  background-color: #f5f5f5;
}
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
  background-color: #3498db;
  transform: translateX(5px);
}
.car-img {
  width: 100%;
  padding: 5px;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 5px;
}
</style>