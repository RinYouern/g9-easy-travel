<template>
    <div class="container-fluid dashboard">
      <div class="row">
        <sidebar />
        <main class="col-md-9 col-lg-10 main-content p-4">
          <div class="align-items-center justify-content-between mb-3">
            <h2>List Drivers</h2>
            <div class="table-responsive">
              <table class="table table-hover text-center">
                <thead class="table-dark">
                  <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Province</th>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="driver in drivers" :key="driver.id">
                    <td>{{ driver.name }}</td>
                    <td>{{ driver.phoneNumber }}</td>
                    <td>{{ driver.province }}</td>
                    <td>{{ driver.company }}</td>
                    <td>{{ driver.contact }}</td>
                    <td>
                      <button class="btn btn-outline-primary mr-2">
                        <i class="bi bi-pencil-square"></i>
                      </button>
                      <button class="btn btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <vehicles />
        </main>
      </div>
    </div>
  </template>
  
  <script>
  import sidebar from '@/Components/CarOwner/SideBar.vue'
  import 'bootstrap-icons/font/bootstrap-icons.css'
  
  export default {
    name: 'AddVehicleDialog',
    components: {
      sidebar
    },
    data() {
      return {
        drivers: [
          {
            name: 'John Doe',
            phoneNumber: '555-1234',
            province: 'Ontario',
            company: 'ABC Logistics',
            contact: 'Jane Smith'
          },
          {
            name: 'Jane Doe',
            phoneNumber: '555-5678',
            province: 'Quebec',
            company: 'XYZ Transport',
            contact: 'Bob Johnson'
          },
          {
            name: 'Bob Smith',
            phoneNumber: '555-9012',
            province: 'British Columbia',
            company: 'Acme Delivery',
            contact: 'Alice Lee'
          }
        ]
      }
    }
  }
  </script>
  
  <style scoped>
  h2 {
    text-align: start;
  }
  </style>