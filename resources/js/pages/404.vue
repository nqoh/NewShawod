<template>
    <div>
       <section id="error-page">
        <div class="error-page-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="bg-404">
                                <div class="error-image">                                
                                    <img class="img-responsive" src="/assets/images/404.png" alt="">  
                                </div>
                            </div>
                            <section id="clients">
                        <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1> <i class="fa fa-frown-o" style="border: 0px solid #33ccff; width: 3px;
    line-height: 35px;    color: #33ccff;
    font-size: 34px;
    border-radius: 0%;"></i> &nbsp; <Link :href="route('home')" class="typewrite" style="color: #33ccff;" data-period="50000" data-type='[ "Oops! This is embarrasing. The page you are looking for could not be found.", "  Still not found, Please go back to the home page." ]'>
    <span class="wrap"></span>
    </Link>
</h1><br><p style="color: #d9534f;">404 Error: Page not found.</p>
                    </div>
                 </div>
        
     </section>

     <Link :href="route('home')" class="btn btn-error">RETURN TO THE HOMEPAGE</Link>
     <div class="social-link">
                  <span><a href="https://www.facebook.com/shawodza"><i class="fa fa-facebook"></i></a></span>
                 <span><a href="https://twitter.com/ShawodWeb"><i class="fa fa-twitter"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>


    <Head>
        <meta name="title" content="404 Error">
        
        <meta name="robots" content="index/follow">

        <meta name="description" content="LOL our website is the neatest in the world. yet, here you are Lost!">

        <meta property="og:title" content="404 Error | Shawod">

        <meta property="og:description" content="LOL our website is the neatest in the world. yet, here you are Lost!">

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

        <meta property="og:type" content="website">

        <meta  property='og:site_name' 
               content="Shawod" />

        <meta property="og:image" content="https://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <!--- Twitter Card --->

         <meta property="twitter:card" content="summary_large_image">

         <meta property="twitter:title" content="404 Error | Shawod">

         <meta property="twitter:description" content="LOL How did you end up here? go play our games or something.">
         
         <meta property="twitter:image" content="http://shawod.com/public/assets/thumbnails/shawodTro.jpg">

         <title>404 Error | </title>

      </Head>

</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { route } from 'ziggy-js';


</script>

<style scoped>

</style>