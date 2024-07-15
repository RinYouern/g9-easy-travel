<template>
    <nav class="navbar navbar-expand-sm bg-white navbar-light">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">
          <img src="/src/assets/image/logo2.png" alt="Logo" class="logo">
        </a>
        <div class="nav-links">
          <a href="/"><h1 class="nav-item btn">Home</h1></a>
          <a href="/place-traveler"><h1 class="nav-item btn">Place</h1></a>
          <a href="/car-traveler"><h1 class="nav-item btn">Car</h1></a>
          <a href="/hotel-traveler"><h1 class="nav-item btn">Hotel</h1></a>
          <a href="/ticket"><h1 class="nav-item btn">Tacket</h1></a>
        </div>
        <a class="navbar-brand" href="#">
          <img src="https://i.pinimg.com/474x/5f/40/6a/5f406ab25e8942cbe0da6485afd26b71.jpg" alt="Logo" class="profile-img">
        </a>
      </div>
    </nav>
  </template>
  
  <script>
  export default {};
  </script>
  
  <style scoped>
  .navbar {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 90px;
  }
  
  .logo {
    width: 90px;
    transition: transform 0.3s;
  }
  
  .logo:hover {
    transform: scale(1.1);
  }
  
  .nav-links {
    display: flex;
    gap: 30px;
  }
  
  .nav-item {
    font-size: 20px;
    color: #333;
    cursor: pointer;
    transition: color 0.3s, transform 0.3s;
  }
  
  .nav-item:hover {
    color: #007bff;
    transform: translateY(-5px);
  }
  
  .profile-img {
    width: 40px;
    border-radius: 50%;
    transition: transform 0.3s;
  }
  
  .profile-img:hover {
    transform: scale(1.1);
  }
  </style>
  