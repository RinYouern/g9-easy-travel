<template>
  <h3 class="text-center mb-4">Top Partner</h3>
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
          image: 'https://i.pinimg.com/564x/b8/a0/99/b8a099f793ce9c8e80fe6692cea05f84.jpg',
          name: 'Rent fast',
          location: 'Banteay mean chey',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 3,
          image: 'https://i.pinimg.com/736x/dd/41/dc/dd41dc273b9568c2ad662cd4c39f975b.jpg',
          name: 'Rent fast',
          location: 'Kampot',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 4,
          image: 'https://i.pinimg.com/736x/2b/d0/e5/2bd0e566f2a91aa5e295ebee5b20a093.jpg',
          name: 'Rent fast',
          location: 'Battambang',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 5,
          image: 'https://i.pinimg.com/564x/ef/9b/8f/ef9b8f4292fb7f38287f16f2fbb3bddc.jpg',
          name: 'Rent fast',
          location: 'Phnom Penh',
          rating: 5,
          link: '#',
          buttonText: 'View Detail'
        },
        {
          id: 6,
          image: 'https://i.pinimg.com/564x/22/09/c0/2209c08cf2de839986c306cbe70c03a2.jpg',
          name: 'Rent fast',
          location: 'Modulkiri',
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
h3{
  text-align: center;
  color: black;
  font-weight: bold "Times New Roman";
}
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