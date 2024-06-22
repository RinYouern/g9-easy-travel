<template>
  <el-tabs
    v-model="activeName"
    type="card"
    class="demo-tabs"
    @tab-click="handleClick"
  >
    <el-tab-pane label="Users" name="first">
      <div>
        <el-table :data="userData" style="width: 100%;">
          <el-table-column label="Picture and Image" align="center">
            <template #default="{ row }">
              <img :src="row.picture" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
            </template>
          </el-table-column>
          <el-table-column prop="name" label="Name" align="center"></el-table-column>
          <el-table-column prop="email" label="Email" align="center"></el-table-column>
          <el-table-column prop="password" label="Password" align="center"></el-table-column>
          <el-table-column label="Action" align="center">
            <template #default="scope">
              <el-button type="primary" size="small">Edit</el-button>
              <el-button type="danger" size="small">Delete</el-button>
            </template>
          </el-table-column>
        </el-table>
      </div>
    </el-tab-pane>
    
    <el-tab-pane label="Traveler" name="second">
      <div>
        <el-table :data="travelerData" style="width: 100%">
          <el-table-column label="Picture and Image" align="center">
            <template #default="{ row }">
              <img :src="row.picture" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
            </template>
          </el-table-column>
          <el-table-column prop="name" label="Name" align="center"></el-table-column>
          <el-table-column prop="email" label="Email" align="center"></el-table-column>
          <el-table-column prop="password" label="Password" align="center"></el-table-column>
          <el-table-column label="Action" align="center">
            <template #default="scope">
              <el-button type="primary" size="small">Edit</el-button>
              <el-button type="danger" size="small">Delete</el-button>
            </template>
          </el-table-column>
        </el-table>
      </div>
    </el-tab-pane>
    
    <el-tab-pane label="Companies Car" name="third">
      <div>
        <el-table :data="companiesCarData" style="width: 100%">
          <el-table-column label="Picture" align="center">
            <template #default="{ row }">
              <img :src="row.picture" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
            </template>
          </el-table-column>
          <el-table-column prop="name" label="Name" align="center"></el-table-column>
          <el-table-column prop="email" label="Email" align="center"></el-table-column>
          <el-table-column prop="password" label="Password" align="center"></el-table-column>
          <el-table-column label="Action" align="center">
            <template #default="scope">
              <el-button type="primary" size="small">Edit</el-button>
              <el-button type="danger" size="small">Delete</el-button>
            </template>
          </el-table-column>
        </el-table>
      </div>
    </el-tab-pane>
    
    <el-tab-pane label="Hotels" name="fourth">
      <div>
        <el-table :data="hotelsData" style="width: 100%">
          <el-table-column label="Picture" align="center">
            <template #default="{ row }">
              <img :src="row.picture" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
            </template>
          </el-table-column>
          <el-table-column prop="name" label="Name" align="center"></el-table-column>
          <el-table-column prop="email" label="Email" align="center"></el-table-column>
          <el-table-column prop="password" label="Password" align="center"></el-table-column>
          <el-table-column label="Action" align="center">
            <template #default="scope">
              <el-button type="primary" size="small">Edit</el-button>
              <el-button type="danger" size="small">Delete</el-button>
            </template>
          </el-table-column>
        </el-table>
      </div>
    </el-tab-pane>
    
  </el-tabs>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { TabsPaneContext } from 'element-plus';

const activeName = ref('first');

const handleClick = (tab: TabsPaneContext, event: Event) => {
  console.log(tab, event);
};

// Sample data for each tab
const userData = [
  { picture: 'https://i.pinimg.com/474x/60/07/0e/60070ed889df308cbe80253e8c36b3a3.jpg', email: 'user1@example.com', password: 'password1', name: 'User 1' },
  { picture: 'https://i.pinimg.com/474x/60/07/0e/60070ed889df308cbe80253e8c36b3a3.jpg', email: 'user2@example.com', password: 'password2', name: 'User 2' },
  // Add more user data as needed
];

const travelerData = [
  { picture: 'https://i.pinimg.com/474x/60/07/0e/60070ed889df308cbe80253e8c36b3a3.jpg', email: 'traveler1@example.com', password: 'password1', name: 'Traveler 1' },
  { picture: 'https://i.pinimg.com/474x/60/07/0e/60070ed889df308cbe80253e8c36b3a3.jpg', email: 'traveler2@example.com', password: 'password2', name: 'Traveler 2' },
  // Add more traveler data as needed
];

const companiesCarData = [
  { picture: 'https://i.pinimg.com/474x/60/07/0e/60070ed889df308cbe80253e8c36b3a3.jpg', email: 'company1@example.com', password: 'password1', name: 'Company 1' },
  { picture: 'https://i.pinimg.com/474x/60/07/0e/60070ed889df308cbe80253e8c36b3a3.jpg', email: 'company2@example.com', password: 'password2', name: 'Company 2' },
  // Add more companies car data as needed
];

const hotelsData = [
  { picture: 'https://i.pinimg.com/474x/60/07/0e/60070ed889df308cbe80253e8c36b3a3.jpg', email: 'hotel1@example.com', password: 'password1', name: 'Hotel 1' },
  { picture: 'https://i.pinimg.com/474x/60/07/0e/60070ed889df308cbe80253e8c36b3a3.jpg', email: 'hotel2@example.com', password: 'password2', name: 'Hotel 2' },
  // Add more hotels data as needed
];
</script>

<style scoped>
.demo-tabs > .el-tabs__content {
  padding: 20px;
  color: #6b778c;
  font-size: 16px;
}

</style>
