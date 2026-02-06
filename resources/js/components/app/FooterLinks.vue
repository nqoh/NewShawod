<template>
 <div class="col-md-4 col-sm-6">
   <div class="testimonial bottom" >
     <h2>Resources</h2>
      <div class="media">
      <h3 class="wow fadeInUp animated" data-wow-duration="900ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><Link :href="route('createawebsite')"> How to create a website</Link></h3>
      <h3 class="wow fadeInUp animated" data-wow-duration="800ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><Link :href="route('contactus')"> Contact us</Link></h3>
      <h3 class="wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><Link :href="route('faq')"> FAQ</Link></h3>
      <h3 class="wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><Link :href="route('blog')"> Blog</Link></h3>
      <h3 class="wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><Link :href="route('howitworks')"> How it works</Link></h3>
      <h3 class="wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><Link :href="route('privacy')"> Privacy policy</Link></h3>
      <h3 class="wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="700ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;"><Link :href="route('terms')"> Term &amp; Conditions</Link></h3>
      </div>      
    </div> 
</div>
</template>    

<script setup lang="ts">
import { route } from 'ziggy-js'
</script>