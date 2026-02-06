<template>
  <header id="header">
     <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
               <toogleHeaderIcon />
             <Link class="navbar-brand" :href="route('home')">
              <h1>
              <LogoIcon />
               </h1>
            </Link>          
          </div>
            <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                   <li><Link :href="route('home')" class="bttn bttn-2">Home</Link></li>
                   <li><Link :href="route('websites')"  class="bttn bttn-2">Websites</Link></li>
                   <li><Link :href="route('packages')"  class="bttn bttn-2">Packages</Link></li>
                   <li><Link :href="route('portfolio')" class="bttn bttn-2">Portfolio</Link></li>
                   <li><Link :href="route('aboutus')"   class="bttn bttn-2">About us</Link></li>
                   <li class="dropdown"><a href="#">Services <i class="fa fa-angle-down"></i></a>
                   <ul role="menu" class="sub-menu">
                     <li><Link :href="route('seo')">S.E.O</Link></li>
                      <li><Link :href="route('hosting')">Hosting</Link></li>
                      <li><Link :href="route('domain')">Domains</Link></li>
                   </ul>
                    </li>                                           
                   </ul>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup lang="ts">
import { route } from 'ziggy-js'
import LogoIcon from './Icons/LogoIcon.vue';
import toogleHeaderIcon from './Icons/toogleHeaderIcon.vue';

</script>

<style scoped>

</style>