<template>
 <AppHeader />
   <slot />
 <AppFooter />  
</template>

<script setup lang="ts">
  import AppHeader from '@/components/app/AppHeader.vue';
  import AppFooter from '@/components/app/AppFooter.vue';
</script>

<style scoped>

</style>