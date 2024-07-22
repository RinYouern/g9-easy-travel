<template>
  <div class="container pt-4">
    <div id="hotel-room-details">
      <div class="container">
        <div class="row h-75 pt-3 pl-1">
          <div class="col-md-6">
            <el-carousel :interval="5000" arrow="always">
              <el-carousel-item v-for="(image, index) in images" :key="index" class="bg-white">
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
              <li>Number of people: {{ room.people }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="app" class="form-payment shadow  bg-white">
    <form @submit.prevent="submitPayment" id="payment-form">
      <div class="form-group">
        <label for="name" class="w-100 fw-bold">Name
          <input type="text" id="name" v-model="name" class="form-control" placeholder="Your name" required>
        </label><br>
        <label for="email" class="w-100 fw-bold">email
          <input type="email" id="email" v-model="email" class="form-control" placeholder="Your email" required>
        </label>
        <label for="phone" class="w-100 fw-bold">Phone
          <input type="tel" id="phone" v-model="phone" class="form-control" placeholder="Your phone number" required>
        </label><br>
        <div class="d-flex justify-content-between w-100">
          <label for="arrival-date" class="arrival fw-bold">Arrival date
            <input type="date" id="arrival-date" v-model="arrivalDate" class="form-control" required>
          </label><br>
          <label for="departure-date" class="departure fw-bold">Departure date
            <input type="date" id="departure-date" v-model="departureDate" class="form-control" required>
          </label><br>
        </div>
        <label for="amount" class="fw-bold">Amount ($)</label>
        <input type="number" id="amount" v-model="amount" class="form-control" required>
      </div>
      <label for="card-inf" class="fw-bold">Card Info</label>
      <div id="card-element" class="form-control">
        <!-- Stripe Card Element will be inserted here -->
      </div>
      <button type="submit" class="btn btn-primary mt-3 w-100">Pay Now</button>
      <div id="card-errors" role="alert" class="text-danger mt-2"></div>
    </form>
  </div>
  </div>
</template>

<script>
import { loadStripe } from '@stripe/stripe-js';
import axios from 'axios';
import { userStore } from '@/stores/user-list';

export default {
  data() {
    return {
      showPaymentModal: false,
      name: '',
      phone: '',
      email: '',
      stripe: null,
      elements: null,
      cardElement: null,
      amount: 0,
      images: [
        'https://i.pinimg.com/474x/64/40/4f/64404fb92bfa2931fe33f388ce0daf54.jpg',
        'https://i.pinimg.com/474x/11/d9/f1/11d9f140c3301dbcc7bc32626a277dbe.jpg',
        'https://i.pinimg.com/474x/88/b4/21/88b421a3226638d027e854ae5d0a599f.jpg'
      ],
      room: {},
      store: userStore()
    };
  },
  async mounted() {
    this.initializeStripe();
    this.fetchRoom();
    this.fetchUser();
  },
  methods: {
    async initializeStripe() {
      this.stripe = await loadStripe('pk_test_51PYLS5CL2uT4u9gQevk9TnyiP8xOVovpGGFwQZaD1gUGzfWE0xJN9X3rFCqnmu4i1g5f9MYzwfyLIRrucLxql1xQ00xYjz24yU'); // Replace with your publishable key

      this.elements = this.stripe.elements();
      this.cardElement = this.elements.create('card', {
        style: {
          base: {
            iconColor: '#666EE8',
            color: '#31325F',
            fontWeight: 400,
            fontFamily: 'Helvetica Neue, Helvetica, Arial, sans-serif',
            fontSize: '16px',
            '::placeholder': {
              color: '#CFD7E0',
            },
          },
        },
      });
      this.cardElement.mount('#card-element');

      this.cardElement.on('change', (event) => {
        const displayError = document.getElementById('card-errors');
        if (event.error) {
          displayError.textContent = event.error.message;
        } else {
          displayError.textContent = '';
        }
      });
    },
    async submitPayment() {
  try {
    const { data } = await axios.post('http://127.0.0.1:8000/api/stripe/payment', {
      name: this.name,
      email: this.email,
      phone: this.phone,
      arrival_date: this.arrivalDate,
      departure_date: this.departureDate,
      amount: this.amount, // Convert amount to cents
    });

    const { error, paymentIntent } = await this.stripe.confirmCardPayment(data.clientSecret, {
      payment_method: {
        card: this.cardElement,
        billing_details: {
          name: this.name,
          email: this.email,
          phone: this.phone,
        },
      },
    });

    if (error) {
      console.error(error.message);
      const displayError = document.getElementById('card-errors');
      displayError.textContent = error.message;
    } else {
      if (paymentIntent.status === 'succeeded') {
        console.log('Payment succeeded:', paymentIntent);
        alert('Payment succeeded!');
      }
    }
  } catch (error) {
    console.error('Error creating payment intent:', error);
  }
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
    },
  },
};


</script>
<style scoped>
*{
  color: black;
}
.container {
  display: flex;
  justify-content: center;
  gap: 10px;
}

#hotel-room-details {
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  width: 800px;
  /* height: 90vh; */
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

.form-payment{
  width: 30%;
  padding: 20px;
  border: 1px solid lightgray;
  border-radius: 10px;
}
#card-element {
  border: 1px solid #ced4da;
  padding: 10px;
  border-radius: 4px;
}
#payment-form {
  max-width: 500px;
  margin: auto;
}
input.form-control::placeholder {
  color: #CFD7E0;
}
.arrival{
  width: 49%;
}
.departure{
  width: 49%;
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

.modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-content {
  background: white;
  padding: 20px;
  border-radius: 8px;
  width: 80%;
  max-width: 500px;
}

.carousel-image {
  width: 100%;
  height: 100%;
  height: auto;
  border: none;
  border-radius: 5px;
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

@media (max-width: 768px) {
  .container {
    width: 400px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  #hotel-room-details {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 400px;
    height: 100vh;
  }
}
</style>
