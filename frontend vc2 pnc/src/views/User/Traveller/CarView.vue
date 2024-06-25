<template>
    <div>
      <navbar></navbar>
      <div class="bg-light">
        <div class="bg-primary m-3 p-5" id="content">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dateFrom">Date From:</label>
                  <input type="date" class="form-control" id="dateFrom" v-model="dateFrom">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="dateTo">Date To:</label>
                  <input type="date" class="form-control" id="dateTo" v-model="dateTo">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="guest"></label>
                  <input type="text" class="form-control" id="guest" v-model="guest">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import Navbar from '@/Components/Traveler/navbarTraveler.vue';
  
  export default {
    name: 'place-traveler',
    components: {
      Navbar
    },
    data() {
      return {
        dateFrom: '',
        dateTo: ''
      };
    }
  };
  </script>
  
  <style>

  </style>
  