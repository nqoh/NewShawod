	// contactus Form Submition
	var form = $('.contact100-form');
	form.submit(function(event){
		event.preventDefault();
        if(validation()){
	    var ajax = new XMLHttpRequest();
        ajax.open("POST","contact.php",true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        var form_status = $('#FormStatus');
        form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Sending message...</p>');
		 ajax.onreadystatechange=function () {
             if(ajax.readyState === 4 && ajax.status === 200) {
		 		 form_status.html('<p class="text-success">Message sent!</p>').delay(3000).fadeOut();
		 		 _("ContactusName").value = ""
		 		 _("ContactusEmail").value =""
				 _("ContactusMessage").value = ""
			}
		 }
	     ajax.send("name="+_("ContactusName").value+"&message="+_("ContactusMessage").value+"&email="+_("ContactusEmail").value);
      }
  });

function validation(){

       _('messegeError').style.display='none'
       _('NameError').style.display='none'

       if(_('ContactusName').value.length < 3)
        {
          _('NameError').style.display='block'
          return false
        }

        if(_('ContactusMessage').value.length < 10)
          {
           _('messegeError').style.display='block'
           return false
         }

        return true
 }


 var form = $('#footer-contact-form');
 form.submit(function(event){
     event.preventDefault();
     if(Footervalidation()){
     var ajax = new XMLHttpRequest();
     ajax.open("POST","contact.php",true);
     ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
     var form_status =  $('<div class="form_status"></div>');
     form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Sending message...</p>').fadeIn() );
      ajax.onreadystatechange=function () {
          if(ajax.readyState === 4 && ajax.status === 200) {
            form_status.html('<p class="text-success">Message sent!</p>').delay(3000).fadeOut();
              _("FooterName").value = ""
              _("FooterEmail").value =""
              _("FooterMessage").value = ""
         }
      }
      ajax.send("name="+_("FooterName").value+"&message="+_("FooterMessage").value+"&email="+_("FooterEmail").value);
   }
});


 function Footervalidation(){

    _('ErrorFooterMessage').style.display='none'
    _('ErrorFooterName').style.display='none'

    if(_('FooterName').value.length < 3)
     {
       _('ErrorFooterName').style.display='block'
       return false
     }

     if(_('FooterMessage').value.length < 10)
       {
        _('ErrorFooterMessage').style.display='block'
        return false
      }

     return true
}



    $('.button').click(function(){
        setTimeout(function () {
            document.getElementById('form').style.display='flex'
            document.getElementById('closeM').style.display='block'
            document.getElementById('svg').style.display='none'
            //   $('#form').addStyle('display','block')
        },1000)
        var buttonId = $(this).attr('id');
        $('#modal-container').removeAttr('class').addClass(buttonId);
        $('body').addClass('modal-active');
    })

    $('#closeM').click(function () {
        document.getElementById('form').style.display='none';
        document.getElementById('closeM').style.display='none';
        document.getElementById('svg').style.display='flex'
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
    })