<template>
    <div class="star-rating">
      <span v-for="i in 5" :key="i" :class="{ 'active': i <= Math.round(rating) }">★</span>
    </div>
  </template>
  
  <script>
  export default {
    name: 'StarRating',
    props: {
      rating: {
        type: Number,
        required: true
      }
    },
    computed: {
      roundedRating() {
        return Math.round(this.rating);
      }
    }
  }
  </script>
  
  <style scoped>
  .star-rating {
    color: #ffc107;
    font-size: 20px;
  }
  
  .star-rating .active {
    color: #ffc107;
  }
  </style>