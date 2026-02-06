<template>
 <div class='pricing pricing-palden'>
  
    <div class='pricing-item'>
      <div class='pricing-deco'><div class="angazi"><img src="assets/images/home/S-bronze.png" alt=""></div>
        <IconWeave />
        
        <div class='pricing-price'><span class='pricing-currency'>R</span>4 499.00</div>
        <h3 class='pricing-title'>Bronze Pack</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>3 Pages</li>
        <li class='pricing-feature'>General Design </li>
        <li class='pricing-feature'>Express Website</li>
      </ul>
       <span @click="getpackage('Bronz Pack','3 Pages','General Design','Express website','4499.00',
            'assets/images/home/S-bronze.png','1 month free economy hosting','Free Domain','','','',
            'With the Bronze package you can be a proud owner of a website quickly','','package')"
            class="btn pricing-action"><CENTER>Configure</CENTER>
        </span>
    </div>

    <div class='pricing-item pricing__item--featured'>
      <div class='pricing-deco'> <div class="angazi"><img src="assets/images/home/S-silver.png" alt=""></div>
       <IconWeave />
        <div class='pricing-price'><span class='pricing-currency'>R</span>6 749.99</div>
        <h3 class='pricing-title'>Silver Pack</h3>
      </div> 
      <div class="angazisp"><img src="assets/images/home/popular13.png" alt="POPULAR"></div>
       <ul class='pricing-feature-list'>
        <li class='pricing-feature'>5 Pages </li>
        <li class='pricing-feature'>1 Contact Form</li>
        <li class='pricing-feature'>Social Media Intergration </li>
      </ul>
      <span class="btn pricing-action" @click="getpackage('Silver Pack','5 Pages','1 Contact Form','Social Media Integration','6749.99',
            'assets/images/home/S-silver.png', '1 Month Free Economy Host','Free Domain','Premium Design','','',
            'The Silver package is fully loaded with common features, and is preferred by most of our clients.','','package')"><CENTER>Configure</CENTER>
      </span>
    </div>
    <div class='pricing-item'>
      <div class='pricing-deco'><div class="angazi"><img src="assets/images/home/S-gold.png" alt=""></div>
       <IconWeave />
        <div class='pricing-price'><span class='pricing-currency'>R</span>10 199.99</div>
        <h3 class='pricing-title'>Gold Pack</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>8 Pages</li>
        <li class='pricing-feature'>2*5 Photo Gallery</li>
        <li class='pricing-feature'>1 C M S</li>
      </ul><span class="btn pricing-action" @click="getpackage('Gold Pack','8 Pages','2 Month Free Economy Hosting ','5 Webmail Account','10199.99',
            'assets/images/home/S-gold.png','Social Media Integration','Custom Design','1 Free Domain','1 Contact Form','2*5 Photo Gallery',
            'The Gold shines brighter in its Class with capabilities that will make competitors envy you.','','package')"><CENTER>Configure</CENTER></span>
    </div>
  </div>
</template>    

<script setup lang="ts">
import IconWeave from '@/components/app/Icons/IconWeave.vue';
import { useSetStorage } from '@/composables/useStorage';
const { getpackage } = useSetStorage();
</script>
