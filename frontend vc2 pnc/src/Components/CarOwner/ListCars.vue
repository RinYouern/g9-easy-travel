<template>
  <div class="container-fluid dashboard">
    <div class="row">
      <sidebar /> 
      <main class="col-md-9 col-lg-10 main-content p-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h4 class="text-left text-primary font-weight-bold">
            <i class="fas fa-car mr-2"></i>Vehicles List
          </h4>
          <button class="btn btn-primary" lain @click="dialogTableVisible = true">Add Vehicle</button>
        </div>
        <vehecles/>
      </main>
      
      <el-dialog v-model="dialogTableVisible" width="800" style="padding: 5%">
    <h2 class="text-2xl font-bold mb-6 text-center" style="margin-top: -50px">Add Vehicle</h2>
    <el-form :model="formData" :rules="formRules" ref="vehicleForm" label-width="120px">
      <el-row :gutter="20">
        <el-col :span="12">
          <el-form-item prop="make" :error="makeError">
            <el-input placeholder="Make" v-model="formData.make" size="large" />
            <i class="bx bxs-car"></i>
          </el-form-item>
        </el-col>
        <el-col :span="12">
          <el-form-item prop="traveler_capacity" :error="travelerCapacityError">
            <el-input placeholder="Traveler Capacity" v-model="formData.traveler_capacity" size="large" type="number" />
            <i class="bx bxs-user-plus"></i>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :span="12">
          <el-form-item prop="year" :error="yearError">
            <el-input placeholder="Year" v-model="formData.year" size="large" type="number" />
            <i class="bx bxs-calendar"></i>
          </el-form-item>
        </el-col>
        <el-col :span="12">
          <el-form-item prop="color" :error="colorError">
            <el-input placeholder="Color" v-model="formData.color" size="large" />
            <i class="bx bxs-paint"></i>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :span="12">
          <el-form-item prop="size" :error="sizeError">
            <el-input placeholder="Size" v-model="formData.size" size="large" />
            <i class="bx bxs-car-garage"></i>
          </el-form-item>
        </el-col>
        <el-col :span="12">
          <el-form-item prop="price" :error="priceError">
            <el-input placeholder="Price" v-model="formData.price" size="large" type="number" />
            <i class="bx bxs-dollar-circle"></i>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20" class="justify-content-center">
        <el-col :span="20">
          <el-form-item prop="description" :error="descriptionError">
            <el-input placeholder="Description" v-model="formData.description" size="large" type="textarea" />
            <i class="bx bxs-edit"></i>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20" class="justify-content-center">
        <el-col :span="7">
          <div>
            <el-button size="large" class="mt-3 w-full" type="danger" @click="dialogTableVisible = false">Cancel</el-button>
          </div>
        </el-col>
        <el-col :span="7">
          <div>
            <el-button size="large" class="mt-3 w-full" :loading="isSubmitting" type="primary" @click="onSubmit">Add Vehicle</el-button>
          </div>
        </el-col>
      </el-row>
    </el-form>
  </el-dialog>

    </div>
  </div>
</template>

<script>
import sidebar from '@/Components/CarOwner/SideBar.vue'
import vehecles from '@/Components/CarOwner/Vehicles.vue'
import axiosInstance from '@/plugins/axios'
import * as yup from 'yup'

const formSchema = yup.object().shape({
  make: yup.string().required('Please enter the make of the vehicle'),
  traveler_capacity: yup.number().required('Please enter the traveler capacity').positive('Traveler capacity must be a positive number'),
  year: yup.number().required('Please enter the year').positive('Year must be a positive number'),
  color: yup.string().required('Please enter the color'),
  size: yup.string().required('Please enter the size'),
  price: yup.number().required('Please enter the price').positive('Price must be a positive number'),
  description: yup.string().required('Please enter a description')
})

export default {
  name: 'AddVehicleDialog',
  components: {
    sidebar,
    vehecles
  },
  data() {
    return {
      dialogTableVisible: false,
      formData: {
        make: '',
        traveler_capacity: '',
        year: '',
        color: '',
        size: '',
        price: '',
        description: ''
      },
      formRules: formSchema,
      isSubmitting: false
    }
  },
  methods: {
    async onSubmit() {
      try {
        this.isSubmitting = true
        await this.$refs.vehicleForm.validate()
        const { data } = await axiosInstance.post('/addVehicle', this.formData)
        console.log('Vehicle added:', data)
        this.dialogTableVisible = false
        this.$emit('vehicleAdded')
      } catch (error) {
        console.error('Error adding vehicle:', error)
      } finally {
        this.isSubmitting = false
      }
    }
  }
}
</script>
