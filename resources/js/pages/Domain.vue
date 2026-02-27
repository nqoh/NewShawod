<template>
 <BreadCrumb title="Domain" description="Get your website address."/>

  <Title>
    <template #default>
        <p><img src="assets/images/home/domaincs.png" class="img-responsive" alt=""></p> <br>
        <h1 class="title">Domain</h1>
    </template>
    <template #body>
        <p>
         Shawod Domain Name Search tool can instantly find the domain name that you've been looking
         or, simple domain set up - no technical skills needed. forward your enquiries to 
         info@shawod.com
        </p>
    </template>
  </Title>

  <OurDeal  title="Shawod Domains" description="Self managed domains are not yet available, we however get one for you on one of our Registrar partners if you purchase a package." />
  <WhatsApp />

  <Head>
        <meta name="title" content="Domain">
        
        <meta name="robots" content="index/follow">

        <meta name="description" content="Register your domain with us, .com .co.za .net and more. Search your desired name now, and also view our Hosting plans.">

        <meta name="keywords" content="Durban website design, website packages, africa website, ghana website, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
       
        <meta property="og:title" content="Domain | Shawod">

        <meta property="og:description" content="Register your domain with us, .com .co.za .net and more. Search your desired name now, and also view our Hosting plans.">

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

        <meta property="og:url" content="https://shawod.com/domain">

        <meta property="og:type" content="website">

        <meta  property='og:site_name' 
               content="Shawod" />

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <!--- Twitter Card --->

         <meta property="twitter:card" content="summary_large_image">

         <meta property="twitter:url" content="https://shawod.com/domain">

         <meta property="twitter:title" content="Domain | Shawod">

         <meta property="twitter:description" content="Register your domain with us, .com .co.za .net and more. Search your desired name now, and also view our Hosting plans.">
         
         <meta property="twitter:image" content="http://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <title>Domain | </title>

      </Head>


</template>

<script setup lang="ts">
 import WhatsApp from '@/components/app/WhatsApp.vue'
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import OurDeal from '@/components/app/OurDeal.vue';
import Title from '@/components/app/Title.vue';

</script>

<style scoped>

</style>