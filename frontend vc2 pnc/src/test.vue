<template>
    <div id="app">
      <header>
        <nav>
          <div class="profile-dropdown">
            <button class="profile-btn" @click="toggleDropdown">
              <img :src="profilePicture" alt="Profile Picture" class="profile-picture" />
              <span>{{ username }}</span>
              <i class="arrow" :class="{ 'down': !isOpen, 'up': isOpen }"></i>
            </button>
            <div class="dropdown-content" v-if="isOpen">
              <a href="#">My Profile</a>
              <a href="#">Settings</a>
              <a href="#">Logout</a>
            </div>
          </div>
        </nav>
      </header>
  
      <main>
        <h1>Welcome to the App</h1>
        <p>This is the main content area.</p>
      </main>
    </div>
  </template>
  
  <script>
  export default {
    name: 'App',
    data() {
      return {
        username: 'John Doe',
        profilePicture: 'https://via.placeholder.com/50',
        isOpen: false
      }
    },
    methods: {
      toggleDropdown() {
        this.isOpen = !this.isOpen
      }
    }
  }
  </script>
  
  <style>
  #app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
  
  header {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
  }
  
  nav {
    display: flex;
    justify-content: flex-end;
  }
  
  .profile-dropdown {
    position: relative;
    display: inline-block;
  }
  
  .profile-btn {
    background-color: transparent;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
  }
  
  .profile-picture {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
  }
  
  .dropdown-content {
    display: block;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    right: 0;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .arrow {
    border: solid white;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
  }
  
  .down {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
  }
  
  .up {
    transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
  }
  </style>