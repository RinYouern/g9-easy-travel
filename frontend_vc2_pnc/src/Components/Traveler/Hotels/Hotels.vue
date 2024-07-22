<template>
    <div class="container d-flex flex-column" >
      <div class="card d-flex flex-row mt-3" v-for="hotel in hotels" :key="hotel.id" style="margin: auto;">
        <div class="image-container">
          <img :src="hotel.imageUrl" class="img-fluid" alt="Hotel Image" />
          <div class="image-overlay d-flex justify-content-center align-items-center">
            <div class="image-text">View Gallery</div>
          </div>
        </div>
  
        <div class="d-flex flex-column justify-content-between p-3" style="width: 100%">
          <div class="bg-white" style="height: 50%">
            <div class="d-flex align-items-center">
              <h1 class="me-2">{{ hotel.name }}</h1>
              <span class="text-warning">
                <i class="fas fa-star" v-for="i in hotel.rating" :key="i"></i>
              </span>
            </div>
            <div class="d-flex align-items-center">
              <span class="rate text-white bg-primary p-1 rounded"><strong>{{ hotel.review }}/5</strong></span>
              <span class="text-primary ms-2">{{ hotel.reviewDescription }}</span>
              <span class="ms-2">{{ hotel.highlights }}</span>
            </div>
            <div class="d-flex flex-column">
              <div class="d-flex">
                <span class="me-2">Location:</span>
                <span>{{ hotel.location }}</span>
                <a href="#" class="text-primary">Show on Map</a>
              </div>
            </div>
          </div>
          <div
            class="bg-warning mt-3 p-3 d-flex justify-content-between align-items-center"
            style="height: 50%"
          >
            <div class="d-flex flex-column text-left">
              <h3>{{ hotel.roomType }}</h3>
              <div class="d-flex align-items-center">
                <span class="text-primary">Earn ${{ hotel.tripCoins }} in Trip Coins</span>
              </div>
              <span>Last booked {{ hotel.lastBooked }}</span>
            </div>
            <div class="d-flex flex-column align-items-end">
              <div class="d-flex align-items-center">
                <span class="text-decoration-line-through me-2">${{ hotel.originalPrice }}</span>
                <span class="fs-4 fw-bold">${{ hotel.discountedPrice }}</span>
              </div>
              <div class="text-danger">{{ hotel.discount }}% Off</div>
              <div>Total (incl. taxes): ${{ hotel.totalPrice }}</div>
              <button class="btn btn-primary">Check Availability</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'HotelCard',
    data() {
      return {
        hotels: [
          {
            id: 1,
            name: 'The Snowbell Hotel',
            imageUrl: 'https://i.pinimg.com/474x/7a/a1/94/7aa19415266b8ad0ad570b7d2ecc3e8e.jpg',
            rating: 4,
            review: 4.4,
            reviewDescription: 'Very Good',
            highlights: 'Good View',
            location: 'Near Royal Palace, Chamkar Mon',
            roomType: 'Deluxe City view Twin room',
            tripCoins: 0.87,
            lastBooked: '3 hrs ago',
            originalPrice: 31,
            discountedPrice: 27,
            discount: 11,
            totalPrice: 33
          },
          {
            id: 2,
            name: 'Luxury Resort',
            imageUrl: 'https://i.pinimg.com/474x/7a/a1/94/7aa19415266b8ad0ad570b7d2ecc3e8e.jpg',
            rating: 5,
            review: 4.8,
            reviewDescription: 'Excellent',
            highlights: 'Beachfront',
            location: 'Maldives',
            roomType: 'Ocean View Villa',
            tripCoins: 1.25,
            lastBooked: '2 days ago',
            originalPrice: 450,
            discountedPrice: 399,
            discount: 12,
            totalPrice: 425
          }
        ]
      }
    },
    methods: {
      // Add any necessary methods here
    }
  }
  </script>
  
  <style scoped>
  .card {
    width: 80%;
  }
  .image-container {
    position: relative;
    width: 350px;
    height: 300px;
    overflow: hidden;
    border-radius: 8px;
  }
  
  .image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s;
  }
  
  .image-container:hover .image-overlay {
    opacity: 1;
  }
  
  .image-text {
    color: #fff;
    font-size: 16px;
    font-weight: bold;
  }
  .rate {
    font-size: 0.8rem;
  }
  </style>