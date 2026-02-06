function _(x) {return document.getElementById(x)}

export const getwebsite = ()=>{
    
    if(localStorage.type=='package'){
        localStorage.clear();
    }
    if(localStorage.package == null && localStorage.benefit1 == null && localStorage.benefit2 == null && localStorage.benefit3 == null && localStorage.prc==null){
        window.location="../"
    }else{

        _("p_name").innerHTML=localStorage.package
        _("pack").innerHTML=localStorage.package
      /*  _("title").innerHTML=localStorage.package+" | Shawod"*/
        _("b1").innerHTML=localStorage.benefit1
        _("b2").innerHTML=localStorage.benefit2
        _("b3").innerHTML=localStorage.benefit3
        _("d1").innerHTML='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit1
        _("d2").innerHTML='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit2
        _("d3").innerHTML='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit3
        _("benefit1").innerHTML=localStorage.benefit1
        _("benefit2").innerHTML=localStorage.benefit2
        _("benefit3").innerHTML=localStorage.benefit3
        _("benefit4").innerHTML=localStorage.benefit4
       /* _("d4").innerHTML='<b style="color: rgb(102,204,255)">&#10003;</b>'+localStorage.benefit4*/
        if(localStorage.benefit5 !=''){ var b5='<li class="wow fadeInUp animated" data-wow-duration="500ms" ' +
            'data-wow-delay="500ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms;' +
            ' animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit5+'</li>'}else{var b5="";}
        _("d5").innerHTML=b5;
        if(localStorage.benefit6 !=''){ var b6=' <li class="wow fadeInUp animated" data-wow-duration="400ms" ' +
            'data-wow-delay="500ms" style="visibility: visible; animation-duration: 600ms; animation-delay: 400ms;' +
            ' animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit6+'</li>'}else{var b6="";}
        _("d6").innerHTML=b6;
        if(localStorage.benefit7 !=''){ var b7='<li class="wow fadeInUp animated" data-wow-duration="300ms" ' +
            'data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms;' +
            ' animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit7+'</li>'}else{var b7="";}
        _("d7").innerHTML=b7;
        if(localStorage.benefit8 !=''){ var b8='<li class="wow fadeInUp animated" data-wow-duration="300ms" ' +
            'data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms; ' +
            'animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit8+'</li>'}else{var b8="";}
        _("d8").innerHTML=b8;
        // if(localStorage.benefit9 !=''){ var b9='   <li class="wow fadeInUp animated" data-wow-duration="300ms" ' +
        //     'data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 500ms; ' +
        //     'animation-name: fadeInUp;"><i class="fa fa-angle-right"></i>'+localStorage.benefit9+'</li>'}else{
        //         var b9 ="";
        //     }
        _("prc").innerHTML=""+parseFloat(localStorage.prc).toFixed(2)+" !"
        _("image").src=localStorage.imagex
        _("order").innerHTML="R"+parseFloat(localStorage.prc).toFixed(2)+" !";
        _("discount").innerHTML="R "+parseFloat(parseFloat(localStorage.prc).toFixed(2)/100*50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
        localStorage.setItem("discounts",parseFloat(localStorage.prc).toFixed(2)/100*50);
        localStorage.setItem("total_p",parseFloat(localStorage.prc).toFixed(2));
        localStorage.setItem("feature",localStorage.package);
        /*_("status").innerHTML=localStorage.sts;*/
    }
}