<template>
  <header id="header">
     <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
               <toogleHeaderIcon />
             <a class="navbar-brand" href="/">
              <h1>
              <LogoIcon />
               </h1>
             </a>          
          </div>
            <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                   <li><Link  href="home" class="bttn bttn-2">Home</Link></li>
                   <li><Link href=""  class="bttn bttn-2">Websites</Link></li>
                   <li><a href="packages"  class="bttn bttn-2">Packages</a></li>
                   <li><a href="portfolio" class="bttn bttn-2">Portfolio</a></li>
                   <li><a href="aboutus"   class="bttn bttn-2">About us</a></li>
                   <li class="dropdown"><a href="#">Services <i class="fa fa-angle-down"></i></a>
                   <ul role="menu" class="sub-menu">
                     <li><a href="seo">S.E.O</a></li>
                      <li><a href="hosting">Hosting</a></li>
                      <li><a href="domain">Domains</a></li>
                   </ul>
                    </li> 
                    <li> <a href="games/index.html" class="bttn bttn-2">Games</a></li>                                              
                   </ul>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup lang="ts">
import LogoIcon from './Icons/LogoIcon.vue';
import toogleHeaderIcon from './Icons/toogleHeaderIcon.vue';

</script>

<style scoped>

</style>