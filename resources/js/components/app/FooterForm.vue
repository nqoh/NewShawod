<template>
  <div class="col-md-4 col-sm-12">
     <div class="contact-form bottom">
        <h2>Send us a message</h2>
     </div>   
  <form @submit.prevent="contactus" >

       <transition>
           <h3 style="color: #33ccff" align="center"
            v-if="$page.props.contactuUs"
           ><b>{{ $page.props.contactuUs }}</b></h3>
       </transition>

    <div class="form-group">
     <input type="text" v-model="form.name" class="form-control" required placeholder="Name">
     <span v-if="form.errors.name" style="color: red; font-size: 1em">{{ form.errors.name }}</span>
    </div>

    <div class="form-group">
     <input type="email" v-model="form.email" class="form-control" required placeholder="Email Id">
     <span v-if="form.errors.email" style="color: red; font-size: 1em">{{ form.errors.email }}</span> 
   </div>

    <div class="form-group">
     <textarea name="message" v-model="form.message" required class="form-control" rows="8" placeholder="Your message here"></textarea>
     <span v-if="form.errors.message" style="color: red; font-size: 1em">{{ form.errors.message }}</span>  
   </div>
    
    <div class="form-group">
      <input type="submit" :disabled="form.processing" class="btn btn-submit" value="Submit">
    </div>

   </form>

</div>
</template>

<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import { route } from 'ziggy-js';

const form  = useForm({
   email : '',
   name:'',
   message:''
})

const contactus = ()=>{
   form.post(route('contact'),{
      preserveScroll:true,
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

</style>