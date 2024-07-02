<template>
  <div class="welcome-message bg p-5 text-center text-white rounded">
    <div id="cover">
      <h1>Welcome Driver</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt itaque placeat ut tempore
        assumenda nostrum, alias et laudantium? Non pariatur rem a ab velit assumenda accusamus
        tenetur sed reprehenderit ad!
      </p>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
.bg {
  background-image: url('https://images.pexels.com/photos/1628037/pexels-photo-1628037.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
  background-size: cover;
  background-position: center;
  border-radius: 10px;
  height: 300px;
}

h1 {
  color: white;
  font-weight: bold;
  display: flex;
  justify-content: flex-start;
}

p {
  color: whitesmoke;
  border-radius: 10px;
  padding: 15px;
  text-align: justify;
}
#cover {
  width: 600px;
  background: #0000006b;
  margin: 0 auto;
  padding: 20px;
}

</style>