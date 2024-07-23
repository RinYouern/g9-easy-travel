<template>
    <div class="common-layout">
      <el-container>
        <el-aside width="200px"><AsideAdmin></AsideAdmin></el-aside>
        <el-main><listUser></listUser></el-main>
      </el-container>
    </div>
  </template>
  
  <script setup lang="ts">
  import AsideAdmin from '@/Components/Admin/AsideAdmin.vue'
  import listUser from '@/views/Admin/ListUserView.vue'
  import { ref } from 'vue'
  </script>