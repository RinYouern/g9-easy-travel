<template>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <header>
    <Header />
  </header>
  <div class="container">
    <div class="car-card-column">
      <div v-for="car in cars" :key="car.id" class="car-card mt-3" style="margin:auto">
        <div class="car-image">
          <img src="https://i.pinimg.com/474x/cd/67/f3/cd67f37f410cb8e0b8fea2ed63d3a574.jpg" alt="" />
        </div>
        <div class="car-info">
          <div class="car-name">
            <h3> <strong class="text-uppercase">{{ user.name }}</strong></h3>
          </div>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p><i class="fa fa-map-marker" width="40px"></i> {{user.location }}</p>
          <p>{{ car.description }}</p>
          <div class="car-rating">
            <h3><strong>{{ car.price }}</strong> $</h3>
          </div>
          <button class="btn btn-primary">Check availability</button>
        </div>
      </div>
    </div>
    <hr />
  </div>
</template>

<script>
import Header from '@/Components/Traveler/CarDetail/HeaderCar.vue'
import axios from 'axios';

export default {
  name: 'Travel',
  components: {
    Header
  },
  data() {
    return {
      cars: [],
      user:{}
    }
  },
  created() {
    this.fetchVehicle();
    this.fetchUser();
  },
  methods: {
    fetchVehicle() {
      axios.get(`http://127.0.0.1:8000/api/vehicles/${this.$route.params.id}`)
        .then(response => {
          this.cars = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    fetchUser(){
      axios.get(`http://127.0.0.1:8000/api/user/${this.$route.params.id}`)
       .then(response => {
         this.user = response.data.data
        })
       .catch(error => {
          console.error(error);
        });
    }
  }
}
</script>

<style scoped>
.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.car-card-row {
  width: 100%;
  display: flex;
  justify-content: center;
}

.car-card {
  display: flex;
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  overflow: hidden;
  width: 80%;
  margin-top: 20px;
}

.car-image {
  position: relative;
  width: 40%;
  padding: 30px;
}

.car-image img {
  width: 90%;
  height: 100%;
  object-fit: cover;
  border-radius: 5px;
}

.car-info {
  width: 60%;
  padding: 20px;
}

.car-name {
  display: flex;
  align-items: center;
}

.rating i {
  color: #ffb400;
  font-size: 16px;
}

.car-rating {
  display: flex;
  align-items: center;
  margin-top: 20px;
}

.car-rating span {
  margin-right: 10px;
}

.btn {
  margin-top: 10px;
}

</style>