<template>
  <h1>HOTELS LIST</h1>
  <div class="container">
    <div class="hotel-card-row">
      <div class="hotel-card">
        <div class="hotel-image">
          <img src="@/assets/image/myhotel/HM Grand Central Hotel.jpg" alt="" />
          <div class="favorite-button" @click="toggleFavorite1">
            <i
              :class="['fa', 'favorite-icon', isFavorite1 ? 'fa-heart' : 'far fa-heart']"
            ></i>
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
          <p>Kampot Sunny Hotel features a fitness centre, garden, a shared lounge and restaurant in Kampot. With free WiFi, this 3-star hotel offers room service and a 24-hour front desk.</p>
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
            <i
              :class="['fas', 'favorite-icon', isFavorite2 ? 'fa-heart' : 'far fa-heart']"
            ></i>
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
          <p>Featuring pool views, Daya Villa in Kampot features accommodation, an outdoor swimming pool, a garden, a terrace, a bar and barbecue facilities.</p>
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
</template>

<script>
export default {
  data() {
    return {
      isFavorite1: false,
      isFavorite2: false,
    };
  },
  methods: {
    toggleFavorite1() {
      this.isFavorite1 = !this.isFavorite1;
    },
    toggleFavorite2() {
      this.isFavorite2 = !this.isFavorite2;
    },
  },
};
</script>
<style>
.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.hotel-card-row {
  width: 100%;
  display: flex;
  justify-content: center;
}

.hotel-card {
  display: flex;
  background-color: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  overflow: hidden;
  width: 80%;
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