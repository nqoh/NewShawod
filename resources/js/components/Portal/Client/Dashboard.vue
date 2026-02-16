<template>
  <div >
   <main >

	   <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0" >
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157" style="background-color: rgb(142, 253, 159); ">
            <div class="wave" data-progress="50%" style="bottom: 50%;"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Your Project (50%)</h4>
          </div>
        </div>
      </div>

     <div style="float: left; margin-left:  5%; width: 300px; margin-top: -30px;" >
        <h1 align="center"><u>Retainer</u></h1>
        <p>To secure your place and start developing your website we need 50% deposit</p>
        <!-- <p>To continue with your webiste development you need to pay 25% second schedule </p> -->
        <!-- <p>To continue with your webiste development you need to pay 25% final for launch. </p> -->
        <!-- <p>You don't have any Outstanding Payments for now </p> -->
       <br>
        <div class='col-md-offset-0' style="margin-left:  0%;">
        <button class='btn-lg btn-primary' @click="$emit('update:modelValue', Payment)">Pay Now</button>
        </div>
      </div> 

	  <div class='form hidden' style="margin-left: 65%; " >
        <h3 class='heading' align="center">How do you feel about our customer service?</h3>
        <div  class='sliding-list'>
            <ul id='list'>
                <li>Absolutely Terrible!</li>
                <li>Disappointing</li>
                <li>Quite Bad hey</li>
                <li>Not impressed</li>
                <li>Nothing to be proud of</li>
                <li>Could have been better</li>
                <li>Ok, I guess</li>
                <li>Satisfactory</li>
                <li>Was Great</li>
                <li>Super Impressed!</li>
            </ul>
        </div>
        <input class='slider' max='99' min='0' id="slider" style="margin: 0px auto" align="center" oninput='updateSlider(value)' type='range' value='80'>
    
        <p  id="rateSuccess"  >Thank you for rating us</p>
    <div class='form-group' id="ratebtn">
        <div class='col-md-offset-0'>
            <button class='btn-lg btn-primary' id="btn_submit"  onclick="send_feedback()">Send feedback</button>
        </div>
    </div>
    
</div>
 <br>

	<div style="margin: 0px auto;"  align="center">
		<img src="assets/thumbnails/why us blue.png" />
	</div>

	</main>
  </div>
</template>

<script setup lang="ts">
  import { RateSmile } from '@/composables/RateSmile';
  import { onMounted } from 'vue';
   import Payment from './Payment.vue';
  onMounted(()=>RateSmile())
</script>

<style scoped>

.block {
    margin-top: 10px;
	width: 504px;
	padding: 5rem;
	background: #ffffff;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 2px 1px rgba(0, 0, 0, 0.06),
		0px 1px 1px rgba(0, 0, 0, 0.08);
	border-radius: 8px;
	display: block;
}

</style>