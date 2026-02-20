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
             <th>Paid Percentage</th>
             <th>Total Price</th>
             <th>Last Payment</th>
            </tr>
         </thead>
       <tbody>
      
        <tr>
         <td>{{ payment.data.paid_percentage}}</td>
         <td>R {{ payment.data.price }}</td>
         <td>{{ payment.data.updated_at }}</td>
        </tr>

       </tbody>
       </table>
       </div>
      </div>
      </div>
      </div>
  
  </section>
       </div>

       <div style="margin: 0px auto;"  align="center">
		  <img src="/assets/thumbnails/why us blue.png" />
	   </div>

</template>

<script setup lang="ts">
   defineProps(['payment'])
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