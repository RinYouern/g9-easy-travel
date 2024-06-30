<template>
  <el-carousel indicator-position="outside">
    <el-carousel-item v-for="(image, index) in images" :key="index">
      <img :src="image.url" class="carousel-image" />
    </el-carousel-item>
  </el-carousel>
</template>

<script>
export default {
  data() {
    return {
      images: [
        { url: 'https://i.pinimg.com/474x/82/a6/de/82a6de3316c694922b673682fd83bd26.jpg' },
        { url: 'https://i.pinimg.com/564x/dd/94/88/dd9488119c1075d41669aad5f4b88094.jpg' },
        { url: 'https://i.pinimg.com/474x/87/40/5b/87405be114864239f741b6deb9b619ac.jpg' },
        { url: 'https://i.pinimg.com/474x/82/a6/de/82a6de3316c694922b673682fd83bd26.jpg' }
      ]
    };
  }
};
</script>

<style scoped>
.el-carousel__item {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #d3dce6; 
}

.el-carousel__item:nth-child(2n) {
  background-color: #99a9bf; 
}

.carousel-image {
  max-width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
}
</style>
