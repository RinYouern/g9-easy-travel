<template>
  <div class="container">
    <h1 class="mt-4 text-dark">Manage Places</h1>

    <AddNewPlace />

    <PlacesList :places="places" @edit="editPlace" @delete="deletePlace" />
  </div>
</template>

<script>
import AddNewPlace from '@/Components/Admin/AddPlace/AddNewPlace.vue'
import PlacesList from '@/Components/Admin/AddPlace/PlacesList.vue'

export default {
  components: {
    AddNewPlace,
    PlacesList
  },
  data() {
    return {
      places: [
        {
          id: 1,
          name: 'Place 1',
          description: 'Description 1',
          location: 'Location 1',
          image: 'https://via.placeholder.com/200'
        },
        {
          id: 2,
          name: 'Place 2',
          description: 'Description 2',
          location: 'Location 2',
          image: 'https://via.placeholder.com/200'
        }
      ]
    }
  },
  methods: {
    editPlace(place) {
      // Implement edit logic here
    },
    deletePlace(id) {
      // Implement delete logic here
    }
  }
}
</script>
