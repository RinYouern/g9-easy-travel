<template>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <el-card class="w-full max-w-md shadow-lg">
      <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
      <el-form @submit="onSubmit">
        <el-form-item :error="emailError">
          <el-input placeholder="Email Address" v-model="email" size="large" />
          <i class="bx bxs-envelope"></i>
        </el-form-item>

        <el-form-item :error="nameError" class="mt-8">
          <el-input placeholder="Password" v-model="password" size="large" type="password" />
          <i class="bx bxs-lock-alt"></i>
        </el-form-item>
        <div class="remember-forgot">
          <label><input type="checkbox" v-model="rememberMe" />Remember Me</label>
          <a href="#">Forgot Password</a>
        </div>
        <div>
          <el-button
            size="large"
            class="mt-3 w-full"
            :disabled="isSubmitting"
            type="primary"
            native-type="submit"
            >Login</el-button
          >
          <div class="register-link">
            <p>Don't have an account? <a href="/register">Register</a></p>
          </div>
        </div>
      </el-form>
    </el-card>
  </div>
</template>

<script setup lang="ts">
import axiosInstance from '@/plugins/axios'
import { useField, useForm } from 'vee-validate'
import * as yup from 'yup'
import { useRouter } from 'vue-router'

const router = useRouter()

const formSchema = yup.object({
  password: yup.string().required().label('Password'),
  email: yup.string().required().email().label('Email address')
})

const { handleSubmit, isSubmitting } = useForm({
  initialValues: {
    password: '',
    email: ''
  },
  validationSchema: formSchema
})

const onSubmit = handleSubmit(async (values) => {
  try {
    const { data } = await axiosInstance.post('/login', values)
    localStorage.setItem('access_token', data.access_token)
    router.push('/')
  } catch (error) {
    console.warn('Error')
  }
})

const { value: password, errorMessage: nameError } = useField('password')
const { value: email, errorMessage: emailError } = useField('email')
</script>

<style scoped>
.min-h-screen {
  
  min-height: 100vh;
  background:skyblue;
}
.min-h-screen h2 {
  font-size: 40px;       
}
.w-full {
  border-radius: 10px;
  padding: 20px;
}
i {
  position: absolute;
  right: 20px;
  top: 30%;
  transform: translate(-50%);
  font-size: 20px;
}
.remember-forgot label input {
  /* accent-color: #fff; */
  margin-right: 3px;
}
.remember-forgot a {
  color: blue;
  text-decoration: none;
  margin-left: 90px;
}
.el-button{
  font-size: 20px;
  font-weight: bold;
  
}
.remember-forgot a:hover {
  text-decoration: underline;
  color: purple;
}
.register-link {
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;
}
.register-link p {
  color: black;
}
.register-link p a {
  color: blue;
  text-decoration: none;
  font-weight: 600;
}
.register-link p a:hover {
  text-decoration: underline;
  color: purple;
}
</style>
