<template>
    <div>
        <section>
        <div class="form-box">
          <div class="form-value">
            <img src="/assets/thumbnails/logoSb.png" alt="" width="50px" height="50px" style="display: block; margin: 0 auto 20px">
           
            <h2>Reset Password Error</h2>
           <br>
              <transition>
                <p  class="error" align="center" v-show="true" >Sorry' the password reset link is invalid or expired.</p>
              </transition>
              
              <div style="padding: 10%;">
                <Link :href="route('login')" class="button"> Login </Link>
              </div>
              
          </div>
        </div>
      </section>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { route } from 'ziggy-js';
defineOptions({ layout : ''})
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

   .error{
    padding: 5px;
    margin-top: 5px;
    border: 1px solid  white;
    background-color: red;
    color: white;
    border-radius: 5px;
   }

   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    
    * {
      margin: 0;
      padding: 0;
      font-family: 'poppins', sans-serif;
    }
    
    section {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      width: 100%;
      background-image: url('https://images.unsplash.com/photo-1508780709619-79562169bc64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bG9nb2luJTIwcGFzc3dvcmR8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60');
      background-position: center;
      background-size: cover;
    }
    
    section:before {
      content: "";
      background-color: #0009;
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
    }
    
    .form-box {
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      width: 400px;
      height: 450px;
      background: transparent;
      border: 2px solid rgba(255, 255, 255, 0.5);
      border-radius: 20px;
      backdrop-filter: blur(15px);                
    
    }
    
    h2 {
      color: #fff;
      text-align: center;
      font-size: 2em;                
    }
    
   
    .button {
      width: 100%;
      height: 20px;
      color: black;
      border-radius: 40px;
      border: 2px solid rgba(255, 255, 255, 0.5);
      padding: 3% 40% 3% 44%;
      outline: none;
      background-color: white;
      cursor: pointer;
      font-size: 1em;
      font-weight: 600;
    }

</style>