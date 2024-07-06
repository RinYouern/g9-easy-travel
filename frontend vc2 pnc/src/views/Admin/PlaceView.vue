<template>
  <div class="container">
    <h1 class="mt-4 text-dark">Manage Places</h1>
    <button type="button" class="btn btn-primary" @click="dialogTableVisible = true">
      Add New Place
    </button>

    <!-- Modal -->
    <el-dialog v-model="dialogTableVisible" width="600px" :before-close="handleClose">
      <h2 class="text-2xl font-bold mb-6 text-center">Add New Place</h2>
      <el-form :model="newPlace" :rules="formRules" ref="placeForm" label-width="120px">
        <el-form-item prop="name">
          <el-input placeholder="Name" v-model="newPlace.name" size="large" />
        </el-form-item>
        <el-form-item prop="description">
          <el-input placeholder="Description" v-model="newPlace.description" size="large" />
        </el-form-item>
        <el-form-item prop="location">
          <el-input placeholder="Location" v-model="newPlace.location" size="large" />
        </el-form-item>
        <el-form-item prop="image">
          <el-input placeholder="Image URL" v-model="newPlace.image" size="large" type="url" />
        </el-form-item>
        <el-form-item>
          <div class="form-buttons">
            <el-button type="primary" @click="onSubmit">Add Place</el-button>
            <el-button @click="dialogTableVisible = false">Cancel</el-button>
          </div>
        </el-form-item>
      </el-form>
    </el-dialog>

    <!-- List of Places -->
    <div v-if="places.length" class="row mt-4">
      <div v-for="place in places" :key="place.id" class="col-md-4 mb-4">
        <div class="card h-100">
          <img :src="place.image" class="card-img-top small-image" alt="Place Image">
          <div class="card-body">
            <h5 class="card-title">{{ place.name }}</h5>
            <p class="card-text">{{ place.description }}</p>
            <p class="card-text"><strong>Location:</strong> {{ place.location }}</p>
            <div class="d-flex gap-2">
              <button class="btn btn-sm btn-warning" @click="editPlace(place)">Edit</button>
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
import { ElMessageBox, ElMessage } from 'element-plus'

export default {
  data() {
    return {
      dialogTableVisible: false,
      newPlace: {
        id: null,
        name: '',
        description: '',
        location: '',
        image: ''
      },
      places: [
        {
          id: 1,
          name: 'Place 1',
          description: 'Description 1',
          location: 'Location 1',
          image: 'https://via.placeholder.com/200'
        },
        {
          id: 2,
          name: 'Place 2',
          description: 'Description 2',
          location: 'Location 2',
          image: 'https://via.placeholder.com/200'
        }
      ],
      formRules: {
        name: { required: true, message: 'Please input the name', trigger: 'blur' },
        description: { required: true, message: 'Please input the description', trigger: 'blur' },
        location: { required: true, message: 'Please input the location', trigger: 'blur' },
        image: { required: true, message: 'Please input the image URL', trigger: 'blur', type: 'url' }
      }
    }
  },
  methods: {
    handleClose(done) {
      ElMessageBox.confirm('Are you sure to close this dialog?')
        .then(() => {
          done()
        })
        .catch(() => {})
    },
    onSubmit() {
      this.$refs.placeForm.validate((valid) => {
        if (valid) {
          if (this.newPlace.id) {
            const index = this.places.findIndex(place => place.id === this.newPlace.id)
            this.places.splice(index, 1, { ...this.newPlace })
          } else {
            const newPlace = { ...this.newPlace, id: Date.now() }
            this.places.push(newPlace)
          }
          this.resetForm()
          this.dialogTableVisible = false
          ElMessage.success('Place added successfully')
        } else {
          ElMessage.error('Please fill in the form correctly')
          return false
        }
      })
    },
    editPlace(place) {
      this.newPlace = { ...place }
      this.dialogTableVisible = true
    },
    deletePlace(id) {
      this.places = this.places.filter(place => place.id !== id)
      ElMessage.success('Place deleted successfully')
    },
    resetForm() {
      this.newPlace = {
        id: null,
        name: '',
        description: '',
        location: '',
        image: ''
      }
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

.card-body {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
</style>

