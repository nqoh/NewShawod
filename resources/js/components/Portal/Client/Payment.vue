<template>
    <div>
     <div  style="margin-left: 0%; float: left; margin-top: 10px; width: 580px;">
     <div class="container "   style="width: 100%;">
      <TableSearch />
      <div class="table-wrapper">
        <div class="table-container">
        <table>
          <thead>
            <tr>
             <th>Package</th>
             <th>Paid </th>
             <th>Total Price</th>
             <th>Now Due</th>
           
            </tr>
         </thead>
       <tbody>
      
        <tr>
         <td><b>{{project.package}}</b></td>
         <td><b>{{payment.data.paid_percentage}}%</b></td>
         <td><b>R {{ payment.data.price }}</b></td>
         <td><b>{{ payment.data.now_due == 'deposit' ? '50% Deposit' : payment.data.now_due == 'final' ? '50% Final' : 'none' }}</b></td>
        </tr>

       </tbody>
       </table>
       </div>
      </div>
      </div>

           <!-- <h1 align="center">Pay with Credit Card</h1>
           <div class='col-md-offset-0' style="margin-top:  5%;">
             <button class='btn-lg btn-primary'>Pay Now</button>
           </div> -->
       </div>

       <div class="block" style="float: right; margin-right: 5%;">
           <h1 align="center">Deposit Details</h1>
           <div style="margin-left: 5%;">
            <h2 ><u>Capitec Bank</u> <img src="assets/images/capitec.png" width="35" /></h2>
            <p><b>Name : </b> NB NGOBESE</p> 
            <p><b>Account Number : </b> 14 83 62790</p> 
            <p><b>Refrence: </b> {{ props.project.reference }}</p> 
            <hr>
            <h2 ><u>Standard Bank</u> <img src="assets/images/standardB.jpeg" width="25" /></h2>
            <p><b>Name : </b> NB NGOBESE</p> 
            <p><b>Account Number : </b> 10 16 909 324 5</p> 
            <p><b>Reference : </b> {{ props.project.reference }}</p> 
           </div>
       </div>

    </div>
</template>

<script setup lang="ts">
   const props = defineProps(['project','payment'])
</script>

<style scoped>
.block {
    margin-top: 10px;
	width: 504px;
	padding: 2.5rem;
	background: #ffffff;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 2px 1px rgba(0, 0, 0, 0.06),
		0px 1px 1px rgba(0, 0, 0, 0.08);
	border-radius: 8px;
	display: block;
}

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
  background-color: #33ccff;
  color: white;
  font-weight: bold;
  position: sticky;
  top: 0;
  border-bottom: 2px solid white;
}

tbody {
  tr:nth-of-type(even) {
    background-color: hsl(0 0 95);
  }
}
</style>