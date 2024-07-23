<template>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
  />
  <div class="hotel-container p-3 bg-white" style="margin: auto; width: 90%; border-radius: 10px">
    <div id="hole-hotel" class="d-flex justify-content-between">
      <div>
        <div class="hotel-star">
          <div class="hotel-name">{{ hotel.name }}</div>
          <div id="star" v-if="hotel.rating > 2">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="hotel-address"><i class="bi bi-geo-alt"></i> {{ hotel.province }}</div>
        <div class="hotel-description"><i class="bi bi-compass"></i> {{ hotel.description }}</div>
      </div>
    </div>

    <div class="d-flex">
      <img :src="images[0]" style="width: 480px; height: 300px" alt="" />
      <div class="images">
        <div class="image">
          <img :src="images[1]" style="width: 200px; height: 150px" alt="" />
          <img :src="images[2]" style="width: 200px; height: 150px" alt="" />
          <img :src="images[3]" style="width: 200px; height: 150px" alt="" />
        </div>
        <div class="image">
          <img :src="images[4]" style="width: 200px; height: 150px" alt="" />
          <img :src="images[5]" style="width: 200px; height: 150px" alt="" />
          <img :src="images[6]" style="width: 200px; height: 150px" alt="" />
        </div>
      </div>
    </div>
  </div>
  <div
    class="hotel-container p-3 mt-2 bg-white"
    style="margin: auto; width: 90%; border-radius: 10px"
  >
    <div class="d-flex" style="height: 210px; padding: 10px">
      <div style="width: 60%; margin-right: 20px">
        <span class="text-start">
          <strong style="margin: 5px 0 5px 0; font-size: 20px">Highlights</strong></span
        >
        <div class="d-flex p-2" style="background-color: gainsboro; border-radius: 10px">
          <div class="location d-flex flex-column">
            <i class="bi bi-geo-alt" style="font-size: 30px; color: black"></i>
            <span><strong>Location</strong></span>
          </div>
          <div class="location d-flex flex-column">
            <i class="bi bi-p-circle" style="font-size: 30px; color: black"></i>
            <span><strong>Parking available</strong></span>
          </div>
          <div class="location d-flex flex-column">
            <i class="bi bi-p-circle" style="font-size: 30px; color: black"></i>
            <span><strong>Sparkling clean</strong></span>
          </div>
          <div class="location d-flex flex-column">
            <i class="bi bi-patch-check" style="font-size: 30px; color: black"></i>
            <span><strong>Excellent service</strong></span>
          </div>
          <div class="location d-flex flex-column">
            <i class="bi bi-patch-check" style="font-size: 30px; color: black"></i>
            <span><strong>Delicious Breakfast</strong></span>
          </div>
        </div>
        <div>
          <span style="font-size: 15px">Amenities</span>
          <div class="d-flex">
            <div>
              <i class="bi bi-p-circle" style="font-size: 20px; color: black"></i>
              <span class="ml-1"> <strong>Private Parking</strong></span>
            </div>
            <div>
              <i class="bi bi-p-circle" style="font-size: 20px; color: black"></i>
              <span class="ml-1"> <strong>Public Parking</strong></span>
            </div>
            <div>
              <i class="bi bi-p-circle" style="font-size: 20px; color: black"></i>
              <span class="ml-1"> <strong>Bar </strong></span>
            </div>
            <div>
              <i class="bi bi-p-circle" style="font-size: 20px; color: black"></i>
              <span class="ml-1"> <strong> Fitness Room </strong></span>
            </div>
            <div>
              <i class="bi bi-wifi" style="font-size: 20px; color: black"></i>
              <span class="ml-1"> <strong> Wi-Fi in Public Areas </strong></span>
            </div>
          </div>
        </div>
      </div>
      <div class="p-5" style="width: 40%; text-align: center">
        <h1>{{ hotel.rating }}<span style="font-size: 15px">/5</span></h1>
        <h1 style="font-size: 20px; margin-top: -15px"><strong>Very Good</strong></h1>
      </div>
    </div>
  </div>
  <div
    class="hotel-container p-3 bg-white mt-2"
    style="margin: auto; width: 90%; border-radius: 10px"
  >
    <h3>King Room</h3>
    <div style="display: flex">
      <div style="width: 20%; display: flex">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 3px">
          <img
            src="https://i.pinimg.com/474x/e5/59/03/e559037a266cf434719813faf199fb56.jpg"
            style="width: 200px"
            alt=""
          />
          <div style="display: flex; gap: 2px">
            <img
              src="https://i.pinimg.com/474x/e5/59/03/e559037a266cf434719813faf199fb56.jpg"
              style="width: 100px"
              alt=""
            />
            <img
              src="https://i.pinimg.com/474x/e5/59/03/e559037a266cf434719813faf199fb56.jpg"
              style="width: 100px"
              alt=""
            />
          </div>
        </div>
      </div>
      <div style="width: 80%">
        <div class="d-flex p-2" style="background-color: aliceblue">
          <div style="width: 40%">Your Choices</div>
          <div style="width: 20%; text-align: center">Sleeps</div>
          <div style="width: 40%; text-align: center">Today's Price</div>
        </div>
        <div v-for="hotel in rooms" :key="hotel.id">
          <div class="d-flex" v-if="hotel.room_type == 1">
            <div
              class="p-2"
              style="
                width: 40%;
                height: 180px;
                display: flex;
                flex-direction: column;
                border: solid 1px black;
              "
            >
              <div class="rooms" style="display: flex; flex-direction: column">
                <i class="bi bi-ban text-dark"><span> 1 King room</span></i>
                <i class="bi bi-ban text-dark"><span> No Smoking</span> </i>
                <i class="bi bi-wifi text-dark"><span> Wi-Fi (additional charge)</span> </i>
                <i class="bi bi-fan text-dark"><span> Air conditioning</span> </i>
                <i class="bi bi-ban text-dark"><span> Air conditioning</span> </i>
                <i class="bi bi-shield-check text-dark"><span> Private bathroom</span> </i>
              </div>
            </div>
            <div
              class="pt-3"
              style="width: 20%; height: 180px; text-align: center; border: solid 1px black"
            >
              <i class="bi bi-person-fill"></i>
              <i class="bi bi-person-fill"></i>
            </div>
            <div
              style="
                display: flex;
                justify-content: center;
                gap: 5px;
                align-items: center;
                width: 40%;
                height: 180px;
                text-align: center;
                border: solid 1px black;
              "
            >
              <div class="hotel-price d-flex" style="width: 300px; height: 50px">
                <div class="d-flex flex-column">
                  <div style="font-size: 30px; font-weight: bold">${{ hotel.price }}</div>
                  <span style="font-size: 13px; margin-top: -10px"
                    >Total price: ${{ hotel.price * research.nights }}</span
                  >
                  <span style="font-size: 13px; margin-top: -5px"
                    >1 room x {{ research.nights }} nights</span
                  >
                </div>
                <a :href="'/booking/' + hotel.id" @click="showId(hotel.id)"
                  ><button
                    class="btn btn-primary"
                    style="height: 100%; width: 150px; font-weight: bold"
                  >
                    Reserve Now
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="hotel-container p-3 bg-white mt-2"
    style="margin: auto; width: 90%; border-radius: 10px"
  >
    <h3>Two Double Room</h3>
    <div style="display: flex">
      <div style="width: 20%">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 3px">
          <img
            src="https://i.pinimg.com/474x/e5/59/03/e559037a266cf434719813faf199fb56.jpg"
            style="width: 200px"
            alt=""
          />
          <div style="display: flex; gap: 2px">
            <img
              src="https://i.pinimg.com/474x/e5/59/03/e559037a266cf434719813faf199fb56.jpg"
              style="width: 100px"
              alt=""
            />
            <img
              src="https://i.pinimg.com/474x/e5/59/03/e559037a266cf434719813faf199fb56.jpg"
              style="width: 100px"
              alt=""
            />
          </div>
        </div>
      </div>
      <div style="width: 80%">
        <div class="d-flex p-2" style="background-color: aliceblue">
          <div style="width: 40%">Your Choices</div>
          <div style="width: 20%; text-align: center">Sleeps</div>
          <div style="width: 40%; text-align: center">Today's Price</div>
        </div>
        <div v-for="hotel in rooms" :key="hotel.id">
          <div class="d-flex" v-if="hotel.room_type == 2">
            <div
              class="p-2"
              style="
                width: 40%;
                height: 180px;
                display: flex;
                flex-direction: column;
                border: solid 1px black;
              "
            >
              <div class="rooms" style="display: flex; flex-direction: column">
                <i class="bi bi-ban text-dark"><span> 2 Beds</span></i>
                <i class="bi bi-ban text-dark"><span> No Smoking</span> </i>
                <i class="bi bi-wifi text-dark"><span> Wi-Fi (additional charge)</span> </i>
                <i class="bi bi-fan text-dark"><span> Air conditioning</span> </i>
                <i class="bi bi-ban text-dark"><span> Air conditioning</span> </i>
                <i class="bi bi-shield-check text-dark"><span> Private bathroom</span> </i>
              </div>
            </div>
            <div
              class="pt-3"
              style="width: 20%; height: 180px; text-align: center; border: solid 1px black"
            >
              <i class="bi bi-person-fill"></i>
              <i class="bi bi-person-fill"></i>
              <i class="bi bi-person-fill"></i>
              <i class="bi bi-person-fill"></i>
            </div>
            <div
              style="
                display: flex;
                justify-content: center;
                gap: 5px;
                align-items: center;
                width: 40%;
                height: 180px;
                text-align: center;
                border: solid 1px black;
              "
            >
              <div class="hotel-price d-flex" style="width: 300px; height: 50px">
                <div class="d-flex flex-column">
                  <div style="font-size: 30px; font-weight: bold">${{ hotel.price }}</div>
                  <span style="font-size: 13px; margin-top: -10px"
                    >Total price: ${{ hotel.price * research.nights }}</span
                  >
                  <span style="font-size: 13px; margin-top: -5px"
                    >1 room x {{ research.nights }} nights</span
                  >
                </div>
                <a :href="'/booking/' + hotel.id" @click="showId(hotel.id)"
                  ><button
                    class="btn btn-primary"
                    style="height: 100%; width: 150px; font-weight: bold"
                  >
                    Reserve Now
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="hotel-container p-3 bg-white mt-2"
    style="margin: auto; width: 90%; border-radius: 10px"
  >
    <h3>King Room with Pool View</h3>
    <div style="display: flex">
      <div style="width: 20%">
        <div style="display: flex; flex-direction: column; align-items: center; gap: 3px">
          <img
            src="https://i.pinimg.com/474x/e5/59/03/e559037a266cf434719813faf199fb56.jpg"
            style="width: 200px"
            alt=""
          />
          <div style="display: flex; gap: 2px">
            <img
              src="https://i.pinimg.com/474x/e5/59/03/e559037a266cf434719813faf199fb56.jpg"
              style="width: 100px"
              alt=""
            />
            <img
              src="https://i.pinimg.com/474x/e5/59/03/e559037a266cf434719813faf199fb56.jpg"
              style="width: 100px"
              alt=""
            />
          </div>
        </div>
      </div>
      <div style="width: 80%">
        <div class="d-flex p-2" style="background-color: aliceblue">
          <div style="width: 40%">Your Choices</div>
          <div style="width: 20%; text-align: center">Sleeps</div>
          <div style="width: 40%; text-align: center">Today's Price</div>
        </div>
        <div v-for="hotel in rooms" :key="hotel.id">
          <div class="d-flex" v-if="hotel.room_type == 3">
            <div
              class="p-2"
              style="
                width: 40%;
                height: 180px;
                display: flex;
                flex-direction: column;
                border: solid 1px black;
              "
            >
              <div class="rooms" style="display: flex; flex-direction: column">
                <i class="bi bi-ban text-dark"><span> 2 Beds</span></i>
                <i class="bi bi-ban text-dark"><span> No Smoking</span> </i>
                <i class="bi bi-wifi text-dark"><span> Wi-Fi (additional charge)</span> </i>
                <i class="bi bi-fan text-dark"><span> Air conditioning</span> </i>
                <i class="bi bi-ban text-dark"><span> Air conditioning</span> </i>
                <i class="bi bi-shield-check text-dark"><span> Private bathroom</span> </i>
              </div>
            </div>
            <div
              class="pt-3"
              style="width: 20%; height: 180px; text-align: center; border: solid 1px black"
            >
              <i class="bi bi-person-fill"></i>
              <i class="bi bi-person-fill"></i>
              <i class="bi bi-person-fill"></i>
              <i class="bi bi-person-fill"></i>
            </div>
            <div
              style="
                display: flex;
                justify-content: center;
                gap: 5px;
                align-items: center;
                width: 40%;
                height: 180px;
                text-align: center;
                border: solid 1px black;
              "
            >
              <div class="hotel-price d-flex" style="width: 300px; height: 50px">
                <div class="d-flex flex-column">
                  <div style="font-size: 30px; font-weight: bold">${{ hotel.price }}</div>
                  <span style="font-size: 13px; margin-top: -10px"
                    >Total price: ${{ hotel.price * research.nights }}</span
                  >
                  <span style="font-size: 13px; margin-top: -5px"
                    >1 room x {{ research.nights }} nights</span
                  >
                </div>
                <a :href="'/booking/' + hotel.id" @click="showId(hotel.id)"
                  ><button
                    class="btn btn-primary"
                    style="height: 100%; width: 150px; font-weight: bold"
                  >
                    Reserve Now
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
  <script>
