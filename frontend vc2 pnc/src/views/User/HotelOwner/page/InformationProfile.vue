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
                <a href="/"
                  ><i class="fa fa-arrow-left" style="font-size: 20px; color: black"></i
                ></a>
              </div>
              <a href="./updateInfo">
                <button
                  class="btn btn-primary edit-profile-btn"
                  v-if="!editMode"
                  @click="toggleEditMode"
                >
                  Edit Profile
                </button>
              </a>
            </div>
            <div class="row mt-2">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      v-model="information.users.name"
                      readonly
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
                      readonly
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-envelope"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="role">Phone</label>
                  <div class="input-group">
                    <input
                      type="number"
                      class="form-control"
                      id="phone"
                      v-model="information.users.phone"
                      readonly
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-phone"></i>
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
                      readonly
                    />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="fa fa-map-marker"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address">Password</label>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      id="address"
                      v-model="information.users.location"
                      readonly
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
import { userStore } from '@/stores/user-list'
export default {
  data() {
    return {
      information: userStore(),
      editMode: false
    }
  },
  methods: {
    goBack() {},
    uploadProfile(event) {
      const file = event.target.files[0]
      if (file) {
        const reader = new FileReader()
        reader.onload = (e) => {
          this.profilePic = e.target.result
          this.saveProfile()
        }
        reader.readAsDataURL(file)
      }
    },
    toggleEditMode() {
      if (this.editMode) {
        this.name = this.originalData.name
        this.email = this.originalData.email
        this.role = this.originalData.role
        this.address = this.originalData.address
      } else {
        this.originalData = {
          name: this.name,
          email: this.email,
          role: this.role,
          address: this.address
        }
      }
      this.editMode = !this.editMode
    },
    saveProfile() {
      // Save profile logic
    },
    fetchUser() {
      this.information.fetchUser()
    }
  },
  mounted() {
    this.fetchUser()
  }
}
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
