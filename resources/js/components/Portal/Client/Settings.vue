<template>
    <div style="padding: 3%;" v-if="!isCancellationForm">

      <div class="block" style="float: left;">
         <form  @submit.prevent="">
    	  <input type="password" name="u" placeholder="Password" required />
          <input type="password" name="p" placeholder="Confirm Password" required />
          <button type="submit" class="btn btn-primary btn-block btn-large">Change Password</button>
         </form>
      </div>

      <div class="block" style="float: right;">
         <h2 align="center">Advance Settings</h2>
         <p align="center" >De-active Account and Cancel Services</p>
         <p @click="isCancellationForm =  true" align="center" class="p">Fill out this cancel services form</p>
      </div>

      <div align="center">
        <img src="assets/thumbnails/why us blue.png"   />
      </div>

    </div>

    <div v-else>
      <CancellationForm  v-model="isCancellationForm" />
    </div>

</template>

<script setup lang="ts">
  import { ref } from 'vue';
import CancellationForm from './CancellationForm.vue';

  const isCancellationForm = ref(false)

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

.p{
    text-decoration: underline;
    font-size: 20px;
    margin-left: 10px;
    margin-top: 10px;
    font-style: italic;
    cursor: pointer;

}
.p:hover{
     color: rgb(102,204,255);
}


input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: white;
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: black;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

</style>