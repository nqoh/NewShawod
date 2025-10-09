<template>
  <footer id="footer">
    <div class="container">
       <div class="row">
         <div class="col-sm-12 text-center bottom-separator">
            <img src="assets/images/home/under.gif" class="img-responsive inline" alt="">
          </div>
   <FooterLinks />
   <FooterShare />
   <FooterForm />
  </div>
  </div>
  <div>
 <FooterIcon />
 </div>
 <div class="vala flex" >

<p align="center"> &copy; 2020 Shawod (pty) ltd. All Rights Reserved.<br>
Other trademarks belong to their respective owners</p>

</div>
</footer>
</template>

<script setup lang="ts">
 import FooterForm from './FooterForm.vue';
import FooterLinks from './FooterLinks.vue';
import FooterShare from './FooterShare.vue';
import FooterIcon from './Icons/FooterIcon.vue';
</script>
