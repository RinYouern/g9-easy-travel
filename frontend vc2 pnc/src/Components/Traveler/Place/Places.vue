<template>
  <div class="container">
    <h2 class="text-left">Trending destinations</h2>
    <div class="row flex-nowrap overflow-auto">
      <div class="col-md-3 mb-4" v-for="item in places" :key="item.name">
        <div class="card">
          <img :src="item.images[0]" class="card-img-top" :alt="item.name" />
          <div class="text-left p-2">
            <strong>{{ item.name }}</strong>
            <div v-if="index < 3" class="badge bg-warning text-dark">TOP {{ index + 1 }}</div>
            <p style="font-size: small">{{ item.province }}</p>
            <p>
              <span class="border p-2 bg-warning rounded-pill">{{ item.rating }}</span> Exceptionals
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
  <script>
export default {
  props: {
    places: {
      type: Array,
      required: true
    }
  }
}
</script>
  
  <style>
.container {
  padding: 20px;
}
.card-img-top {
  height: 200px;
  object-fit: cover;
}
.row.flex-nowrap {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
.row.flex-nowrap > .col-md-3 {
  flex: 0 0 auto;
  width: 260px;
}
.card-img-top {
  transition: transform 0.3s, box-shadow 0.3s;
  width: 100%;
}
.card-img-top:hover {
  transform: scale(1.05); /* Slight zoom effect */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
}
</style>
  