<template>
  <div class="container">
    <div class="success">
      <img src="/src/assets/image/form/success.png" alt="" />
      <h2>Thank You!</h2>
      <p>Your details have been successfully submitted. Thanks!</p>
      <a href="/homepage"><button type="button">OK</button></a>
    </div>
  </div>
</template>

<script>
export default {}
</script>

<style>
.container {
  background: rgb(51, 75, 107);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100%;
}

.success {
  width: 400px;
  background: #f3f3f7;
  border-radius: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  padding: 0 30px 30px;
  color: white;
}

.success img {
  width: 100px;
  margin-top: -50px;
  border-radius: 50%;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.success h2 {
  color: black;
  font-size: 38px;
  font-weight: 500;
  margin: 30px 0 10px;
}

.success p {
  color: black;
  margin-top: 5px;
  font-size: 16px;
}

.success button {
  width: 100%;
  margin-top: 50px;
  padding: 10px 0px;
  background-color: #007bff;
  color: #fff;
  border: 0;
  outline: none;
  border-radius: 4px;
  font-size: 18px;
  cursor: pointer;
  box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
}

.success button:hover {
  background-color: #0056b3;
}
</style>
