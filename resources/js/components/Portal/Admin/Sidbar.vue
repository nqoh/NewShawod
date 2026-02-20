<template>
    <div>
	
        <section id="sidebar">
		<a href="#" class="brand">
			<!-- <span class="text">SHAWOD PORTAL</span> -->
            <img src="/assets/images/logo.png"  style="margin-left: 30%;margin-top: 15%;"/>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#" @click="$emit('update:modelValue',Dashboard)">
					<i class='bx bxs-dashboard bx-sm' ></i>
					<span class="text" >Dashboard</span>
				</a>
			</li><br>
			<li>
				<a href="#" @click="$emit('update:modelValue',Project)">
					<i class='bx bxs-shopping-bag-alt bx-sm' ></i>
					<span class="text" >Project</span>
				</a>
			</li><br>

			<li>
				<a href="#"  @click="$emit('update:modelValue',Notification)">
					<i class='bx bxs-message-dots bx-sm' ></i>
					<span class="text">Notification</span>
				</a>
			</li><br>
			<li>
				<a href="#"  @click="$emit('update:modelValue',Payment)">
					<i class='bx bxs-group bx-sm' ></i>
					<span class="text">Payment</span>
				</a>
			</li><br>
			<li>
				<a href="#"  @click="$emit('update:modelValue',Settings)">
					<i class='bx bxs-cog bx-sm bx-spin-hover' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu bottom" >
			<li>
				<Link :href="route('AdminDashboardIndex')">
					<i class='bx bxs-cog bx-sm bx-spin-hover' ></i>
					<span class="text"> Go Back</span>
				</Link>
			</li>

			<li >
				<a href="#" class="logout " @click="router.post(route('Logout'))">
					<i class='bx bx-power-off bx-sm bx-burst-hover' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	
	</section>
    </div>
</template>

<script setup lang="ts">
  import Project from './Project.vue';
  import Dashboard from './Dashboard.vue';
  import Notification from './Notification.vue';
  import Payment from './Payment.vue';
  import Settings from './Settings.vue';
  import { route } from 'ziggy-js';
  import { Link, router } from '@inertiajs/vue3';

  
</script>

<style scoped>

</style>