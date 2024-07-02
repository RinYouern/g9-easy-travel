<template>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
  />
  <div>
    <body>
      <div class="sidebar">
        <div class="logo">
          <img src="/src/assets/image/logo.png" />
        </div>
        <ul>
          <a href="/hotelowner">
            <li class="d-flex text-dark">
              <span class="material-symbols-outlined mx-3">dashboard</span>Dashboard
            </li>
          </a>
          <a href="#">
            <li class="active d-flex">
              <span class="material-symbols-outlined mx-3 ">apartment</span>Rooms Management
            </li>
          </a>
          <a href="/customers_payment">
            <li class="d-flex text-dark">
              <span class="material-symbols-outlined mx-3">payments</span>Customers Payment
            </li>
          </a>
        </ul>
      </div>
      <div class="container">
        <h1 class="text-dark fw-bold">Rooms Management</h1>
        <div class="d-flex justify-content-between mt-3 mb-3">
          <select class="form-select w-25 p-2 shadow rounded" aria-label="Default select example">
            <option selected>All floors</option>
            <option value="1">First floor</option>
            <option value="2">Second floor</option>
            <option value="3">Third floor</option>
          </select>
          <button class="btn p-2 btn_add shadow rounded" @click="showModal = true">Add Room</button>
        </div>
        <table class="table shadow rounded">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">People</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
              <th scope="col">Active</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">2C</th>
              <td>3</td>
              <td>30$</td>
              <td class="text-danger">Not available</td>
              <td>
                <button class="btn btn-success p-2 mx-2">Edit</button>
                <button class="btn btn-danger p-2">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <FormAddRoomView v-if="showModal" @close="showModal = false" />
    </body>
  </div>
</template>

<script>
import FormAddRoomView from './form/FormAddRoomView.vue'

export default {
  components: {
    FormAddRoomView
  },
  data() {
    return {
      showModal: false
    }
  }
}
</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: Arial, sans-serif;
  display: flex;
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

.sidebar ul a li.active,
.sidebar ul li:hover {
  background: white;
  color: #178de7;
}
.sidebar ul a {
  text-decoration: none;
  color: #fff;
}
.container {
  width: 75%;
  margin-left: 25%;
  padding: 20px;
}
.table thead tr th {
  background-color: #a8c4ec;
}
.btn_add {
  background-color: #178de7;
  color: #fff;
}
</style>
