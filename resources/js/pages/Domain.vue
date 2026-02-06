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
         info@shawod.co.za
        </p>
    </template>
  </Title>

  <OurDeal  title="Shawod Domains" description="Self managed domains are not yet available, we however get one for you on one of our Registrar partners if you purchase a package." />
 
</template>

<script setup lang="ts">
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import OurDeal from '@/components/app/OurDeal.vue';
import Title from '@/components/app/Title.vue';

</script>

<style scoped>

</style>