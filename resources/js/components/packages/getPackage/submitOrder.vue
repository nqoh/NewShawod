<template>
    <div>
        
    <div class="container">
     <section id="clients">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1> Finally submit your order </h1>
                    </div>
                </div>
            </div>
     </section>
    </div>

    <div class='container' style=" margin-top: -5%">
    <div class='panel panel-primary dialog-panel' style="border-color: #33ccff;">
        <div class='panel-heading' style="background-color:#33ccff;border-color: #33ccff">
            <h5 align="center">Double check to see if you have everything you need. If not, don't stress you'll add more on clients portal.</h5>
        </div>
        <div class='panel-body' >

            <form class='form-horizontal' role='form'>
                
                <div class='form-group'>
                    <span style="color: red; margin-left:35%" id="error_email"></span><br>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Name</label>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <div class='col-md-11'>
                                <input class='form-control' id='id_first_name' onblur="name_out('id_first_name','name_error')" placeholder='Name' type='text'>
                            </div>
                            <span style="color: red; margin-left: 22%" id="name_error"></span>
                        </div>
                    </div>
                </div>

                <div class='form-group'>
                    <span style="color: red; margin-left:35%" id="error_email"></span><br>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Surname</label>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <div class='col-md-11'>
                                <input class='form-control' id='id_last_name' onblur="name_last('id_last_name','surname_error')" placeholder='Surname' type='text'>
                            </div>
                            <span style="color: red; margin-left: 22%" id="surname_error"></span>
                        </div>
                    </div>
                </div>


                <div class='form-group'>
                    <span style="color: red; margin-left:35%" id="error_email"></span><br>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Email</label>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <div class='col-md-11'>
                                <input class='form-control' id='id_email' placeholder='E-mail' onblur="email('id_email','email_error')" type='text'>
                            </div>
                            <span style="color: red; margin-left: 22%" id="email_error"></span>
                        </div>
                    </div>
                </div>

                <div class='form-group'>
                    <span style="color: red; margin-left:35%" id="error_email"></span><br>
                    <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Phone</label>
                    <div class='col-md-6'>
                        <div class='form-group'>
                            <div class='col-md-11'>
                                <input class='form-control' id='id_phone' onblur="phone('id_phone','phone_error')" placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                            </div>
                            <span style="color: red; margin-left: 22%" id="phone_error"></span>
                        </div>
                    </div>
                </div>

                <div class='form-group'>
                   
                    <label class='control-label col-md-2 col-md-offset-2'  for='id_comments'>About your project</label>
                    <div class='col-md-6'>
                        <textarea class='form-control' id='id_comments' onblur="website('id_comments','error_coment')" placeholder='Additional requirements' rows='5'></textarea>
                    </div>
                    <span style="color: red; margin-left:35%" id="error_coment"></span><br>
                </div>
                <div class='form-group'>
                    <div class='col-md-offset-4 col-md-3'>
                        <div class="loading-dock">
                            <svg id="load-b" x="0px" y="0px" viewBox="0 0 150 150">
                                <circle class="loading-inner" cx="75" cy="75" r="60"/>
                            </svg>
                            <svg id="load" x="0px" y="0px" viewBox="0 0 150 150">
                                <circle class="loading-inner" cx="75" cy="75" r="60"/>
                            </svg>
                            <button class="submit" id="btn_submit" style="float: left" onclick="return false" onmousedown="send_data('id_first_name','id_last_name','id_email','id_phone','id_comments','id_title')">Submit order</button>

                            <svg id="check" style="width:24px;height:24px" viewBox="0 0 24 24">
                            </svg>

                        </div>
                    </div>

                </div>
            </form>
            <p id="errors" style="margin: 0px;color:red;font-size: 18px; display: none" align="center"></p>
            <p id="success" style="margin: 0px;color:#33ccff;font-size: 18px; display: none" align="center">Your order was successful submitted ! check you email address </p>
        </div>
    </div>
</div>

<!-- <div class='form hidden' style="margin-top: 5px;" >
        <h3 class='heading' align="center">How do you feel about our customer service?</h3>
        <div  class='sliding-list'>
            <ul id='list'>
                <li>Absolutely Terrible!</li>
                <li>Disappointing</li>
                <li>Quite Bad hey</li>
                <li>Not impressed</li>
                <li>Nothing to be proud of</li>
                <li>Could have been better</li>
                <li>Ok, I guess</li>
                <li>Satisfactory</li>
                <li>Was Great</li>
                <li>Super Impressed!</li>
            </ul>
        </div>
        <input class='slider' max='99' min='0' id="slider" style="margin: 0px auto" align="center" oninput='updateSlider(value)' type='range' value='80'>
    </div>

  

    <p align="center" id="rateSuccess">Thank you for rating us</p>
    <div class='form-group' id="ratebtn">
        <div class='col-md-offset-0'>
            <button class='btn-lg btn-primary' id="btn_submit" style="background: #33ccff" onclick="send_feedback()">Send feedback</button>
        </div>
    </div>   -->

    </div>
</template>

<script setup lang="ts">

</script>

<style scoped>

</style>