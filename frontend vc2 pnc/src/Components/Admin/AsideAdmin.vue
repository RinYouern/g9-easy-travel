<template>
  <link
    rel="stylesheet"
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"
  />

  <div class="admin-aside">
    <div class="aside-header">
      <img src="@/assets/image/logo2.png" alt="Logo" style="width: 100px;" />
    </div>
    <div class="aside-menu">
      <ul>
        <li>
          <a href="/">
            <i class="fas fa-th-large"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/listuser">
            <i class="fas fa-user"></i>
            <span>Users</span>
          </a>
        </li>
        <li>
          <a href="/placemanagement">
            <i class="fas fa-map-marker-alt"></i>
            <span>Places</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-question"></i>
            <span>Help</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-cog"></i>
            <span>Setting</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-sign-out"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AdminAside',
  methods: {
    navigateTo(path) {
      this.$router.push(path)
    }
  }
}
</script>
<style scoped>
.admin-aside {
  background-color: black;
  border-right: 1px solid #e6e6e6;
  padding: 20px;
  height: 100vh;
  width: 220px;
}

.aside-header {
  margin-bottom: 20px;
}

.aside-menu ul {
  list-style-type: none;
  padding: 0;
}

.aside-menu li a {
  display: flex;
  align-items: center;
  color: white;
  text-decoration: none;
  padding: 10px;
  transition: background-color 0.3s ease;
}

.aside-menu li a:hover {
  background-color: #fff;
  color: black;
}

/* .aside-menu li a i {
  margin-right: 10px;
} */
i {
  min-width: 60px;
  font-size: 24px;
  text-align: center;
}

span {
  font-size: 18px;
  color: white;
}
span:hover {
  color: black;
}
</style>

admin
