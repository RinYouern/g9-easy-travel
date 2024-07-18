<template>
  <div class="container-fluid dashboard">
    <div class="row">
      <sidebar/>
      <main class="col-md-9 col-lg-10 main-content p-4">
        <section class="row stats mb-4">
          <div class="col-md-4" v-for="stat in stats" :key="stat.title">
            <div class="card text-center stat-card mb-4">
              <div class="card-body">
                <font-awesome-icon :icon="stat.icon" class="stat-icon mb-2 font-size-10 text-primary" />
                <h5 class="card-title">{{ stat.title }}</h5>
                <p class="card-text text-dark">{{ stat.value }}</p>
              </div>
            </div>
          </div>
        </section>
        <section>
          <TopCompanyCar/>
        </section>
      </main>
    </div>
  </div>
</template>

<script>
import sidebar from '@/Components/CarOwner/SideBar.vue'
import TopCompanyCar from '@/Components/CarOwner/TopCompanyCar.vue'
export default {
  components:{
    sidebar,
    TopCompanyCar
  },
  data() {
    return {
      stats: [
        { title: 'Cars Category', value: 0, icon: 'folder-open' },
        { title: 'Total Income', value: '$800.00', icon: 'dollar-sign' },
        { title: 'Driver for car', value: 34, icon: 'user-tie' },
        { title: 'Traveler', value: 300, icon: 'user-tie' },
        { title: 'Booked', value: 200, icon: 'dollar-sign' },
        { title: 'Booked', value: 200, icon: 'dollar-sign' },
      ],
      
    };
  },

};
</script>

<style scoped>
.dashboard {
  height: auto;
  background-color: #f5f5f5;
}

</style>

