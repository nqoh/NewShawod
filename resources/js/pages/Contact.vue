<template>
<div>
  <BreadCrumb title="Contact Us"  description="Don't hesitate. &nbsp;" />
  <ContactInfo /> 
  <ContactFaq />  
</div>
<WhatsApp />


<Head>
        <meta name="title" content="Contact Us">
        
        <meta name="robots" content="index/follow">

        <meta name="description" content="Get in touch with our friendly team. Call, WhatsApp, E-mail or Visit us. Let's develop your  website.">

        <meta name="keywords" content="Durban website design, website packages, africa website, ghana website, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
       
        <meta property="og:title" content="Contact Us | Shawod">

        <meta property="og:description" content="Get in touch with our friendly team. Call, WhatsApp, E-mail or Visit us. Let's develop your  website.">

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

        <meta property="og:url" content="https://shawod.com/contactus">

        <meta property="og:type" content="website">

        <meta  property='og:site_name' 
               content="Shawod" />

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <!--- Twitter Card --->

         <meta property="twitter:card" content="summary_large_image">

         <meta property="twitter:url" content="https://shawod.com/contactus">

         <meta property="twitter:title" content="Contact Us | Shawod">

         <meta property="twitter:description" content="Get in touch with our friendly team. Call, WhatsApp, E-mail or Visit us. Let's develop your  website.">
         
         <meta property="twitter:image" content="http://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <title>Contact Us | </title>

      </Head>


</template>

<script setup lang="ts">
 import WhatsApp from '@/components/app/WhatsApp.vue'
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import ContactInfo from '@/components/contactus/ContactInfo.vue';
import ContactFaq from '@/components/contactus/ContactFaq.vue';
</script>

<style scoped>

</style>