<header id="top" class="header-home">

    <div class="brand-panel">
        <a href="#top" class="brand js-target-scroll">
           Nova34
        </a>
        <div class="brand-name">Nova34</div>
        <div class="slide-number">
            <span class="current-number text-primary">0<span class="count">1</span></span>
            <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
        </div>
    </div>
    <div class="header-phone" dir="ltr">+90 (534) 460-54-04</div>
    <div class="vertical-panel"></div>
    <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="vertical-panel-title">Amira Homes</div>
            <div class="line"></div>
        </div>
        <ul class="social-list">
            <li><a href="" class="fa fa-instagram" onclick="gtag('instagram_social', 'event', 'Social', 100)"></a></li>
            <li><a href="" class="fa fa-twitter" onclick="gtag('twitter_social', 'event', 'Social', 100)"></a></li>
            <li><a href="" class="fa fa-behance" onclick="gtag('behance_social', 'event', 'Social', 100)"></a></li>
            <li><a href="" class="fa fa-facebook" onclick="gtag('facebook_social', 'event', 'Social', 100)"></a></li>
        </ul>
    </div>

    <!-- Navigation Desctop -->

    <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
            <a href="#top" class="brand js-target-scroll">
                Nova34
            </a>
            <ul class="nav navbar-desctop-menu">
                <li class="active">
                    <a onclick="gtag('home', 'event', 'Navbar', 100)" href="#top">{{__('page.home')}}</a>
                </li>
                <li>
                    <a onclick="gtag('about', 'event', 'Navbar', 100)" href="#about">{{__('page.about')}}</a>
                </li>
                <li>
                    <a onclick="gtag('projects', 'event', 'Navbar', 100)" href="#projects">{{__('page.project')}}</a>
                </li>
                <li>
                    <a onclick="gtag('services', 'event', 'Navbar', 100)" href="#services">{{__('page.Services')}}</a>
                </li>
                <li>
                    <a onclick="gtag('contacts', 'event', 'Navbar', 100)" href="#contacts">{{__('page.Contacts')}}</a>
                </li>

                <li class="lang">
                    <div class="dropdown">
                        <button class="btn-lang" type="button" data-toggle="dropdown"><img
                                src="{{asset('assets/img/flag/'.((isset($lang)) ? $lang.'.webp' : "en.webp").'')}}"
                                width="25" alt="">
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a onclick="gtag('tr_lang', 'event', 'Language', 100)" href="{{route('changeLang', ['lang' => 'tr'])}}"><img
                                        src="{{asset('assets/img/flag/tr.webp')}}" width="25" alt=""></a></li>
                            <li><a onclick="gtag('tr_lang', 'event', 'Language', 100)"  href="{{route('changeLang', ['lang' => 'en'])}}"><img
                                        src="{{asset('assets/img/flag/en.webp')}}" width="25" alt=""></a></li>
                            <li><a onclick="gtag('tr_lang', 'event', 'Language', 100)" href="{{route('changeLang', ['lang' => 'ar'])}}"><img
                                        src="{{asset('assets/img/flag/ar.webp')}}" width="25" alt=""></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Navigation Mobile -->

    <nav class="nav navbar-mobile">
        <a href="#top" class="brand js-target-scroll">
            Nova34        </a>

        <!-- Navbar Collapse -->

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>




        <button type="button" class="navbar-language">
           <ul class="">
               <li>
                   <a onclick="gtag('tr_lang', 'event', 'Language', 100)" href="{{route('changeLang', ['lang' => 'tr'])}}">
                       <img src="{{asset('assets/img/flag/tr.webp')}}" width="25" alt="">
                   </a>
               </li>
               <li>
                   <a onclick="gtag('en_lang', 'event', 'Language', 100)" href="{{route('changeLang', ['lang' => 'en'])}}">
                       <img src="{{asset('assets/img/flag/en.webp')}}" width="25" alt="">
                   </a>
               </li>
               <li>
                   <a onclick="gtag('ar_lang', 'event', 'Language', 100)" href="{{route('changeLang', ['lang' => 'ar'])}}">
                       <img src="{{asset('assets/img/flag/ar.webp')}}" width="25" alt="">
                   </a>
               </li>
           </ul>
        </button>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav-mobile">
                <li class="active">
                    <a href="#top">{{__('page.home')}}</a>
                </li>
                <li>
                    <a href="#about">{{__('page.about')}}</a>
                </li>
                <li>
                    <a href="#projects">{{__('page.project')}}</a>
                </li>
                <li>
                    <a href="#services">{{__('page.Services')}}</a>
                </li>
                <li>
                    <a href="#contacts">{{__('page.Contacts')}}</a>
                </li>


            </ul>
        </div>
    </nav>
</header>
