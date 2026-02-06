<template>

  <BreadCrumb title="How it works"  description="Know the process.&nbsp;" />

  <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-left wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                         
                        <h2>Initially you</h2><br>
                        <p> <b>Step 1 :</b> You select website/package or service, specify requirements.<br><br>
                        <b>Step 2 :</b> After approval, We send you our<Link :href="route('portal')"> Clients Portal </Link> link and Login credentials.<br><br>
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

</template>

<script setup lang="ts">
 import BreadCrumb from '@/components/app/BreadCrumb.vue';
 import { route  } from 'ziggy-js';
</script>

<style scoped>

</style>