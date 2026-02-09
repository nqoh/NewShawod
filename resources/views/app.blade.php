<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Shawod') }}</title>
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"> 
        <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet"> 
	    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/abow.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('assets/images/ico/favicon.ico') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/ico/apple-touch-icon-57-precomposed.png') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139717438-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139717438-1');
</script>
<style>
.whatsapp-ico{
    fill: white;
    width: 50px;
    height: 50px;
    padding: 3px;
    background-color: #4dc247;
    border-radius: 50%;
    box-shadow: 2px 2px 6px rgba(0,0,0,0.4);
    /* box-shadow: 2px 2px 11px rgba(0,0,0,0.7); */
    position: fixed;
    bottom: 20px;
    left : 20px;
    z-index: 10;
}

.whatsapp-ico:hover{
    box-shadow: 2px 2px 11px rgba(0,0,0,0.7);
}

.pricing-palden .pricing-item {color: #fff;background: #33ccff;}
.pricing-palden .pricing-price {font-size: 4em;color: #33ccff; }
.pricing-palden .pricing-action {color: #fff;border-radius: 30px;border: 2px solid #fff;background: #33ccff;}
.pricing-palden .pricing-deco {background: #fff;}
.pricing-palden .pricing-title {color: #33ccff;} 
.pricing-palden .pricing-action:hover {box-shadow: inset 0 -2.25em 0 0 var(--hover);transition: 0.55s;}
.pricing-action {--hover: #fff;}

</style>

</head><!--/head--><!--



███████╗██╗  ██╗ █████╗ ██╗    ██╗ ██████╗ ██████╗ 
██╔════╝██║  ██║██╔══██╗██║    ██║██╔═══██╗██╔══██╗
███████╗███████║███████║██║ █╗ ██║██║   ██║██║  ██║
╚════██║██╔══██║██╔══██║██║███╗██║██║   ██║██║  ██║
███████║██║  ██║██║  ██║╚███╔███╔╝╚██████╔╝██████╔╝
╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚══╝╚══╝  ╚═════╝ ╚═════╝ 
                                                   

-->     
@vite(['resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
@inertiaHead
</head>
  <body class='modal-active'>
    
    <div id="modal-container">
        <div class="modal-background">
            <div class="modal">
                <h2 id="itemHeader"></h2>
                <p id="itemDescription"></p>
            </div>
        </div>
    </div>

    <div id='easy-top'></div>
    @routes
    @inertia
  </body>
</html>

<a target="_blank" href="https://api.whatsapp.com/send?phone=0630142446&text=Hello%21%20Shawod,%20 Let's talk business">
 <svg viewBox="0 0 32 32" class="whatsapp-ico">
 <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path></svg>
</a>

<script type="text/javascript" src="{{ asset('assets/js/contactus.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/1script.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/lightbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
<script type="text/javascript" src='{{ asset('assets/js/jquery.min.js') }}'></script>
<script type="text/javascript" src='{{ asset('assets/js/easing.js') }}'></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script1.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script2.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/contact.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/AddFeature.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popupItems.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/datgui.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/from_validation2.js') }}"></script>

</body>

<script>
    $(function() {
        $('.btn-6')
            .on('mouseenter', function(e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('span').css({top:relY, left:relX})
            })
            .on('mouseout', function(e) {
                var parentOffset = $(this).offset(),
                    relX = e.pageX - parentOffset.left,
                    relY = e.pageY - parentOffset.top;
                $(this).find('span').css({top:relY, left:relX})
            });
        $('[href=#]').click(function(){return false});
    });
</script>
