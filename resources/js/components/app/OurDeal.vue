<template>
    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">{{ props.title }}</h1>
                            <p>{{ props.description }}</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <div class="wraps"> <a class="btn-6" href="packages">VIEW OUR DEALS<span></span></a></div>
                             </div>
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