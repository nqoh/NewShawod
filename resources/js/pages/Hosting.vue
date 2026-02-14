<template>

<BreadCrumb title="Hosting" description="Store your website. &nbsp; " />

   <Title>
    <p><img src="assets/images/home/hostngs.png" class="img-responsive" alt=""></p> <br>
    <h1 class="title">Hosting</h1>
    <template #body>
      <p>
        Shawod is also a web hosting service provider, we provide the technologies and 
        services needed for a website or application to be viewed on the internet.
        Websites are hosted on special computers called servers. forward your queries to 
        <a href="mailto:info@shawod.co.za">info@shawod.co.za</a>
      </p>
    </template>
   </Title>

<OurDeal title="Hosting packages" description="Self service servers are not yet available at Shawod, for now you can get shared hosting." />
<WhatsApp />
</template>

<script setup lang="ts">
import WhatsApp from '@/components/app/WhatsApp.vue'
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import OurDeal from '@/components/app/OurDeal.vue';
import Title from '@/components/app/Title.vue';

</script>

<style scoped>

</style>