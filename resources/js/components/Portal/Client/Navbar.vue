<template>
    <div >
        <nav>
    <i class='bx bx-menu bx-sm' ></i>
 
    <form >
      <span class="brand">
			<span class="text">CLIENT PORTAL</span>
      </span>
    </form>
   
    <!-- Notification Bell -->
    <span class="notification" id="notificationIcon">
        <i class='bx bxs-bell bx-tada-hover' ></i>
        <!-- <span class="num">8</span> -->
        <span class="text"><b>{{ $page.props.auth.user.name }}  {{ $page.props.auth.user.surname }}</b></span>
    </span>
  
    <!-- Profile Menu -->
     <span class="profile" id="profileIcon">
        <img src="assets/thumbnails/favw.png" alt="Profile">
     </span>
   
</nav>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';


</script>

<style scoped>

.brand {
	font-size: 24px;
	font-weight: bold;
	align-items: center;
	padding-bottom: 20px;
	box-sizing: content-box;
}

.brand span{
    color: #33ccff;
    font-weight: bold;
    font-size: 24px;
}

</style>