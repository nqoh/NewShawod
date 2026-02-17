<template>
    <div>
       <div class="block" style="margin-left: 5%; float: left;">
           <h1 align="center">Pay with Creadit Card</h1>
           <div class='col-md-offset-0' style="margin-top:  5%;">
             <button class='btn-lg btn-primary'>Pay Now</button>
        </div>
       </div>

       <div class="block" style="float: right; margin-right: 5%;">
           <h1 align="center">Deposit Details</h1>
           <div style="margin-left: 5%;">
            <h2 ><u>Capitec Bank</u> <img src="assets/images/capitec.png" width="35" /></h2>
            <p><b>Name: </b> NB NGOBESE</p> 
            <p><b>Account Number: </b> 14 83 62790</p> 
            <p><b>Phone Number: </b> 063 014 2446</p> 
            <p><b>Refrence Number: </b> {{ props.reference }}</p> 
            <hr>
            <h2 ><u>Standard Bank</u> <img src="assets/images/standardB.jpeg" width="25" /></h2>
            <p><b>Name: </b> NB NGOBESE</p> 
            <p><b>Account Number: </b> 10 16 909 324 5</p> 
            <p><b>Phone Number: </b> 063 014 2446</p> 
            <p><b>Reference Number: </b> {{ props.reference }}</p> 
          
           </div>
          
       </div>

    </div>
</template>

<script setup lang="ts">
   const props = defineProps(['reference'])
</script>

<style scoped>
.block {
    margin-top: 10px;
	width: 504px;
	padding: 2.5rem;
	background: #ffffff;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 2px 1px rgba(0, 0, 0, 0.06),
		0px 1px 1px rgba(0, 0, 0, 0.08);
	border-radius: 8px;
	display: block;
}

</style>