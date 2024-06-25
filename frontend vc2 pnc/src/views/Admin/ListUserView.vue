<template>
  <el-tabs v-model="activeName" type="card" class="demo-tabs" @tab-click="handleClick">
    <el-tab-pane label="Users" name="first">
      <div>
        <el-table :data="users" style="width: 100%;">
          <el-table-column label="Picture and Image" align="center">
            <template #default="{ row }">
              <img :src="row.profile" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
            </template>
          </el-table-column>
          <el-table-column prop="name" label="Name" align="center"></el-table-column>
          <el-table-column prop="email" label="Email" align="center"></el-table-column>
          <el-table-column prop="password" label="Password" align="center"></el-table-column>
          <el-table-column label="Action" align="center">
            <template #default="{ row }">
              <el-button type="primary" size="small" @click="editUser(row)">Edit</el-button>
              <el-button type="danger" size="small" @click="deleteUser(row)">Delete</el-button>
            </template>
          </el-table-column>
        </el-table>
      </div>
    </el-tab-pane>

    <el-tab-pane label="Traveler" name="second">
      <div>
        <el-table :data="travelers" style="width: 100%;">
          <el-table-column label="Picture and Image" align="center">
            <template #default="{ row }">
              <img :src="row.profile" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
            </template>
          </el-table-column>
          <el-table-column prop="name" label="Name" align="center"></el-table-column>
          <el-table-column prop="email" label="Email" align="center"></el-table-column>
          <el-table-column prop="password" label="Password" align="center"></el-table-column>
          <el-table-column label="Action" align="center">
            <template #default="{ row }">
              <el-button type="primary" size="small" @click="editTraveler(row)">Edit</el-button>
              <el-button type="danger" size="small" @click="deleteTraveler(row)">Delete</el-button>
            </template>
          </el-table-column>
        </el-table>
      </div>
    </el-tab-pane>

    <el-tab-pane label="Companies Car" name="third">
      <div>
        <el-table :data="companiesCar" style="width: 100%;">
          <el-table-column label="Picture and Image" align="center">
            <template #default="{ row }">
              <img :src="row.profile" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
            </template>
          </el-table-column>
          <el-table-column prop="name" label="Name" align="center"></el-table-column>
          <el-table-column prop="email" label="Email" align="center"></el-table-column>
          <el-table-column prop="password" label="Password" align="center"></el-table-column>
          <el-table-column label="Action" align="center">
            <template #default="{ row }">
              <el-button type="primary" size="small" @click="editCompanyCar(row)">Edit</el-button>
              <el-button type="danger" size="small" @click="deleteCompanyCar(row)">Delete</el-button>
            </template>
          </el-table-column>
        </el-table>
      </div>
    </el-tab-pane>

    <el-tab-pane label="Hotels" name="fourth">
      <div>
        <el-table :data="hotels" style="width: 100%;">
          <el-table-column label="Picture and Image" align="center">
            <template #default="{ row }">
              <img :src="row.profile" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
            </template>
          </el-table-column>
          <el-table-column prop="name" label="Name" align="center"></el-table-column>
          <el-table-column prop="email" label="Email" align="center"></el-table-column>
          <el-table-column prop="password" label="Password" align="center"></el-table-column>
          <el-table-column label="Action" align="center">
            <template #default="{ row }">
              <el-button type="primary" size="small" @click="editHotel(row)">Edit</el-button>
              <el-button type="danger" size="small" @click="deleteHotel(row)">Delete</el-button>
            </template>
          </el-table-column>
        </el-table>
      </div>
    </el-tab-pane>
  </el-tabs>
</template>

<script>
export default {
  data() {
    return {
      activeName: 'first',
      users: [],
      travelers: [],
      companiesCar: [],
      hotels: []
    };
  },
  methods: {

  },
  created() {
  this.fetchUserData();
  this.fetchTravelerData();
  this.fetchCompanyCarData();
  this.fetchHotelData();
},

methods: {
  async fetchUserData() {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/users/all');
      const data = await response.json();
      this.users = data.data;
    } catch (error) {
      console.error('Error fetching user data:', error);
    }
  },

  async fetchTravelerData() {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/users/role/traveler');
      const data = await response.json();
      this.travelers = data.data;
    } catch (error) {
      console.error('Error fetching traveler data:', error);
    }
  },

  async fetchCompanyCarData() {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/users/role/carOwner');
      const data = await response.json();
      this.companiesCar = data.data;
    } catch (error) {
      console.error('Error fetching company car data:', error);
    }
  },

  async fetchHotelData() {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/users/role/hotelOwner');
      const data = await response.json();
      this.hotels = data.data;
    } catch (error) {
      console.error('Error fetching hotel data:', error);
    }
  }
}
};
</script>