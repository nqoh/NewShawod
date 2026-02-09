<template>

   <BreadCrumb title="Websites"  description="Configure your website." />
     <Title>
        <h1>Customize your website</h1>
        <p>Gather everything you need and see how much it costs, Shawod make sure you save.</p>
    </Title>

   <div class="container">
    <Package />

    <div class="clients text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInUp;">
        <h1 class="title">Configure your website </h1>
        <p>Select any of these optional items. For clarity  press the question <i class="fa fa-question-circle button" @click="modalOpen" id="five" onclick="popUp('question')"></i> icon, item will be explained.</p>
    </div>

     <configPackage />
    </div>

    <div class="container">
    <div class="clients text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInUp;">
        <h2>The following items are available upon request</h2>
        <ul style="color: #33ccff; padding-right: 15px;">
            <li>Shopping Cart &nbsp;&nbsp;&nbsp;
                Multimedia Library&nbsp;&nbsp;&nbsp;
                Registration Form &nbsp;&nbsp;&nbsp;
                Payment Getway </li>
        </ul>
    </div>

    <div class="tbl-header" id="t_div">
        <table  cellpadding="0" id="table" cellspacing="0" border="0">
        </table>
    </div>
    <div class="tbl-content" id="classTable" style="display: none;">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody id="bodyTable"></tbody>
        </table>
    </div>

</div>


<div class="container">
    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">

        <h2><b>Total Cost</b> = <span id="order"></span></h2>
        <p id="discount" style="margin: 0px;"></p>

    </div>
</div>


<p align="center" id="coupon_error" style="color: red; font-size: 17px; margin: 0px; "></p>
<div style=" width: 360px; margin: 0px auto" align="center">
    
    <input type="search" name="q" style="margin: 0px; left:6%;" required onkeyup="btn_change()" id="couponId" class="search-text"  placeholder="Enter coupon" autocomplete="off">
    <button id="apply" style="float: right; outline: none; background: #33ccff; color: white; margin-right: 0%" onclick="return false" onmousedown="coupon('couponId')" class="btn btn-common uppercase">Apply</button>
</div>

<submitOrder />
</template>

<script setup lang="ts">
 import BreadCrumb from '@/components/app/BreadCrumb.vue';
 import Title from '@/components/app/Title.vue';
 import Package from '@/components/websites/getWebsite/Package.vue';
 import configPackage from '@/components/websites/getWebsite/configPackage.vue';
 import submitOrder from '@/components/packages/getPackage/submitOrder.vue';
 import {getwebsite} from '@/composables/GetWebsite';
 import { onMounted, onUnmounted } from 'vue';
 import { modalToggle } from '@/composables/modalToggle'

 const { modalOpen } = modalToggle();
 onMounted(()=> getwebsite() );
 onUnmounted(()=> localStorage.clear())
 
</script>

<style scoped>

</style>