<template>
    <div>
     <BreadCrumb title="Blog"  description="Useful articles. &nbsp;" />
      <section id="blog" class="padding-bottom">
        <div class="container">
            <div class="row">
                <div class="timeline-blog overflow padding-top">
                    <div class="timeline-date text-center">
                        <span class="btn btn-common uppercase">Technology</span>
                    </div>
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="assets/images/blog/timeline/1.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><Link :href="route('blog3')"><small>Security</small></Link></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><Link :href="route('blog3')">The Danger of Giving Up Social Media Passwords - So Many Other Services Are Connected</Link></h2>
                                    <h3 class="post-author"><Link :href="route('blog3')">By internetsociety.org</Link></h3>
                                    <p>"What's the harm in giving up my Twitter password?", you might say, "all someone can do is see my direct messages and post a tweet from me, right?"
                                        Think again. The reality today is that social media services are used for far more than just posting updates or photos of cats. They also act as "identity[...]</p>
                                    <Link :href="route('blog3')" class="read-more">View More</Link>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="assets/images/blog/timeline/9.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><Link :href="route('blog1')"><small>Privacy</small></Link></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><Link :href="route('blog1')">DNS Privacy: Solutions emerging, but deployment lags</Link></h2>
                                    <h3 class="post-author"><Link :href="route('blog1')">By Mat Ford</Link></h3>
                                    <p>I recently attended the DNS Privacy Workshop colocated with this year's NDSS 2017 in San Diego, California. DNS privacy has received considerable attention from researchers and engineers since the Snowden revelations of state-backed pervasive surveillance in 2013 and the workshop covered a lot of ground[...]</p>
                                    <Link :href="route('blog1')" class="read-more">View More</Link>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                        <img src="assets/images/blog/timeline/8.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><Link :href="route('blog5')"><small>Domain</small></Link></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><Link :href="route('blog5')">How to choose a domain name [10 tips]</Link></h2>
                                    <h3 class="post-author"><Link :href="route('blog5')">By Andrea Rowland</Link></h3>
                                    <p>Follow the steps below to help you pick the perfect domain name. And if you want to learn even more about domain names, check out “What is a domain name” for in-depth information. [...]</p>
                                    <Link :href="route('blog5')" class="read-more">View More</Link>
                                    </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="timeline-blog overflow">
                    <div class="timeline-date text-center">
                        <span class="btn btn-common uppercase">Business</span>
                    </div>
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="assets/images/blog/timeline/3.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><Link :href="route('blog4')"><small>Lesson</small></Link></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><Link :href="route('blog4')">What the Year's Best Movies Can Teach Us About Small Business Success</Link></h2>
                                    <h3 class="post-author"><Link :href="route('blog4')">By Celia Shatzman</Link></h3>
                                    <p>They'll make you laugh, cry, and ponder the limits of determination and strength. When it comes to movies nominated for Best Picture at the Academy
                                        Awards, there is much we can learn. And that also includes what they can teach us about small business success. These are a few of the key lessons you can[...]</p>
                                    <Link :href="route('blog4')" class="read-more">View More</Link>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="single-blog timeline">
                                <div class="single-blog-wrapper">
                                    <div class="post-thumb">
                                        <img src="assets/images/blog/timeline/4.jpg" class="img-responsive" alt="">
                                        <div class="post-overlay">
                                           <span class="uppercase"><Link :href="route('blog2')"><small>Expand</small></Link></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><Link :href="route('blog2')">Outstanding Ways to Promote Your New Website</Link></h2>
                                    <h3 class="post-author"><Link :href="route('blog2')">By Bryan Caplan</Link></h3>
                                    <p>According to AdWeek, 81 percent of consumers want to see a company's website before they buy a product or service.Some people visit a particular website directly, perhaps through a link they saw on social media, in an email marketing campaign, or in a blog post they read but the majority [...]</p>
                                    <Link :href="route('blog2')" class="read-more">View More</Link>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-date text-center">
                        <span class="btn btn-common">NEW CONTENT LOADING</span>
                    </div>
             </div>
        </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import { Link } from '@inertiajs/vue3';
import { route } from 'ziggy-js';
</script>

<style scoped>

</style>