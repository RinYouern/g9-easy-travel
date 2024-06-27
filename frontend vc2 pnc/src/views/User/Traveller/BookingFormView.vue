<template>
    <navbar></navbar>
    <div class="container bg">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card d-flex flex-row justify-content-between">
                    <div class="card-body d-flex flex-column justify-content-start">
                        <h1 class="text-left mt-10px ">Welcome {{ carName }}</h1>
                    </div>
                    <form @submit.prevent="submitForm" class="card-body d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" v-model="formData.name" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber">Phone Number:</label>
                                            <input type="tel" id="phoneNumber" v-model="formData.phoneNumber"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="pickupLocation">Pickup Location:</label>
                                    <input type="text" id="pickupLocation" v-model="formData.pickupLocation"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pickupDate">Pickup Date:</label>
                                    <input type="date" id="pickupDate" v-model="formData.pickupDate"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="returnDate">Return Date:</label>
                                    <input type="date" id="returnDate" v-model="formData.returnDate"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Passengers">Passengers:</label>
                                    <input type="number" id="Passengers" v-model.number="formData.Passengers"
                                        class="form-control" min="1" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="totalPrice">Total Price:</label>
                                    <input type="number" id="totalPrice" v-model.number="formData.totalPrice"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import navbar from '@/Components/Traveler/navbarTraveler.vue'

export default {
    components: {
        navbar
    },
    data() {
        return {
            carName: 'Example Car',
            formData: {
                name: '',
                phoneNumber: '',
                pickupLocation: '',
                pickupDate: '',
                returnDate: '',
                Passengers: 0,
                totalPrice: 0
            }
        }
    },
    methods: {
        submitForm() {
            // Handle form submission here
            console.log(this.formData)
        }
    }
}
</script>

<style scoped>
.card {
    border-radius: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-top: 30px;
    margin-bottom: 30px;
}

.form-group {
    /* color: white; */
    margin-bottom: 1.5rem;
}

.bg {
    background-image: url('src/assets/image/route.jpg');
    background-size: cover;
}
</style>