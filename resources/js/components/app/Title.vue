<template>
<section id="clients">
     <div class="row">
       <div class="col-sm-12">
          <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
           <slot />
           <slot name="image" />
           <slot name="body" />
       </div>
      </div>
    </div>
</section>
</template>    