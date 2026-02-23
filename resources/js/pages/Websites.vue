<template>
<BreaCrumb title="Websites" description="Select a website." />

<div class="container">

  <Title>
    <h1> We are ready to create your <span class="typewrite" style="color:rgb(51,204,255)" data-period="100000" data-type='[ "Awesome website.", "Online Brand Ambassador." ]'></span></h1>
  </Title>

<section>
  <div class='pricing pricing-palden'>

    <Pacages />

    <Description />

<div class="container">
  <div class="row">
   <div class="col-sm-12">
     <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">                        
      <p>At Shawod we are commited to making quality user-friendly websites, with minimalistic design. get your stunning website now.</p>
      </div>
     </div>
    </div>
 </div>

 <OurDeal title="View our portfolio" description="See the work we've done &amp; mockups." />

 <BigLeague />

  </div>
 </section>
 <WhatsApp />
</div>

<Head>
        <meta name="title" content="Website development">
        
        <meta name="robots" content="index/follow">

        <meta name="description" content="Website development, customize yours now. Let's develop your Online Brand Ambassador.">

        <meta name="keywords" content="Durban website design, website packages, africa website, ghana website, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
         <!--- Open Graph --->
         <meta property="og:title" content="Website development | Shawod">

         <meta property="og:description" content="Website development, customize yours now. Let's develop your Online Brand Ambassador.">

         <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <meta property="og:url" content="https://shawod.com/website">

         <meta property="og:type" content="website">

         <meta  property='og:site_name' 
               content="Shawod" />

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <!--- Twitter Card --->

         <meta property="twitter:card" content="summary_large_image">

         <meta property="twitter:url" content="https://shawod.com">

         <meta property="twitter:title" content="Website development | Shawod">

         <meta property="twitter:description" content="Website development, customize yours now. Let's develop your Online Brand Ambassador.">

         <meta property="twitter:image" content="http://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <title>Website development | </title>

      </Head>


</template>

<script setup lang="ts">
import WhatsApp from '@/components/app/WhatsApp.vue';
import BigLeague from '@/components/websites/bigLeague.vue';
import Description from '@/components/app/PackagesDescription.vue';
import Pacages from '@/components/websites/packages.vue';
import OurDeal from '@/components/app/OurDeal.vue';
import BreaCrumb from '@/components/app/BreadCrumb.vue';
import Title from '@/components/app/Title.vue';
import { onMounted } from 'vue';

 onMounted(()=>localStorage.clear())
</script>

<style scoped>

</style>