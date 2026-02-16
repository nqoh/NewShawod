<template>
    <div style="	background: var(--grey); ">
      <Sidbar :selectedComponent="selectedComponent"  v-model="selectedComponent" />
      <section id="content" style="	background: var(--grey); min-height: 60rem;"  >

          <Navbar />
   
          <KeepAlive >
            <component :is="selectedComponent"  />
         </KeepAlive>
       
    
         <!-- <div style="	background: var(--grey);" align="center">
           <p align="center" class="nv"><a target="_black" href="http://shawod.co.za/terms">Terms of Services</a>&nbsp;|&nbsp;
           <a target="_black" href="http://shawod.co.za/privacy" >Privacy Policy</a></p>
        </div> -->

      </section>

    </div>
   
</template>

<script setup lang="ts">
  import Sidbar from '@/components/Portal/Client/Sidbar.vue';
  import Navbar from '@/components/Portal/Client/Navbar.vue';
  import Dashboard from '@/components/Portal/Client/Dashboard.vue';
  import { ClientDashboard } from '@/composables/ClientDashboard'
  import { onMounted, ref } from 'vue';

  defineOptions({ layout : ''})

  onMounted(()=> ClientDashboard());

  const selectedComponent = ref(Dashboard);

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