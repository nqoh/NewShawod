<template>
    <div>
        <div id="canceling" style="padding: 10%; padding-top: 0%;">
                <h3  align="center"><b><u>Please read through the following before completing this form:</u></b></h3>
                <p>
                    <b>1.</b> For security purposes, Shawod will not deactivate hosting for a domain without a completed cancellation form.
                    Cancellation requests via email, phone, fax, snail mail or any other means will not be processed.
                    This is to protect the owner of the website from unauthorized, malicious or accidental cancellation.
                </p>
                <p>
                    <b>2.</b> Hosting for your domain will be deactivated within 24-48 hours from the time that this form is submitted (Monday through Friday).
                    It may even be deactivated on the same day that you submit this form, so make sure you have downloaded/transferred all of your files/email
                    and are ready for hosting of the domain(s) to be deactivated before filling out this form, since all files, including email will be deleted
                    from the server when the site is deactivated. Any DNS entries for your domain will be removed from our name servers. Your Shawod account will
                    be deactivated 3 days after all services have been cancelled.
                </p>
                <p>
                    <b>3.</b> Domain cancellations cannot be scheduled in advance,
                    so please do not complete this form until you are actually ready to deactivate hosting.
                </p>
                <p>
                <b>4.</b> If you do not wish to be billed for the next month's hosting services, be sure to submit
                this form before your next billing cycle or else you will be billed in full for the next month's hosting.
                Partial month hosting charges are not refunded when canceling hosting for a domain.
                </p>
                <p>
                    <b>5.</b>
                    If your domain has expired and you have chosen not to renew it,
                    you will continue to be billed for hosting each month until you actually cancel hosting by completing this form.
                    This is a safeguard for our customers, since we have no way of knowing if a customer is going to decide to renew their domain
                    or if they wish to retrieve their files that are on the server.
                </p>
                <p>
                    <b>6.</b>
                    If you sign-up for hosting, but never uploaded your files or update your domain record to reference our name servers,
                    you are still responsible for any hosting charges.You will continue to be billed for hosting each billing cycle until
                    you actually cancel hosting by completing this form.
                </p>
                <p>
                    <b>7.</b>
                    If you or your webmaster has transferred your site to a different host, you will continue to be billed for hosting each month until
                    you actually cancel hosting by completing this form. This is a safeguard for our customers, since we have no way of knowing that you
                    have decided to leave or when your move is actually complete.
                </p>
                <h3  align="center"><b><u>Hosted Domain(s) to be canceled<span style="color: red">*</span></u></b></h3>
                <p>
                    Please enter domain for which you wish to cancel hosting.
                </p>
                <input type="text"  placeholder="Please enter domain name" v-model="form.domain">
                <span v-if="form.errors.domain" style="color: red; font-size: 1em">{{ form.errors.domain }}</span><br>
              
                <p style="color:red; margin-top: -10px; margin-left: 10px; margin-bottom: -10px" id="card_error"> </p><br>
                <h3  align="center"><b><u>Reason for Cancellation<span style="color: red">*</span></u></b></h3>
                <p>
                    If you have a moment, please let us know the reason why you are
                    cancelling hosting for your domain so we can improve our service for our current and future customers.
                </p><br><br>
                <textarea v-model="form.reason"  style="margin-left: 10px" placeholder="Reason for cancellation" class="input"></textarea>
                <span v-if="form.errors.reason" style="color: red; font-size: 1em">{{ form.errors.reason }}</span><br>
                <h3  align="center"><b><u>Special Instructions</u></b></h3>
                <p>
                    If you have any special instructions related to this cancellation form or any other customer support questions,
                    please send us a message.
                </p>
                <br><br>
                <textarea  v-model="form.special_instruction" style="margin-left: 10px" placeholder="Special instruction" class="input"></textarea>
                <span v-if="form.errors.special_instruction" style="color: red; font-size: 1em">{{ form.errors.special_instruction }}</span><br>
               
                <div style="">
                    <button @click="submit" class="btn btn-primary btn-block btn-large" style="float: left; width: 45%;">Submit</button>
                      <p style="width: 10%;"></p>
                    <button  @click="$emit('update:modelValue', false)" class="btn btn-primary btn-block btn-large" style=" float: right; width: 45%;">Cancel</button>
                </div><br><br>
                
              <transition>
                <h2 style="color: #33ccff" align="center"
                 v-if="$page.props.cancellation"
                ><b>{{ $page.props.cancellation }}</b></h2>
              </transition>
                   
                <h4 ><b>Hosting plan cancellations are normally processed within 24-48 hours (Monday through Friday).</b></h4>
            </div>
    </div>
</template>

<script setup lang="ts">
  import { useForm , usePage } from '@inertiajs/vue3';
  import { watch } from 'vue';
  import { route } from 'ziggy-js';

  const form  = useForm({
      domain:'',
      reason:'',
      special_instruction:''
  });

  const page = usePage();
  
  const submit = ()=>{
     form.post(route('cancellation'),{
        preserveScroll:true,
        onSuccess(){
            form.clearErrors()
            form.reset()
        }
     })

   watch(()=>page.props.cancellation, ()=>{
      setTimeout(()=>{
        page.props.cancellation = ''
      }, 3000)
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

input , textarea { 
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