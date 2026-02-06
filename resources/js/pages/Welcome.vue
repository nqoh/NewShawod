<template>
    <div>
      <section id="home-slider">
        <div class="container">
          <div class="row">
            <div class="main-slider ">
              <div class="slide-text">
                 <h1>Let's make your Online Brand Ambassador!</h1>
                  <p><b>Web Surfers Take 5 Seconds!</b> To form an impression and find value on a website, Turn your traffic into Prospects with Shawod IT Solution.</p>
                <div class="wraps"> <Link class="btn-6" :href="route('websites')">GET STARTED<span></span></Link></div>
               </div>
                 <img src="/assets/images/home/slider/hill.png"    class="slider-hill" alt="slider image">
                 <img src="/assets/images/home/slider/mlondie.gif" class="slider-mlondie" alt="slider image">
                 <img src="/assets/images/home/slider/shasha.png" class="slider-shasha" alt="slider image">
                 <img src="/assets/images/home/slider/ccup.png" class="slider-ccup" alt="slider image">
                 <img src="/assets/images/home/slider/nqo.gif" class="slider-nazoke" alt="slider image">
                 <img src="/assets/images/home/trolley.png"   class="slider-trolley" alt="">   
                 <img src="/assets/images/home/slider/sano.png" class="slider-sano" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>

    <br><br>
            
       <section id="services"> 
        
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="/assets/images/home/icon1.png" alt="">
                        </div>
                        <h2>Up-time Reliability</h2>
                        <p>Rest easy knowing your website is up and running. Our Servers are Monitored 24/7, with 99.9% guaranteed uptime reliability.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="/assets/images/home/icon2.png" alt="">
                        </div>
                        <h2>User friendly website</h2>
                        <p>We design all our websites with the user's interest at heart, our websites are easy to navigate and don't take hours to load.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="/assets/images/home/icon3.png" alt="">
                        </div>
                        <h2>Content Management System</h2>
                        <p>Imagine updating your content without having to call your web developer, our (optional) easy-to-use CMS does just that.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Website Packages</h1>
                            <p>We design and develop websites, choose the type of a package you want for a reasonable price. </p>
                            <!--<p>We do not shoehorn projects, some need more resources than others, and it's only fair to pay for ONLY what you need.</p>-->
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <div class="wraps"> <Link class="btn-6" :href="route('packages')">VIEW OUR DEALS<span></span></Link></div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

   <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="/assets/images/home/image1.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Incredibly Modern</h2>
                        <P>To thrive in today's competetive tech world you need to keep up with the times, our Websites are made with the latest features and
                         designed to be relevant even on the next Decade.</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Built for the Responsive Web</h2>
                        <P>Our websites can be viewed on any device without losing content, you don't want your potential Clients running off to your competitor due to the complications of your website.</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="/assets/images/home/image2.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="/assets/images/home/image3.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Search Engine Optimization </h2>
                        <P>Do you want to appear on the first page on Google? We hope you do, we can optimize your website to achieve top rankings on major search engines by implementing our thorough, common sense methodology. <Link :href="route('seo')">Get started now</Link></P>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="service-area bg2 sp">
    <div class="container">
        <div class="section-title">
            <h1 align="center">Helpful Shawod links</h1>
            <p align="center">For assistance or more inforamtion, visit these knowledge base links.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                        <Link :href="route('contactus')"><div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h4> Contact us</h4></Link>
                    </div>
                    <div class="content">
                        <p>We're always interested in hearing from people. follow the <Link :href="route('contactus')">link</Link>, let's chat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                        <Link :href="route('howitworks')"><div class="icon">
                            <i class="fa fa-life-ring"></i>
                        </div>
                        <h4> How it works</h4></Link>
                    </div>
                    <div class="content">
                        <p>Know the steps we take when embarking on your project, from approving to launching it.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                       <Link :href="route('createawebsite')"> <div class="icon">
                            <i class="fa fa-info-circle"></i>
                        </div>
                        <h4>How to create a website</h4></Link>
                    </div>
                    <div class="content">
                        <p>Follow these simple Shawod tutorials on how to get the best website or package.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                      <Link :href="route('portal')">  <div class="icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h4>Client portal</h4></Link>
                    </div>
                    <div class="content">
                        <p>We have designed a portal for clients to view their project real-time, this is the first of its kind in the Industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                        <Link :href="route('blog')"><div class="icon">
                            <i class="fa fa-magic"></i>
                        </div>
                        <h4>Blog</h4></Link>
                    </div>
                    <div class="content">
                        <p>Shawod offers a blog which features tech and business related articles. They say you learn something new everyday. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 single-service">
                <div class="inner">
                    <div class="title">
                      <Link :href="route('faq')"> <div class="icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <h4>Frequently Asked Questions</h4></Link>
                    </div>
                    <div class="content">
                        <p>We have combined frequently asked questions to help with questions you might have.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="assets/images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Why choose Shawod?</h1><br>
                        <p>Shawod serves as a resource to people with little or no web development skills to quickly own a website, what's more?
                        <br> Our websites are aesthetically simple, minimally adorned and Clutter-free,
                           blending with your business look or personal style.</p>
                        <br>
                        <p> o ice the cake, we are Cost-effective because here at Shawod we believe that
                             a website should be your best business investment, not an expense. <br>
                             Our primary goal is to ensure that your investment has a huge return.</p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <img src="assets/images/home/client1.png" class="img-responsive" alt="">
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <img src="assets/images/home/client2.png" class="img-responsive" alt="">
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <img src="assets/images/home/client3.png" class="img-responsive" alt="">
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <img src="assets/images/home/client4.png" class="img-responsive" alt="">
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <img src="assets/images/home/client5.png" class="img-responsive" alt="">
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <img src="assets/images/home/client6.png" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

    </div>
</template>

<script setup lang="ts">
import { onMounted } from 'vue';
import { route } from 'ziggy-js'
import { homeSlider }  from '@/composables/HomeSlider';
import { Link } from '@inertiajs/vue3';
onMounted(()=> homeSlider())
</script>

<style scoped>

</style>