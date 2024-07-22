<template>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3 mb-4" v-for="(hotel, index) in filteredPlaces" :key="index">
        <router-link :to="'/place-detail/' + hotel.id" class="card h-100 text-decoration-none">
          <img :src="hotel.images[0]" class="card-img-top" :alt="hotel.name" />
          <div class="card-body">
            <h5 class="card-title">{{ hotel.name }}</h5>
            <div v-if="index < 3" class="badge bg-warning text-dark">TOP {{ index + 1 }}</div>
            <p>{{ hotel.province }}</p>
            <small class="text-muted border p-1 bg-warning">
              <strong>{{ hotel.rating }}</strong
              >/5</small
            >
            <small class="text-muted">{{ hotel.reviews }} reviews</small>
          </div>
        </router-link>
      </div>
    </div>
  </div>
</template>
  
  
  <script>
export default {
  name: 'HotelList',
  props: ['filteredPlaces'],
  data() {
    return {}
  }
}
</script>
  
  <style scoped>
.card {
  border: none;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden; /* Ensure the image does not overflow the card */
}
.badge {
  font-size: 1rem;
  position: absolute;
  top: 10px;
  right: 10px;
}
.image-container {
  position: relative;
  overflow: hidden; /* Ensure the image does not overflow the container */
}
.card-img-top {
  transition: transform 0.3s, box-shadow 0.3s;
  width: 100%;
}
.card-img-top:hover {
  transform: scale(1.05); /* Slight zoom effect */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
}
</style>