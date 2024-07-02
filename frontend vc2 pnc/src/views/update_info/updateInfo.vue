<template>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <div class="container">
    <div class="icon">
    <a href="./information"><i class="fa fa-times-circle" ></i></a>
    </div>
    <h2>Update Your Information</h2>
    <form action="">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name" />

      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Your email" />

      <label for="country">Destination</label>
      <select id="country" name="country">
        <option value="btb">Choose your destination</option>
        <option value="bmc">Banteay Mean Chey</option>
        <option value="omc">Oddar Mean Chey</option>
        <option value="sr">Siem Reap</option>
        <option value="btb">Battambong</option>
        <option value="rtn">Ratanakiri</option>
        <option value="mdk">Mondulkiri</option>
        <option value="kp">Kampot</option>
        <option value="kep">Kep</option>
      </select>
      <input type="submit" value="Update" />
    </form>
  </div>
</template>

<script>
export default {}
</script>

<style>
body {
  font-family: Arial;
  padding: 50px;
}

.icon{
    display: flex;
    justify-content:flex-end;
}

input[type='text'],
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type='submit'] {
  width: 100%;
  background-color: teal;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type='submit']:hover {
  background-color: rgb(56, 190, 244);
}

div.container {
  border-radius: 5px;
  background-color: rgba(253, 251, 251, 0.929);
  padding: 20px;
  width: 50%;
}
</style>
