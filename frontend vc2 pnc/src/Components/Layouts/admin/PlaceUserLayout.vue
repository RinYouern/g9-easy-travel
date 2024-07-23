<template>
  <div class="common-layout">
    <el-container>
      <el-aside width="200px"><AsideAdmin></AsideAdmin></el-aside>
      <el-main><placemangement></placemangement></el-main>
    </el-container>
  </div>
</template>
  
  <script setup lang="ts">
import AsideAdmin from '@/Components/Admin/AsideAdmin.vue'
import placemangement from '@/views/Admin/PlaceView.vue'
import { ref } from 'vue'
</script>