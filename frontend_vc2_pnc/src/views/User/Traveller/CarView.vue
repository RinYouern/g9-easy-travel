<template>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
  />
  
  <Header  @search-cars="onSearchCar"/>

  <ListCars :filteredHotels="filteredHotels"/>
</template>

<script>
import Header from '@/Components/Traveler/header/headerCar.vue'
import ListCars from '@/views/User/Traveller/CompanyCarDetail/ListCars.vue'
import StarRating from '@/Components/Traveler/StarRating.vue'
import axios from 'axios'

export default {
  name: 'place-traveler',
  components: {
    Header,
    StarRating,
    ListCars
  },
  data() {
    return {
      hotels: [],
      vehicle: '',
      filteredHotels: []
    }
  },
  methods: {
    async fetchCompanies() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/users/role/carowner')
        this.hotels = response.data.data
        this.filteredHotels = this.hotels
      } catch (error) {
        console.error('Error fetching data', error)
      }
    },
    onSearchCar(searchQuery) {
      if (!searchQuery || typeof searchQuery.province !== 'string') {
        console.log('Invalid search query:', searchQuery)
        this.filteredHotels = this.hotels // Show all hotels if no valid search query is provided
        return
      }

      console.log('Search query:', searchQuery.province)

      const searchQueryLower = searchQuery.province.toLowerCase()

      this.filteredHotels = this.hotels.filter((hotel) => {
        const hotelName = hotel.name ? hotel.name.toLowerCase() : ''
        const hotelProvince = hotel.province ? hotel.province.toLowerCase() : ''

        return hotelName.includes(searchQueryLower) || hotelProvince.includes(searchQueryLower)
      })
    },
    showId(id) {
      console.log('Selected hotel ID:', id)
    }
  },
  mounted() {
    this.fetchCompanies()
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

#content {
  height: 350px;
  background-image: url('@/assets/image/hotel/hotel.jpg');
  background-size: cover;
  background-position: center;
}

#bg-warning {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  background: rgba(0, 0, 0, 0.67);
  height: 250px;
  width: 800px;
  border-radius: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}
</style>
