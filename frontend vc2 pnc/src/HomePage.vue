<template>
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
    <h3 class="m-4 text-center">Famouse Plces</h3>
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
    <h3 class="m-4 text-center">Famous Hotel</h3>
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
</style>