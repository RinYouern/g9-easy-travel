<template>
  <link
    rel="stylesheet"
    href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
  />
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css" />
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
      <div class="container">
        <a class="navbar-brand" style="margin-left: 7%" href="#"
          ><img src="/src/assets/image/logo.png"
        /></a>
        <div class="d-flex" style="margin-right: 7%">
          <a href="/login"> <button class="btn btn-primary mx-4">Login</button> </a>
          <a href="/register"><button class="btn btn-primary">Register</button></a>
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
    <h3 class="m-4 text-center text-dark">Famouse Plces</h3>
    <div class="container image-list">
      <div class="image-item">
        <img
          src="https://i.pinimg.com/474x/9e/99/59/9e99598e000183c79910463f1d156cf7.jpg"
          alt="Image 1"
        />
        <div class="caption">Caption for Image 1</div>
      </div>
      <div class="image-item">
        <img
          src="https://i.pinimg.com/474x/b2/a7/39/b2a7392c3c8d52d1f88f3a1fa28417b5.jpg"
          alt="Image 2"
        />
        <div class="caption">Caption for Image 2</div>
      </div>
      <div class="image-item">
        <img
          src="https://i.pinimg.com/474x/84/1f/2a/841f2a1a17f99e8f7025f436d8f6f1ed.jpg"
          alt="Image 3"
        />
        <div class="caption">Caption for Image 3</div>
      </div>
      <div class="image-item">
        <img
          src="https://i.pinimg.com/474x/91/42/55/91425598c15b3aa089fe49b20bd03b9a.jpg"
          alt="Image 4"
        />
        <div class="caption">Caption for Image 4</div>
      </div>
      <div class="image-item">
        <img
          src="https://i.pinimg.com/564x/75/2e/7b/752e7be6b7faba58beb80f3c6bd7c15f.jpg"
          alt="Image 4"
        />
        <div class="caption">Caption for Image 5</div>
      </div>
      <div class="image-item">
        <img
          src="https://i.pinimg.com/474x/42/72/e6/4272e68edfa1462383a3812b610d3bd3.jpg"
          alt="Image 4"
        />
        <div class="caption">Caption for Image 6</div>
      </div>
      <div class="image-item">
        <img
          src="https://i.pinimg.com/474x/c9/64/f0/c964f06db57b765f3042a6f081d20757.jpg"
          alt="Image 4"
        />
        <div class="caption">Caption for Image 7</div>
      </div>
      <div class="image-item">
        <img
          src="https://i.pinimg.com/564x/19/11/30/191130b286712105e16dc111ceadea22.jpg"
          alt="Image 4"
        />
        <div class="caption">Caption for Image 4</div>
      </div>
    </div>
    <h3 class="m-4 text-center text-dark">Famous Hotel</h3>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="hotel-card card border">
            <img
              src="https://i.pinimg.com/474x/30/2e/ce/302ece7e47bb0d368226a8787ac787aa.jpg"
              alt="Hotel 1"
              class="hotel-image card-img-top"
            />
            <div class="card-body">
              <h3 class="hotel-name card-title">Hotel Grand Plaza</h3>
              <p class="hotel-location card-text">New York, USA</p>
              <p class="hotel-rating card-text">4.8 <i class="fas fa-star"></i></p>
              <p class="hotel-description card-text">
                Experience the best of New York City at Hotel Grand Plaza, located in the heart of
                the city.
              </p>
              <button class="btn btn-primary btn-detail">Show Details</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="hotel-card card border">
            <img
              src="https://i.pinimg.com/474x/d6/64/27/d664276e8403041c0f8ee72ce98364dd.jpg"
              alt="Hotel 2"
              class="hotel-image card-img-top"
            />
            <div class="card-body">
              <h3 class="hotel-name card-title">Oceanview Resort</h3>
              <p class="hotel-location card-text">Bali, Indonesia</p>
              <p class="hotel-rating card-text">4.5 <i class="fas fa-star"></i></p>
              <p class="hotel-description card-text">
                Relax and unwind at the Oceanview Resort, nestled in the beautiful beaches of Bali.
              </p>
              <button class="btn btn-primary btn-detail">Show Details</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="hotel-card card border">
            <img
              src="https://i.pinimg.com/474x/d6/64/27/d664276e8403041c0f8ee72ce98364dd.jpg"
              alt="Hotel 2"
              class="hotel-image card-img-top"
            />
            <div class="card-body">
              <h3 class="hotel-name card-title">Oceanview Resort</h3>
              <p class="hotel-location card-text">Bali, Indonesia</p>
              <p class="hotel-rating card-text">4.5 <i class="fas fa-star"></i></p>
              <p class="hotel-description card-text">
                Relax and unwind at the Oceanview Resort, nestled in the beautiful beaches of Bali.
              </p>
              <button class="btn btn-primary btn-detail">Show Details</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="hotel-card card border">
            <img
              src="https://i.pinimg.com/474x/30/2e/ce/302ece7e47bb0d368226a8787ac787aa.jpg"
              alt="Hotel 1"
              class="hotel-image card-img-top"
            />
            <div class="card-body">
              <h3 class="hotel-name card-title">Hotel Grand Plaza</h3>
              <p class="hotel-location card-text">New York, USA</p>
              <p class="hotel-rating card-text">4.8 <i class="fas fa-star"></i></p>
              <p class="hotel-description card-text">
                Experience the best of New York City at Hotel Grand Plaza, located in the heart of
                the city.
              </p>
              <button class="btn btn-primary btn-detail">Show Details</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="hotel-card card border">
            <img
              src="https://i.pinimg.com/474x/30/2e/ce/302ece7e47bb0d368226a8787ac787aa.jpg"
              alt="Hotel 1"
              class="hotel-image card-img-top"
            />
            <div class="card-body">
              <h3 class="hotel-name card-title">Hotel Grand Plaza</h3>
              <p class="hotel-location card-text">New York, USA</p>
              <p class="hotel-rating card-text">4.8 <i class="fas fa-star"></i></p>
              <p class="hotel-description card-text">
                Experience the best of New York City at Hotel Grand Plaza, located in the heart of
                the city.
              </p>
              <button class="btn btn-primary btn-detail">Show Details</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="hotel-card card border">
            <img
              src="https://i.pinimg.com/474x/30/2e/ce/302ece7e47bb0d368226a8787ac787aa.jpg"
              alt="Hotel 1"
              class="hotel-image card-img-top"
            />
            <div class="card-body">
              <h3 class="hotel-name card-title">Hotel Grand Plaza</h3>
              <p class="hotel-location card-text">New York, USA</p>
              <p class="hotel-rating card-text">4.8 <i class="fas fa-star"></i></p>
              <p class="hotel-description card-text">
                Experience the best of New York City at Hotel Grand Plaza, located in the heart of
                the city.
              </p>
              <button class="btn btn-primary btn-detail">Show Details</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.013908327777!2d104.88050867470945!3d11.550859788648934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles%20num%C3%A9riques%20Cambodia%20(PNC)!5e0!3m2!1sen!2skh!4v1693396053804!5m2!1sen!2skh"
      width="1000"
      height="600"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>

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

        <p class="footer-company-name">
          Copyright © 2024 <strong>EasyTravel</strong> All rights reserved
        </p>
      </div>

      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Phnom Penh</span> Cambodia</p>
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
          <strong>Easy Travel</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, tempora natus fuga eos alias nobis.
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

<style>
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
  background-image: url('src/assets/image/angkor.png');
  background-size: cover;
  background-position: center;
  height: 85vh;
  display: flex;
  justify-content: center;
  align-items: center;
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

.image-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-gap: 20px;
}

.image-item {
  position: relative;
  overflow: hidden;
}

.image-item img {
  width: 100%;
  height: 300px;
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

.footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
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
    border-radius: 50%;
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
    ;
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

.footer-distributed .footer-icons {
    margin-top: 25px;
}

.footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}

.footer-distributed .footer-icons a:hover {
    background-color: #3F71EA;
}

.footer-links a:hover {
    color: #3F71EA;
}


     
</style>
