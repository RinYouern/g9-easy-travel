<template>
  <div id="app">
    <DashBoard />
  </div>
</template>
  
  <script>
import DashBoard from '@/Components/CarOwner/ListCars.vue'
export default {
  name: 'App',
  components: {
    DashBoard,
  }
}
</script>
  
  <style scoped>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0;
}
</style>