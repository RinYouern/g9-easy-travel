<template>
  <div class="common-layout">
    <el-container>
      <el-aside width="200px"><AsideAdmin></AsideAdmin></el-aside>
      <el-main>
        <HeaderMenu />
        <dashboard></dashboard>
      </el-main>
    </el-container>
  </div>
</template>

<script setup lang="ts">
import HeaderMenu from '@/Components/HeaderMenu.vue'
import AsideAdmin from '@/Components/Admin/AsideAdmin.vue'
import dashboard from '@/views/Admin/DashboardView.vue'
import { ref } from 'vue'
</script>