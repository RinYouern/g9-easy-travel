<template>
  <div class="container">
    <h1 class="mt-4 text-dark">Manage Places</h1>


    <!-- AddNewPlace component -->
    <AddNewPlace />

    <!-- PlacesList component with props -->
    <PlacesList :places="places" @edit="editPlace" @delete="deletePlace" />
  </div>
</template>

<script>
import axios from 'axios';
import AddNewPlace from '@/Components/Admin/AddPlace/AddNewPlace.vue';
import PlacesList from '@/Components/Admin/AddPlace/PlacesList.vue';

export default {
  components: {
    AddNewPlace,
    PlacesList
  },
  data() {
    return {
      places: []
    };
  },
  mounted() {
    this.getAllPlaces();
  },
  methods: {
    getAllPlaces() {
      axios.get('http://127.0.0.1:8000/api/getAllPlce') // Adjusted endpoint URL
        .then(response => {
          this.places = response.data;
        })
        .catch(error => {
          console.error('Error fetching places:', error);
        });
    },
    editPlace(place) {
      // Implement edit logic here
    },
    deletePlace(id) {
      // Implement delete logic here
    }
  }
};
</script>
