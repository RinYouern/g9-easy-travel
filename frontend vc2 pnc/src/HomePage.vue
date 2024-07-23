<template>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link
    rel="stylesheet"
    href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
  />
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css" />
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top shadow round">
      <div class="container">
        <a class="navbar-brand" style="margin-left: 5%" href="#"
          ><img style="width: 90px" src="/src/assets/image/logo2.png" />
            style="font-size: 25px; color: orange"
           
        </a>
        <div class="d-flex" style="margin-right: 7%">
          <a href="/login">
            <button class="btn btn-primary mx-4">
              <i class="fa fa-user" style="padding: 5px"></i>Login
            </button>
          </a>
          <a href="/register"
            ><button class="btn btn-primary">
              <i class="fa fa-edit" style="padding: 5px"></i>Register
            </button></a
          >
        </div>
      </div>
    </nav>
    <main class="bg-image">
      <div class="text-overlay">
        <div class="text-bg-black">
          <h2>Welcome to <strong style="color: orange">Easy-Travel</strong></h2>
          <p>
            <strong style="color: orange">EasyTravel</strong> offers the largest selection of online
            booking for bus tickets at the best prices in Cambodia. With numerous bus departures on
            a daily basis across Cambodia, we are proud to offer a vast selection of online bus
            tickets and bus service booking options to take you to all of your favourite
            destinations.
          </p>
        </div>
      </div>
    </main>
    <div class="title-des">
      <h3 class="m-4 text-center text-dark" style="color:black;font-size:30px ">Featured Tours in Cambodia</h3>
      <p class="text-dark text-center mb-4">
        Most popular choices for travellers from Cambodia. These popular destinations have a lot to
        offer
      </p>
    </div>
    <div class="container image-list">
      <div class="image-item item1">
        <img
          src="https://www.khmertimeskh.com/wp-content/uploads/2022/03/Angkor-Wat-Equinox-expected-to-draw-crowds.jpg"
          alt="Image 1"
        />
        <div class="caption">Angkor Wat in Siem reap</div>
      </div>
      <div class="image-item item2">
        <img
          src="https://d13jio720g7qcs.cloudfront.net/images/destinations/origin/5d89daa658750.jpg"
          alt="Image 2"
        />
        <div class="caption">Koh Kae in Preas Vihear</div>
      </div>
      <div class="image-item item3">
        <img
          src="https://image.freshnewsasia.com/2018/10/fn-2018-07-10-11-06-16-0.jpg"
          alt="Image 3"
        />
        <div class="caption">Preas Vihear Temple</div>
      </div>
      <div class="image-item item4">
        <img
          src="https://ucarecdn.com/4cc71750-d4cc-4ba4-a1dd-63c81e6bdd24/-/crop/737x415/1,0/-/preview/"
          alt="Image 4"
        />
        <div class="caption">Bayon temple in Siem reap</div>
      </div>
    </div>
    <div class="title-des">
      <h3 class="m-4 text-center text-dark" style="color:black;font-size:30px ">Browse by property type</h3>
      <p class="text-dark text-center mb-4">
        Pick your point of interest and find a hotel nearby
      </p>
    </div>
    <div class="container">
      <div class="row" >
        <div class="hotel-card">
          <div class="image-container">
            <img
              src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2017/07/23/1312/Park-Hyatt-Siem-Reap-P143-Park-View-King.jpg/Park-Hyatt-Siem-Reap-P143-Park-View-King.16x9.jpg?imwidth=1920"
              alt="Hotel"
            />
            <button class="heart-button text-dark bg-white">&#x2661;</button>
            <div class="rating">
              <span class="rating-score">3.7</span> Good <span class="reviews">(620 Reviews)</span>
            </div>
          </div>
          <div class="hotel-info">
            <h2 class="hotel-name">Park Hyatt Siem Reap</h2>
            <p class="hotel-category">Siem Reap, Cambodia<span class="stars">★★★★★</span></p>
            <ul class="amenities">
              <li>Garden . Internet / Wifi. Parking</li>
              
            </ul>
            <div class="price">KHR 84,399</div>
            <a href="/" class="view-deal">View deal</a>
          </div>
        </div>

        <div class="hotel-card">
          <div class="image-container">
            <img
              src="https://cache.marriott.com/content/dam/marriott-renditions/PNHCY/pnhcy-guestroom-2884-hor-wide.jpg?output-quality=70&interpolation=progressive-bilinear&downsize=1336px:*"
              alt="Hotel"
            />
            <button class="heart-button text-dark bg-white">&#x2661;</button>
            <div class="rating">
              <span class="rating-score">3.7</span> Good <span class="reviews">(620 Reviews)</span>
            </div>
          </div>
          <div class="hotel-info">
            <h2 class="hotel-name">Courtyard Phnom Penh</h2>
            <p class="hotel-category">Phnom Penh, Cambodia<span class="stars">★★★</span></p>
            <ul class="amenities">
              <li>Internet / Wifi</li>
             
            </ul>
            <div class="price">KHR 592,012</div>
            <a href="" class="view-deal">View deal</a>
          </div>
        </div>

        <div class="hotel-card">
          <div class="image-container">
            <img
              src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2017/07/23/1312/Park-Hyatt-Siem-Reap-P143-Park-View-King.jpg/Park-Hyatt-Siem-Reap-P143-Park-View-King.16x9.jpg?imwidth=1920"
              alt="Hotel"
            />
            <button class="heart-button text-dark bg-white">&#x2661;</button>
            <div class="rating">
              <span class="rating-score">8.1</span>Very Good <span class="reviews">(313 Reviews)</span>
            </div>
          </div>
          <div class="hotel-info">
            <h2 class="hotel-name">Frangipani Royal Palace Hotel</h2>
            <p class="hotel-category">Phnom Penh, Cambodia<span class="stars">★★★</span></p>
            <ul class="amenities">
              <li>Internet / Wifi</li>
              
            </ul>
            <div class="price">$44</div>
            <a href="" class="view-deal">View deal</a>
          </div>
        </div>
        <div class="hotel-card">
          <div class="image-container">
            <img
              src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/420254973.jpg?k=ef0ddf81a60bdcb7e09a8d7d82ccb8a4af8a45f95abee35bf48c32d2c0c6b1a0&o=&hp=1"
              alt="Hotel"
            />
            <button class="heart-button text-dark bg-white" >&#x2661;</button>
            <div class="rating">
              <span class="rating-score">3.7</span> Good <span class="reviews">(620 Reviews)</span>
            </div>
          </div>
          <div class="hotel-info">
            <h2 class="hotel-name">Sun & Moon, Riverside Hotel</h2>
            <p class="hotel-category">Phnom Penh, Cambodia<span class="stars">★★★★★</span></p>
            <ul class="amenities">
              <li>Internet / Wifi</li>
              
            </ul>
            <div class="price"> KHR 357,320</div>
            <a href="" class="view-deal">View deal</a>
          </div>
        </div>
        <div class="hotel-card">
          <div class="image-container">
            <img
              src="https://images.trvl-media.com/lodging/88000000/87390000/87387400/87387315/65c55b71.jpg?impolicy=fcrop&w=1200&h=800&p=1&q=medium"
              alt="Hotel"
            />
            <button class="heart-button text-dark bg-white">&#x2661;</button>
            <div class="rating">
              <span class="rating-score">3.7</span> Good <span class="reviews">(620 Reviews)</span>
            </div>
          </div>
          <div class="hotel-info">
            <h2 class="hotel-name">Sunshine Hotel</h2>
            <p class="hotel-category">Phnom Penh, Cambodia<span class="stars">★★★</span></p>
            <ul class="amenities">
              <li>Internet / Wifi</li>
              
            </ul>
            <div class="price"> KHR 12,000</div>
            <a href="" class="view-deal">View deal</a>
          </div>
        </div>
        <div class="hotel-card">
          <div class="image-container">
            <img
              src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/24/86/65/6c/family-suite-room-with.jpg?w=700&h=-1&s=1"
              alt="Hotel"
            />
            <button class="heart-button text-dark bg-white">&#x2661;</button>
            <div class="rating">
              <span class="rating-score">3.7</span> Good <span class="reviews">(620 Reviews)</span>
            </div>
          </div>
          <div class="hotel-info">
            <h2 class="hotel-name">Montagne Residence</h2>
            <p class="hotel-category">Krong Kampot, Cambodia<span class="stars">★★★</span></p>
            <ul class="amenities">
              <li>Internet / Wifi</li>
              
            </ul>
            <div class="price">KHR 139,120</div>
            <a href="" class="view-deal">View deal</a>
          </div>
        </div>
        <div class="hotel-card">
          <div class="image-container">
            <img
              src="https://content.r9cdn.net/rimg/himg/9f/85/19/expedia_group-116488-187475273-504639.jpg?width=1020&height=1020&xhint=540&yhint=333&crop=true&watermarkheight=28&watermarkpadding=10"
              alt="Hotel"
            />
            <button class="heart-button text-dark bg-white">&#x2661;</button>
            <div class="rating">
              <span class="rating-score">7.4</span> Good <span class="reviews">(106 Reviews)</span>
            </div>
          </div>
          <div class="hotel-info">
            <h2 class="hotel-name">Phnom Penh Hotel</h2>
            <p class="hotel-category">Monivong Boulevard, Phnom Penh<span class="stars">★★★★</span></p>
            <ul class="amenities">
              <li>Internet / Wifi</li>
              
            </ul>
            <div class="price">$45</div>
            <a href="" class="view-deal">View deal</a>
          </div>
        </div>
        <div class="hotel-card">
          <div class="image-container">
            <img
              src="https://www.kayak.com/rimg/himg/6f/ce/32/expedia_group-4706593-026e21-283493.jpg?width=968&height=607&crop=true"
              alt="Hotel"
            />
            <button class="heart-button text-dark bg-white">&#x2661;</button>
            <div class="rating">
              <span class="rating-score">8.4</span>Very Good <span class="reviews">(3,045 Reviews)</span>
            </div>
          </div>
          <div class="hotel-info">
            <h2 class="hotel-name">Hm Grand Central Hotel</h2>
            <p class="hotel-category"> Village II, Phnom Penh <span class="stars">★★★★</span></p>
            <ul class="amenities">
              <li>Internet / Wifi/ TV</li>
              
            </ul>
            <div class="price">$33</div>
            <a href="" class="view-deal">View deal</a>
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
        <h3 style="font-size: 50px">Easy<span style="font-size: 50px">Travel</span></h3>

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
          <strong>Easy Travel</strong> is a website that provides information about travel
          information for the company that is responsible for traveling in Cambodia.
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
.bg-image {
  background-image: url('/src/assets/image/car/background.jpeg');
  background-size: cover;
  background-position: center;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
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
  background-color: rgba(0, 0, 0, 0.121);
  padding: 1.5rem;
  border-radius: 0.5rem;
}

