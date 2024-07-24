<template>
  <div>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <div class="container rounded mt-4">
      <div class="row">
        <div class="col-md-4 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img
              class="rounded-circle mt-5"
              :src="information.users.profile"
              width="150"
              height="150"
            />
            <label for="profile-pic-input" class="camera-icon">
              <i class="fa fa-camera" style="font-size: 24px; color: white"></i>
            </label>
          </div>
        </div>
        <div class="col-md-8">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex flex-row align-items-center back" @click="goBack">
                <i class="fa fa-arrow-left" style="font-size: 20px; color: black :hover:blue"></i>
              </div>
              <button class="btn btn-primary edit-profile-btn" @click="toggleEditMode">
                <i class="fa" :class="editMode ? 'fa-times' : 'fa-pencil'"></i>
                {{ editMode ? 'Cancel' : 'Edit Profile' }}
              </button>
            </div>
            <div class="row mt-2" v-if="editMode">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      v-model="information.users.name"
                      :readonly="!editMode"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-user"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      v-model="information.users.email"
                      :readonly="!editMode"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-envelope"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="location">Location</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="location"
                      v-model="information.users.location"
                      :readonly="!editMode"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-map-marker"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-2" v-else>
              <!-- Other fields or read-only display can be shown here when not in edit mode -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      v-model="information.users.name"
                      :readonly="!editMode"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-user-circle"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="email"
                      v-model="information.users.email"
                      :readonly="!editMode"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-envelope"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="role">Role</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="role"
                      v-model="information.users.user_role"
                      :readonly="!editMode"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-user-circle"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address">Address</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="address"
                      v-model="information.users.location"
                      :readonly="!editMode"
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-map-marker"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div v-if="editMode" class="row mt-3">
              <div class="col-md-12 text-center">
                <button class="btn btn-success" @click="saveProfile">
                  <i class="fa fa-save"></i> Save
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <input
      id="profile-pic-input"
      type="file"
      style="display: none"
      accept="image/*"
      @change="uploadProfile"
    />
  </div>
</template>


<script>
import 'element-plus/dist/index.css';
import { ElNotification } from 'element-plus';
import { userStore } from '@/stores/user-list';
import axiosInstance from '@/plugins/axios';

export default {
  data() {
    return {
      information: userStore(),
      editMode: false,
      originalData: {},
      imageBase64: ''
    };
  },
  methods: {
    goBack() {
      this.$router.push({ name: 'hotelowner' });
    },
    uploadProfile(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
          this.imageBase64 = e.target.result;
          this.upload();
        };
        reader.readAsDataURL(file);
      }
    },
    async upload() {
      try {
        const response = await axiosInstance.put('/upload/profile', {
          profile: this.imageBase64,
        });
        // Update profile image URL
        this.information.users.profile = this.imageBase64;
        // Show success notification
        ElNotification({
          title: 'Success',
          message: 'Profile picture updated successfully!',
          type: 'success',
        });
      } catch(e) {
        console.log(e);
        // Show error notification
        ElNotification({
          title: 'Error',
          message: 'Failed to update profile picture.',
          type: 'error',
        });
      }
    },
    toggleEditMode() {
      if (this.editMode) {
        // Cancel editing, restore original data
        this.information.users = { ...this.originalData };
      } else {
        // Start editing, store original data
        this.originalData = { ...this.information.users };
      }
      this.editMode = !this.editMode;
    },
    async saveProfile() {
      try {
        const response = await axiosInstance.put('/updateprofile', {
          name: this.information.users.name,
          email: this.information.users.email,
          location: this.information.users.location,
        }, {
          headers: {
            Authorization: `Bearer ${this.information.token}`
          }
        });
        console.log(response.data);
        this.editMode = false;
        // Show success notification
        ElNotification({
          title: 'Success',
          message: 'Profile updated successfully!',
          type: 'success',
        });
      } catch (error) {
        console.error('Error saving profile:', error);
        // Show error notification
        ElNotification({
          title: 'Error',
          message: 'Failed to update profile.',
          type: 'error',
        });
      }
    },
    fetchUser() {
      this.information.fetchUser();
    }
  },
  mounted() {
    this.fetchUser();
  }
};
</script>

<style>
body {
  padding: 70px;
}
.container {
  background: rgb(250, 249, 249);
  height: 60vh;
}
.form-control:focus {
  box-shadow: none;
  border-color: #131111;
}
.profile-button {
  background: blue;
  box-shadow: none;
  border: none;
}
.back:hover {
  color: blue;
  cursor: pointer;
}
.camera-icon {
  position: relative;
  cursor: pointer;
}
.camera-icon i {
  background: blue;
  position: absolute;
  top: -20px;
  left: 0;
  font-size: 24px;
  color: white;
  padding: 4px;
  border-radius: 50%;
}
.camera-icon:hover i {
  background-color: rgba(0, 0, 0, 0.8);
}
</style>