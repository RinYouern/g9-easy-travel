<template>
  <div class="admin-aside bg-dark">
    <div class="aside-header"></div>
    <div class="aside-menu">
      <ul>
        <li>
          <a href="/">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/listuser">
            <i class="bi bi-people"></i>
            <span>Users</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-cart"></i>
            <span>Places</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-receipt"></i>
            <span>Orders</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-gear"></i>
            <span>Settings</span>
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
  background-color: #f5f5f5;
  border-right: 1px solid #e6e6e6;
  padding: 20px;
  height: 100vh;
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
  background-color: #e6e6e6;
  color: #333;
}

.aside-menu li a i {
  margin-right: 10px;
}

span {
  font-size: 18px;
  color: white;
}
</style>