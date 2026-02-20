<template>
    <div>
      <div class="block" >

         <transition>
           <p style="color: #33ccff" align="center"
            v-if="$page.props.StoreNotification"
           ><b>{{ $page.props.StoreNotification }}</b></p>
          </transition>

         <form  @submit.prevent="StoreNotification">
          <span v-if="errors.title" style="color: red; font-size: 1em">{{ errors.title }}</span>
          <input type="text" class="input" placeholder="Title" required v-model="form.title" />
          <span v-if="errors.description" style="color: red; font-size: 1em">{{ errors.description }}</span>
          <textarea  placeholder="Description" class="input" required v-model="form.description" />
          <button type="submit" class="btn btn-primary btn-block btn-large">Submit</button>
         </form>
      </div>

      <div class="block" >
        <div align="center">
        <h2 >Send Payment Notification</h2>
        <form @submit.prevent="sendPaymentAlert">
        <select v-model="data.alertType">
          <option value="deposit">50% of Deposite</option>
          <option value="final">50% Final Payment</option>
          <option value="tankyou">100% Tank You For Full Payment</option>
          </select><br/><br/>
          <button type="submit" class="btn btn-primary btn-block btn-large">Submit</button>
      
           <p style="color: #33ccff; font-size: 20px;" align="center"
            v-if="isPaymentAlertSent"
           ><b>Your {{ data.alertType }} alert payment message sent</b></p>
        
        </form>
        </div>
      </div>
    </div>
</template>

<script setup lang="ts">
import { reactive,ref, watch} from 'vue';
import {  router, usePage} from '@inertiajs/vue3';
import { route } from 'ziggy-js';

const props =  defineProps(['project'])

const form = reactive({
    title:'',
    description:'',
    id: props.project.user_id
})

const errors = reactive({
    title:'',
    description:''
});

  const page  = usePage();

  watch(()=>page.props.StoreNotification, ()=>{
     setTimeout(()=> page.props.StoreNotification = '', 3000);
  })
  
  const StoreNotification = ()=>{
    router.post(route('StoreNotification'), form ,{
     onSuccess:()=>{
        form.description = '';
        form.title =''
     },
     onError: (error)=>{
        errors.title = error.title
        errors.description = error.description
     }
    })
  }

   const data = reactive({
        alertType:'deposit',
        id:props.project.user_id
   });
  const isPaymentAlertSent = ref(false);
  const sendPaymentAlert = ()=>{
       router.post(route('PaymentAlert'), data, {
         onSuccess:()=>{
          isPaymentAlertSent.value = true
         }
       })
  }
</script>

<style scoped>

.v-enter-from, .v-leave-to{
    opacity: 0;
   }
  
    .v-enter-active, .v-leave-active{
      transition: 1.5s;
    }

   .v-enter-to, .v-leave-from {
    opacity: 1 ;
   }

.block {
  margin-top: 10px;
	width: 504px;
	padding: 5rem;
  margin-left: 30%;
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

.input { 
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
.input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

</style>