<template>
<section>
  <div class='pricing pricing-palden'>
    <div class='pricing-item' style='margin: 1em 0.6em;'>
      <div class='pricing-deco'>
         <IconWeave />
        <div class='pricing-price'><span class='pricing-currency'>R</span>17 850.00</div>
        <h3 class='pricing-title'>Platinum</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>10 Pages</li>
        <li class='pricing-feature'>Dulux Hosting </li>
        <li class='pricing-feature'>5 Free Emails Account</li>
        <li class='pricing-feature'>15 Photo Gallery</li>
      </ul>
        <span class="btn pricing-action" @click="getpackage('Platinum Pack','10 Pages','Dulux Hosting ','Premium Design','17850.00',
            'assets/images/home/prem.png','Social Media Integration','2*5 Photo Gallery','1 Free Domain','1 Contact Form','1*5 Email Account',
            'These Packages are designed for high-end websites, owning a Premium packages means you never have to ' +
            'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','','package')"><CENTER>Configure</CENTER></span>
    </div>
 <div class='pricing-item pricing-palden'>
      <div class='pricing-deco'>
       <IconWeave />
        <div class='pricing-price'><span class='pricing-currency'>R</span>23 000.00</div>
        <h3 class='pricing-title'>Diamond</h3>
      </div> 
     <ul class='pricing-feature-list'>
        <li class='pricing-feature'>15 Pages </li>
        <li class='pricing-feature'>25 Photo Gallery</li>
        <li class='pricing-feature'>15 Free Emails Account</li>
        <li class='pricing-feature'>Animations</li>
      </ul><span class="btn pricing-action" @click="getpackage('Diamond Pack','15 Pages','10 Free Emails Account','Dulux Hosting 1Month','23000.00',
            'assets/images/home/prof.png','3*5 Photo Gallery','Premium Design','1 Free Domain','1 Contact Form','Premium S.E.O',
            'These Packages are designed for high-end websites, owning a professional packages means you never have to ' +
            'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','Social Media Integration','package')"><CENTER>Configure</CENTER></span>
                            
    </div>

    <div class='pricing-item' style='margin: 1em 0.6em;'>
      <div class='pricing-deco'>
        <IconWeave />
        <div class='pricing-price'><span class='pricing-currency'>R</span>26 500.00</div>
        <h3 class='pricing-title'>Titanium</h3>
      </div>
      <ul class='pricing-feature-list'>
        <li class='pricing-feature'>20 Pages</li>
        <li class='pricing-feature'>Premium Hosting</li>
        <li class='pricing-feature'>Professional S.E.O</li>
        <li class='pricing-feature'>Animations</li>
      </ul>
        <span class="btn pricing-action" @click="getpackage('Titanium Pack','20 Pages','15 Emails Account ','Professional S.E.O','26500.00',
            'assets/images/home/ulti.png','Privacy Protection','Custom Design','1 Free Domain','1 Contact Form','4*5 Photo Gallery',
            'These Packages are designed for high-end websites, owning a Ultimate packages means you never have to ' +
            'worry about traffic crashing your website, Security and Reliability are Covered with 99% Up-time Guarantee','Premium Hosting','package')" ><CENTER>Configure</CENTER></span>
    </div>
  </div>

</section>

</template>    


<script setup lang="ts">
import IconWeave from '@/components/app/Icons/IconWeave.vue';
import { useSetStorage } from '@/composables/useStorage';
const  { getpackage }  = useSetStorage();
  
</script>