<template>
  <div class="container-fluid dashboard">
    <div class="row">
      <sidebar/>
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
import sidebar from '@/Components/CarOwner/SideBar.vue'
export default {
  components:{
    sidebar
  },
  data() {
    return {
      stats: [
        { title: 'Cars Category', value: 0, icon: 'folder-open' },
        { title: 'Driver for car', value: 34, icon: 'user-tie' },
        { title: 'Total Income', value: '$800.00', icon: 'dollar-sign' }
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

};
</script>

<style scoped>
.dashboard {
  height: auto;
  background-color: #f5f5f5;
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

