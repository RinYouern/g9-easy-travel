<template>
  <div id="app">
    <HeaderMenu/>
    <DashBoard />
  </div>
</template>

<script>
import DashBoard from '@/Components/CarOwner/DashBoard.vue';
import HeaderMenu from '@/Components/HeaderMenu.vue'
export default {
  name: 'App',
  components: {
    DashBoard,
    HeaderMenu,
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0;
}
</style>