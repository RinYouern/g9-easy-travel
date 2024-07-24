<template>
  <div class="container-fluid dashboard" >
    <div class="row">
      <sidebar />
      <main class="col-md-9 col-lg-10 main-content p-4" >
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h4 class="text-left text-black font-weight-bold" style="font-size:40px">Driver list</h4>
          <button class="btn btn-primary" @click="showAddDialog()">+Add driver</button>
        </div>
        <div class="align-items-center justify-content-between mb-3">
          <div class="table-responsive">
            <table class="table table-hover text-center">
              <thead class="table-dark">
                <tr>
                  <th>Name</th>
                  <th>Phone Number</th>
                   <th>Email</th>
                  <th>Province</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="driver in drivers" :key="driver.id">
                  <td>{{ driver.name }}</td>
                  <td>{{ driver.phone }}</td>
                   <td>{{ driver.email }}</td>
                  <td>{{ driver.province }}</td>
                 
                  <td>
                    <button class="btn btn-primary mr-2" @click="showEditDialog(driver)">
                      <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn btn-primary mr-2" @click="showViewDialog(driver)">
                      <i class="bi bi-eye"></i>
                    </button>
                    <button class="btn btn-danger" @click="showDeleteAlert(driver.name, driver.id)">
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

    <!-- Add driver form -->
    <el-dialog
      v-model="addDialogVisible"
      title="Add Driver"
      width="500"
      :before-close="handleClose"
    >
      <hr />
      <el-form :model="addForm" label-position="top" :rules="rules" ref="addFormRef">
        <el-form-item label="Name:" prop="name">
          <el-input v-model="addForm.name" type="text" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Phone:" prop="phone">
          <el-input v-model="addForm.phone" type="number" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Email:" prop="email">
          <el-input v-model="addForm.email" type="text" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Password:" prop="password">
          <el-input v-model="addForm.password" type="password" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Province:" prop="province">
          <el-input v-model="addForm.province" type="province" autocomplete="off" />
        </el-form-item>
        
      </el-form>
      <template #footer>
        <div class="dialog-footer">
          <el-button type="danger" @click="handleClose">Cancel</el-button>
          <el-button type="primary" @click="addDriver">Add</el-button>
        </div>
      </template>
    </el-dialog>

    <!-- Edit driver form -->
    <el-dialog
      v-model="editDialogVisible"
      title="Update Driver Information"
      width="500"
      :before-close="handleClose"
    >
      <hr />
      <el-form :model="editForm" label-position="top" :rules="rules" ref="editFormRef">
        <el-form-item label="Name:" prop="name">
          <el-input v-model="editForm.name" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Phone Number:" prop="phone">
          <el-input v-model="editForm.phone" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Email:" prop="email">
          <el-input v-model="editForm.email" autocomplete="off" />
        </el-form-item>
        <el-form-item label="Province:" prop="province">
          <el-input v-model="editForm.province" autocomplete="off" />
        </el-form-item>
      </el-form>
      <template #footer>
        <div class="dialog-footer">
          <el-button type="danger" @click="handleClose">Cancel</el-button>
          <el-button type="primary" @click="updateDriver">Save</el-button>
        </div>
      </template>
    </el-dialog>

    <!-- View detail of driver form -->
    <el-dialog
      v-model="viewDialogVisible"
      title="Driver Information Summary"
      width="500"
      :before-close="handleClose"
    >
      <div class="view-dialog">
        <div class="profile-image">
          <img :src="viewForm.profile" alt="Driver Profile Image" />
        </div>
        <hr>
        <div class="driver-info">
          <p><strong>Name:</strong> {{ viewForm.name }}</p>
          <p><strong>Phone Number:</strong> {{ viewForm.phone }}</p>
          <p><strong>Email:</strong> {{ viewForm.email }}</p>
          <p><strong>Province:</strong> {{ viewForm.province }}</p>
          
        </div>
      </div>
    </el-dialog>
  </div>
</template>

<script>
import sidebar from '@/Components/CarOwner/SideBar.vue'
import 'bootstrap-icons/font/bootstrap-icons.css'
import axiosInstance from '@/plugins/axios'
import { ElMessage, ElMessageBox } from 'element-plus'
import { ref, reactive } from 'vue'

