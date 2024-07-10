
<template>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
  />
  <body>
    <div class="sidebar">
      <div class="logo">
        <img src="/src/assets/image/logo2.png" />
      </div>
      <ul>
        <a href="/hotelowner">
          <li class="d-flex">
            <span class="material-symbols-outlined mx-3">dashboard</span>Dashboard
          </li>
        </a>
        <a href="/room_managemant">
          <li class="d-flex">
            <span class="material-symbols-outlined mx-3">apartment</span>Rooms Management
          </li>
        </a>
        <a href="/customers_payment">
          <li class="d-flex">
            <span class="material-symbols-outlined mx-3">payments</span>Customers Payment
          </li>
        </a>
        <a href="/top-hotel">
          <li class="active d-flex">
            <span class="material-symbols-outlined mx-3">hotel</span>Top Hotels
          </li>
        </a>
      </ul>
    </div>
    <div class="container">
      <h2 class="my-3">TOP HOTELS</h2>
      <div class="group-card">
        <div class="card" style="width: 18rem">
          <img
            src="https://z.cdrst.com/foto/hotel-sf/54bab/granderesp/moonlight-resort-general-7c5a392.jpg"
              alt="Hotel 1"
          />
          <div class="card-body p-3">
            <h5 class="card-title">Card title</h5>
            <p class="hotel-location card-text">KR 12,000</p>
              <p class="hotel-rating card-text">4.6 <i class="fa fa-star"></i>(51)</p>
              <p class="hotel-description card-text">Koh Rong Samleom</p>
              <a href="#" class="btn btn-primary p-2">See availability</a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img
             src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2017/07/23/1312/Park-Hyatt-Siem-Reap-P143-Park-View-King.jpg/Park-Hyatt-Siem-Reap-P143-Park-View-King.16x9.jpg?imwidth=1920"
              alt="Hotel 2"
          />
          <div class="card-body p-3">
            <h5 class="hotel-name card-title">Park Hyatt Siem Reap</h5>
            <p class="hotel-location card-text">KHR 84,399</p>
              <p class="hotel-rating card-text">4.5 <i class="fa fa-star"></i>(70)</p>
              <p class="hotel-description card-text">Siem Reap, Cambodia</p>
            <a href="#" class="btn btn-primary p-2">See availability</a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img
            src="https://cache.marriott.com/content/dam/marriott-renditions/PNHCY/pnhcy-guestroom-2884-hor-wide.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=1336px:*"
              alt="Hotel 3"
          />
          <div class="card-body p-3">
            <h5 class="card-title">Card title</h5>
            <p class="hotel-location card-text">KHR 592,012</p>
              <p class="hotel-rating card-text">4.4 <i class="fa fa-star"></i>(614)</p>
              <p class="hotel-description card-text">Phnom Penh, Cambodia</p>
            <a href="#" class="btn btn-primary p-2">See availability</a>
          </div>
        </div>
        <div class="card" style="width: 18rem">
          <img
             src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/420254973.jpg?k=ef0ddf81a60bdcb7e09a8d7d82ccb8a4af8a45f95abee35bf48c32d2c0c6b1a0&o=&hp=1"
              alt="Hotel 4"
          />
          <div class="card-body p-3">
            <h5 class="card-title">Card title</h5>
            <p class="hotel-location card-text">KHR 357,320</p>
              <p class="hotel-rating card-text">4.5 <i class="fa fa-star"></i>(272)</p>
              <p class="hotel-description card-text">Phnom Penh, Cambodia</p>

              <a href="#" class="btn btn-primary p-2">See availability</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</template>
  
  <script>
export default {}
</script>
  
<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  display: flex;
}

.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 25%;
  background: #2b3136;
  color: #fff;
  padding: 20px 0;
}

.sidebar .logo img {
  display: block;
  margin: 0 auto;
  width: 80px;
  height: 80px;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar ul li {
  padding: 15px;
  cursor: pointer;
  font-size: 18px;
  display: flex;
  align-items: center;
}

.sidebar ul a {
  text-decoration: none;
  color: white;
}

.sidebar ul a li.active,
.sidebar ul li:hover {
  background: white;
  color: #178de7;
}
.container {
  margin-left: 27%;
  padding-right: 20px;
  width: 73%;
}
.group-card {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 25px;
}

.material-symbols-outlined {
  font-size: 24px;
}

.page-title {
  margin-bottom: 20px;
  font-size: 24px;
  color: #333;
  text-align: center;
}

.col-md-4 {
  flex: 0 0 30%;
  margin-bottom: 20px;
  display: flex;
  justify-content: center;
}

.hotel-card {
  width: 100%;
  border: 1px solid #e0e0e0;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3;
}
</style>
