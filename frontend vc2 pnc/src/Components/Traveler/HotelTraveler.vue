<template>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-6" v-for="hotel in hotels" :key="hotel.id">
        <div class="card">
          <img :src="hotel.image" class="card-img-top" :alt="hotel.name">
          <div class="card-body">
            <h5 class="card-title">{{ hotel.name }}</h5>
            <p class="card-text">{{ hotel.location }}</p>
            <star-rating :rating="hotel.rating"></star-rating>
            <hr>
            
            <a href="/hotel-detail" class="btn btn-primary">View Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import StarRating from '@/Components/Traveler/StarRating.vue'

export default {
  name: 'HotelsPage',
  components: {
    StarRating
  },
  data() {
    return {
      hotels: [
        {
          id: 1,
          image: 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/84/39/f3/jaya-house-riverpark.jpg?w=1200&h=-1&s=1',
          name: 'Angkor Palace Resort',
          location: 'Siem Reab',
          rating: 4.5
        },
        {
          id: 2,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmpzKxGHvAkgGNeHhEeBd-2bbXdpMKgV_GIg&s',
          name: 'Phnom Oudong Hotel',
          location: 'Kompong Spue',
          rating: 3.8
        },
        {
          id: 3,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcrdOm-t8xReLudf1TGYSSiXeL9zEYZWHJ3A&s',
          name: 'Angkor Palace Resort',
          location: 'Siem Reab',
          rating: 4.2
        },
        {
          id: 4,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv7mA9dXVZJj6DEaD-ZAhFZ3CO-ourdaUv3g&s',
          name: 'Phnom Oudong Hotel',
          location: 'Phnom Penh',
          rating: 3.9
        },
        {
          id: 5,
          image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIiYxEITfeLNgFovkccexXjWvGQTs5qwPMwQ&s',
          name: 'Phnom Oudong Hotel',
          location: 'Poipet',
          rating: 4.1
        }
      ]
    }
  }
}
</script>

<style scoped>


.container {
  
  display: flex;
  justify-content: center;
}
.card-title{
  color: black;
  font: bold 25px "Times New Roman";
}
.card-text{
  color: gray;
  font-size: 15px;
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
  background-color: #f8f8f8;
  border: none;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
  transition: background-color 0.3s, box-shadow 0.3s;
}

.card:hover {
  
  box-shadow: 10px 20px 30px rgba(0, 0, 0, 0.2);
}

.card-img-top {
  height: 200px;
  object-fit: cover;
  
}

.card-body {
  padding: 1rem;
}

.card-title {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

.card-text {
  margin-bottom: 0.5rem;
}

.btn {
  width: 100%;
 
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
  padding: 0.5rem 1rem;
}

.btn-primary {
  background-color:blue;
  color: #fff;
  padding: 0.5rem 1rem;
  border: none;
}
.btn-primary:hover{
  background:red;
}
</style>