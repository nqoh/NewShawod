<template>
<BreaCrumb title="Packages" description="Choose your package." />

<div class="container">
  
  <Title>
    <h1> Let's develop your <span class="typewrite" style="color:rgb(51,204,255)" data-period="100000" data-type='[ "Stunning", "Premium" ]' ></span> Website.</h1>
  </Title>
   
  <packages />

   <Packagesdescription />

<div class="container">
  <div class="row">
     <div class="col-sm-12">
      <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">                        
       <p>At Shawod we believe that projects simply can not be shoehorned into a pre-made package with a set of budget, that is why all our Packages are fully customizable.</p>
      </div>
    </div>
  </div>
 </div>

 <OurDeal  title="View our portfolio" description="See the work we've done &amp; mockups."/>
 <BigLeague />

   </div>
   <WhatsApp />
   </template>
   
<script setup lang="ts">
import WhatsApp from '@/components/app/WhatsApp.vue'
import BreaCrumb from '@/components/app/BreadCrumb.vue';
import OurDeal from '@/components/app/OurDeal.vue';
import Packagesdescription from '@/components/app/PackagesDescription.vue';
import Title from '@/components/app/Title.vue';
import BigLeague from '@/components/packages/bigLeague.vue';
import packages from '@/components/packages/packages.vue';
import { onMounted } from 'vue';

   
   
    onMounted(()=> localStorage.clear());
   </script>
   
   <style scoped>
   
   </style>