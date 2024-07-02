<template>
  <div class="p-5 bg-white" id="header-car">
    <h1 class="text-white">Car hire for any kind of trip</h1>
    
    <section class="search-bar">
      <input type="date" v-model="checkIn" />
      <input type="date" v-model="checkOut" />
      <input type="number" placeholder="2 adults" v-model="guests" />
      <button @click="searchCars">Search</button>
    </section>
  </div>
</template>


<script>
export default {

}
</script>

<style>
#header-car {
  background-image: url('https://cdn.pixabay.com/photo/2022/06/20/20/21/raining-7274548_1280.jpg');
  height: 400px;
  background-size: cover;
  background-position: center;
  backdrop-filter: grayscale(5%);
  
}

h1 {
  text-align: center;

}

.text-white{
  background: #00000084;
}

body {
  background-image: url('your-image-url.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh;
  margin: 0;
  font-family: Arial, sans-serif;
}

.search-bar {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  border-radius: 4px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.search-bar input,
.search-bar button {
  font-size: 16px;
  padding: 10px 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-right: 10px;
}

.search-bar input {
  flex-grow: 1;
  max-width: 200px;
}

.search-bar button {
  background-color: #007bff;
  color: #fff;
  border-color: #007bff;
  cursor: pointer;
  transition: background-color 0.3s, border-color 0.3s;
}

.search-bar button:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}
</style>