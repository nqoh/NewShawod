<template>
  <section class="mbr-section main" style="padding:0px;">
     <div class="mbr-section mbr-section__container mbr-section__container--middle  ">

     <div class="container "   style="width: 100%;">
      <TableSearch />
      <div class="table-wrapper">
        <div class="table-container">
        <table>
          <thead>
            <tr>
             <th>Package</th>
             <th>Description</th>
             <th>Features</th>
             <th>Reference</th>
             <th>project_folder_id</th>
             <th>Progress</th>
             <th>Price</th>
             <th>Paid Percentage</th>
             <th>Coupon</th>
            </tr>
         </thead>
       <tbody>
      
        <tr>
         <td>{{ project.package}}</td>
         <td>{{ project.description }}</td>
         <td>{{ project.features }}</td>
         <td>{{ project.reference }}</td>
         <td>{{ project.project_folder_id }}</td>
         <td>
          <input type="number" v-model="data.progress" style="width: 50px;">
          <button  class="btn btn-primary" @click="router.post(route('updateProgess'), data);" >Update</button>
        </td>
         <td>{{ payment.price }}</td>
         <td>{{ payment.paid_percentage }}</td>
         <td>
          <span v-if="coupon">{{ coupon.percentage }}% Off</span>
          <span v-else>0% Off</span>
        </td>
        </tr>

       </tbody>
       </table>
       </div>
      </div>
     </div> 
      <h2 v-if="$page.props.ProgressUpdate" align="center" style="color: #33ccff;">{{ $page.props.ProgressUpdate }}</h2>
     <h2 align="center" style="color: #33ccff;">Rate you with</h2> 
     <h1 align="center">50%</h1>

     <div style="margin: 0px auto;"  align="center">
		  <img src="/assets/thumbnails/why us blue.png" />
	   </div>
    </div>
  
  </section>
 </template>

<script setup lang="ts">
import { reactive } from 'vue';
 import { router } from '@inertiajs/vue3';
import { route } from 'ziggy-js';
 const props = defineProps(['payment','project','coupon']);
  
 const data  = reactive({
       progress : props.project.progress,
       id: props.project.id
 })

 
</script>

<style scoped>
 .table-wrapper {
  position: relative;
  border-radius: 0.5rem;
  overflow: hidden;

  &::after {
    --shadow-size: 20px;
    content: "";
    position: absolute;
    inset: 0;
    box-shadow: inset 0 calc(var(--shadow-size) * -1) var(--shadow-size) calc(var(--shadow-size) * -1) rgb(0 0 0 / 0.35);
    pointer-events: none;
  }
}

.table-container {
  max-height: 55rem;
  overflow: auto;
  height: 100%;
}

table {
  width: 100%;
  border-collapse: separate; /* make border sticky */
}

th,
td {
  border: none;
  padding: 1rem 2rem;
  text-align: center;
  &:last-of-type {
    text-align: right;
  }
}

th {
  background-color: #d0f0ee;
  color: #15928a;
  font-weight: bold;
  position: sticky;
  top: 0;
  border-bottom: 2px solid #15928a;
}

tbody {
  tr:nth-of-type(even) {
    background-color: hsl(0 0 95);
  }
}

</style>