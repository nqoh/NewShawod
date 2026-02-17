<template>
    <div style="margin-left: 30%;">

    <div class="block " v-if="true">
         <h1 align="center"><u>Welcome</u></h1>
        <p align="center" style="padding: 0%;">
            <b style="color: grey; font-size: 12px;">11/12/2023</b>
        </p>

         <p style=" color: #585757;">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Id non dolore nostrum vero accusamus quo, omnis quasi reiciendis molestias,
            ab nobis eveniet nisi dolor temporibus doloribus deserunt eius error itaque.
         </p>
         <img src="assets/images/bin.png" class="delete" />
    </div>


    <div style="background: #fff;" class="block " v-if="true">
         <h1 align="center"><u>Welcome</u></h1>
        <p align="center" style="padding: 0%;">
            <b style="color: grey; font-size: 12px;">11/12/2023</b>
        </p>

         <p style=" color: #585757;">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Id non dolore nostrum vero accusamus quo, omnis quasi reiciendis molestias,
            ab nobis eveniet nisi dolor temporibus doloribus deserunt eius error itaque.
         </p>
         <img src="assets/images/bin.png"  class="delete" />
    </div>
    

    
    <div v-else style="margin-top: 20%;" align="center">
        <h1>You have no new notification</h1>
    </div>

    </div>
</template>

<script setup lang="ts">


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

.delete{
    width: 20px;
    float: right;
    cursor: pointer;
}
</style>