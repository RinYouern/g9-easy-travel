<template>
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  />

  <div class="container">
    <h2>Welcome to update Information</h2>
    <a href="/information"><button type="button" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></a>
    <form>
      
      <div class="form-group">
        
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
      </div>
      <div class="text-right mt-5">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/information" class="ml-3">
          <button type="button" class="btn btn-danger">Cancel</button>
        </a>
      </div>
      
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

.icon {
  display: flex;
  justify-content: flex-end;
}
.close{
  margin-top: -30px;
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
