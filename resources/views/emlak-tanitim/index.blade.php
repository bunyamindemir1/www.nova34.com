<!DOCTYPE HTML>
<html  lang="{{ session()->get('locale') ?? 'en'}}" >
<head >
    <meta  charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amira Homes</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.webp')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('apple-touch-icon-72x72.webp')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('apple-touch-icon-114x114.webp')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="{{asset('assets/css/style.css?v=20')}}" rel="stylesheet" media="screen">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4Z2NY4NZE4"></script>
    <script src="{{asset('assets/js/gtag.js')}}"></script>
    <style>
        .arrow-left:after {
            content: '{{__('page.prev')}}';
        }

        .arrow-right:before {
            content: '{{__('page.next')}}';
        }
    </style>
    <script src="./resources/js/video.js"></script>

</head>

<!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1386656588412780');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1386656588412780&ev=PageView&noscript=1"
    /></noscript>
<!-- End Meta Pixel Code -->
<body dir="ltr" >

<!-- Loader -->


<div  tabindex="-1" autofocus  >

    <iframe id="naber" title="Galeri Images"  class="popup-youtube" src="https://www.youtube.com/embed/ziLSH_3E5dM">

    </iframe>


</div>



<div class="loader">
    <div class="page-lines">
        <div class="container">
            <div class="col-line col-xs-4">
                <div class="line"></div>
            </div>
            <div class="col-line col-xs-4">
                <div class="line"></div>
            </div>
            <div class="col-line col-xs-4">
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="loader-brand">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</div>

<!-- Header -->






<!-- Video Modal -->








<!-- Layout -->

@yield('layout')

<!-- SCRIPTS -->
<script type="text/javascript">
    const token = '{{ csrf_token() }}';
</script>
<script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/smoothscroll.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<!-- SLIDER REVOLUTION -->
<script src="{{asset('assets/js/rev-slider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
<script src="{{asset('assets/js/rev-slider/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/js/rev-slider/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/rev-slider/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/js/rev-slider/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/js/rev-slider/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/js/rev-slider/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/js/rev-slider/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/js/rev-slider/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/js/rev-slider/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/js/interface.js')}}"></script>
@if(isset($lang))
    @if($lang=='ar')
        <script>
            $(document).ready(function (){

                    $('body').prop('dir', 'rtl');
                    $('body').addClass('rtl');

            });
        </script>
    @endif
@endif
</body>
</html>
