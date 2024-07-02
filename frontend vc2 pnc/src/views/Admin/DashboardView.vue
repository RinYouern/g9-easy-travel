<template>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="mb-3 mt-3 row justify-content-evenly">
    <el-card class="box-card bg-white mb-4" style="width: 30%; height: 200px">
      <div class="card-content">
        <i class="fa fa-bus" style='font-size:70px;color:black'></i>
      </div>
      <span>Cars</span>
      <p>100</p>
    </el-card>
    <el-card class="box-card bg-white mb-4" style="width: 30%; height: 200px">
      <div class="card-content">
        <i class="fa fa-hotel" style='font-size:70px;color:black'></i>
      </div>
      <span>Hotels</span>
      <p>50</p>
    </el-card>
   
    <el-card class="box-card bg-white mb-4" style="width: 30%; height: 200px">
      <div class="card-content">
        <i class="fa fa-user" style='font-size:70px;color:black'></i>
      </div>
      <span>Users</span>
      <p>1,000</p>
    </el-card>
  </div>
  
</template>

<script>
export default {}
</script>

<style>
span{
  color: black;
}
</style>