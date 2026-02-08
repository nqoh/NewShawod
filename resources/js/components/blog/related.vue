<template>
   <div class="col-md-3 col-sm-5">
      <div class="sidebar blog-sidebar">
         <div class="sidebar-item  recent">
             <h3>Related</h3>
               <div class="media">
                <div class="pull-left">
                   <a href="#">
                                        <!-- <img src="images/portfolio/project1.jpg" alt=""> -->
                     <slot name="related1Image"></slot>
                     </a>
                      </div>
                 <div class="media-body">
                   <slot name="related1"></slot>
                                    <!-- <h4><a href="blog1.php">DNS Privacy: Solutions emerging, but deployment lags</a></h4>
                                    <p>By Mat Ford</p> -->
                 </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <slot name="related2Image"></slot>
                                        <!-- <img src="images/portfolio/project2.jpg" alt=""> -->
                                    </a>
                                </div>
                                <div class="media-body">
                                    <slot name="related2"></slot>
                                     <!-- <h4><a href="blog3.php">The Danger of Giving Up Social Media Passwords - So Many Other Services Are Connected</a></h4>
                                    <p>By internetsociety.org</p> -->
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <!-- <img src="images/portfolio/project3.jpg" alt=""> -->
                                         <slot name="related3Image"></slot>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <slot name="related3"></slot>
                                    <!-- <h4><a href="blog4.php">What the Year's Best Movies Can Teach Us About Small Business Success</a></h4>
                                    <p>By Celia Shatzman</p> -->
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
</template>

<script setup lang="ts">

</script>

<style scoped>

</style>