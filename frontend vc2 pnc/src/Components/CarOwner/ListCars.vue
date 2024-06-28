<template>
  <div class="container-fluid dashboard">
    <div class="row">
      <sidebar />
      <main class="col-md-9 col-lg-10 main-content p-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <h4 class="text-center text-primary font-weight-bold">
            Vehicles List
          </h4>
          <el-button type="warning" plain @click="showUserDetails()" class="custom-button">
            Add new vehicle
          </el-button>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4" v-for="car in cars" :key="car.id">
            <div class="card mb-1">
              <div class="row g-0">
                <div class="col-md-6 d-flex justify-content-center">
                  <img
                    src="https://i.pinimg.com/474x/81/9d/8f/819d8f465bb42ce2f1023e00620d5259.jpg"
                    alt=""
                    class="img-fluid rounded-start"
                  />
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <div class="row text-left">
                      <p class="card-text">Color: {{ car.color }}</p>
                      <p class="card-text">Size: {{ car.size }}</p>
                      <p class="card-text">Price: ${{ car.price }}</p>
                      <p class="card-text">Traveler Capacity: {{ car.traveler_capacity }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <el-dialog v-model="dialogTableVisible" width="800" style="padding: 5%">
    <h2 class="text-2xl font-bold mb-6 text-center" style="margin-top: -50px">Add Vehicle</h2>
    <el-form>
      <el-row :gutter="20">
        <el-col :span="12">
          <el-form-item>
            <el-input placeholder="Make" v-model="make" size="large" />
            <i class="bx bxs-car"></i>
          </el-form-item>
        </el-col>
        <el-col :span="12">
          <el-form-item>
            <el-input
              placeholder="Traveler Capacity"
              v-model="traveler_capacity"
              size="large"
              type="number"
            />
            <i class="bx bxs-user-plus"></i>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :span="12">
          <el-form-item>
            <el-input placeholder="Year" v-model="year" size="large" type="number" />
            <i class="bx bxs-calendar"></i>
          </el-form-item>
        </el-col>
        <el-col :span="12">
          <el-form-item>
            <el-input placeholder="Color" v-model="color" size="large" />
            <i class="bx bxs-paint"></i>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :span="12">
          <el-form-item>
            <el-input placeholder="Size" v-model="size" size="large" />
            <i class="bx bxs-car-garage"></i>
          </el-form-item>
        </el-col>
        <el-col :span="12">
          <el-form-item>
            <el-input placeholder="Price" v-model="price" size="large" type="number" />
            <i class="bx bxs-dollar-circle"></i>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20" class="justify-content-center">
        <el-col :span="20">
          <el-form-item>
            <el-input
              placeholder="Description"
              v-model="description"
              size="large"
              type="textarea"
            />
            <i class="bx bxs-edit"></i>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20" class="justify-content-center">
        <el-col :span="7">
          <div>
            <el-button size="large" class="mt-3 w-full" type="warning">Cancel</el-button>
          </div>
        </el-col>
        <el-col :span="7">
          <div>
            <el-button
              size="large"
              class="mt-3 w-full"
              :disabled="isSubmitting"
              type="primary"
              native-type="submit"
              >Add Vehicle</el-button
            >
          </div>
        </el-col>
      </el-row>
    </el-form>
  </el-dialog>
</template>
  
  <script >
import sidebar from '@/Components/CarOwner/SideBar.vue'
import { listCarStore } from '@/stores/hevicle-list'
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import axiosInstance from '@/plugins/axios'
import { useField, useForm } from 'vee-validate'
import * as yup from 'yup'

const router = useRouter()

const formSchema = yup.object({
  make: yup.string().required().label('Make'),
  traveler_capacity: yup.number().required().label('Traveler Capacity'),
  year: yup.number().required().label('Year'),
  color: yup.string().required().label('Color'),
  size: yup.string().required().label('Size'),
  price: yup.number().required().label('Price'),
  description: yup.string().required().label('Description')
})

const { handleSubmit, isSubmitting } = useForm({
  initialValues: {
    make: '',
    traveler_capacity: '',
    year: '',
    color: '',
    size: '',
    price: '',
    description: ''
  },
  validationSchema: formSchema
})

const onSubmit = handleSubmit(async (values) => {
  try {
    const { data } = await axiosInstance.post('/addVehicle', values)

    console.log('Vehicle added:', data)
    dialogTableVisible.value = false
  } catch (error) {
    console.error('Error adding vehicle:', error)
  }
})

const { value: make, errorMessage: makeError } = useField('make')
const { value: traveler_capacity, errorMessage: travelerCapacityError } =
  useField('traveler_capacity')
const { value: year, errorMessage: yearError } = useField('year')
const { value: color, errorMessage: colorError } = useField('color')
const { value: size, errorMessage: sizeError } = useField('size')
const { value: price, errorMessage: priceError } = useField('price')
const { value: description, errorMessage: descriptionError } = useField('description')

export default {
  name: 'CarList',
  components: {
    sidebar
  },
  data() {
    return {
      store: listCarStore(),
      dialogTableVisible: false
    }
  },
  computed: {
    cars() {
      return this.store.cars
    }
  },
  mounted() {
    this.fetchCars()
  },
  methods: {
    fetchCars() {
      this.store.fetchCars()
    },
    showUserDetails() {
      this.dialogTableVisible = true
    }
  }
}
</script>
  
  <style scoped>
.custom-button {
  background-color: #ffc107;
  border-color: #ffc107;
  color: #333;
  font-weight: bold;
  padding: 20px 20px;
  transition: all 0.3s ease;
}
</style>