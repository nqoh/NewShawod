<template>
    <div>
      <!-- package  Div Start -->
      <div class="col-sm-6">
      <div class="wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInRight;">
                    
<div class='pricing pricing-palden'>
<div class='pricing-item pricing__item--featured'>
      <div class='pricing-deco'> <div class="angazi"><img id="Pimage" src=""  alt=""></div>
        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
          <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;   c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#33ccff' opacity='0.6'></path>
          <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#33ccff' opacity='0.6'></path>
          <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#33ccff' opacity='0.7'></path>
          <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;   c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#33ccff'></path>
        </svg>
        <div class='pricing-price'><span class='pricing-currency'>R</span>
            <span id="prc"></span>
        </div>
        <h3 class='pricing-title' id="p_name"></h3>
      </div> 
      <ul class='pricing-feature-list'>
        <li class='pricing-feature' id="d1"></li>
        <li class='pricing-feature' id="d2"></li>
        <li class='pricing-feature' id="d3"></li>
      </ul>
      <button class='pricing-action'>CHOSEN</button>
    </div>
</div>


</div> 
</div>
<!-- Edn package Div-->

<!-- Package Description Div Start-->
<div class="row">

<div class="col-sm-6">
      <div class="skills overflow">
        <h2  style="margin-bottom: 25px;" id="pack"></h2>
        <ul class="nav navbar-nav navbar-default" style="color: #33ccff;">
            <li><i class="fa fa-check-square"></i><span id="b1"></span></li>&nbsp;&nbsp;
            <li><i class="fa fa-check-square"></i><span id="b2"></span></li>&nbsp;
            <li><i class="fa fa-check-square">&nbsp;</i><span id="b3"></span></li>
        </ul>
    </div><br>

<div class="skills overflow">
        <h3 style="margin-bottom: 25px;">Preloaded items</h3>
        <ul class="elements">
        <li class="wow fadeInUp animated" data-wow-duration="900ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 900ms; animation-delay: 100ms; animation-name: fadeInUp;">
            <i class="fa fa-angle-right"></i><span id="benefit1"></span></li>
        <li class="wow fadeInUp animated" data-wow-duration="800ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 200ms; animation-name: fadeInUp;">
            <i class="fa fa-angle-right"></i><span id="benefit2"></span></li>
        <li class="wow fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 700ms; animation-delay: 300ms; animation-name: fadeInUp;">
            <i class="fa fa-angle-right"></i><span id="benefit3"></span></li>
        <li class="wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 400ms; animation-name: fadeInUp;">
            <i class="fa fa-angle-right"></i><span id="benefit4"></span></li>
        <span id="d5"></span>
        <span id="d6"></span>
        <span id="d7"></span>
        <span id="d8"></span>
        <span id="d9"></span>
    </ul>
    </div>
    <div class="live-preview">
        <Link :href="route('packages')" class="btn btn-common uppercase">Change</Link>
    </div>
</div>
</div>
<!--- End Package Description Div-->

    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { route } from 'ziggy-js';


</script>

<style lang="scss" scoped>

</style>
