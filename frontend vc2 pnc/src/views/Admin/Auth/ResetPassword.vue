<template>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-pzjw8w+ua7qJ9a42TKFfi4gxpgZS2bqF09Jz1d2tVjE5c4+a8dX4a5z8XZss4J6M" crossorigin="anonymous">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card card-default">
          <div class="card-header">New Password</div>
          <div class="card-body">
            <form autocomplete="off" @submit.prevent="resetPassword" method="post">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" v-model="email" required>
              </div>
              <div class="form-group">
                <input type="password" id="password" class="form-control" placeholder="Password" v-model="password" required>
              </div>
              <div class="form-group">
                <input type="password" id="password_confirmation" class="form-control" placeholder="Confirm Password" v-model="password_confirmation" required>
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      token: null,
      email: null,
      password: null,
      password_confirmation: null,
      has_error: false
    }
  },
  methods: {
    resetPassword() {
      this.$http.post("/auth/ResetPassword/", {
        token: this.$route.params.token,
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation
      })
      .then(result => {
        // console.log(result.data);
        this.$router.push({name: 'login'})
      }, error => {
        console.error(error);
      });
    }
  }
}
</script>

<style scoped>
.container {
  background: #f4f4f4;
  /* width: 100%; */
  height: 100vh;
  display: flex;
  align-items: center;
}

.card {
    width: 100%;
  border: none;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
  margin-left: 40rem;
 margin-top: -20px;
}
.col-6{
    width: 30rem;
    
}
.card-header {
  background-color: #007bff;
  color: #fff;
  font-weight: bold;
  padding: 10px;
}

.card-body {
  padding: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}

.form-control {
  border-radius: 0;
}
</style>


