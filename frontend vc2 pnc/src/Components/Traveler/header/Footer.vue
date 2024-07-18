<template>
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
        <strong>Easy Travel</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
        tempora natus fuga eos alias nobis.
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
</template>

<script>
export default {}
</script>

<style>
/*footer*/

.footer-distributed {
  background-color: #060607;
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 50px 50px 60px 50px;
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
.footer-distributed .footer-center i:hover {
  background-color: white;
  color: black;
}

.footer-distributed .footer-center p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin: 0;
}
.footer-distributed .footer-center p:hover {
  color: orange;
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
  background-color: white;
  color: black;
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