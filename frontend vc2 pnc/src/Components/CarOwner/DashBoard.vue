<template>
  <div class="container-fluid dashboard">
    <div class="row">
      <sidebar/>
      <main class="col-md-9 col-lg-10 main-content p-4">
        <section class="row stats mb-4">
          <div class="col-md-4" v-for="stat in stats" :key="stat.title">
            <div class="card text-center stat-card mb-4">
              <div class="card-body">
                <font-awesome-icon :icon="stat.icon" class="stat-icon mb-2 font-size-10 text-white" />
                <h5 class="card-title">{{ stat.title }}</h5>
                <p class="card-text">{{ stat.value }}</p>
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
        { title: 'Cars Category', value: 5, icon: 'bus' },
        { title: 'Driver for car', value: 34, icon: 'user-tie' },
        { title: 'Passenger', value: 100, icon: 'user-tie' },
        { title: 'Partner', value: 20, icon: 'users' },
        { title: 'Booked', value: 200, icon: 'dollar-sign' },
         { title: 'Earning', value: '$800.00', icon: 'dollar-sign' },
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

.stat-card {
  background-color: rgb(12, 12, 46); 
  border: none;
  border-radius: 8px;       
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-5px); 
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
}

.stat-icon {
  color: white; 
  font-size: 2rem; 
}


.card-title {
  font-size: 1.25rem; 
  font-weight: 600;
  color: white; 
}

.card-text {
  font-size: 2rem; 
  font-weight: bold;
  color: orange;
  text-align: center;
}
</style>

