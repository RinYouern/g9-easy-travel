<template>
  <div>
    <div class="container">
      <div class="profile-box">
        <div class="profile-content">
          <div class="profile-picture">
            <img src="https://i.pinimg.com/564x/e9/0e/59/e90e595bfa89186549f1f0295c64e6ed.jpg" alt="Profile Picture" />
          </div>
          <div class="profile-info">
            <h1 class="profile-name">John Doe</h1>
            <div class="personal-info">
              <div class="stat">
                <h6>Role  :  User</h6>
              </div>
            </div>
            <div class="personal-info">
              <div class="stat">
                <h6>Create Date  :  July 22, 2024</h6>
              </div>
            </div>
            <div class="personal-info">
              <div class="stat">
                <h6>Create Time  :  10:33 AM</h6>
              </div>
            </div>
            <div class="personal-info">
              <div class="stat">
                <h6>Email  :  laty@gmail.com</h6>
              </div>
            </div>
            <div class="personal-info">
              <div class="stat">
                <h6>Phone  :  (855) 088-432-1539</h6>
              </div>
            </div>
            
          
          </div>
          <div class="btn">
            <button class="btn-button">Edit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {}
</script>

<style>
.container {
  padding: 20px;
  width: 40%;
  height: 15%;
  margin-top: 5%;
}
h1{
  margin-top: 10px;
}

.profile-box {
  background-color: #e0dfe0;
  border-radius: 5px;
  height: 400px;
  padding: 20px;
}

.profile-content {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.profile-picture img {
  width: 150px;
  height: 150px;
  margin-top: -100px;
  border-radius: 50%;
}

.profile-name {
  font-size: 24px;
  margin-bottom: 10px;
  text-align: center;
}

.personal-info {
  margin-top: 20px;
}

.stat {
  margin-bottom: 10px;
}

.btn {
  margin-top: 20px;
  text-align: center;
}

.btn-button {
  padding: 10px 20px;
  width: 100px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 20px;
}

.btn-button:hover{
  background-color: red;
}
</style>