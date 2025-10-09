<template>
<div class='pricing-item'>
    <div class='pricing-deco'><div class="angazi"><img src="assets/images/home/S-bronze.png" alt=""></div>
       <WebBronzeIcon />
        <div class='pricing-price'><span class='pricing-currency'>R</span>3 750.00</div>
        <h3 class='pricing-title'>Bronze web</h3>
      </div> 
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>3 Pages</li>
        <li class='pricing-feature'>General Design </li>
        <li class='pricing-feature'>Express Website</li>
      </ul>
        <span class="btn pricing-action" onclick="getpack('Bronze Web','3 Pages','General Design','Express website','3750.00',
            'images/home/S-bronze.png','Basic social media','','','','','With the Bronze package you can be a proud owner of a website quickly on a low budget','website')">
    <CENTER>Configure</CENTER></span>
   </div>


   <div class='pricing-item pricing__item--featured'>
      <div class='pricing-deco'> <div class="angazi"><img src="assets/images/home/S-silver.png" alt=""></div>
        <SilverIcon />

        <div class='pricing-price'><span class='pricing-currency'>R</span>5 800.00</div>
         <h3 class='pricing-title'>Silver web</h3>
        </div> <div class="angazisp"><img src="assets/images/home/popular12.png" alt="POPULAR"></div>

      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>5 Pages </li>
        <li class='pricing-feature'>1 Contact Form</li>
        <li class='pricing-feature'>Social Media Intergration </li>
      </ul>

        <span class="btn pricing-action" onclick="getpack('Silver Web','5 Pages','1 Contact Form','Social Media Integration',
          '5800.00','images/home/S-silver.png', 'Premium Design','','','','','The Silver package is fully loaded with common features, and is preferred by most of our clients.','website')">
       <CENTER>Configure</CENTER></span>
    </div>


    <div class='pricing-item'>
      <div class='pricing-deco'><div class="angazi"><img src="assets/images/home/S-gold.png" alt=""></div>
       <GoldIcon />
        <div class='pricing-price'><span class='pricing-currency'>R</span>8 950.00</div>
        <h3 class='pricing-title'>Gold web</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>8 Pages</li>
        <li class='pricing-feature'>2*5 Photo Gallery</li>
        <li class='pricing-feature'>1 C M S</li>
      </ul>
      <span class="btn pricing-action" onclick="getpack('Gold Web','8 Pages','1 Content Management System ','Social Media Integration',
          '8950.00','images/home/S-gold.png','Custom Design','1 Contact Form','2*5 Photo Gallery','','','The Gold shines brighter in its Class with capabilities that will make competitors envy you.','website')">
      <CENTER>Configure</CENTER></span>
    </div>
</template>    


<script setup lang="ts">
import WebBronzeIcon from '@/components/app/Icons/BronzeIcon.vue';
import GoldIcon from '@/components/app/Icons/GoldIcon.vue';
import SilverIcon from '@/components/app/Icons/SilverIcon.vue';
</script>