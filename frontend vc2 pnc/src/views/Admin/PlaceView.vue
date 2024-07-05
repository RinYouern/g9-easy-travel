<template>
  <div class="container">
    <h1 class="mt-4 text-dark">Manage Places</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPlace">
      Add New Place
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addPlace" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="addPlaceLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addPlaceLabel">Add New Place</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form @submit.prevent="addPlace">
              <div class="mb-3">
                <label for="placeName" class="form-label">Name</label>
                <input type="text" class="form-control" id="placeName" v-model="newPlace.name" required>
              </div>
              <div class="mb-3">
                <label for="placeDesc" class="form-label">Description</label>
                <input type="text" class="form-control" id="placeDesc" v-model="newPlace.description" required>
              </div>
              <div class="mb-3">
                <label for="placeLocation" class="form-label">Location</label>
                <input type="text" class="form-control" id="placeLocation" v-model="newPlace.location" required>
              </div>
              <div class="mb-3">
                <label for="placeImage" class="form-label">Image URL</label>
                <input type="url" class="form-control" id="placeImage" v-model="newPlace.image" required>
              </div>
              <button type="submit" class="btn btn-primary">Add Place</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- List of Places -->
    <div v-if="places.length" class="row mt-4">
      <div v-for="place in places" :key="place.id" class="col-md-4 mb-4">
        <div class="card h-100">
          <img :src="place.image" class="card-img-top small-image" alt="Place Image">
          <div class="card-body">
            <h5 class="card-title">{{ place.name }}</h5>
            <p class="card-text">{{ place.description }}</p>
            <p class="card-text"><strong>Location:</strong> {{ place.location }}</p>
          </div>
        </div>
      </div>
    </div>
    <div v-else class="mt-4">
      <p>No places to display.</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      newPlace: {
        name: '',
        description: '',
        location: '',
        image: ''
      },
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
    };
  },
  methods: {
    addPlace() {
      if (this.newPlace.name && this.newPlace.description && this.newPlace.location && this.newPlace.image) {
        const newPlace = { ...this.newPlace, id: Date.now() };
        this.places.push(newPlace);
        this.resetForm();
        const modal = document.getElementById('addPlace');
        const bootstrapModal = bootstrap.Modal.getInstance(modal);
        bootstrapModal.hide();
      }
    },
    resetForm() {
      this.newPlace.name = '';
      this.newPlace.description = '';
      this.newPlace.location = '';
      this.newPlace.image = '';
    }
  }
};
</script>

<style scoped>
img.small-image {
  height: 200px;
  object-fit: cover;
  width: 100%;
}
</style>
