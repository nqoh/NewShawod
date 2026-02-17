<template>
    <div style="padding: 3%;" v-if="!isCancellationForm">


      <div class="block" style="float: left;">
         <transition>
           <p style="color: #33ccff" align="center"
            v-if="$page.props.updatePassword"
           ><b>{{ $page.props.updatePassword }}</b></p>
          </transition>
         <form  @submit.prevent="updatePassword">
          <span v-if="form.errors.password" style="color: red; font-size: 1em">{{ form.errors.password }}</span>
    	   <input type="password" name="u" placeholder="Password" required v-model="form.password" />
         <input type="password" name="p" placeholder="Confirm Password" required v-model="form.password_confirmation" />
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
  import { ref , watch} from 'vue';
import CancellationForm from './CancellationForm.vue';
import { useForm , usePage} from '@inertiajs/vue3';
import { route } from 'ziggy-js';

  const form = useForm({
     password:'',
     password_confirmation:''
  })
  const isCancellationForm = ref(false)

  const page  = usePage();

  watch(()=>page.props.updatePassword, ()=>{
     setTimeout(()=> page.props.updatePassword = '', 3000);
  })
  
  const updatePassword = ()=>{
    form.post(route('updatePassword'), {
        onSuccess(){
          form.clearErrors()
          form.reset()
        }
    });
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