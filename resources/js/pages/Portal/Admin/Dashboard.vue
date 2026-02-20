<template>
    <div style="background: var(--grey)">
      <Sidbar :selectedComponent="selectedComponent"  v-model="selectedComponent" />
      <section id="content" style="	background: var(--grey); min-height: 60rem;"  >

          <Navbar />
          <KeepAlive >
            <component :is="selectedComponent" v-model="selectedComponent" 
            :project="project" :payment="payment" :coupon="coupon"  />
          </KeepAlive>

      </section>

    </div>
   
</template>

<script setup lang="ts">
  import Sidbar from '@/components/Portal/Admin/Sidbar.vue';
  import Navbar from '@/components/Portal/Admin/Navbar.vue';
  import Dashboard from '@/components/Portal/Admin/Dashboard.vue';
  import { ClientDashboard } from '@/composables/ClientDashboard'
  import { onMounted , shallowRef } from 'vue';
  defineProps(['project','payment','coupon'])
  defineOptions({ layout : ''})
  onMounted(()=> ClientDashboard());

  const selectedComponent = shallowRef(Dashboard);
 
</script>

<style scoped>
.nv{
    margin-left: 0px;
}
.nv a{
    cursor: pointer;
    font-size: 20px;
}
.nv a:hover{
    color: rgb(51,204,255);
}
</style>