import axios from 'axios'
export default {
  name: 'HotelComponent',
  props: ['rooms', 'research'],
  name: 'HotelComponent',

  data() {
    return {
      hotel: {
      },
      images: [
          'https://ak-d.tripcdn.com/images/1mc0e12000emgsyayCB2C_R_960_660_R5_D.jpg',
          'https://ak-d.tripcdn.com/images/1mc1d12000emgswqmB01B_R_600_400_R5.webp',
          'https://ak-d.tripcdn.com/images/1mc3d12000emgssoi5AAF_R_600_400_R5.webp',
          'https://ak-d.tripcdn.com/images/1mc0c12000emgspby9C87_R_600_400_R5.webp',
          'https://ak-d.tripcdn.com/images/1mc2w12000emgszf49467_R_600_400_R5.webp',
          'https://ak-d.tripcdn.com/images/1mc1c12000emgt0xjBF3E_R_600_400_R5.webp',
          'https://ak-d.tripcdn.com/images/1mc1c12000emgt0xjBF3E_R_600_400_R5.webp'
        ],
      user: {}
    }
  },
  created() {
    this.fetchHotel()
  },
  methods: {
    async fetchHotel(){
      try {
        const response = await axios.get(`http://127.0.0.1:8000/api/user/${this.$route.params.id}`)
        this.hotel = response.data.data
      } catch (error) {
        console.error(error)
      }
    }
  }
}
</script>
  
  <style scoped>
span {
  font-size: 12px;
}
.hotel-star {
  display: flex;
  align-items: center;
  gap: 3px;
}
#star {
  display: flex;
  gap: 2px;
}
.hotel-name {
  font-size: 30px;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.hotel-address {
  font-size: 14px;
  color: #666;
  margin-bottom: 10px;
}

.hotel-description {
  margin-bottom: 20px;
}
.images {
  display: flex;
  flex-direction: column;
  gap: 5px;
}
.image {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
  justify-content: space-between;
}
.d-flex {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
}
</style>
  