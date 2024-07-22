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
      <section>
        <h1 class="text-white fw-bold">
          Welcome to <strong class="text-warning">Easy Travel</strong>
        </h1>
        <h1 class="text-white" style="font-size: 20px;">Discover the best deals for your car rental adventures</h1>
      </section>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Header',
    data() {
      return {
        guests: ''
      }
    },
    methods: {
      searchCars() {
        console.log('Searching for:', this.guests);
      }
    }
  }
  </script>
  
  <style scoped>
  #header-car {
    height: 300px;
  }
  h1 {
    text-align: center;
  }
  span{
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
  