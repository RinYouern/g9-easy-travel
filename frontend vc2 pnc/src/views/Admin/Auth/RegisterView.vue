<template>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <el-card class="w-full max-w-md shadow-lg">
      <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
      <el-form @submit.prevent="onSubmit">
        <el-form-item :error="roleError">
          <el-select v-model="user_role" placeholder="Select a role" size="large">
            <el-option label="Traveler" value="traveler"></el-option>
            <el-option label="Car Company" value="carOwner"></el-option>
            <el-option label="Hotel" value="hotelOwner"></el-option>
            <el-option label="Driver" value="driver"></el-option>
          </el-select>
        </el-form-item>

        <el-form-item :error="nameError">
          <el-input placeholder="Name" v-model="name" size="large" />
          <i class="bx bxs-user"></i>
        </el-form-item>

        <el-form-item :error="emailError">
          <el-input placeholder="Email Address" v-model="email" size="large" />
          <i class="bx bxs-envelope"></i>
        </el-form-item>

        <el-form-item :error="passwordError" class="mt-8">
          <el-input placeholder="Password" v-model="password" size="large" type="password" />
          <i class="bx bxs-lock-alt"></i>
        </el-form-item>

        <div>
          <el-button
            size="large"
            class="mt-3 w-full"
            :disabled="isSubmitting"
            type="primary"
            native-type="submit"
            >Register</el-button
          >
        </div>
      </el-form>
    </el-card>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import axiosInstance from '@/plugins/axios'
import { useField, useForm } from 'vee-validate'
import * as yup from 'yup'

const router = useRouter()

const formSchema = yup.object({
  name: yup.string().required().label('Name'),
  email: yup.string().required().email().label('Email address'),
  password: yup.string().required().label('Password'),
  // user_role: yup.string().oneOf(['traveler', 'carOwner', 'hotelOwner','driver']).required().label('Role')
})

const { handleSubmit, isSubmitting } = useForm({
  initialValues: {
    name: '',
    email: '',
    password: '',
    user_role: ''
  },
  validationSchema: formSchema
})

const onSubmit = handleSubmit(async (values) => {
  try {
    const { data } = await axiosInstance.post('/register', values)
    localStorage.setItem('access_token', data.access_token)
    router.push('/')
  } catch (error) {
    console.warn('Error')
  }
})

const { value: name, errorMessage: nameError } = useField('name')
const { value: email, errorMessage: emailError } = useField('email')
const { value: password, errorMessage: passwordError } = useField('password')
const { value: user_role, errorMessage: roleError } = useField('user_role')
</script>

<style scoped>
.min-h-screen {
  /* background-image: url(https://i.pinimg.com/564x/c4/60/25/c46025c855d83c100a3a6a9481774e0a.jpg);
  background-size: cover; */
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
.el-button{
  font-size: 20px;
  font-weight: bold;
  
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
