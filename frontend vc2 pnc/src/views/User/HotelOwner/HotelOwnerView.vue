<template>
  <div>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="logo">
                <img src="/src/assets/image/logo.png"> 
            </div>
            <ul>
                <a href="#">
                  <li class="active d-flex"><span class="material-symbols-outlined mr-4">dashboard</span>Dashboard</li>
                </a>
                <a href="/room_managemant">
                  <li class="d-flex"><span class="material-symbols-outlined mr-4">apartment</span>Rooms Management</li>
                </a>
                <a href="/customers_payment">
                  <li class="d-flex">
                    <span class="material-symbols-outlined mr-4">payments</span>Customers Payment
                  </li>
                </a>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <h1 class="text-dark">Hotel Dashboard</h1>
                <div class="profile d-flex gap-3">
                    <span class="material-symbols-outlined text-primary pt-2">notifications</span>
                    <img src="\src\assets\image\frog.jpg" alt="Profile Icon">
                </div>
            </div>
            <div class="welcome d-flex justify-content-around shadow rounded">
              <div class="d-flex flex-column">
                <h2 class="text-dark">Welcome Guy!</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
              </div>
              <div>
                <img src="\src\assets\image\hotel_icon.png" class="hotel_icon">
              </div>
            </div>
            <div class="stats">
                <div class="stat shadow rounded">
                    <span class="material-symbols-outlined">monitoring</span>
                    <h3 class="text-dark">$ 800.00</h3>
                    <p>Total Income</p>
                </div>
                <div class="stat shadow rounded">
                    <span class="material-symbols-outlined">home_work</span>
                    <h3 class="text-dark">20</h3>
                    <p>Total Rooms</p>
                </div>
                <div class="stat shadow rounded">
                    <span class="material-symbols-outlined">location_home</span>
                    <h3 class="text-dark">16</h3>
                    <p>Room not available</p>
                </div>
            </div>
            <div class="list_customer">
              <h2 class="text-dark">List Customers</h2>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Room</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Date of stay</th>
                    <th scope="col">Date of departure</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Chhinkeo</td>
                    <td>2C</td>
                    <td>+855 96 840 4018</td>
                    <td>6-24-2024</td>
                    <td>6-26-2024</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Puthireach</td>
                    <td>2C</td>
                    <td>+855 96 840 4018</td>
                    <td>6-24-2024</td>
                    <td>6-26-2024</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mengkorng</td>
                    <td>2C</td>
                    <td>+855 96 840 4018</td>
                    <td>6-24-2024</td>
                    <td>6-26-2024</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</body>
  </div>
</template>

<script>
export default {
}
</script >

<style scoped>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #ffffff;
    margin-left: 25%;
}

.dashboard {
    background: #ffffff;
    display: flex;
    height: 100vh;
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 25%;
    background: #a8c4ec;
    color: #fff;
    padding: 20px 0;
}

.sidebar .logo {
    width: 50px;
    padding-left: 30%;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px;
    cursor: pointer;
    font-size: 20px;
}

.sidebar ul a li.active, .sidebar ul li:hover {
    background: white;
    color: #178DE7;

}
.sidebar ul a {
  text-decoration: none;
  color: #fff;
}

.main-content {
    margin-left: 25%;
    flex-grow: 1;
    padding: 20px;
    background: #fff;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.header h1 {
    margin: 0;
}

.header .profile img {
    width: 40px;
    border-radius: 50%;
}

.welcome {
    background: #a8c4ec;
    padding: 20px;
    border-radius: 20px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
}

.welcome h2 {
    margin: 0 10px 0 0;
}

.welcome p {
    margin: 0;
    color: #555;
}

.stats {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.stat {
    background: #e0f7fa;
    padding: 20px;
    flex-grow: 1;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.stat img {
    width: 50px;
    margin-bottom: 10px;
}

.stat h3 {
    margin: 10px 0 0 0;
}

.stat p {
    margin: 5px 0 0 0;
    color: #555;
}
.stat span {
  font-size: 70px;
  color: #178DE7; 
}
.hotel_icon{
  margin-top: -80px;
  width: 250px;
  height: 200px;
}
.list_customer{
    border-radius: 20px;
    margin-bottom: 20px;
}
.table thead tr th{
  background-color:  #a8c4ec;
}
</style>