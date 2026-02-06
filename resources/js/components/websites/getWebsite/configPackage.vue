<template>
    <div>
        <div style="float: left">
        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add btn-add"  id="span1" onclick="sub_page()"></i><span id="count1"></span>&nbsp;
        <i onclick="add_page()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="state">&nbsp;<b>Web page</b> (R255.00 for each additional page)</span>&nbsp;
         <i class="fa fa-question-circle button" @click="modalOpen" id="five" onclick="popUp('webpage')" ></i>
    </span>
        </p>

        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add btn-add" id="span2" onclick="sub_form()" ></i><span id="count2"></span>&nbsp;
        <i onclick="add_form()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="form">&nbsp;<b>Form</b> (R99.99 for each additional page)</span>&nbsp;
         <i class="fa fa-question-circle button" @click="modalOpen" id="five" onclick="popUp('form')"></i>
    </span>
        </p>


        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add" id="span3" onclick="sub_gallery()" ></i><span id="count3"></span>&nbsp;
        <i onclick="add_gallery()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="photo">&nbsp;<b>Photo Gallery</b> (R125.00 for each additional page)</span>&nbsp;
        <i class="fa fa-question-circle button" @click="modalOpen" id="five" onclick="popUp('gallery')"></i>
    </span>
        </p>

        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add" id="span4" onclick="sub_cms()" ></i><span id="count4"></span>&nbsp;
        <i onclick="add_cms()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="cms">&nbsp;<b>Content Management System</b> (R199.50 for each additional page)</span>&nbsp;
        <i class="fa fa-question-circle button" @click="modalOpen" id="five" onclick="popUp('content')" ></i>
    </span>
        </p>

        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add" id="span5" onclick="sub_logo()" ></i><span id="count5"></span>&nbsp;
        <i onclick="add_logo()" class="fa fa-plus-square" id="lg" style="font-size: 18px"></i>
        <span id="logo">&nbsp;<b>Logo Design</b> (R650.00)</span>&nbsp;
        <i class="fa fa-question-circle button" @click="modalOpen" id="five" onclick="popUp('logo')" ></i>
    </span>
        </p>

        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add" id="span10" onclick="sub_chat()" ></i><span id="count9"></span>&nbsp;
        <i onclick="add_chat()" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="basic">&nbsp;<b>Basic Chat Zone</b> (R800.00)</span>&nbsp;
          <i class="fa fa-question-circle button" @click="modalOpen" id="five" onclick="popUp('chat')" ></i>
    </span>
        </p>
    </div>


    <div style="float: right;   margin-right: 40px;">
        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add"  id="span15" onclick="sub_designg()" ></i><span id="count14"></span>&nbsp;
        <i onclick="add_designg()" id="spangg" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="g_design">&nbsp;<b>General Design</b> (R49.89)</span>&nbsp;
         <i class="fa fa-question-circle" @click="modalOpen" id="five" onclick="popUp('gDesign')"></i>
    </span>
        </p>
        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add"  id="span16" onclick="sub_designpr()" ></i><span id="count15"></span>&nbsp;
        <i onclick="add_designpr()" id="spanpr" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="p_design">&nbsp;<b>Premium Design</b> (R69.95)</span>&nbsp;
         <i class="fa fa-question-circle" @click="modalOpen" id="five" onclick="popUp('pDesign')" ></i>
    </span>
        </p>

        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add"  id="span17" onclick="sub_designc()" ></i><span id="count16"></span>&nbsp;
        <i onclick="add_designc()" id="spanc" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="c_design">&nbsp;<b>Custom Design</b> (R99.99 )</span>&nbsp;
         <i class="fa fa-question-circle" @click="modalOpen" id="five" onclick="popUp('cDesign')"></i>
    </span>
        </p>
        <br>
        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add"  id="span18" onclick="sub_seog()" ></i><span id="count17"></span>&nbsp;
        <i onclick="add_seog()" id="seog" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="g_seo">&nbsp;<b>Premium S.E.O</b> (R599.99 p/a)</span>&nbsp;
         <i class="fa fa-question-circle" @click="modalOpen" id="five" onclick="popUp('pSEO')"></i>
    </span>
        </p>

        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add"  id="span19" onclick="sub_seop()" ></i><span id="count18"></span>&nbsp;
        <i onclick="add_seop()" id="seop" class="fa fa-plus-square" style="font-size: 18px"></i>
        <span id="p_seo">&nbsp;<b>Professional S.E.O</b> (R999.99 p/a)</span>&nbsp;
         <i class="fa fa-question-circle" @click="modalOpen" id="five" onclick="popUp('proSEO')"></i>
    </span>
        </p>

        <p style="margin: 0px 0px 20px 0px">
    <span>
        <i class="fa fa-minus-square btn-add" style=" color: red;"  id="span20" onclick="sub_seoc()" ></i><span id="count19"></span>&nbsp;
        <i onclick="add_seoc()" id="seoc" class="fa fa-plus-square" style="font-size: 18px;"></i>
        <span id="c_seo">&nbsp;<b>Ultimate S.E.O</b> (R1499.99 p/a)</span>&nbsp;
         <i class="fa fa-question-circle" @click="modalOpen" id="five" onclick="popUp('uSEO')"></i>
    </span>
        </p>

    </div>

    </div>
</template>

<script setup lang="ts">
  import { modalToggle } from '@/composables/modalToggle'

  const { modalOpen } = modalToggle();
</script>

<style scoped>

</style>