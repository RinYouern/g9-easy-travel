<template>
    <div>
      <!-- Dialog for editing place -->
      <el-dialog v-model="editDialogVisible" width="600px" :before-close="handleClose">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Place</h2>
        <el-form :model="editedPlace" :rules="formRules" ref="editForm" label-width="120px">
          <el-form-item prop="name">
            <el-input placeholder="Name" v-model="editedPlace.name" size="large" />
          </el-form-item>
          <el-form-item prop="description">
            <el-input placeholder="Description" v-model="editedPlace.description" size="large" />
          </el-form-item>
          <el-form-item prop="location">
            <el-input placeholder="Location" v-model="editedPlace.location" size="large" />
          </el-form-item>
          <el-form-item prop="image">
            <el-input placeholder="Image URL" v-model="editedPlace.image" size="large" type="url" />
          </el-form-item>
          <el-form-item>
            <div class="form-buttons">
              <el-button type="primary" @click="onEditSubmit">Save Changes</el-button>
              <el-button @click="editDialogVisible = false">Cancel</el-button>
            </div>
          </el-form-item>
        </el-form>
      </el-dialog>
  
      <!-- Display list of places -->
      <div v-if="places.length" class="row mt-4">
        <div v-for="place in places" :key="place.id" class="col-md-4 mb-4">
          <div class="card h-100">
            <img :src="place.image" class="card-img-top small-image" alt="Place Image">
            <div class="card-body">
              <h5 class="card-title">{{ place.name }}</h5>
              <p class="card-text">{{ place.description }}</p>
              <p class="card-text"><strong>Location:</strong> {{ place.location }}</p>
              <div class="d-flex gap-2">
                <button class="btn btn-sm btn-warning" @click="showEditDialog(place)">Edit</button>
                <button class="btn btn-sm btn-danger" @click="deletePlace(place.id)">Delete</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div v-else class="mt-4">
        <p>No places to display.</p>
      </div>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue'
  import { ElDialog, ElForm, ElFormItem, ElInput, ElButton } from 'element-plus'
  import { ElMessage } from 'element-plus'
  
  export default {
    props: {
      places: Array
    },
    components: {
      ElDialog,
      ElForm,
      ElFormItem,
      ElInput,
      ElButton
    },
    data() {
      return {
        editDialogVisible: false,
        editedPlace: {
          id: null,
          name: '',
          description: '',
          location: '',
          image: ''
        },
        formRules: {
          name: { required: true, message: 'Please input the name', trigger: 'blur' },
          description: { required: true, message: 'Please input the description', trigger: 'blur' },
          location: { required: true, message: 'Please input the location', trigger: 'blur' },
          image: { required: true, message: 'Please input the image URL', trigger: 'blur', type: 'url' }
        }
      }
    },
    methods: {
      showEditDialog(place) {
        this.editedPlace = { ...place }
        this.editDialogVisible = true
      },
      handleClose(done) {
        this.$confirm('Are you sure to close this dialog?')
          .then(() => {
            done()
          })
          .catch(() => {})
      },
      onEditSubmit() {
        this.$refs.editForm.validate((valid) => {
          if (valid) {
            const index = this.places.findIndex(place => place.id === this.editedPlace.id)
            this.$emit('edit', { index, place: this.editedPlace })
            this.editDialogVisible = false
            ElMessage.success('Place updated successfully')
          } else {
            ElMessage.error('Please fill in the form correctly')
            return false
          }
        })
      },
      deletePlace(id) {
        this.$emit('delete', id)
        ElMessage.success('Place deleted successfully')
      }
    }
  }
  </script>
  
  <style scoped>
  img.small-image {
    height: 200px;
    object-fit: cover;
    width: 100%;
  }
  
  .card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  .el-dialog {
    padding: 20px;
  }
  
  .el-form-item {
    margin-bottom: 20px;
  }
  
  .el-button {
    margin: 5px;
  }
  
  .el-dialog__header {
    display: flex;
    justify-content: center;
  }
  
  .el-dialog__footer {
    display: flex;
    justify-content: center;
  }
  
  .form-buttons {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
  }
  </style>
  