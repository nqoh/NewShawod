<template>
    <div >
        <nav>
    <i class='bx bx-menu bx-sm' ></i>
 

    <form action="#" >
      <a href="#" class="brand">
			<span class="text">SHAWOD PORTAL</span>
		</a>
    </form>
   
  
    <!-- Notification Bell -->
    <a href="#" class="notification" id="notificationIcon">
        <i class='bx bxs-bell bx-tada-hover' ></i>
        <!-- <span class="num">8</span> -->
        <span class="text">{{ $page.props.auth.user.name }}  {{ $page.props.auth.user.surname }}</span>
    </a>
  

    <!-- Profile Menu -->
     <a href="#" class="profile" id="profileIcon">
        <img src="assets/thumbnails/favw.png" alt="Profile">
    </a>
   
</nav>
    </div>
</template>

<script setup lang="ts">

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