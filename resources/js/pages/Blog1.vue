<template>
    <div>
     <BreadCrumb title="Blog"  description="DNS Privacy: Solutions emerging, but deployment lags. &nbsp;" />
     <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <img src="assets/images/blog/timeline/9.jpg" class="img-responsive" alt="">
                                    
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="#">DNS Privacy: Solutions emerging, but deployment lags</a></h2>
                                    <h3 class="post-author"><a href="#">By Mat Ford</a></h3>
                                    <p>I recently attended the DNS Privacy Workshop colocated with this year's NDSS 2017 in San Diego, California. DNS privacy has received considerable attention from researchers and engineers since the Snowden revelations of state-backed pervasive surveillance in 2013 and the workshop covered a lot of ground.
                                        <br><br>For some Internet users, anonymity is critically important and a service like ToR exists to obfuscate the location and browsing habits of ToR users. Even ToR users have a need to resolve names using DNS however (for non-hidden services) and they are then vulnerable to the exit relay operator's DNS configuration. The addition of DNS data to existing attack techniques makes attacks more precise, especially for infrequently visited websites (e.g. dissident sites). Exit relay operators are therefore advised to run their own resolvers with QNAME minimisation. In the long term, adding confidentiality to DNS is necessary to prevent it being used as a vector for de-anonymisation of ToR users.

                                        <br><br>Curiously, ToR was also discussed as a potential solution to the problem of DNS recursive resolver logs falling into the wrong hands. Incorporating a micropayment solution to align incentives and using ToR to anonymise traffic could create a recursive resolution service that wouldn't have the logging vulnerability problems we see today. Latency of such a service would however be an issue in many cases, which brings me to my next point.

                                        <br><br>There is a critical tension between contemporary uses of the DNS to provide resilient and low-latency services versus the desire for greater privacy. Most DNS TTLs of the Alexa top 500 are less than 20 minutes. TTLs of 20 minutes make caching solutions and tools like Namecoin effectively impractical for popular sites. One suggestion is to download large caches of DNS data from relatively anonymous locations (libraries, coffeeshops, etc.) and then use those when in more privacy-vulnerable locations, e.g. at home. However within a 2 week window one third of A records (and nearly two thirds of AAAA records go figure) for the Alexa top 500 have changed, so this approach, while certainly possible, has clear limitations.

                                        <br><br>While DNS privacy seems like an unambiguously good thing, greater confidentiality of DNS traffic will impact researchers and service providers that rely on passive collection of DNS information. Codifying anonymisation and data access practices may help here.

                                        <br><br>Workshop participants heard concerns about the pace with which the technical building blocks for adding confidentiality to DNS, namely DNS-over-TLS, are being adopted. However, we should remember that DNS-over-TLS was only standardized 9 months ago in RFC 7858.

                                        <br><br>In addition to addressing the implementation and deployment challenge, the DNS community needs to heed the lessons about usable security that have been learned, e.g. from HTTP(S) security indicators and SSL Certificate warnings. In order for DNS privacy solutions to become pervasive, addressing the usability challenge is essential. It may be that the emerging solutions to the DNS privacy problem are not sufficiently baked or too hot off the press to expect much deployment to have taken place, or a stronger effort to evangelise the availability of new tools may be necessary.

                                        <br><br>The workshop also considered a detailed analysis of padding DNS queries and responses (padding encrypted DNS messages makes it harder to apply size-based correlation with known unencrypted messages), securing DNS Service Discovery, and a detailed analysis of the tradeoffs between the numerous authentication mechanisms for DNS privacy enabling recursive resolvers.

                                        <br><br>The workshop concluded with breakouts creating content for the workshop report including conclusions, recognised challenges and research agenda recommendations. A full report of the workshop will be available in due course.

                                        <br><br>Slides from the workshop are available and audio should also be available soon. The DNS Privacy Project pages provide extensive further reading and details regarding available implementions of servers and clients supporting DNS-over-TLS.

                                    </p>
                                    
                                    <div class="post-bottom overflow">
                                        <ul class="nav navbar-nav post-nav">
                                            <li><Link :href="route('blog')"><i class="fa fa-arrow-left"></i>Go back</Link></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    </div>
                
                     <related>
                        <template #related1Image>
                            <img src="assets/images/portfolio/project1.jpg" alt="">
                        </template>

                        <template #related2Image>
                            <img src="assets/images/portfolio/project2.jpg" alt="">
                        </template>

                        <template #related3Image>
                            <img src="assets/images/portfolio/project3.jpg" alt="">
                        </template>


                        <template #related1>
                            <h4><Link :href="route('blog3')">The Danger of Giving Up Social Media Passwords - So Many Other Services Are Connected</Link></h4>
                            <p>By internetsociety.org</p>
                        </template>

                        <template #related2>
                            <h4><Link :href="route('blog4')">What the Year's Best Movies Can Teach Us About Small Business Success</Link></h4>
                            <p>By Celia Shatzman</p>
                        </template>

                        <template #related3>
                            <h4><Link :href="route('blog2')">Outstanding Ways to Promote Your New Website</Link></h4>
                            <p>By Bryan Caplan</p>
                        </template>
                     </related>
                
            </div>
        </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import { route } from 'ziggy-js';
import related from '@/components/blog/related.vue';
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>