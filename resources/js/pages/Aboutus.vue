<template>
    <BreadCrumb title="About Shawod" description="Get to know us."/>

     <Title>
      <h1> Shawod is an acronym for 
       <span class="typewrite wow fadeInUp" style="color: #33ccff;" data-period="2000" 
        data-type='[ "Softwares.", "Hosting.", "Applications.", "Websites.", "Online visibility.", "Domains.", "Softwares. Hosting. Applications. Websites. Online visibility. Domains." ]'>
        </span>
       </h1>
         <template #image>
            <img src="assets/images/aboutus/5.png"   class="button margin-bottom" alt="">
         </template>
         <template  #body>
            <h1 class="margin-bottom">Shawod (pty) ltd</h1>
             <p>We are an IT solution company, we help our clients meet their goals by using the most 
                functional, state-of-the-art, and exciting Internet tools available.<br /> In addition to
                web design/development, We provide numerous IT-related services such as; application 
                development, hosting, domains, and search engine optimization, to name a few.<br /> 
                Companies trust us with their technology requirements which enables them to focus 
                on their core business. <br><br>We have been offering diverse and flexible solutions to
                clients of all sizes since 2014, trading as Freelancers.
             </p>
         </template>
     </Title>

   <Skills />

   <OurDeal title="View our portfolio" description="See the work we've done & mockups."/>
   <MissionVision />
   <WhoAreWe />

   <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="assets/images/home/abowIMG.png" class="img-responsive" alt=""></p> 
                        <h1 class="title">Why choose Shawod?</h1><br>
                        <p>Shawod serves as a resource to people with little or no web development skills to quickly own a website, what's more?
                      <br> Our websites are aesthetically simple, minimally adorned and Clutter-free, blending with your business look or personal style.</p>
                        <br>
                        <p> To ice the cake, we are Cost-effective because here at Shawod we believe that a website should be your best business investment, not an expense. <br>Our primary goal is to ensure that your investment has a huge return.</p>
                        <p>Shawod doesn't lock you into long-term contracts, like other website development companies, because everyone should be able to afford to put their business online.</p>
                        <p><b>We are dedicated to making Stunning, affordable websites.</b></p>
                    </div>
                </div>
            </div>
        </div>
     </section>

</template>

<script setup lang="ts">
import MissionVision from '@/components/about/mission&vision.vue';
import Skills from '@/components/about/skills.vue';
import WhoAreWe from '@/components/about/whoAreWe.vue';
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import OurDeal from '@/components/app/OurDeal.vue';
import Title from '@/components/app/Title.vue';

</script>

<style scoped>

</style>