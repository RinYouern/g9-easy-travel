<template>
    <div>
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
          <el-form-item >
            <el-upload
              class="upload-demo"
              action="http://your-laravel-api-url/api/upload-images"
              :multiple="true"
              :on-success="handleUploadSuccess"
              :on-remove="handleRemove"
              :before-upload="beforeUpload"
              list-type="picture-card"
              :auto-upload="false"
              v-model="newPlace.images"
              >
              <i class="el-icon-plus"></i>
            </el-upload>
          </el-form-item>
          <el-form-item>
            <div class="form-buttons">
              <el-button type="primary" @click="onSubmit">Add Place</el-button>
              <el-button @click="dialogTableVisible = false">Cancel</el-button>
            </div>
          </el-form-item>
        </el-form>
      </el-dialog>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  import { ElMessageBox, ElMessage } from 'element-plus';
  import axios from 'axios';
  
  export default {
    data() {
      return {
        dialogTableVisible: false,
        newPlace: {
          id: null,
          name: '',
          description: '',
          location: '',
          images: []
        },
        formRules: {
          name: { required: true, message: 'Please input the name', trigger: 'blur' },
          description: { required: true, message: 'Please input the description', trigger: 'blur' },
          location: { required: true, message: 'Please input the location', trigger: 'blur' },
          images: { required: true, message: 'Please upload at least one image', trigger: 'change' }
        }
      };
    },
    methods: {
      handleClose(done) {
        ElMessageBox.confirm('Are you sure to close this dialog?')
          .then(() => {
            done();
          })
          .catch(() => {});
      },
      handleUploadSuccess(response, file, fileList) {
        // Handle successful image upload
        console.log('Upload Success:', response);
        this.newPlace.images = file;
      },
      handleRemove(file, fileList) {
        console.log('Remove:', file);
        this.newPlace.images = fileList.map(file => file.url);
      },
      beforeUpload(file) {
        console.log('Before upload:', file);
        return true; 
      },
      onSubmit() {
        this.$refs.placeForm.validate(valid => {
          if (valid) {
            axios.post('http://127.0.0.1:8000/api/places', this.newPlace)
              .then(response => {
                console.log(response.data);
                this.resetForm();
                this.dialogTableVisible = false;
                ElMessage.success('Place added successfully');
              })
              .catch(error => {
                console.error('Error adding place:', error);
                ElMessage.error('Failed to add place');
              });
          } else {
            ElMessage.error('Please fill in the form correctly');
            return false;
          }
        });
      },
      resetForm() {
        this.newPlace = {
          id: null,
          name: '',
          description: '',
          location: '',
          images: []
        };
      }
    }
  };
  </script>
  
  <style scoped>
  .upload-demo {
    display: inline-block;
    margin-bottom: 20px;
  }
  </style>
  