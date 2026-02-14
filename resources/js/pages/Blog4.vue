<template>
    <div>
     <BreadCrumb title="Blog"  description="What the Year's Best Movies Can Teach Us About Small Business Success. &nbsp;" />
     <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <img src="assets/images/blog/timeline/3.jpg" class="img-responsive" alt="">
                                    
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="#">What the Year's Best Movies Can Teach Us About Small Business Success</a></h2>
                                    <h3 class="post-author"><a href="#">By Celia Shatzman</a></h3>
                                    <p>They'll make you laugh, cry, and ponder the limits of determination and strength. When it comes to movies nominated for Best Picture at the Academy
Awards, there is much we can learn. And that also includes what they can teach us about small business success. <br>These are a few of the key lessons you can learn from this year's nominees. 
                                    <br><br><b>Master Communication</b>
                                    We're not saying that you should learn how to speak to aliens like linguistics professor Louise Banks in Arrival. But there are plenty of lessons we can learn
from Amy Adams's character without going that far. 
<br>
                                    In the sci-fi flick, she races against the clock to learn how to communicate with aliens to find out why they have landed on Earth and what they want. While
your business may not be quite as high stakes, it's certain that learning how to convey the right message is crucial for any small biz. <br>Similar to Arrival, figure out what people are looking for and how you can deliver it. By keeping the lines of communication open, you'll be able to target
the bottom line through knowing what people's needs and expectations are. <br><br><b>Embrace Equality </b>
Hidden Figures tells the true story of a group of female African-American mathematicians who made incredible advancements for NASA by making the
calculations that enabled astronaut John Glenn to go into orbit safely during the space race with Russia.<br>
While that makes them American heroes, we see them struggling with racism during the Civil Rights era, including a scene in which they must use the
"colored" bathrooms across campus. That triggers NASA to realize they must treat their employees more equally in order to ensure progress for their space
initiatives and beyond.<br>
Let that serve as a reminder that by treating all of your employees with respect no matter their gender, age, or where they come from your projects will rise
when everyone is treated fairly.<br>
<br><b>Never Give Up</b>
In Lion, Saroo is a young boy living a happy but impoverished life with his family in rural India until he ends up separated from them a thousand miles
away from home. He is eventually adopted by loving parents from Australia, but he always wonders what happened to his biological family. <br>
Determined to be reunited with them, Saroo goes on an adventure to track them down. Even in the age of technology, it's not an easy process, and he
overcomes many hurdles along the way.<br>
Next time you hit a mountain you must cross at work, channel Saroo: Think about clever solutions, since there's more than one way to tackle a challenge.
And keep trying again and again. <br><br>

<b>What's Old Is New Again</b>
The Wizard of Oz. Singin in the Rain. West Side Story. My Fair Lady. Those are just a few classic movie musicals. While they were a staple in American
cinema for decades, the genre had recently fallen out of favor until La La Land came along, putting a modern touch on an old favorite.<br>
We're not saying you should burst into song and dance at your next meeting, but follow in the fancy footsteps of Ryan Gosling and Emma Stone by finding
a way to put a new spin on a vintage approach. That creativity captivated audience, and it can captivate customers, too. <br><br>
<b>Stick to Your Values</b>
Based on a true story, Hacksaw Ridge follows Desmond T. Doss, an American army medic sent to battle in World War II. As a religious man, he's a
conscious objector who refuses to fire a shot.<br>
Instead, he crosses enemy lines to save injured soldiers during the Battle of Okinawa and is awarded the Medal of Honor for his immense bravery and
dedication to other soldiers. When you're surrounded by people who don't believe the same things as you, it can be hard to stick to your guns. But Doss
illustrates the importance of listening to your gut.<br>
Running a small business requires making many difficult decisions, and letting your moral compass guide you can help you determine what's right for you
and your company. <br><br>
<b>Find Your Road</b>
Set in a rough neighborhood in Miami during the drug war years, the audience watches Chiron grow up in Moonlight with little guidance, struggling to find
his place in the world. As he comes of age, he must learn to carve a path for himself.<br>
Similarly, it can be hard for new businesses to find their way. Determine a clear direction that you'd like your company to take. By thinking that through
and having a clear vision and path, it'll make success much more attainable. <br><br>
<b>Face Your Past</b>
In Manchester By the Sea, the life of Lee Chandler is told in a series of flashbacks and present day scenes, slowly unveiling what led him to flee from his
town and his life there.<br>
Dwelling on the past isn't always the best idea, but there are always lessons to be learned. Think of what you could have done better along the way, and how
that can shape your business going forward.<br>



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
                            <h4><Link :href="route('blog2')">Outstanding Ways to Promote Your New Website</Link></h4>
                            <p>By Bryan Caplan</p>
                        </template>

                        <template #related2>
                            <h4><Link :href="route('blog3')">The Danger of Giving Up Social Media Passwords - So Many Other Services Are Connected</Link></h4>
                            <p>By internetsociety.org</p>
                        </template>

                        <template #related3>
                            <h4><Link :href="route('blog1')">DNS Privacy: Solutions emerging, but deployment lags</Link></h4>
                            <p>By Mat ford</p>
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