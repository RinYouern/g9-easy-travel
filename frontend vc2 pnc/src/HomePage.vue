<template>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css" />
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top shadow round">
      <div class="container">
        <a class="navbar-brand" style="margin-left: 5%" href="#"><img style="width: 90px"
            src="/src/assets/image/logo2.png" /></a>
        <div class="d-flex" style="margin-right: 7%">
          <a href="/login"> <button class="btn btn-primary mx-4">Login</button> </a>
          <a href="/register"><button class="btn btn-outline-primary">Register</button></a>
        </div>
      </div>
    </nav>
    <main class="bg-image">
      <div class="text-overlay">
        <div class="text-bg-black">
          <h2>Welcome to our website</h2>
          <p>Book trips and explore new destinations with ease from anywhere</p>
        </div>
      </div>
    </main>
    <div class="title-des">
      <h3 class="m-4 text-center text-dark">Featured Tours in Cambodia</h3>
      <p class="text-dark text-center mb-4">
        Explore Cambodia's ancient temples, scenic landscapes, and rich culture with our curated
        tours. <br />Let our expert guides lead you on an unforgettable adventure through this
        remarkable Southeast Asian destination.
      </p>
    </div>
    <div class="container image-list">
      <div class="image-item item1">
        <img
          src="https://www.khmertimeskh.com/wp-content/uploads/2022/03/Angkor-Wat-Equinox-expected-to-draw-crowds.jpg"
          alt="Image 1" />
        <div class="caption">Angkor Wat in Siem reap</div>
      </div>
      <div class="image-item item2">
        <img src="https://d13jio720g7qcs.cloudfront.net/images/destinations/origin/5d89daa658750.jpg" alt="Image 2" />
        <div class="caption">Koh Kae in Preas Vihear</div>
      </div>
      <div class="image-item item3">
        <img src="https://image.freshnewsasia.com/2018/10/fn-2018-07-10-11-06-16-0.jpg" alt="Image 3" />
        <div class="caption">Preas Vihear Temple</div>
      </div>
      <div class="image-item item4">
        <img src="https://ucarecdn.com/4cc71750-d4cc-4ba4-a1dd-63c81e6bdd24/-/crop/737x415/1,0/-/preview/"
          alt="Image 4" />
        <div class="caption">Bayon temple in Siem reap</div>
      </div>
    </div>
    <div class="title-des">
      <h3 class="m-4 text-center text-dark">Go beyond your typical</h3>
      <p class="text-dark text-center mb-4">
        Our hotel offers a unique travel experience with luxurious amenities, exquisite dining, and
        personalized service in a prime location.<br />
        Whether for business or leisure, discover comfort and elegance that goes beyond
        expectations.
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="hotel-card card border">
            <img src="https://z.cdrst.com/foto/hotel-sf/54bab/granderesp/moonlight-resort-general-7c5a392.jpg"
              alt="Hotel 1" class="hotel-image card-img-top" />
            <div class="card-body">
              <h3 class="hotel-name card-title">Moonlight Resort</h3>
              <p class="hotel-location card-text">KR 12,000</p>
              <p class="hotel-rating card-text">4.6 <i class="fa fa-star" style="color:orange;"></i>(51)</p>
              <p class="hotel-description card-text">Koh Rong Samleom</p>
              <button class="btn btn-primary btn-detail">See availability</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="hotel-card card border">
            <img
              src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2017/07/23/1312/Park-Hyatt-Siem-Reap-P143-Park-View-King.jpg/Park-Hyatt-Siem-Reap-P143-Park-View-King.16x9.jpg?imwidth=1920"
              alt="Hotel 2" class="hotel-image card-img-top" />
            <div class="card-body">
              <h3 class="hotel-name card-title">Park Hyatt Siem Reap</h3>
              <p class="hotel-location card-text">KHR 84,399</p>
              <p class="hotel-rating card-text">4.5 <i class="fa fa-star" style="color:orange;"></i>(70)</p>
              <p class="hotel-description card-text">Siem Reap, Cambodia</p>
              <button class="btn btn-primary btn-detail">See availability</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="hotel-card card border">
            <img
              src="https://cache.marriott.com/content/dam/marriott-renditions/PNHCY/pnhcy-guestroom-2884-hor-wide.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=1336px:*"
              alt="Hotel 2" class="hotel-image card-img-top" />
            <div class="card-body">
              <h3 class="hotel-name card-title">Courtyard Phnom Penh</h3>
              <p class="hotel-location card-text">KHR 592,012</p>
              <p class="hotel-rating card-text">4.4 <i class="fa fa-star" style="color:orange;"></i>(614)</p>
              <p class="hotel-description card-text">Phnom Penh, Cambodia</p>
              <button class="btn btn-primary btn-detail">See availability</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="hotel-card card border">
            <img
              src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/420254973.jpg?k=ef0ddf81a60bdcb7e09a8d7d82ccb8a4af8a45f95abee35bf48c32d2c0c6b1a0&o=&hp=1"
              alt="Hotel 1" class="hotel-image card-img-top" />
            <div class="card-body">
              <h3 class="hotel-name card-title">Sun & Moon, Riverside Hotel</h3>
              <p class="hotel-location card-text">KHR 357,320</p>
              <p class="hotel-rating card-text">4.5 <i class="fa fa-star" style="color:orange;"></i>(272)</p>
              <p class="hotel-description card-text">Phnom Penh, Cambodia</p>
              <button class="btn btn-primary btn-detail">See availability</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="hotel-card card border">
            <img
              src="https://images.trvl-media.com/lodging/88000000/87390000/87387400/87387315/65c55b71.jpg?impolicy=fcrop&w=1200&h=800&p=1&q=medium"
              alt="Hotel 1" class="hotel-image card-img-top" />
            <div class="card-body">
              <h3 class="hotel-name card-title">Sunshine Hotel</h3>
              <p class="hotel-location card-text">KHR 12,000</p>
              <p class="hotel-rating card-text">7.5 <i class="fa fa-star" style="color:orange;"></i></p>
              <p class="hotel-description card-text">Phnom Penh, Cambodia</p>
              <button class="btn btn-primary btn-detail">See availability</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="hotel-card card border">
            <img
              src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/24/86/65/6c/family-suite-room-with.jpg?w=700&h=-1&s=1"
              alt="Hotel 1" class="hotel-image card-img-top" />
            <div class="card-body">
              <h3 class="hotel-name card-title">Montagne Residence</h3>
              <p class="hotel-location card-text">139,120</p>
              <p class="hotel-rating card-text">4.8 <i class="fa fa-star" style="color:orange;"></i>(22)</p>
              <p class="hotel-description card-text">Krong Kampot, Cambodia</p>
              <button class="btn btn-primary btn-detail">See availability</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.013908327777!2d104.88050867470945!3d11.550859788648934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles%20num%C3%A9riques%20Cambodia%20(PNC)!5e0!3m2!1sen!2skh!4v1693396053804!5m2!1sen!2skh"
      width="1000" height="600" style="border: 0" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

    <footer class="footer-distributed">
      <div class="footer-left">
        <h3>Easy<span>Travel</span></h3>

        <p class="footer-links">
          <a href="#">Home</a>
          |
          <a href="#">About</a>
          |
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Copyright © 2024 <strong>EasyTravel</strong></p>
      </div>

      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Phnom Penh, Cambodia</span></p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+885-43-21-539</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:sagar00001.co@gmail.com">easytravel@gmail.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>Contact Information</span>
          <strong>Easy Travel</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Iste, tempora natus fuga eos alias nobis.
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
export default {}
</script>

