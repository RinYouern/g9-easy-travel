<template>
  <div class="container pt-4">
    <div id="hotel-room-details">
      <div class="container my-5">
        <div class="row">
          <div class="col-md-6">
            <el-carousel :interval="5000" arrow="always">
              <el-carousel-item v-for="(image, index) in images" :key="index">
                <img :src="image" alt="Carousel Image" class="carousel-image" />
              </el-carousel-item>
            </el-carousel>
          </div>
          <div class="col-md-6">
            <h2>Deluxe Room</h2>
            <p>
              Our Deluxe Room offers a comfortable and spacious accommodation for your stay.
              Featuring a king-sized bed, a stylish en-suite bathroom, and modern amenities, this
              room is perfect for a relaxing getaway.
            </p>
            <ul>
              <li>King-sized bed</li>
              <li>Ensuite bathroom with rainfall shower</li>
              <li>Flat-screen TV</li>
              <li>Complimentary Wi-Fi</li>
              <li>Minibar</li>
              <li>Coffee/tea making facilities</li>
              <li>Number poeples: {{ room.people }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" v-model="name" required />
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" id="phone" v-model="phone" required />
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" id="email" v-model="email" required />
        </div>
        <div class="form-group">
          <label for="fromDate">Arrival Date</label>
          <input type="date" id="fromDate" v-model="fromDate" required />
        </div>
        <div class="form-group">
          <label for="toDate">Departure Date</label>
          <input type="date" id="toDate" v-model="toDate" required />
        </div>
        <button type="submit" class="btn">Book Now</button>
      </form>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import { userStore } from '@/stores/user-list';

export default {
  data() {
    return {
      name: '',
      phone: '',
      email: '',
      fromDate: '',
      toDate: '',
      images: [
        'https://i.pinimg.com/474x/64/40/4f/64404fb92bfa2931fe33f388ce0daf54.jpg',
        'https://i.pinimg.com/474x/11/d9/f1/11d9f140c3301dbcc7bc32626a277dbe.jpg',
        'https://i.pinimg.com/474x/88/b4/21/88b421a3226638d027e854ae5d0a599f.jpg'
      ],
      room: {},
      store: userStore()
    };
  },
  methods: {
    async submitForm() {
      try {
        // Calculate price based on difference in days
        const startDate = new Date(this.fromDate);
        const endDate = new Date(this.toDate);
        const diffTime = Math.abs(endDate - startDate);
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 

        // Assuming room.price is available from fetchRoom() method
        const price = diffDays * this.room.price;

        const formData = {
          name: this.name,
          phone: this.phone,
          email: this.email,
          fromDate: this.fromDate,
          toDate: this.toDate,
          paid: true,
          user_id: this.store.users.id,
          room_id: this.room.id,
          price: price
        };

        const response = await axios.post('http://127.0.0.1:8000/api/bookingRoom', formData);
        this.resetForm();
      } catch (error) {
        console.error('Error submitting form:', error);
      }
    },
    resetForm() {
      this.name = '';
      this.phone = '';
      this.email = '';
      this.fromDate = '';
      this.toDate = '';
    },
    fetchRoom() {
      axios
        .get(`http://127.0.0.1:8000/api/rooms/${this.$route.params.id}`)
        .then((response) => {
          this.room = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },
    fetchUser() {
      this.store.fetchUser();
    }
  },
  mounted() {
    this.fetchRoom();
    this.fetchUser();
  }
};
</script>



<style scoped>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}

#hotel-room-details {
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  width: 800px;
  height: 90vh;
}
.card {
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  padding: 40px;
  width: 400px;
  height: 90vh;
}

h1 {
  text-align: center;
  margin-bottom: 10px;
}

.form-group {
  margin-bottom: 10px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input,
select {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.btn {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn:hover {
  background-color: #0056b3;
}

.el-carousel__item h3 {
  color: #475669;
  opacity: 0.75;
  line-height: 300px;
  margin: 0;
  text-align: center;
}

.el-carousel__item:nth-child(2n) {
  background-color: #99a9bf;
}

.el-carousel__item:nth-child(2n + 1) {
  background-color: #d3dce6;
}
</style>