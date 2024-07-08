<template>
  <h3 class="text-center mb-4">Top Company Car</h3>
  <table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Location</th>
        <th>Rating</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in items" :key="item.id">
        <td>
          <img :src="item.image" :alt="item.name" class="table-image" />
        </td>
        <td>{{ item.name }}</td>
        <td>{{ item.location }}</td>
        <td>
          <StarRating :rating="item.rating" />
        </td>
        <td>
          <a :href="item.link" class="btn btn-primary btn-sm">{{ item.buttonText }}</a>
        </td>
      </tr>
    </tbody>
  </table>
</template>
  
  <script>
import StarRating from '@/Components/Traveler/StarRating.vue'

export default {
  name: 'ItemsPage',
  components: {
    StarRating
  },
  data() {
    return {
      items: [
        {
          id: 1,
          image: 'https://i.pinimg.com/564x/2f/40/14/2f40142d49f31391497e6f02d3a26521.jpg',
          name: 'Rent fast',
          location: 'Siem Reab',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 2,
          image: 'https://i.pinimg.com/564x/2f/40/14/2f40142d49f31391497e6f02d3a26521.jpg',
          name: 'Rent fast',
          location: 'Siem Reab',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 3,
          image: 'https://i.pinimg.com/564x/2f/40/14/2f40142d49f31391497e6f02d3a26521.jpg',
          name: 'Rent fast',
          location: 'Siem Reab',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 4,
          image: 'https://i.pinimg.com/564x/2f/40/14/2f40142d49f31391497e6f02d3a26521.jpg',
          name: 'Rent fast',
          location: 'Siem Reab',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 5,
          image: 'https://i.pinimg.com/564x/2f/40/14/2f40142d49f31391497e6f02d3a26521.jpg',
          name: 'Rent fast',
          location: 'Siem Reab',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 6,
          image: 'https://i.pinimg.com/564x/2f/40/14/2f40142d49f31391497e6f02d3a26521.jpg',
          name: 'Rent fast',
          location: 'Siem Reab',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        }
      ]
    }
  }
}
</script>
  
<style scoped>
.table-image {
  max-width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
}

.table {
  margin-top: 1rem;
  text-align: center;
  vertical-align: middle;
}

.btn {
  font-weight: bold;
}
</style>