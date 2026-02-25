<template>
    <div>
        <section id="sidebar">
		<Link href="/" class="brand">
            <img src="/assets/images/logo.png"  style="margin-left: 30%;margin-top: 15%;"/>
		</Link>
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
				<a href="#" class="notify"  @click="$emit('update:modelValue',Notification)" @mousedown="updateNotificationStatus">
					<i class='bx bxs-bell bx-tada-hover' ></i>
					<span class="num" v-if="getNotifcationStatus.length">{{ getNotifcationStatus.length }}</span>
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
  import { router } from '@inertiajs/vue3';
  import { computed } from 'vue';
 
  const props =  defineProps(['notifications'])

   const getNotifcationStatus = computed(()=>{
     return props.notifications.data.filter((notfiy:any) => notfiy.status == 1);
   });

   const updateNotificationStatus = ()=>{
	  if(getNotifcationStatus.value.length){
        router.post(route('updateNotificationStatus'));
	  }
   }

</script>

<style scoped>
.notify {
	font-size: 20px;
	position: relative;
}
.notify .num {
    position: absolute;
    top: 2%;
    right: 30%;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 2px solid var(--light);
    background: var(--red);
    color: var(--light);
    font-weight: 700;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>