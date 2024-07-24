<template>
  <div class="row">
    <div class="col-md-6 mb-4" v-for="car in store.cars.data" :key="car.id">
      <div class="card mb-1 shadow-sm">
        <div class="row g-0">
          <div class="col-md-6 d-flex justify-content-center">
            <img
              src="https://i.pinimg.com/474x/81/9d/8f/819d8f465bb42ce2f1023e00620d5259.jpg"
              alt="Car Image"
              class="img-fluid rounded-start"
            />
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <div class="row text-left">
                <p class="card-text">Color: <strong>{{ car.color }}</strong></p>
                <p class="card-text">Size: <strong>{{ car.size }}</strong></p>
                <p class="card-text">
                  Price: <strong class="text-danger">${{ car.price }}</strong>
                </p>
                <p class="card-text">Traveler Capacity: <strong>{{ car.traveler_capacity }}</strong></p>
              </div>
              <div class="justify-content-between mt-6">
                <button class="btn btn-primary mr-2" @click="showEditDialog(car)">Edit</button>
                <button class="btn btn-secondary" @click="showViewDialog(car)">View</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- View detail of car -->
    <el-dialog
      v-model="viewDialogVisible"
      title="Detail Information Summary"
      width="500"
      :before-close="handleClose"
    >
      <div class="view-dialog">
        <div class="profile-image">
          <img :src="viewForm.profile" alt="Car Image" />
        </div>
        <div class="driver-info">
          <p>Color: <strong>{{ viewForm.color }}</strong></p>
          <p>Size: <strong>{{ viewForm.size }}</strong></p>
          <p>Price: <strong class="text-danger">{{ viewForm.price }}</strong></p>
          <p>Traveler Capacity: <strong class="text-primary">{{ viewForm.traveler_capacity }}</strong></p>
        </div>
      </div>
    </el-dialog>

    <!-- Edit of car form -->
    <el-dialog
      v-model="editDialogVisible"
      title="Update Car Information"
      width="500"
      :before-close="handleClose"
    >
      <el-form :model="editForm" label-position="top" :rules="rules" ref="editFormRef">
        <el-form-item label="Color:" prop="color">
          <el-input v-model="editForm.color" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Size:" prop="size">
          <el-input v-model="editForm.size" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Price:" prop="price">
          <el-input v-model="editForm.price" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Traveler Capacity:" prop="traveler_capacity">
          <el-input v-model="editForm.traveler_capacity" autocomplete="off" />
        </el-form-item>
      </el-form>
      <template #footer>
        <div class="dialog-footer">
          <el-button type="danger" @click="handleClose">Cancel</el-button>
          <el-button type="primary" @click="updateCar">Save</el-button>
        </div>
      </template>
    </el-dialog>
  </div>
</template>

<script>
import sidebar from '@/Components/CarOwner/SideBar.vue'
import { listCarStore } from '@/stores/hevicle-list'
import axios from 'axios';

export default {
  name: 'CarList',
  components: {
    sidebar
  },
  data() {
    return {
      store: listCarStore(),
      editDialogVisible: false,
      viewDialogVisible: false,
      viewForm: {
        profile: '',
        color: '',
        size: '',
        price: '',
        traveler_capacity: ''
      },
      editForm: {
        color: '',
        size: '',
        price: '',
        traveler_capacity: ''
      }
    }
  },
  mounted() {
    this.fetchCars()
  },
  methods: {
    fetchCars() {
      this.store.fetchCars()
    },
    
    showEditDialog(car) {
      this.editForm = { ...car }
      this.editDialogVisible = true
    },
    showViewDialog(car) {
      this.viewForm = { ...car }
      this.viewDialogVisible = true
    },
    updateCar() {
      this.$refs.editFormRef.validate((valid)=>{
        if (valid) {
          axiosInstance
          .put(`http://127.0.0.1:8000/api/vehicles/${this.editForm.id}`,this.editForm)
         .then(()=> {
           
            this.fetchCars()
            this.editDialogVisible = false
              ElMessage({ type: 'success', message: 'Car updated successfully' })

          })
         .catch(error => {
            console.log(error);
            ElMessage({ type: 'error', message: 'Failed to update car' });
          });
        } 
      })
    }
    },
    handleClose() {
      
      this.viewDialogVisible = false;
      this.editDialogVisible = false;
    }
  }

</script>

<style scoped>
.row {
  margin: 0;
}

.card {
  width: auto;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s;
}

.card:hover {
  transform: scale(1.02);
}

.card-body {
  padding: 15px;
}

img {
  width: 100%;
  height: auto;
  margin-top: 20px;
}

.img-fluid {
  height: auto;
  max-height: 150px;
  object-fit: cover;
  border-radius: 8px;
}

.card-text {
  margin: 0.5rem 0;
  font-size: 14px;
  color: black;
}

.text-danger {
  color: red;
}

.text-primary {
  color: blue;
}
</style>