<template>
    <div class="modal" >
            <i  class="fa fa-close fa-pull-right  fa-2x" id="closeM" style="margin: -3% 7% 0px 0px; display: none; cursor: pointer "></i>
            <span id="FormStatus"></span>
            <h2><span class="contact100-form-title" > Contact Us </span></h2>

          
            <form class="contact100-form validate-form" id="form"  style="display: none;" >
                     
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Your Name</span>
                    <input class="input100" type="text" id="ContactusName" required placeholder="Enter your name">
                    <span class="focus-input100"></span>
                    <span id="NameError" style="color:red; display:none">3 or more characters allowed</span>
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" id="ContactusEmail" required placeholder="Enter your email addess">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <span class="label-input100">Message</span>
                    <textarea class="input100" id="ContactusMessage" required placeholder="Your message here..."></textarea>
                    <span class="focus-input100"></span>
                    <span id="messegeError" style="color:red; display:none">10 or more characters allowed</span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn" type="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true" style="color: white"></i>
						</span>
                    </button>
                </div>
            </form>


            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" id="svg"   preserveAspectRatio="none">
                <rect x="0" y="0" fill="none" width="100%" height="100%" rx="3" ry="3"></rect>
            </svg>
        </div>
</template>

<script setup lang="ts">

</script>

<style scoped>

</style>