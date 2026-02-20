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
               <th>No</th>
               <th>Name</th>
               <th>Surname</th>
               <th>Phone</th>
               <th>Email</th>
               <th>Package</th>
               <th>Project_id</th>
               <th>Progress</th>
               <th>view</th>
               <th>Accept</th>
               <th>Delete</th>
              </tr>
           </thead>
         <tbody>
        
          <tr v-for="(user, i) in users" :key="user.id">
           <td>{{ i + 1}}</td>
           <td>{{ user.name }}</td>
           <td>{{ user.surname }}</td>
           <td>{{ user.phone }}</td>
           <td>{{ user.email }}</td>
           <td>{{ users[i].project.package }}</td>
           <td>{{ users[i].project.project_folder_id }}</td>
           <td>{{ users[i].project.progress }} %</td>
           <td>
            <Link :href="route('viewClient',{id:user.id})">
            <img src="assets/thumbnails/view.png" 
             style="width: 20px; cursor: pointer;" />
            </Link>
           </td>
           <td>
             <button v-if="users[i].project.project_folder_id" disabled="true" class="btn btn-primary btn-block btn-large">Accepted</button>
             <button v-else class="btn btn-primary btn-block btn-large" @click="router.post(route('acceptClient'), {userId:user.id})">Accept</button>
            </td>
           <td><img src="/assets/images/bin.png"  style="width: 20px; cursor: pointer;" /></td>
          </tr>
         </tbody>
         </table>
         </div>
        </div>
       </div> 
      </div>

      <h1 align="center" style="color:#33ccff;" v-if="$page.props.welcome"> 
        {{ $page.props.welcome }}
      </h1>

    </section>

   </template>
   
<script setup lang="ts">
  import { Link, router } from '@inertiajs/vue3';
  import { route } from 'ziggy-js';
  defineOptions({ layout : ''})
  defineProps(['users']) 



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