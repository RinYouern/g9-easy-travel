<template>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="container">
    <form action="">
        <div class="row">
      <div class="column">
        <h3 class="title">Travel Booking</h3>
        <div class="input-box">
          <span>Full Name :</span>
          <input type="text" placeholder="Name" />
        </div>
        <div class="input-box">
          <span>Email :</span>
          <input type="email" placeholder="Email" />
        </div>
        <div class="input-box">
          <span>Phone Number :</span>
          <input type="number" placeholder=" phone number" />
        </div>
        <div class="input-box">
          <span>Check in :</span>
          <div class="date-input">
              <input type="date" placeholder="" />
              
            </div>
        </div>
        <div class="input-box">
          <span>Destination :</span>
          <input type="text" placeholder="destination" />
        </div>
      </div>
      <div class="column">
        <h3 class="title">Payment</h3>
        <div class="input-box">
          <span>Cards Accepted :</span>
          <img src="/src/assets/image/car/imgcards.png" alt="" width="80%" height="auto">
        </div>
        <div class="input-box">
          <span>Name On Card :</span>
          <input type="text" placeholder="Name" />
        </div>
        <div class="input-box">
          <span>Credit Card Number :</span>
          <input type="number" placeholder="number" />
        </div>
        <div class="input-box">
          <span>Check out :</span>
          <div class="date-input">
              <input type="date" placeholder="" />
              
            </div>
        </div>
        <div class="flex">
          <div class="input-box">
            <span>Zip Code</span>
            <input type="number" placeholder="number" />
          </div>
          <div class="input-box">
            <span>CVV</span>
            <input type="number" placeholder="number" />
          </div>
        </div>
      </div>
    </div>
    <button class="btn" type="submit">Submit</button>
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