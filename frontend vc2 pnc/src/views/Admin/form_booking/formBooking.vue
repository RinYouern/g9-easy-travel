<template>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="container">
    <form action="">
      <div class="row">
        <div class="column">
          <h3 class="title">Booking Payment</h3>
          <div class="input-box">
            <span>Name : Laty</span>
            <!-- <input type="text" placeholder="Name" /> -->
          </div>
          <div class="input-box">
            <span>Email : tyty@ggm.com</span>
            <!-- <input type="email" placeholder="Email" /> -->
          </div>
          <div class="input-box">
            <span>Price : $500</span>
            <!-- <input type="price" placeholder="price" /> -->
          </div>
          <div class="input-box">
            <span>Phone Number : 0884321539</span>
            <!-- <input type="number" placeholder="Phone number" /> -->
          </div>
          <div class="input-box">
            <span>Destination : Banteay Mean Chey</span>
            <!-- <input type="text" placeholder="Destination" /> -->
          </div>
          <div class="input-box">
            <span>Check in : 22 July 2024</span>
            <div class="date-input">
              <!-- <input type="date" placeholder="" /> -->
            </div>
          </div>
          <div class="input-box">
            <span>Check out : 1 Aug 2024</span>
            <div class="date-input">
              <!-- <input type="date" placeholder="" /> -->
            </div>
          </div>
        </div>
        <div class="column">
          <h3 class="title">Payment</h3>
          <div class="input-box">
            <span>Cards Accepted :</span>
            <img src="/src/assets/image/form/imgcards.png" alt="" width="80%" height="auto">
          </div>
          <div class="input-box">
            <span>Name On Card :</span>
            <input type="text" placeholder="Name" />
          </div>
          <div class="input-box">
            <span>Credit Card Number :</span>
            <input type="number" placeholder="Number" />
          </div>
          <div class="flex">
            <div class="input-box">
              <span>Zip Code</span>
              <input type="number" placeholder="Number" />
            </div>
            <div class="input-box">
              <span>CVV</span>
              <input type="number" placeholder="Number" />
            </div>
          </div>
        </div>
      </div>
      <a href="/success_form" class="btn">submit
      </a>
    </form>
  </div>
</template>

<script>
export default {}
</script>

<style>
body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #000;
}
.container form{
    width: 700px;
    padding: 40px;
    background: #fff;
    border-radius: 10px;
}
form .row{
    display: flex;
    gap: 15px;
}
.date-input {
  position: relative;
}

.date-input input {
  padding-right: 30px;
}

.date-input i {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  color: #ccc;
  pointer-events: none;
}
.row .column{
    flex: 1 1 250px;
}
.column .title{
    font-size: 20px;
    color: black;
    text-transform: uppercase;
    margin-bottom: 5px;
}
.input-box img{
    width: 250px;
    height: 40px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px black);
    /* margin-left: -70px; */
}
.column .input-box{
    margin: 15px 0;
}
.input-box span{
    display: block;
    margin-bottom: 5px;
}
.input-box input{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 15px;
}
.column .flex{
    display: flex;
    gap: 15px;
}
.flex .input-box{
    margin-top: 5px;
}
form .btn{
    width: 100%;
    padding: 12px;
    background: #007bff;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 6px;
    font-size: 17px;
    cursor: pointer;
    margin-top: 5px;
    transition: .5s;
}

form .btn:hover{
    background:purple;
    color: white;
}


</style>