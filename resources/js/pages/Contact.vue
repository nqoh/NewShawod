<template>
<div>
  <BreadCrumb title="Contact Us"  description="Don't hesitate. &nbsp;" />
  <ContactInfo /> 
  <ContactFaq />  
</div>
</template>

<script setup lang="ts">
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import ContactInfo from '@/components/contactus/ContactInfo.vue';
import ContactFaq from '@/components/contactus/ContactFaq.vue';
</script>

<style scoped>

</style>