<style scoped>

.modal {
  display: block;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}

.close-button {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close-button:hover,
.close-button:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.bg-image {
  background-image: url('https://www.getvisavietnam.com/wp-content/uploads/2023/10/Angkor-Wat-Cambodia.jpg');
  background-size: cover;
  background-position: center;
  height: 85vh;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.text-overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.text-bg-black {
  background-color: rgba(0, 0, 0, 0.6);
  padding: 1.5rem;
  border-radius: 0.5rem;
}

.text-bg-black h2 {
  font-size: 3rem;
  margin-bottom: 1rem;
}

.text-bg-black p {
  font-size: 1.5rem;
}

.item1 {
  grid-area: item1;
}

.item2 {
  grid-area: item2;
}

.item3 {
  grid-area: item3;
}

.item4 {
  grid-area: item4;
}

.image-list {
  display: grid;
  grid-template-areas:
    'item1 item2 item2 item2 item4'
    'item1 item3 item3 item3 item4';
  gap: 10px;
  padding: 10px;
  height: 70vh;
  width: 100%;
}

.image-list .image-item {
  text-align: center;
  position: relative;
  overflow: hidden;
}

.image-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease-in-out;
}

.image-item .caption {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 10px;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.image-item:hover img {
  transform: scale(1.1);
}

.image-item:hover .caption {
  opacity: 1;
}

.hotel-card {
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s, box-shadow 0.3s;
}

.hotel-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.hotel-image {
  transition: transform 0.3s, box-shadow 0.3s;
}

.hotel-card:hover .hotel-image {
  transform: scale(1.05);
}

/*google maps*/

iframe {
  width: 100%;
  margin-top: 20px;
}

.mapouter {
  width: 100%;
}

.gmap_canvas {
  background: none;
  width: 100%;
  height: 400px;
}

.gmap_iframe {
  width: 600px;
  height: 400px;
}

.google-map h1 {
  text-align: center;
  padding: 20px;
}

/*footer*/

.footer-distributed {
  background-color: #060607;
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 50px 50px 60px 50px;
  margin-top: 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
  width: 30%;
}

.footer-distributed h3 {
  color: #ffffff;
  font: normal 36px 'Cookie', cursive;
  margin: 0;
}

.footer-distributed h3 span {
  color: #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links {
  color: #ffffff;
  margin: 20px 0 12px;
}

.footer-distributed .footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
}

.footer-distributed .footer-company-name {
  color: #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
  width: 35%;
}

.footer-distributed .footer-center i {
  background-color: #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin: 0;
}

.footer-distributed .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer-distributed .footer-center p a {
  color: #e0ac1c;
  text-decoration: none;
}

/* Footer Right */

.footer-distributed .footer-right {
  width: 30%;
}

.footer-distributed .footer-company-about {
  line-height: 20px;
  color: #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span {
  display: block;
  color: #ffffff;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-icons {
  display: flex;
  justify-content: center;
  margin-right: 210px;
  margin-top: 15px;
}

.footer-right .footer-icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 2px;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 36px;
  margin-right: 3px;
  margin-bottom: 5px;
}

.footer-icons a:hover {
  background-color: #333;
}

.footer-icons {
  display: flex;
  justify-content: center;
}

.footer-icons a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin: 5px;
  background-color: #5a5656;
  color: #fff;
  text-decoration: none;
}

.gold-icon {
  background-color: gold;
}

.footer-icons a:hover {
  background-color: #333;
}

.item1 {
  grid-area: item1;
}

.item2 {
  grid-area: item2;
}

.item3 {
  grid-area: item3;
}

.item4 {
  grid-area: item4;
}

.image-list {
  display: grid;
  grid-template-areas:
    'item1 item2 item2 item4'
    'item1 item3 item3 item4';
  gap: 10px;
  padding: 10px;
}

.image-list .image-item {
  text-align: center;
}
</style>
