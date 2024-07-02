<template>
  <div>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    />
    <div class="container rounded bg-white mt-10 w-50 ">
      <div class="row">
        <div class="col-md-4 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class="rounded-circle mt-5" :src="profilePic" width="90" height="90" />
            <label for="profile-pic-input" class="camera-icon">
              <i class="fa fa-camera" style="font-size: 24px; color: white"></i>
            </label>
          </div>
        </div>
        <div class="col-md-8">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="d-flex flex-row align-items-center back" @click="goBack">
                <a href="/"><i class="fa fa-arrow-left"></i></a>
              </div>
              <a href="./updateInfo">
        <button class="btn btn-primary edit-profile-btn" v-if="!editMode" @click="toggleEditMode">
          Edit Profile
        </button>
      </a>
            </div>
            <div class="row mt-2">
              <div class="col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Name"
                  v-model="name"
                />
              </div>
              <div class="col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Email"
                  v-model="email"
                />
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Role" v-model="role" />
              </div>
              <div class="col-md-6">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Address"
                  v-model="address"
                />
              </div>
            </div>
            <div class="mt-5 text-right">
              <button class="btn btn-primary profile-button" type="button" @click="saveProfile">
                Save Profile
              </button>
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
export default {
  data() {
    return {
      // name: 'Rin',
      // email: 'rin@bbb.com',
      // role: 'Developer',
      // address:"Phnom Penh",
      profilePic: 'https://i.pinimg.com/736x/28/e8/a4/28e8a4c9e9b1d7ace730b6142e5690cb.jpg'
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
        this.Name = this.originalData.Name
        this.email = this.originalData.email
        this.phoneNumber = this.originalData.phoneNumber
        this.address = this.originalData.address
        this.country = this.originalData.country
        
      } else {
        this.originalData = {
          Name: this.Name,
          email: this.email,
          phoneNumber: this.phoneNumber,
          address: this.address,
          country: this.country,
          
        }
      }
      this.editMode = !this.editMode
    }
  }
}
</script>

<style>
body {
  /* background: black; */
  padding: 70px;
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

/* .profile-button:hover {
  background: skyblue;
} */

.back:hover {
  color: blue;
  cursor: pointer;
}

.camera-icon {
  position: relative;
  cursor: pointer;
}

.camera-icon i {
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
