<template>
 <section id="page-breadcrumb">
   <div class="vertical-center sun">
      <div class="container">
          <div class="row">
             <div class="action">
                <div class="col-sm-12">
                   <h1 class="title">{{ props.title }}</h1>
                     <p>{{ props.description }} <i class="fa fa-smile-o" ></i></p>
                    </div>
                 </div>
                </div>
            </div>
        </div>
   </section>
</template>

<script setup lang="ts">
 const props = defineProps({
         title:{
            type:String,
             required:true
         },
         description:{
            type:String,
             required:true
         }

   });
</script>