export default {
  name: 'ListDrivers',
  components: {
    sidebar
  },
  data() {
    return {
      drivers: [],
      editDialogVisible: false,
      viewDialogVisible: false,
      addDialogVisible: false,
      addForm: {
        name: '',
        phone: '',
        province: '',
        email: '',
        password: ''
      },
      editForm: {
        name: '',
        phone: '',
        province: '',
        email: ''
      },
      viewForm: {
        name: '',
        phone: '',
        province: '',
        email: '',
        profile: ''
      },
      rules: {
        name: [{ required: true, message: 'Please input driver name', trigger: 'blur' }],
        phone: [{ required: true, message: 'Please input phone number', trigger: 'blur' }],
        province: [{ required: true, message: 'Please input province', trigger: 'blur' }],
        email: [{ required: true, message: 'Please input email', trigger: 'blur' }]
      }
    }
  },
  created() {
    this.fetchDriver()
  },
  methods: {
    fetchDriver() {
      axiosInstance
        .get('http://127.0.0.1:8000/api/drivers/driver')
        .then((response) => {
          this.drivers = response.data.data
        })
        .catch((error) => {
          console.log(error)
        })
    },
    showAddDialog() {
      this.addForm = { name: '', phone: '', province: '', email: '',password:'' }
      this.addDialogVisible = true
    },
    addDriver() {
      this.$refs.addFormRef.validate((valid) => {
        if (valid) {
          axiosInstance
            .post('http://127.0.0.1:8000/api/add-driver', this.addForm)
            .then(() => {
              this.fetchDriver()
              this.addDialogVisible = false
              ElMessage({ type: 'success', message: 'Driver added successfully' })
            })
            .catch((error) => {
              console.error(error)
              ElMessage.error('Failed to add driver')
            })
        }
      })
    },
    showEditDialog(driver) {
      this.editForm = { ...driver }
      this.editDialogVisible = true
    },
    showViewDialog(driver) {
      this.viewForm = { ...driver }
      this.viewDialogVisible = true
    },
    updateDriver() {
      this.$refs.editFormRef.validate((valid) => {
        if (valid) {
          axiosInstance
            .put(`http://127.0.0.1:8000/api/users/${this.editForm.id}`, this.editForm)
            .then(() => {
              this.fetchDriver()
              this.editDialogVisible = false
              ElMessage({ type: 'success', message: 'Driver updated successfully' })
            })
            .catch((error) => {
              console.error(error)
              ElMessage.error('Failed to update driver')
            })
        }
      })
    },
    handleClose() {
      this.addDialogVisible = false
      this.editDialogVisible = false
      this.viewDialogVisible = false
    },
showDeleteAlert(driverName, driverId) {
  ElMessageBox.confirm(
    `Are you sure you want to delete driver:" ${driverName}"?`,
    'Delete Driver',
    {
      confirmButtonText: 'Delete',
      cancelButtonText: 'Cancel',
      type: 'warning'
    }
  )
    .then(async () => {
      try {
         const response = await axiosInstance.delete(`http://127.0.0.1:8000/api/user/${driverId}`);

        if (response.status === 200) {
            this.fetchDriver();
            ElMessage({ type: 'success', message: `Driver: ${driverName} deleted successfully` });
          } else {
          throw new Error('Failed to delete driver');
        }
      } catch (error) {
        console.error(error);
        ElMessage({ type: 'error', message: 'Failed to delete driver' });
      }
    })
    .catch(() => {
      ElMessage({ type: 'error', message: 'Delete canceled' });
    });
}
  }
}
</script>

<style scoped>

h2 {
  text-align: start;
}

.el-form {
  text-align: left;
}

.el-form-item {
  margin-bottom: 20px;
}

.el-input {
  width: 100%;
}
.view-dialog {
  align-items: center;
  justify-content: center;
  
}

.profile-image {
  margin-right: 20px;
}
hr {
  border: 1px solid black;
}

.profile-image img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
</style>
