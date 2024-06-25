<template>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-6" v-for="item in items" :key="item.id">
        <div class="card">
          <img :src="item.image" class="card-img-top" :alt="item.name">
          <div class="card-body">
            <h5 class="card-title">{{ item.name }}</h5>
            <p class="card-text">{{ item.location }}</p>
            <a :href="item.link" class="btn btn-primary">{{ item.buttonText }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ItemsPage',
  data() {
    return {
      items: [
        {
          id: 1,
          image: 'https://i.pinimg.com/736x/94/e5/98/94e598c76b150eb6dc51ccc954b0ca22.jpg',
          name: 'Rent fast',
          location: 'Siem Reab',
          link: '#',
          buttonText: 'Book Now'
        },
        {
          id: 2,
          image: 'https://i.pinimg.com/564x/8f/a6/68/8fa668ec7f177d1a37d46f0f29188a70.jpg',
          name: 'Easy rent',
          location: 'Kompong Spue',
          link: '#',
          buttonText: 'Book Now'
        },
        {
          id: 3,
          image: 'https://i.pinimg.com/474x/5d/19/f2/5d19f214d05e23b97cfe54f05e7dadbb.jpg',
          name: 'Car fast',
          location: 'Siem Reab',
          link: '#',
          buttonText: 'Book Now'
        },
        {
          id: 4,
          image: 'https://i.pinimg.com/564x/1d/64/1c/1d641c5b2a919113b0a88e479ca9705c.jpg',
          name: 'Travel now',
          location: 'Kompong Spue',
          link: '#',
          buttonText: 'Book Now'
        },
        {
          id: 5,
          image: 'https://i.pinimg.com/564x/1d/64/1c/1d641c5b2a919113b0a88e479ca9705c.jpg',
          name: 'Phnom Oudong Rent-a-Car',
          location: 'Kompong Spue',
          link: '#',
          buttonText: 'Rent Now'
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