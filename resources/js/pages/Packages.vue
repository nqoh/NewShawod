<template>
<BreaCrumb title="Packages" description="Choose your package." />

<div class="container" style="width: 100%;">
  
  <Title>
    <h1> Let's develop your <span class="typewrite" style="color:rgb(51,204,255)" data-period="100000" data-type='[ "Stunning", "Premium" ]' ></span> Website.</h1>
  </Title>
   
  <packages />

  <div class="container">
    <Packagesdescription />
  </div>
  

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


   <Head>
        <meta name="title" content="Packages">
        
        <meta name="robots" content="index/follow">

        <meta name="description" content="Website packages, customize yours now. Let's develop your stunning website.">

        <meta name="keywords" content="Durban website design, website packages, africa website, ghana website, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
       
        <meta property="og:title" content="Packages | Shawod">

        <meta property="og:description" content="Website packages, customize yours now. Let's develop your stunning website.">

         <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <meta property="og:url" content="https://shawod.com/packages">

         <meta property="og:type" content="website">

         <meta  property='og:site_name' 
               content="Shawod" />

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <!--- Twitter Card --->

         <meta property="twitter:card" content="summary_large_image">

         <meta property="twitter:url" content="https://shawod.com/packages">

         <meta property="twitter:title" content="Packages | Shawod">

         <meta property="twitter:description" content="Website packages, customize yours now. Let's develop your stunning website.">
         
         <meta property="twitter:image" content="http://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <title>Packages | </title>

      </Head>


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