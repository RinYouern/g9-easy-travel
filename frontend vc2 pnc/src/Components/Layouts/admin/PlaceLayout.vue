<template>
    <HeaderMenu />
    <div class="common-layout">
      <el-container>
        <el-aside width="200px"><AsideAdmin></AsideAdmin></el-aside>
        <el-main><placemanagement></placemanagement></el-main>
      </el-container>
    </div>
  </template>
  
  <script setup lang="ts">
  import HeaderMenu from '@/Components/HeaderMenu.vue'
  import AsideAdmin from '@/Components/Admin/AsideAdmin.vue'
  import placemanagement from '@/views/Admin/PlaceView.vue'
  import { ref } from 'vue'
  </script>