<template>
  <BreadCrumb  title="Portfolio" description="Our pillars of strength."/>

<section id="portfolio-information" class="padding-top">
  <div class="container">

       <Title>
        <h1> Join our 
          <span class="typewrite" style="color:rgb(51,204,255)" data-period="100000" data-type='[ "Happy", "Satisfied" ]'> </span> Clients.</h1>
       </Title>
  
        <Clients />
        <RelatedWorks />
        <OurDeal title="Become our happy client" description="Select your desired package now."/>

<div class="container">
   <div id="progressbar-container">
     <h2 class="page-header">Services rendered</h2>
         <div class="progress">
           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
               40% Applications and Softwares'
             </div>
          </div>
             <div class="progress">
               <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                 30% Domains
                </div>
              </div>
            <div class="progress">
               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                   60% Hosting
                </div>
             </div>
          <div class="progress">
             <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
               90% Website development
             </div>
            </div>
         </div><!--/#progressbar-container-->
    </div>


<section id="clients">
  <div class="container">
     <div class="row">
        <div class="col-sm-12">
          <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
             <p><img src="assets/images/portfolio/shasha.png" class="img-responsive" alt=""></p> <br>
                <h1 class="title">Why choose Shawod?</h1><br>
                <p>Shawod serves as a resource to people with little or no web development skills to quickly own a website, what's more?
                <br> Our websites are aesthetically simple, minimally adorned and Clutter-free, blending with your business look or personal style.</p>
                <br>
                <p> To ice the cake, we are Cost-effective because here at Shawod we believe that a website should be your best business investment, not an expense.
                   <br>Our primary goal is to ensure that your investment has a huge return.</p>
                </div>
              </div>
            </div>
        </div>
     </section>

  </div>
</section>

</template>    

<script setup lang="ts">
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import OurDeal from '@/components/app/OurDeal.vue';
import Title from '@/components/app/Title.vue';
import Clients from '@/components/portfolio/clients.vue';
import RelatedWorks from '@/components/portfolio/relatedWorks.vue';

</script>