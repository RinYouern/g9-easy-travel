<template>
  <h1 class="fw-bold">HOTELS LIST</h1>
  <div class="container d-flex">
    <div class="group_card">
      <div class="hotel-card-row">
        <div class="hotel-card">
          <div class="hotel-image">
            <img src="@/assets/image/myhotel/HM Grand Central Hotel.jpg" alt="" />
            <div class="favorite-button" @click="toggleFavorite1">
              <i :class="['fa', 'favorite-icon', isFavorite1 ? 'fa-heart' : 'far fa-heart']"></i>
            </div>
          </div>
          <div class="hotel-info">
            <div class="hotel-name">
              <h3>HM Grand Central Hotel</h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-plus-circle"></i>
              </div>
            </div>
            <p>Kampot, 0.5 km from centre</p>
            <p>
              Kampot Sunny Hotel features a fitness centre, garden, a shared lounge and restaurant
              in Kampot. With free WiFi, this 3-star hotel offers room service and a 24-hour front
              desk.
            </p>
            <div class="hotel-rating">
              <span>Very good</span>
              <span>8.3</span>
              <span>361 reviews</span>
            </div>
            <button class="btn btn-primary">Show prices</button>
          </div>
        </div>
      </div>
      <div class="hotel-card-row">
        <div class="hotel-card">
          <div class="hotel-image">
            <img src="@/assets/image/myhotel/Glow Park Gramd Royal pala.jpg" alt="" />
            <div class="favorite-button" @click="toggleFavorite2">
              <i :class="['fas', 'favorite-icon', isFavorite2 ? 'fa-heart' : 'far fa-heart']"></i>
            </div>
          </div>
          <div class="hotel-info">
            <div class="hotel-name">
              <h3>Glow Park Gramd Royal pala</h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
              </div>
            </div>
            <p>Kampot, 4.7 km from centre</p>
            <p>
              Featuring pool views, Daya Villa in Kampot features accommodation, an outdoor swimming
              pool, a garden, a terrace, a bar and barbecue facilities.
            </p>
            <div class="hotel-rating">
              <span>Fabulous</span>
              <span>8.7</span>
              <span>3 reviews</span>
              <span>Location 10</span>
            </div>
            <button class="btn btn-primary">Show prices</button>
          </div>
        </div>
      </div>
    </div>

    <div class="feedback-bar">
      <div class="bg-white border rounded grid grid-cols-6 gap-2 rounded-xl p-2 text-sm shadow">
        <h1 class="text-center text-slate-200 text-xl font-bold col-span-6 text-dark">
          Send Feedback
        </h1>
        <textarea
          placeholder="Your feedback..."
          class="bg-slate-100 text-slate-600 h-28 placeholder:text-slate-600 placeholder:opacity-50 border border-slate-200 col-span-6 resize-none outline-none rounded-lg p-2 duration-300 focus:border-slate-600"
        ></textarea>
        <button
          class="fill-slate-600 col-span-1 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-100 hover:border-slate-600 focus:fill-blue-200 focus:bg-blue-400 border border-slate-200"
        >
          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
            <path
              d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
            ></path>
          </svg>
        </button>
        <button
          class="fill-slate-600 col-span-1 flex justify-center items-center rounded-lg p-2 duration-300 bg-slate-100 hover:border-slate-600 focus:fill-blue-200 focus:bg-blue-400 border border-slate-200"
        >
          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
            <path
              d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM174.6 384.1c-4.5 12.5-18.2 18.9-30.7 14.4s-18.9-18.2-14.4-30.7C146.9 319.4 198.9 288 256 288s109.1 31.4 126.6 79.9c4.5 12.5-2 26.2-14.4 30.7s-26.2-2-30.7-14.4C328.2 358.5 297.2 336 256 336s-72.2 22.5-81.4 48.1zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
            ></path>
          </svg>
        </button>
        <span class="col-span-2"></span>
        <button
          class="bg-slate-100 stroke-slate-600 border border-slate-200 col-span-2 flex justify-center rounded-lg p-2 duration-300 hover:border-slate-600 hover:text-white focus:stroke-blue-200 focus:bg-blue-400"
        >
          <svg
            fill="none"
            viewBox="0 0 24 24"
            height="30px"
            width="30px"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linejoin="round"
              stroke-linecap="round"
              stroke-width="1.5"
              d="M7.39999 6.32003L15.89 3.49003C19.7 2.22003 21.77 4.30003 20.51 8.11003L17.68 16.6C15.78 22.31 12.66 22.31 10.76 16.6L9.91999 14.08L7.39999 13.24C1.68999 11.34 1.68999 8.23003 7.39999 6.32003Z"
            ></path>
            <path
              stroke-linejoin="round"
              stroke-linecap="round"
              stroke-width="1.5"
              d="M10.11 13.6501L13.69 10.0601"
            ></path>
          </svg>
        </button>
      </div>
      <div
        data-bs-spy="scroll"
        data-bs-target=".list"
        class="feedback-list mt-4 bg-white p-3 border rounded shadow"
      >
        <h3 class="text-dark fw-bold">List Feedback</h3>
        <div class="list">
          <div class="border-top pt-2">
            <div class="feedback-profile d-flex">
              <img src="\src\assets\image\frog.jpg" alt="" class="profile" />
              <div class="ml-3">
                <h6 class="fw-bold m-0 p-0">Traveler</h6>
                <p class="m-0 p-0">Your service so good!</p>
              </div>
            </div>
          </div>
          <div class="border-top pt-2">
            <div class="feedback-profile d-flex">
              <img src="\src\assets\image\frog.jpg" alt="" class="profile" />
              <div class="ml-3">
                <h6 class="fw-bold m-0 p-0">Traveler</h6>
                <p class="m-0 p-0">Your service so good!</p>
              </div>
            </div>
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
      isFavorite1: false,
      isFavorite2: false
    }
  },
  methods: {
    toggleFavorite1() {
      this.isFavorite1 = !this.isFavorite1
    },
    toggleFavorite2() {
      this.isFavorite2 = !this.isFavorite2
    }
  }
}
</script>
<style>
* {
  color: black;
}
.container {
  gap: 20px;
}
.feedback-bar {
  width: 30%;
}
.feedback-profile .profile {
  width: 40px;
  height: 40px;
  border: none;
  border-radius: 100%;
}
.list {
  height: 45vh;
  overflow: auto;
}

.group_card {
  width: 70%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  gap: 20px;
  overflow: auto;
}

.hotel-card-row {
  width: 100%;
  display: flex;
}

.hotel-card {
  display: flex;
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  overflow: hidden;
}

.hotel-image {
  position: relative;
  width: 40%;
  padding: 30px;
}

.hotel-image img {
  width: 90%;
  height: 100%;
  object-fit: cover;
  border-radius: 5px;
}

.hotel-info {
  width: 60%;
  padding: 20px;
}

.hotel-name {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.rating i {
  color: #ffb400;
  font-size: 16px;
}

.hotel-rating {
  display: flex;
  align-items: center;
  margin-top: 10px;
}

.hotel-rating span {
  margin-right: 10px;
}

.btn {
  margin-top: 10px;
}

.favorite-button {
  position: absolute;
  top: 30px;
  right: 10px;
  background-color: #fff;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  transition: all 0.3s;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.favorite-button:hover {
  background-color: #e74c3c;
}

.favorite-icon {
  font-size: 18px;
  color: #ccc;
  transition: color 0.3s;
}

.favorite-button:hover .favorite-icon {
  color: #fff;
}

.favorite-button .favorite-icon.fa-heart {
  color: #e74c3c;
}
</style>