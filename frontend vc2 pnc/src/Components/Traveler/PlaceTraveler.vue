<template>

  <div class="container">
    <div class="row">
      <div class="col-md-2 col-6" v-for="place in places" :key="place.id">
        <div class="card">
          <img :src="place.image" class="card-img-top" :alt="place.title">
          <div class="card-body">
            <h5 class="card-title">{{ place.title }}</h5>
            <p class="card-text">{{ place.location }}</p>
            <!-- <div class="rating"> -->
              <star-rating :rating="place.rating" />
            <!-- </div> -->
            <hr>
            
            <a href="/place-detail" class="btn btn-primary">View Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import StarRating from '@/Components/Traveler/StarRating.vue'
export default {
  name: 'PlacesPage',
  components: {
    StarRating
  },
  
  data() {
    return {
      places: [
        {
          id: 1,
          image: 'https://www.areacambodia.com/wp-content/uploads/2023/09/Experiencing-the-Magical-Equinox-Sunrise-at-Angkor-Wat-A-Must-See-in-Cambodia-2023.jpg',
          title: 'Angkor Wat',
          location: 'Siem Reab',
          rating:4.5
        },
        {
          id: 2,
          image: 'https://bayontabitour.com/userfiles/udong-att-b.jpg',
          title: 'Phnom Oudong',
          location: 'Kompong Spue',
          rating:5
        },
        {
          id: 3,
          image: 'https://www.renown-travel.com/images/royal-palace-phnom-penh-l.jpg',
          title: 'Royal Palace',
          location: 'Phnom Penh',
          rating:4.5
        },
        {
          id: 4,
          image: 'https://static.arocdn.com/Sites/50/songsaa/uploads/images/Gallery/nosize29/island_from_above.jpg',
          title: 'Koh Rong',
          location: 'Kampot',
          rating:4.5
        },
        {
          id: 5,
          image: 'https://qph.cf2.quoracdn.net/main-qimg-edcb9b21e281a7d12b10eeecc52e0b07-lq',
          title: 'Preah Vihear Temple',
          location: 'Preah Vihear',
          rating:4.5
        },
      ]
    }
  }
}
</script>

<style scoped>
.container {
  /* margin-top: -20px; */
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
  background-color: blue;
  color: #fff;
  padding: 0.5rem 1rem;
  border: none;
}
.btn-primary:hover{
  background:red;
}
</style>