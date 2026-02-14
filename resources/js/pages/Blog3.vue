<template>
    <div>
     <BreadCrumb title="Blog"  description="The Danger of Giving Up Social Media Passwords - So Many Other Services Are Connected. &nbsp;" />
     <section id="blog" class="padding-top">
     <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <img src="assets/images/blog/timeline/1.jpg" class="img-responsive" alt="">
                                    
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="#">The Danger of Giving Up Social Media Passwords - So Many Other Services Are Connected</a></h2>
                                    <h3 class="post-author"><a href="#">By internetsociety.org</a></h3>
                                    <p>"What's the harm in giving up my Twitter password?", you might say, "all someone can do is see my direct messages and post a tweet from me, right?"
<br>Think again. The reality today is that social media services are used for far more than just posting updates or photos of cats. They also act as "identity providers" allowing us to easily login to other sites and services.
 
                                    <br><br>We've all seen the "Login with Twitter" or "Continue with Facebook" buttons on various sites. Or for Google or LinkedIn. These offer a tremendous convenience. You can rapidly sign into sites without having to remember yet-another-password.
 
<br>But if you give your passwords to your social media accounts to someone, they could potentially <br><br><i class="fa fa-angle-right" style="font-size: 18px;"></i> Impersonate you on social media accounts and post updates in your name.
<br><br><i class="fa fa-angle-right" style="font-size: 18px;"></i> Sign in to the comment sections of various news media sites and leave comments using your name.
<br><br><i class="fa fa-angle-right" style="font-size: 18px;"></i> Connect in to photo sites and see our photos, and modify or delete the photos, or post new ones in your name.
<br><br><i class="fa fa-angle-right" style="font-size: 18px;"></i> Sign in to e-commerce sites, view your orders and purchase items.
<br><br><i class="fa fa-angle-right" style="font-size: 18px;"></i> Login to video sites and see what videos you have watched, or post new ones to your account.
<br><br><i class="fa fa-angle-right" style="font-size: 18px;"></i> Login to your Medium account, view and change any articles you have written, add new comments as you.
<br><br><i class="fa fa-angle-right" style="font-size: 18px;"></i> Sign in to Goodreads, view all your books, see all the lists of what you want to read, view all your reviews and post reviews in your name.
<br><br><i class="fa fa-angle-right" style="font-size: 18px;"></i> Login to your Spotify account and learn all about what kind of music you like to listen to.

<br><br>And that's only a small number of examples.

<br><br>
We live in an era of highly-connected systems. And there are so many systems and services! The convenience of using our social media accounts to login is easy to understand.
<br><br>But if you give someone your password to a social media account, or are required to give your social media passwords to someone, you are giving them access to so much more than just that social media service.

<br><br>What can you do?
<br><br>1. Don't give out your social media passwords!
<br>2. Understand where your social media IDs are being used. In both Twitter and Facebook you can go into your "Settings" and choose "Apps" to see where you have granted access. You can revoke access there for sites and services you no longer use.
<br>3. Think about whether you want to continue using your social media IDs in so many places. Does the convenience outweigh the issue of having so many services linked to one identity?
<br>4. Enable 2-Factor Authentication on sites that offer this, which requires a second step beyond just your password to login. These are very easy to use, often using a phone or a small and inexpensive "dongle" that fits on your keyring.[2] Do note that this may not help if you are required by authorities to provide your social media passwords as they may require you provide the device used for two-factor authentication.
<br>5. Use a password manager instead of using your social media ID to login to other sites, which enables you to generate and use very strong passwords and access them all with one master password. There are many excellent free and paid options available for both computers and mobile devices, with a variety of features.
<br>6. Spread the word. Help others understand how critically important our social media passwords are.
<br>P.S. For more ideas, please see
<br><br>[1] Depending upon how you have configured the service to work.

<br>[2] The FIDO Alliance is a leader in this area, and a list of enabled sites and certified products is available on their site <a href="https://fidoalliance.org/adoption/overview/"> https://fidoalliance.org/adoption/overview/ </a>
<br>

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
                            <h4><Link :href="route('blog1')">DNS Privacy: Solutions emerging, but deployment lags</Link></h4>
                            <p>By Mat Ford</p>
                        </template>

                        <template #related2>
                            <h4><Link :href="route('blog2')">Outstanding Ways to Promote Your New Website</Link></h4>
                            <p>By Bryan Caplan</p>
                        </template>

                        <template #related3>
                            <h4><Link :href="route('blog4')">What the Year's Best Movies Can Teach Us About Small Business Success</Link></h4>
                            <p>By Celia Shatzman</p>
                        </template>
                     </related>  
        </div>
        </div>
    </section>
  </div>
  <WhatsApp />
</template>

<script setup lang="ts">
 import WhatsApp from '@/components/app/WhatsApp.vue'
import BreadCrumb from '@/components/app/BreadCrumb.vue';
import { route } from 'ziggy-js';
import related from '@/components/blog/related.vue';
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>