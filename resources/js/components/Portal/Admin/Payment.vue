<template>
    <div>
     <section class="mbr-section main" style="padding:0px;">
      <div class="mbr-section mbr-section__container mbr-section__container--middle  ">

     <div class="container "   style="width: 100%;">
      <TableSearch />
      <div class="table-wrapper">
        <div class="table-container">
        <table>
          <thead>
            <tr>
             <th>Paid</th>
             <th>Total Price</th>
             <th>Now Due</th>
             <th>Last Payment</th>
            </tr>
         </thead>
       <tbody>
  
        <tr>
         <td>{{ payment.data.paid}}
          <select v-model="PaidPaymentStatus">
           <option :value="(parseInt(payment.data.price) * 0.5).toFixed(2)  ">Deposite</option>
           <option :value="parseInt(payment.data.price).toFixed(2)">Final</option>
           <option value="0.00">none</option>
          </select>
           <button class="btn btn-primary" @click="router.post(route('updatePaidPaymentStatus'),{id:payment.data.user_id,status:PaidPaymentStatus})" >Update</button>
         </td>
         <td>R {{ payment.data.price }}</td>
         <td> 
          <select v-model="paymentStatus">
           <option value="deposit">Deposite</option>
           <option value="final">Final</option>
           <option value="none">None</option>
          </select>
           <button class="btn btn-primary" @click="router.post(route('updateCurrentPaymentStatus'),{id:payment.data.user_id,status:paymentStatus})" >Update</button>
        </td>
         <td>{{ payment.data.updated_at }}</td>
        </tr>

       </tbody>
       </table>
       </div>
      </div>
      </div>
      </div>
  
  </section>
  <h2 v-if="$page.props.paid" align="center" style="color: #33ccff;">{{ $page.props.paid }}</h2>  
  <h2 v-if="$page.props.now_due" align="center" style="color: #33ccff;">{{ $page.props.now_due }}</h2>
       </div>

       <div style="margin: 0px auto;"  align="center">
		  <img src="/assets/thumbnails/why us blue.png" />
	   </div>

</template>

<script setup lang="ts">
   const props = defineProps(['payment'])
   import { ref } from 'vue';
   import { router } from '@inertiajs/vue3';
   import { route } from 'ziggy-js';
   const paymentStatus = ref(props.payment.data.now_due);
   const PaidPaymentStatus = ref(props.payment.data.paid)
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