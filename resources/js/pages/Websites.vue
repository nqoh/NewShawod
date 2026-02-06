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
</div>
 
</template>

<script setup lang="ts">
import BigLeague from '@/components/websites/bigLeague.vue';
import Description from '@/components/app/PackagesDescription.vue';
import Pacages from '@/components/websites/packages.vue';
import OurDeal from '@/components/app/OurDeal.vue';
import BreaCrumb from '@/components/app/BreadCrumb.vue';
import Title from '@/components/app/Title.vue';


</script>

<style scoped>

</style>