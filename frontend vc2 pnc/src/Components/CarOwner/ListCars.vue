<template>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="container-fluid dashboard">
    <div class="row">
      <sidebar /> 
      <main class="col-md-9 col-lg-10 main-content p-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h4 class="text-left text-black font-weight-bold" style="font-size:30px">
            Vehicles List
          </h4>
          <button class="btn btn-primary" lain @click="dialogTableVisible = true"> <strong style="font-size:20px">+</strong> <i class="fa fa-bus" style="font-size:20px"></i></button>
        </div>
        <vehecles/>
      </main>
      
      <el-dialog v-model="dialogTableVisible" width="650" height="30px" style="padding: 5%">
    <h2 class=" font-bold mb-6 text-center" >Add Vehicle</h2>
    <el-form :model="formData" :rules="formRules" ref="vehicleForm" label-width="120px">
      <el-row :gutter="20">
        <el-col :span="12">
          <el-form prop="make" :error="makeError">
            <el-input placeholder="Make" v-model="formData.make" size="large" />
            
          </el-form>
        </el-col>
        <el-col :span="12">
          <el-form prop="traveler_capacity" :error="travelerCapacityError">
            <el-input placeholder="Traveler Capacity" v-model="formData.traveler_capacity" size="large" type="number" />
        
          </el-form>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :span="12">
          <el-form prop="year" :error="yearError">
            <el-input placeholder="Year" v-model="formData.year" size="large" type="number" />
            
          </el-form>
        </el-col>
        <el-col :span="12">
          <el-form prop="color" :error="colorError">
            <el-input placeholder="Color" v-model="formData.color" size="large" />
            
          </el-form>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :span="12">
          <el-form prop="size" :error="sizeError">
            <el-input placeholder="Size" v-model="formData.size" size="large" />
            
          </el-form>
        </el-col>
        <el-col :span="12">
          <el-form prop="price" :error="priceError">
            <el-input placeholder="Price" v-model="formData.price" size="large" type="number" />
            
          </el-form>
        </el-col>
      </el-row>

      <el-row :gutter="20" class="justify-content-center">
        <el-col :span="20">
          <el-form prop="description" :error="descriptionError" >
            <el-input placeholder="Description" v-model="formData.description"  type="textarea" width="50" style="border:1px solid grey" />
         
          </el-form>
        </el-col>
      </el-row>
    </el-form>
    <template #footer>
      <div class="dialog-footer">
        <el-button   type="danger" @click="dialogTableVisible = false">Cancel</el-button>
        <el-button   :loading="isSubmitting" type="primary" @click="onSubmit">Add</el-button>
      </div>
    </template>
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
<style>
  
  h4 {
    font-size: 24px;
    font-weight: bold;
    
  }

  .btn-primary {
    margin-left: 10px;
  }
  /* Form styles */
  .el-form {
    margin-bottom: 10px;
    padding: 5px;
    
  }

  .el-input {
    width: 100%;
    border: 1px solid grey;
  }
  .el-button {
    width: 15%;
  }

  .dialog-footer {
    display: flex;
    justify-content: flex-end;
    margin-top: 20px;
  }

  /* Validation error styles */
  .el-form-item__error {
    color: red;
    font-size: 12px;
  }
</style>