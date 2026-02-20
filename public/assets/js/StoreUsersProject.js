function _(x){
    return document.getElementById(x);
}
function mouse_in(nm) {
            _(nm).style.backgroundColor="white"
}
function name_out(nx,error) {
    if(_(nx).value !="") {
        if (_(nx).value.trim().length < 3) {
            _(error).innerHTML = "Enter three or more characters"
            _(nx).style.border="1px solid red";
            _(nx).focus();
            return false
        } else {
            if (_(nx).value.trim().match('^[0-9]')) {
                _(error).innerHTML = "Name can't start with number"
                _(nx).focus();
                _(nx).value=""
                return false
            } else {
                _(error).innerHTML = ""
                _(nx).style.border="none";
            }
        }
    }else{
        _(error).innerHTML = "Enter your name"
        _(nx).style.border="1px solid red";
        _(nx).focus();
        _(nx).value=""
        return false
    }
}

function name_last(nx,error) {
    if(_(nx).value !="") {
        if (_(nx).value.trim().length < 3) {
            _(error).innerHTML = "Enter three or more characters"
            _(nx).focus();
            _(nx).style.border="1px solid red";
            return false
        } else {
            if (_(nx).value.trim().match('^[0-9]')) {
                _(error).innerHTML = "Surname can't start with number";
                _(nx).focus();
                _(nx).value=""
                return false
            } else {
                _(error).innerHTML = ""
                _(nx).style.border="none";
            }
        }
    }else{
        _(error).innerHTML = "Enter your surname"
        _(nx).focus();
        _(nx).value=""
        return false
    }
}


function email(e,r) {
    if(_(e).value.trim() !=""){
        if(_(e).value.indexOf('@') > -1 && _(e).value.lastIndexOf('.') > -1){
            _(e).style.border="none";
            _(r).innerHTML="";
        }else{
            _(r).innerHTML="Invalid email address";
            _(e).style.border="1px solid red";
            _(e).focus();
            return false
        }
    }else{
        _(r).innerHTML="Enter email address";
        _(e).style.border="1px solid red";
        _(e).value=""
        _(e).focus();
        return false
    }
}

function phone(c,error){
   const input =  _(c).value.replace(/\D/g,'');
   const size =  input.length;
  if(size === 0){
    _(c).value = input;
  }else if(size < 4){
    _(c).value = `(${input})`;
  }else if( size < 7){
    _(c).value = `(${input.slice(0,3)}) ${input.slice(3)}`;
  }else{
    _(c).value = `(${input.slice(0,3)}) ${input.slice(3,6)}-${input.slice(6,10)}`;
  }
  if(_(c).value.length < 14){
    _(error).innerHTML="Enter 10 digit of phone number";
    _(c).style.border="1px solid red";
    _(c).focus();
    _(c).value=""
  }else{
    _(error).innerHTML="";
    _(c).style.border="none";
  }
}

function website(vl,rx) {
    if(_(vl).value.trim() != ""){
        if(_(vl).value.trim().length < 30){
            _(rx).innerHTML="Write some description 30 or more characters";
            _(vl).style.border="1px solid red";
            _(vl).focus()
            return false
        }
    }else{
        _(rx).innerHTML="Write description of your website";
        _(vl).style.border="1px solid red";
        _(vl).focus()
        return false
    }
    _(rx).innerHTML="";
    _(vl).style.border="none";
}


function send_data(nam,lname,email,contact,text) {
_('errors').style.display= "none"

var packname=localStorage.package;
var d = localStorage.discounts;

    if(_(nam).value.trim().length < 3){
        _(nam).style.border="1px solid red"
        _('name_error').innerHTML = "Three or more characters allowed"
        return false
    }

    if(_(lname).value.trim().length < 3){
        _(lname).style.border="1px solid red"
        _('surname_error').innerHTML = "Three or more characters allowed"
        return false
    }

    if(_(email).value === ""){
        _(email).style.border="1px solid red"
        _('email_error').innerHTML = "Enter email address"
        return false
    }

    if(_(text).value.trim().length < 30){
        _(text).style.border="1px solid red"
       _('error_coment').innerHTML = "Write some description 30 or more characters"
        return false
    }


    var arry =[nam,lname,email];

    for(i=0; i < arry.length ; i++){
        if(_(arry[i]).value == ""){
            _(arry[i]).style.border="1px solid red"
            return false
        }else{
            _(arry[i]).style.border="none";
        }
    }

   if(_(nam).value.trim() !=="" && _(email).value.trim() !== "" && _(text).value.trim() !==""){
        var p = parseFloat(_('order').innerHTML.substr(1, _('order').innerHTML.length - 2))
     storeUserProject(nam,lname,email,contact,text,packname,parseFloat(p.toFixed(2)/100*50).toFixed(2),p.toFixed(2),feature);
	// localStorage.removeItem("discounts");
   }
}



async function storeUserProject(n,ln,e,c,t,pp,deposite,pr,f) {
  
    _("btn_submit").innerHTML="Please wait...";
    _("btn_submit").setAttribute('disabled','disabled')
    
   const data = {
    name : _(n).value,
    surname: _(ln).value,
    email: _(e).value,
    phone: _(c).value,
    description: _(t).value,
    package: pp,
    coupon_id: localStorage.coupon_id,
    price: parseInt(pr).toFixed(2),
    features: f,
    type: localStorage.type
   }

    try{
        const response = await fetch('api/v1/store', {
            method: 'POST',
            headers:{
                'Content-type': 'application/json',
                'Accept' : 'application/json',
                'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        });

         const result  = await response.json();

         if(response.ok){
            _("btn_submit").removeAttribute('disabled')
            _(n).value="";_(e).value="";_(c).value="";_(t).value="";_(ln).value="";
            _('success').style.display ="block"
            _('btn_submit').style.display="none"
            localStorage.removeItem('coupon_id')
         }else{
            _('errors').style.display = "block"
            _('errors').innerHTML = result.errors.email;
            _("btn_submit").innerHTML="Submit order";
            _("btn_submit").setAttribute('disabled','disabled')
            _("btn_submit").removeAttribute('disabled')
         }
       
    }catch(error){
       _('errors').style.display = "block"
       _('errors').innerHTML = error;
    }
}

