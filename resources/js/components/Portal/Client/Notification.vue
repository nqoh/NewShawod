<template>  
<div style="margin-left: 0%;">

    <template  v-if="props.notifications!.data.length">
        <div class="block " v-for="notification in notifications!.data" :key="notification.id" style="margin-left: 30%;">
         <h1 align="center"><u>{{ notification.title }}</u></h1>
         <p align="center" style="padding: 0%;">
            <b style="color: grey; font-size: 12px;">{{ notification.created_at }}</b>
        </p>

         <p style=" color: #585757;" v-html="notification.description">
         
         </p>
           <img src="assets/images/bin.png" @click="router.post(route('DeleteNotification'), { id :  parseInt(notification.id)})" class="delete" />
          </div>
       </template>

    <div  v-else style="margin-top: 20%;" align="center">
        <h1>You have no new notification</h1>
    </div>

    </div>
</template>

<script setup lang="ts">
 import { router } from '@inertiajs/vue3';
import { route } from 'ziggy-js';

 const props = defineProps({
    notifications:{
        type:Object,
    }
 })

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