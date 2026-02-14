var i = 0
function btn_change() {
    _('apply').style.display="block";
    if(i >= 1) {
        _('order').innerHTML = "R" + localStorage.getItem('savedprice') + " !"
    }
    _('coupon_error').innerHTML="";
    _('couponId').value = _('couponId').value.trim().substr(0,8)
}
async function coupon(id) {
   
    if(i <= 0) {
    	localStorage.setItem('savedprice',parseFloat(_('order').innerHTML.substr(1, _('order').innerHTML.length - 2)))
    }
    _('coupon_error').innerHTML="";

    var coupon = _('couponId').value.trim().substr(0,8) 

	if(coupon.length >= 8){
        _('apply').style.display="none"
        _('couponId').style.background = "url('/assets/images/loader.gif') no-repeat right 9px center transparent";
        _(id).setAttribute('disabled','disabled');
       
        try{
             const response = await fetch('api/v1/coupon/'+ coupon ,{
                method:'GET',
                headers:{
                    'Content-type': 'application/json',
                    'Accept' : 'application/json',
                    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
             });

             const result  = await response.json();
             if(response.ok){
                var discount = parseFloat(parseFloat(_('order').innerHTML.substr(1, _('order').innerHTML.length - 2)) / 100 * parseFloat(result.Data.percentage)).toFixed(2)
                var price = parseFloat(parseFloat(_('order').innerHTML.substr(1, _('order').innerHTML.length - 2)) - discount ).toFixed(2); 
                 _('order').innerHTML ="R"+ price +" !"
                 _('discount').innerHTML ="R "+ parseFloat(price / 100 * 50).toFixed(2)+" (50%) non-refundable deposit of after content approval";
                 _(id).removeAttribute('disabled');
                 _('coupon_error').innerHTML="";
                 _('apply').style.display="none"
                 _(id).style.background ="none";
                 localStorage.setItem('coupon_id', result.Data.id)
                 i++
             }else{
                _('coupon_error').innerHTML= result.Message;
                _(id).removeAttribute('disabled');
                _('apply').style.display="flex";
                _(id).style.background ="none";
                localStorage.removeItem('coupon_id')
             }
        }catch(error){
            _('coupon_error').innerHTML= error;
        }
	}else if(_(id).value.trim().length >= 1){
        _('coupon_error').innerHTML="Invalid coupon";
        _('couponId').value = _('couponId').value.trim().substr(0,8)
	}
}