.text-bg-black h2 {
  font-size: 60px;
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
/*place*/
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
  color: white;
  font-size: 25px;
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
/*hotel*/
.hotel-card {
  width: 350px;
  border: 1px solid #ddd;
  border-radius: 8px;
  margin: 14px;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  font-family: Arial, sans-serif;
  display: flex;
  flex-direction: column;
  transition:
    transform 0.3s,
    box-shadow 0.3s;
}
.hotel-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}
.image-container {
  position: relative;
  width: 100%;
  height: 180px;
  overflow: hidden;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.heart-button {
  position: absolute;
  top: 8px;
  right: 8px;
  background: none;
  border: none;
  font-size: 24px;
  color: #fff;
  cursor: pointer;
}

.rating {
  position: absolute;
  bottom: 8px;
  left: 8px;
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
  padding: 2px 6px;
  border-radius: 4px;
  font-size: 0.8em;
  display: flex;
  align-items: center;
}

.rating-score {
  background-color: orange;
  color: white;
  padding: 2px 6px;
  border-radius: 4px;
  margin-right: 4px;
  font-weight: bold;
}

.reviews {
  font-size: 0.7em;
  margin-left: 4px;
}

.hotel-info {
  padding: 16px;
}

.hotel-name {
  margin: 0;
  font-size: 1.2em;
  font-weight: bold;
  color: #333;
  margin-bottom: 8px;
}

.hotel-category {
  margin: 8px 0;
  color: #666;
  font-size: 0.9em;
  display: flex;
  align-items: center;
}

/* Heart button */
.heart-button {
  width: 40px;
  border-radius: 100%;
}

.stars {
  margin-left: 8px;
  color: #ffb400;
  font-size: 1em;
}

.amenities {
  list-style: none;
  padding: 0;
  margin: 8px 0;
  font-size: 0.9em;
  color: #666;
}

.amenities li {
  margin: 4px 0;
}

.price {
  margin: 8px 0;
  font-size: 1em;
  color: #666;
  display: flex;
  align-items: center;
}

.add-dates {
  margin-left: 8px;
  color: #0073e6;
  text-decoration: none;
}

.add-dates:hover {
  text-decoration: underline;
}

.view-deal {
  display: block;
  width: 100%;
  text-align: center;
  background: #0073e6;
  color: #fff;
  padding: 10px 0;
  border-radius: 4px;
  text-decoration: none;
  font-size: 1em;
  margin-top: 12px;
}

.view-deal:hover {
  background: #005bb5;
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
  font:
    normal 36px 'Cookie',
    cursive;
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
