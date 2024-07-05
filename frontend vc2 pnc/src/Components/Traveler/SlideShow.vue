<template>
  <el-carousel :height="carouselHeight" indicator-position="outside">
    <el-carousel-item v-for="(image, index) in images" :key="index">
      <img :src="image.url" class="carousel-image" :alt="image.alt" />
    </el-carousel-item>
  </el-carousel>
</template>

<script>
export default {
  data() {
    return {
      images: [
        {
          url: 'https://cdn.pixabay.com/photo/2016/03/27/19/29/england-1283853_1280.jpg',
          alt: 'Vintage car'
        },
        {
          url: 'https://media.istockphoto.com/id/981925794/photo/tour-buses-on-cobblestone.jpg?s=612x612&w=0&k=20&c=JwBCKbdPHoHbFIW9iGBuXGem7OL3LE7jioS__T5I7EE=',
          alt: 'City bus'
        },
        {
          url: 'https://media.istockphoto.com/id/1183809997/photo/tourist-bus-moves-along-the-road-along-the-lake-shore.jpg?s=612x612&w=0&k=20&c=rXiCAU9QybfbN4JZOyLiP-awZtAcfmNxbPFHeklaXLM=',
          alt: 'Blurred city bus'
        },
        {
          url: 'https://media.istockphoto.com/id/1279631118/photo/bus-rides-on-the-picturesque-mountain-highway.jpg?s=612x612&w=0&k=20&c=1k2M1RGSlT54b1xbfkulAYIWzccKS43sI9k8Kq51akw=',
          alt: 'City bus'
        }
      ],
      carouselHeight: '50vw' 
    };
  }
};
</script>

<style scoped>
.el-carousel {
  width: 100%;
  height: 500px;
}

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
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>