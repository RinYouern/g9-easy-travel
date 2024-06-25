<template>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-6" v-for="hotel in hotels" :key="hotel.id">
        <div class="card">
          <img :src="hotel.image" class="card-img-top" :alt="hotel.name">
          <div class="card-body">
            <h5 class="card-title">{{ hotel.name }}</h5>
            <p class="card-text">{{ hotel.location }}</p>
            <a href="#" class="btn btn-primary">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HotelsPage',
  data() {
    return {
      hotels: [
        {
          id: 1,
          image: 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/84/39/f3/jaya-house-riverpark.jpg?w=1200&h=-1&s=1',
          name: 'Angkor Palace Resort',
          location: 'Siem Reab'
        },
        {
          id: 2,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmpzKxGHvAkgGNeHhEeBd-2bbXdpMKgV_GIg&s',
          name: 'Phnom Oudong Hotel',
          location: 'Kompong Spue'
        },
        {
          id: 3,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcrdOm-t8xReLudf1TGYSSiXeL9zEYZWHJ3A&s',
          name: 'Angkor Palace Resort',
          location: 'Siem Reab'
        },
        {
          id: 4,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv7mA9dXVZJj6DEaD-ZAhFZ3CO-ourdaUv3g&s',
          name: 'Phnom Oudong Hotel',
          location: 'Kompong Spue'
        },
        {
          id: 5,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIiYxEITfeLNgFovkccexXjWvGQTs5qwPMwQ&s',
          name: 'Phnom Oudong Hotel',
          location: 'Kompong Spue'
        }
      ]
    }
  }
}
</script>

<style scoped>
.container {
  margin-top: 2rem;
  display: flex;
  justify-content: center;
}

.row {
  display: flex;
  justify-content: center;
  width: 100%;
}

.col-md-2.col-6 {
  flex: 0 0 20%;
  max-width: 20%;
  margin-bottom: 2rem;
  display: flex;
  justify-content: center;
}

.card {
  width: 100%;
}

.card-img-top {
  height: 120px;
  object-fit: cover;
}
</style>