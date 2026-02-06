<script setup lang="ts">
import { route  } from 'ziggy-js';

</script>

<template>
<div class="faq-area sp bg2">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>We have gathered some of the faq's, <Link :href="route('faq')"> Read more</Link>.</p>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="faq">
                        <div class="single-item" id="item1" onclick="activefaq('item1')">
                            <h4>How much does a website cost?</h4>
                            <div class="content" id="content1">
                                The cost of a website can vary depending on various factors, just like the cost of a house may vary. Though our website projects generally start in the R1,900.00 range for basic sites and range upward depending on your unique needs.
                            </div>
                        </div>
                        <div class="single-item " id="item2" onclick="activefaq('item2')">
                            <h4>How long will it take to design my website?</h4>
                            <div class="content"  id="content2">
                                Currently our production schedule is 4 working days for a basic website, this time will vary from project to project. Projects may take from 1 to 6 weeks and this may also vary.
                            </div>
                        </div>
                        <div class="single-item" id="item3" onclick="activefaq('item3')">
                            <h4>To begin creating our new website, what do you need?</h4>
                            <div class="content" id="content3">
                                To develop a new website for you, we need to know exactly what you want it to be able to do. That information forms the project specification (often referred to as the "project specs" or "design brief"). Please send us the following in an email message
                            </div>
                        </div>
                        <div class="single-item" id="item4" onclick="activefaq('item4')">
                            <h4>How do I obtain a dedicated email account? (me@mywebsite.com)</h4>
                            <div class="content" id="content4">
                                When you purchase an account with a web host, one of the services you receive is a certain number of dedicated email accounts for any domain hosted on that account. Some web hosts give you one email account, or 10 email accounts, or unlimited email accounts. Those email accounts are managed from the control panel of the web host, please view our Hosting Packages.
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-6">
                <div class="faq-img text-center">
                    <img src="/assets/images/home/shasupport.png" alt="faq">
                </div>
            </div>
        </div>
    </div>
</div>
</template>
