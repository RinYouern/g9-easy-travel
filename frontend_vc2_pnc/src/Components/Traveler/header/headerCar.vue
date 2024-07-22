<template>
    <div class="pr-5 pl-5 bg-primary" id="header-car">
      <section class="d-flex">
        <div class="m2">
          <img src="/src/assets/image/logo2.png" style="width: 80px" alt="Logo" />
        </div>
        <nav class="navbar">
          <ul class="navbar-menu">
            <li class="navbar-item">
              <a href="/" class="navbar-link">Home</a>
            </li>
            <li class="navbar-item">
              <a href="/place-traveler" class="navbar-link">Attractions & Tours</a>
            </li>
            <li class="navbar-item">
              <a href="/car-traveler" class="navbar-link">Cars</a>
            </li>
            <li class="navbar-item">
              <a href="/hotel-traveler" class="navbar-link">Hotels</a>
            </li>
          </ul>
        </nav>
      </section>
      <section class="search-bar bg-white" style="width: 70%">
        <input type="text" v-model="province" placeholder="Find the hotel of province" />
        <input type="date" v-model="checkIn" />
        <input type="date" v-model="checkOut" />
        <input type="number" placeholder="2 adults" v-model="guests" />
        <button @click="searchCars">Search</button>
      </section>
    </div>
  </template>
    
    <script>
  export default {
    name: 'Header',
    data() {
      return {
        guests: '',
        province: '',
        checkIn: '',
        checkOut: ''
      }
    },
    methods: {
        searchCars() {
        const checkInDate = new Date(this.checkIn)
        const checkOutDate = new Date(this.checkOut)
        const timeDifference = checkOutDate - checkInDate
        const nights = timeDifference / (1000 * 3600 * 24)
        console.log(
          `Search for hotels in ${this.province} between ${this.checkIn} and ${this.checkOut} with ${this.guests} guests for ${nights} nights.`
        )
        this.$emit('search-cars', {
          province: this.province,
          checkIn: this.checkIn,
          checkOut: this.checkOut,
          guests: this.guests,
          nights: nights
        })
      }
    }
  }
  </script>
    
    
    <style scoped>
  #header-car {
    height: 200px;
  }
  h1 {
    text-align: center;
  }
  span {
    text-align: center;
  }
  
  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }
  
  .navbar {
    padding: 10px 20px;
  }
  
  .navbar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
  }
  
  .navbar-item {
    margin: 0 5px;
  }
  
  .navbar-link {
    text-decoration: none;
    color: #ffffff;
    font-weight: 500;
    transition: color 0.3s, transform 0.3s;
    padding: 5px 10px;
    border-radius: 5px;
    display: inline-block;
  }
  
  .navbar-link:hover {
    color: #f8c145;
    background-color: rgba(255, 255, 255, 0.1);
    transform: scale(1.1);
  }
  .search-bar {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 10px;
    border-radius: 4px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  .search-bar input,
  .search-bar button {
    font-size: 16px;
    padding: 5px 10px;
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
  @media (max-width: 768px) {
    .navbar-menu {
      flex-direction: column;
      align-items: center;
    }
  
    .navbar-item {
      margin: 10px 0;
    }
  }
  </style>
    