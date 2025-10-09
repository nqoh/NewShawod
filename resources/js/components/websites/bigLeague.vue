<template>
<div class="container">

<section id="clients">
  <div class="row">
     <div class="col-sm-12">
       <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
       <h1> Join the Big League </h1>
        <p>Animations are standard on these premium websites, our website (<a href="index.php">www.shawod.co.za</a>) is a demonstration.</p>
      </div>
    </div>
   </div>

<section>
<div class='pricing pricing-palden'>
  <div class='pricing-item' style='margin: 1em 0.6em;'>
      <div class='pricing-deco'>
        <WebBronzeIcon />
        <div class='pricing-price'><span class='pricing-currency'>R</span>14 250.00</div>
        <h3 class='pricing-title'>Platinum</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>10 Pages</li>
        <li class='pricing-feature'>2*5 Photo Gallery</li>
        <li class='pricing-feature'>Premium Design</li>
      </ul>
        <span class="btn pricing-action" onclick="getpack('Platinum Web','10 Pages','1 Contact Form','Premium Design','14250.00',
            'assets/images/home/prem.png','Social Media Integration','2*5 Photo Gallery','','','',
            'These Packages are designed for high-end websites, owning a Premium packages means you never have to ' +
             'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','','website')">
            <CENTER>Configure</CENTER></span>
    </div>

<div class='pricing-item pricing-palden'>
  <div class='pricing-deco'>
        <SilverIcon />
   <div class='pricing-price'><span class='pricing-currency'>R</span>19 499.99</div>
        <h3 class='pricing-title'>Diamond</h3>
    </div> 
    <ul class='pricing-feature-list'>
      <li class='pricing-feature'>15 Pages </li>
      <li class='pricing-feature'>Premium S.E.O</li>
      <li class='pricing-feature'>Social Media Integration </li>
    </ul>
     <span class="btn pricing-action" onclick="getpack('Diamond Web','15 Pages','Premium Design','3*5 Photo Gallery','19499.99',
            'assets/images/home/prof.png','1 Contact Form','Social Media Integration','Premium S.E.O','','',
            'These Packages are designed for high-end websites, owning a professional packages means you never have to ' +
             'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','','website')">
            <CENTER>Configure</CENTER></span>
    </div>
<div class='pricing-item' style='margin: 1em 0.6em;'>
  <div class='pricing-deco'>
       <GoldIcon />
   <div class='pricing-price'><span class='pricing-currency'>R</span>22 500.00</div>
        <h3 class='pricing-title'>Titanium</h3>
   </div>
   <ul class='pricing-feature-list'>
      <li class='pricing-feature'>20 Pages</li>
      <li class='pricing-feature'>4*5 Photo Gallery</li>
      <li class='pricing-feature'>1 Contact Form</li>
    </ul>
  <span class="btn pricing-action" onclick="getpack(' Titanium Web','20 Pages','Custom Design','4*5 Photo Gallery','22500.00',
            'assets/images/home/prof.png','1 Contact Form','Social Media Integration','Premium S.E.O','','',
            'These Packages are designed for high-end websites, owning a professional packages means you never have to ' +
             'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','','website')">
       <CENTER>Configure</CENTER></span>
 </div>

 </div>
</section>

</section>


 </div>

</template>


<script setup lang="ts">
import WebBronzeIcon from '@/components/app/Icons/BronzeIcon.vue';
import GoldIcon from '@/components/app/Icons/GoldIcon.vue';
import SilverIcon from '@/components/app/Icons/SilverIcon.vue';
</script>