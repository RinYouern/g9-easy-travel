<template>
  <div>
    <Header @search-place="onSearchPlace" />
    <ListPlace :filteredPlaces="filteredPlaces" />
    <footer>
      <Footer />
    </footer>
  </div>
</template>

<script>
import Header from '@/Components/Traveler/header/headerPlace.vue';
import Footer from '@/Components/Traveler/header/Footer.vue';
import ListPlace from '@/Components/Traveler/Place/ListPlase.vue';
import axios from 'axios';

export default {
  name: 'place-traveler',
  components: {
    Header,
    ListPlace,
    Footer,
  },
  data() {
    return {
      places: [],
      searchQuery: '',
      filteredPlaces: []
    };
  },
  methods: {
    async fetchPlaces() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/getAllPlce');
        this.places = response.data;
        this.filteredPlaces = this.places;
      } catch (error) {
        console.error('Error fetching data', error);
      }
    },
    onSearchPlace(searchQuery) {
      if (!searchQuery || typeof searchQuery.province !== 'string') {
        console.log('Invalid search query:', searchQuery);
        this.filteredPlaces = this.places; // Show all places if no valid search query is provided
        return;
      }

      console.log('Search query:', searchQuery.province);

      const searchQueryLower = searchQuery.province.toLowerCase();

      this.filteredPlaces = this.places.filter((place) => {
        const placeName = place.name ? place.name.toLowerCase() : '';
        const placeProvince = place.province ? place.province.toLowerCase() : '';

        return placeName.includes(searchQueryLower) || placeProvince.includes(searchQueryLower);
      });
    }
  },
  mounted() {
    this.fetchPlaces();
  }
};
</script>

<style scoped>
@media (max-width: 768px) {
  .col-md-2.col-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .card-img-top {
    height: 100px; 
  }

  #bg-warning {
    width: 100%;
    padding: 1rem;
  }
}
</style>
