<template>  
    <div style="margin-left: 0%;">
    
        <template  v-if="props.emails!.length">
            <div class="block " v-for="email in emails!" :key="email.id" style="margin-left: 30%;">
             <h1 align="center"><u>{{ email.email }}</u></h1>
             <p align="center" style="padding: 0%;">
                <b style="color: grey; font-size: 12px;">{{ email.created_at }}</b>
            </p>

            <p style="padding: 0%;">
                <b style="color: grey; font-size: 12px;">{{ email.name }}</b>
            </p>
    
             <p style=" color: #585757;" v-html="email.message">
             
             </p>
               <img src="/assets/images/bin.png" @click="router.post(route('DeleteEmail'), { id :  parseInt(email.id)})" class="delete" />
              </div>
           </template>
    
        <div  v-else style="margin-top: 20%;" align="center">
            <h1>You have no new messages</h1>
        </div>
    
        </div>
    </template>
    
    <script setup lang="ts">
     import { router } from '@inertiajs/vue3';
     import { route } from 'ziggy-js';
    
     const props = defineProps({
        emails:{
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