<template>
  <div
    class="mt-3"
    style="width: 80%; height: 150px; display: flex; flex-direction: column; margin: auto"
    v-for="car in filteredHotels"
    :key="car.id"
  >
    <div
      class="bg-white"
      style="
        height: 150px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
      "
    >
      <div style="display: flex; height: 100%">
        <div class="p-2" style="width: 30%">
          <img :src="car.profile" alt="" style="width: 100%; height: 100%" />
        </div>
        <div class="p-2" style="width: 70%; display: flex">
          <div style="width: 70%">
            <div class="d-flex" style="align-items: center">
              <h4>{{ car.name }}</h4>
              <div class="d-flex ml-2 text-warning" style="gap: 2px">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>

            <div style="display: flex; gap: 4px">
              <i class="bi bi-geo-alt"></i>
              <p>{{ car.location }}</p>
            </div>
            <div style="display: flex; margin-top: -20px; align-items: center; gap: 5px">
              <p style="text-align: center">
                <strong style="font-size: 30px" class="text-warning">{{ car.rating }}</strong
                >/5
              </p>
              <span> <strong>Good</strong></span>
            </div>
            <div style="display: flex; gap: 10px; margin-top: -10px">
              <div style="display: flex; gap: 4px">
                <i class="bi bi-check2-circle text-success"></i>
                <p>Open 24 hours</p>
              </div>
              <div style="display: flex; gap: 4px">
                <i class="bi bi-check2-circle text-success"></i>
                <p>Saft</p>
              </div>
              <div style="display: flex; gap: 4px">
                <i class="bi bi-check2-circle text-success"></i>
                <p>Easy trip</p>
              </div>
            </div>
          </div>
          <div
            style="
              width: 30%;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
            "
          >
            <p>from<strong style="font-size: 30px"> $200 </strong> /day</p>
            <a :href="'/car-detail/' + car.id" class="btn btn-primary" @click="showId(car.id)"
              >Check Availability</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="mt-3">
    <Footer />
  </footer>
</template>

<script>
import Footer from '@/Components/Traveler/header/Footer.vue'
export default {
  name: 'CarCard',
  props: ['filteredHotels'],
  components: {
    Footer
  }
}
</script>

<style>
</style>