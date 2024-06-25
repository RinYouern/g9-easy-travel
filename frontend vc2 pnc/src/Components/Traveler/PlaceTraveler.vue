<template>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-6" v-for="place in places" :key="place.id">
        <div class="card">
          <img :src="place.image" class="card-img-top" :alt="place.title">
          <div class="card-body">
            <h5 class="card-title">{{ place.title }}</h5>
            <p class="card-text">{{ place.location }}</p>
            <a href="#" class="btn btn-primary">Visit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'PlacesPage',
  data() {
    return {
      places: [
        {
          id: 1,
          image: 'https://i.pinimg.com/474x/66/b9/fa/66b9fa7a25157bd08201d25acd5ad7e5.jpg',
          title: 'Angkor Wat',
          location: 'Siem Reab'
        },
        {
          id: 2,
          image: 'https://i.pinimg.com/564x/33/ba/a9/33baa93e78675223f52fe831173f9e42.jpg',
          title: 'Phnom Oudong',
          location: 'Kompong Spue'
        },
        {
          id: 1,
          image: 'https://i.pinimg.com/474x/66/b9/fa/66b9fa7a25157bd08201d25acd5ad7e5.jpg',
          title: 'Angkor Wat',
          location: 'Siem Reab'
        },
        {
          id: 2,
          image: 'https://i.pinimg.com/564x/33/ba/a9/33baa93e78675223f52fe831173f9e42.jpg',
          title: 'Phnom Oudong',
          location: 'Kompong Spue'
        },
        {
          id: 2,
          image: 'https://i.pinimg.com/564x/33/ba/a9/33baa93e78675223f52fe831173f9e42.jpg',
          title: 'Phnom Oudong',
          location: 'Kompong Spue'
        },
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