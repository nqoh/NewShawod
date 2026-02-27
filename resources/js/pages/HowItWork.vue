<template>

  <BreadCrumb title="How it works"  description="Know the process.&nbsp;" />

  <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-left wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                         
                        <h2>Initially you</h2><br>
                        <p> <b>Step 1 :</b> You select website/package or service, specify requirements.<br><br>
                        <b>Step 2 :</b> After approval, We send you our<a href="https://portal.shawod.com" target="_blank"> Clients Portal </a> link and Login credentials.<br><br>
                        <b>Step 3 :</b> 50% of the estimated fee must be provided prior to beginning work.<br><br>From there we can either communicate on the Portal or via email, preferably via our Clients Portal so you can also see you Project in-progress </p> <br>
                       


                       <h2>Now let’s move to the Clients Portal and</h2><br>
                        <p> <b>Step 1 :</b> Select Colours.<br>
    Select the colour palette of your choice or that matches your logo or brand and we will update our design accordingly. </p><br>
    <p> <b>Step 2 :</b> Provide Content.<br>
Provide an approved packet of your text and photos and Shawod will input all of it into the site.
</p><br>

<p> <b>Step 3 :</b> Site Programmed.<br>
    We then enable and program the various features of your site like a blog, photo gallery or slideshow. We also ensure the site loads smoothly across all devices like laptops, tablets and smartphones. </p><br>
    <p> <b>Step 4 :</b> Site Review + Revisions.<br>
Your website is then reviewed for errors and any necessary revisions are made. We also train you at this time to make changes to your site for any last minute updates as well as future ones.
</p><br>

<p> <b>Step 5 :</b>  Site Launched!<br>
    Your website is launched live to the world and submitted to the search engines (if purchaced). Congratulations on a successful launch with Shawod. </p>

                        <br><br>
                        <p>Also refer to our <Link :href="route('faq')"> Frequently Asked Questions</Link></p>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <WhatsApp />

     
<Head>
        <meta name="title" content="How it works">
        
        <meta name="robots" content="index/follow">

        <meta name="description" content="Know the processes behind your project, learn the requirements for a website, payment process, and more.">

        <meta name="keywords" content="Durban website design, website packages, africa website, ghana website, web development, south africa web company, domain, hosting, gauteng, mpumalanga, cape town">
       
        <meta property="og:title" content="How it works | Shawod">

        <meta property="og:description" content="Know the processes behind your project, learn the requirements for a website, payment process, and more.">

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

        <meta property="og:url" content="https://shawod.com/howitwork">

        <meta property="og:type" content="website">

        <meta  property='og:site_name' 
               content="Shawod" />

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <!--- Twitter Card --->

         <meta property="twitter:card" content="summary_large_image">

         <meta property="twitter:url" content="https://shawod.com/howitwork">

         <meta property="twitter:title" content="How it works | Shawod">

         <meta property="twitter:description" content="Know the processes behind your project, learn the requirements for a website, payment process, and more.">
         
         <meta property="twitter:image" content="http://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <title>How it works | </title>

      </Head>


</template>

<script setup lang="ts">
import WhatsApp from '@/components/app/WhatsApp.vue'
 import BreadCrumb from '@/components/app/BreadCrumb.vue';
 import { route  } from 'ziggy-js';
</script>

<style scoped>

</style>