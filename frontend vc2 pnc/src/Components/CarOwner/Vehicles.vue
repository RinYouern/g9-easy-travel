<template>
  <div class="row">
    <div class="col-md-6 mb-4" v-for="car in store.cars" :key="car.id">
      <div class="card mb-1">
        <div class="row g-0">
          <div class="col-md-6 d-flex justify-content-center">
            <img
              src="https://i.pinimg.com/474x/81/9d/8f/819d8f465bb42ce2f1023e00620d5259.jpg"
              alt=""
              class="img-fluid rounded-start"
            />
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <div class="row text-left">
                <p class="card-text">Color: {{ car.color }}</p>
                <p class="card-text">Size: {{ car.size }}</p>
                <p class="card-text">Price: ${{ car.price }}</p>
                <p class="card-text">Traveler Capacity: {{ car.traveler_capacity }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import sidebar from '@/Components/CarOwner/SideBar.vue'
import { listCarStore } from '@/stores/hevicle-list'

export default {
  name: 'CarList',
  components: {
    sidebar
  },
  data() {
    return {
      store: listCarStore()
    }
  },
  mounted() {
    this.fetchCars()
  },
  methods: {
    fetchCars() {
      this.store.fetchCars()
    }
  }
}
</script>

<style scoped>
</style>
