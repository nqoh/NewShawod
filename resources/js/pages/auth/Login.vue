<template>
    <div>
     
        <section>
        <div class="form-box">
          <div class="form-value">
            <img src="/assets/thumbnails/logoSb.png" alt="" width="50px" height="50px" style="display: block; margin: 0 auto 0px">
            <form @submit.prevent="Login">
              <h2>Portal Login</h2>

              <transition>
                <p class="error" align="center"
                 v-if="$page.props.LoginError"
                ><b>Invalid Credentials</b></p>
              </transition>

              <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" required v-model="form.email">
                <label for="">Email</label>
                <span v-if="form.errors.email" style="color: red; font-size: 1em">{{ form.errors.email }}</span>
              </div>
              <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" required v-model="form.password">
                <label for="">Password</label>
              </div>
              <div class="forget">
                <label><input type="checkbox" v-model="form.remember">Remember Me</label>
                <a href="#">Forgot password?</a>
              </div>
              <button type="submit"  :disabled="form.processing">
                <span v-if="form.processing">
               <img src="/assets/images/loader.gif" width="25" />
              </span>
             <span v-else>
               LOGIN
             </span>
              </button>
            </form>
          </div>
        </div>
      </section>
    </div>
</template>

<script setup lang="ts">
  defineOptions({ layout : ''})
  import { useForm } from '@inertiajs/vue3';

  import { route  } from 'ziggy-js';
   
  const form  = useForm({
        email: '',
        password: '',
        remember:false,
  })

  const Login = ()=>{
    form.post(route('Login'), {
       preserveScroll:true,
    })
  }

  // const page  = usePage();

  // watch(()=>page.props.LoginError, ()=>{
  //    setTimeout(()=> page.props.LoginError = '', 3000);
  // })
  

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
    
    .inputbox {
      position: relative;
      border-bottom: 2px solid #fff;
      margin: 30px 0;
      width: 310px;                
    }
    
    .inputbox label {
      transform: translateY(-50%);
      color: #fff;
      font-size: 1em;
      pointer-events: none;
      transition: .5s;
      position: absolute;
      top: 50%;
      left: 5px;                
    }
    
    input:focus~label,
    input:valid~label {
      top: -5px;
    }
    
    .inputbox input {
      background: transparent;
      border: none;
      outline: none;
      font-size: 1em;
      padding: 0 35px 0 5px;
      color: #fff;
      width: 100%;
      height: 50px;               
    }
    
    .inputbox ion-icon {
      font-size: 1.2em;
      position: absolute;
      right: 8px;
      color: #fff;                
      top: 20px;
    }
    
    .forget {
      color: #fff;
      display: flex;
      justify-content: space-between;
      margin: -15px 0 15px;
      font-size: .9em;                
    }
    
    .forget label {
      color: #fff;
    }
    
    .forget label input {
      margin-right: 3px;
    
    }
    
    .forget label a,
    .forget a {
      color: #fff;
      text-decoration: none;
    }
    
    .forget label a:hover {
      text-decoration: underline;
    }
    
    button {
      width: 100%;
      height: 40px;
      border-radius: 40px;
      background: #fff;
      border: none;
      outline: none;
      cursor: pointer;
      font-size: 1em;
      font-weight: 600;
    }
    
    .register {
      font-size: .9em;
      color: #fff;
      text-align: center;
      margin: 25px 0 10px;
    }
    
    .register p a {
      text-decoration: none;
      color: #fff;
      font-weight: 600;
    }
    
    .register p a:hover {
      text-decoration: underline;
    }
</style>