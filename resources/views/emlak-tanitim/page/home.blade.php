@extends('emlak-tanitim.index')

@section('layout')
    <div class="layout">

        <!-- Home -->

        <main class="main">

            <div class="arrow-left"></div>
            <div class="arrow-right"></div>

            <!-- Start revolution slider -->

            <div class="rev_slider_wrapper">
                <div id="rev_slider" class="rev_slider fullscreenbanner">
                    <ul>

                        <!-- Slide 3 -->
                        <x-slider-item :title="__('page.slide_text')"  :image="asset('assets/img/slider/slide1.webp')">
                            <x-slot:text>
                                {!! __('page.slide_text_one') !!}
                            </x-slot:text>
                        </x-slider-item>
                        <!-- Slide 3 -->

                        <x-slider-item :title="__('page.slide_text_two')" :image="asset('assets/img/slider/slide4.webp')">
                            <x-slot:text>
                                {!! __('page.slide_text_three') !!}
                            </x-slot:text>
                        </x-slider-item>



                        <x-slider-item :title="__('page.slide_text_four')" :image="asset('assets/img/slider/slide3.webp')">
                            <x-slot:text>
                                {!! __('page.slide_text_five') !!}
                            </x-slot:text>
                        </x-slider-item>

                    </ul>
                </div>
            </div>
        </main>

        <div class="content">

            <!-- About  -->

            <section id="about" class="about section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">{{__('page.about')}} <span class="text-primary"></span></h2>
                        <strong class="fade-title-left">{{ __('page.about') }}</strong>
                    </header>
                    <div class="section-content">
                        <div class="row-base row">
                            <div class="col-base col-sm-6 col-md-6">
                                <h3 class="col-about-title">{{__('page.about_title')}}<span class="text-primary"></span></h3>
                                <div class="col-about-info">
                                    <p>
                                        {{__('page.about_text')}}
                                    </p>
                                </div>
                            </div>

                            <div class="clearfix visible-sm"></div>
                            <div class="col-base col-about-img col-sm-6 col-md-6">
                                <img alt="" class="img-responsive" src="{{asset('assets/img/380x370.webp')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Projects -->

            <section id="projects" class="projects section">
                <div class="container">
                    <h2 class="section-title">{!! __('page.our_project')   !!}</h2>
                </div>
                <div class="section-content">
                    <div class="projects-carousel js-projects-carousel js-projects-gallery">
                        <div class="project project-light" onclick="gtag('project_1', 'event', 'Project', 100)">
                            <a href="{{asset('assets/img/projects/box/1-1600x800.webp ')}}" title="project 1">
                                <figure>
                                    <img alt="" src="{{asset('assets/img/projects/1-480x880.webp')}}">
                                    <figcaption>
                                        <h4 class="project-category">
                                            {{__('page.architecture')}}
                                        </h4>
                                        <div class="project-zoom"></div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project project-light" onclick="gtag('project_2', 'event', 'Project', 100)">
                            <a href="{{asset('assets/img/projects/box/2-1600x800.webp')}}" title="project 2">
                                <figure>
                                    <img alt="" src="{{asset('assets/img/projects/2-480x880.webp')}}">
                                    <figcaption>
                                        <h4 class="project-category">
                                            {{__('page.architecture')}}
                                        </h4>
                                        <div class="project-zoom"></div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{asset('assets/img/projects/box/3-1600x800.webp')}}" onclick="gtag('project_3', 'event', 'Project', 100)" title="project 3">
                                <figure>
                                    <img alt="" src="{{asset('assets/img/projects/3-480x880.webp')}}">
                                    <figcaption>
                                        <h4 class="project-category">
                                            {{__('page.architecture')}}
                                        </h4>
                                        <div class="project-zoom"></div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{asset('assets/img/projects/box/4-1600x800.webp')}}" title="project 4" onclick="gtag('project_4', 'event', 'Project', 100)">
                                <figure>
                                    <img alt="" src="{{asset('assets/img/projects/4-480x880.webp')}}">
                                    <figcaption>
                                        <h4 class="project-category">
                                            {{__('page.architecture')}}
                                        </h4>
                                        <div class="project-zoom"></div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{asset('assets/img/projects/box/5-1600x800.webp')}}" title="project 5" onclick="gtag('project_5', 'event', 'Project', 100)">
                                <figure>
                                    <img alt="" src="{{asset('assets/img/projects/5-480x880.webp')}}">
                                    <figcaption>
                                        <h4 class="project-category">
                                            {{__('page.architecture')}}
                                        </h4>
                                        <div class="project-zoom"></div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=TJgC1GHjHK4" title="project 6" onclick="gtag('project_6', 'event', 'Project', 100)">
                                <figure>
                                    <img alt="" src="{{asset('assets/img/projects/9-480x880.webp')}}">
                                    <figcaption>
                                        <h4 class="project-category">
                                            {{__('page.architecture')}}
                                        </h4>
                                        <div class="project-zoom"></div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{asset('assets/img/projects/box/7-1600x800.webp')}}" title="project 7" onclick="gtag('project_7', 'event', 'Project', 100)">
                                <figure>
                                    <img alt="" src="{{asset('assets/img/projects/7-480x880.webp')}}">
                                    <figcaption>
                                        <h4 class="project-category">
                                            {{__('page.architecture')}}
                                        </h4>
                                        <div class="project-zoom"></div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="project">
                            <a href="{{asset('assets/img/projects/box/8-1600x800.webp')}}" title="project 8" W>
                                <figure>
                                    <img alt="" src="{{asset('assets/img/projects/8-480x880.webp')}}">
                                    <figcaption>
                                        <h4 class="project-category">
                                            {{__('page.architecture')}}
                                        </h4>
                                        <div class="project-zoom"></div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services -->

            <section id="services" class="services section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">{!! __('page.our_services') !!}</h2>
                        <strong class="fade-title-right">{{__('page.Services')}}</strong>
                    </header>
                    <div class="section-content">
                        <div class="row-services row-base row">
                            <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp">
                                <div class="service-item">
                                    <img alt="" src="{{asset('assets/img/img-icon/icon-drawing.webp')}}">
                                    <h4>{{__('page.development')}}</h4>
                                    <p>{{__('page.development_text')}}</p>                                </div>
                            </div>
                            <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="service-item">
                                    <img alt="" src="{{asset('assets/img/img-icon/icon-house-plans.webp')}}">
                                    <h4>{{__('page.house_plans')}}</h4>
                                    <p>{{__('page.house_plans_text')}}</p>
                                </div>
                            </div>
                            <div class="clearfix visible-sm"></div>
                            <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="service-item">
                                    <img alt="" src="{{asset('assets/img/img-icon/icon-house-key.webp')}}">
                                    <h4>{{__('page.finishing_works')}}</h4>
                                    <p>{{__('page.finishing_works_text')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience -->

            <section class="experience section">
                <div class="container">
                    <div class="text-parallax"  style="background-image: url('{{asset('assets/img/bg/text-1.webp')}}');background-size: 100%;background-position: 5px 0;">
                        <div class="text-parallax-content">2022</div>
                    </div>
                    <h4 class="experience-info wow fadeInRight"><span class="text-primary">{{__('page.successful_work')}}</span><br>{{__('page.the_market')}}</h4>
                </div>
            </section>

            <!-- Gallery -->

            <section id="gallery" class="gallery section">
                <div class="container-fluid js-projects-gallery">
                    <header class="section-header">
                        <h2 class="section-title">{!! __('page.our_project') !!}</h2>
                    </header>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0 m-0">
                            <a title="Galeri Images" href="{{asset('assets/img/projects/box/2-1600x800.webp')}}">
                                <img src="{{asset('assets/img/projects/box/2-1600x800.webp')}}" alt="">
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 p-0 m-0">
                            <a title="Galeri Images" href="{{asset('assets/img/projects/box/3-1600x800.webp')}}">
                                <img src="{{asset('assets/img/projects/box/3-1600x800.webp')}}" alt="">

                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 p-0 m-0">
                            <a title="Galeri Images" href="{{asset('assets/img/projects/box/4-1600x800.webp')}}">
                                <img src="{{asset('assets/img/projects/box/4-1600x800.webp')}}" alt="">
                            </a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0 m-0 relative">
                            <a title="Galeri Images" href="https://www.youtube.com/watch?v=ziLSH_3E5dM" class="popup-youtube">
                                <img src="{{asset('assets/img/projects/box/6-1600x800.webp')}}" alt="">
                                <div class="video-player">
                                    <img src="{{asset('assets/img/img-icon/play-button.webp')}}" alt="">
                                </div>
                            </a>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 p-0 m-0">
                            <a title="Galeri Images" class="popup-youtube" href="https://www.youtube.com/watch?v=ljm6TQs68b8">
                                <img src="{{asset('assets/img/projects/box/7-1600x800.webp')}}" alt="">
                                <div class="video-player">
                                    <img src="{{asset('assets/img/img-icon/play-button.webp')}}" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 p-0 m-0">
                            <a title="Galeri Images" href="{{asset('assets/img/projects/box/8-1600x800.webp')}}">
                                <img src="{{asset('assets/img/projects/box/8-1600x800.webp')}}" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Text -->

            <section id="objects" class="objects section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">{!! __('page.we_are_world') !!}</h2>
                    </header>
                    <div class="section-content">
                        <div class="objects">
                            <img alt="" class="img-responsive" src="{{asset('assets/img/map.webp')}}">

                            <!-- Objects -->


                            <div class="object-label" style="left: 55%; top: 41%;">
                                <div class="object-info in">
                                    <h3 class="object-title">{{__('page.turkey')}}</h3>
                                    <div class="object-content">
                                    +90 (534) 460-54-04<br>
                                      info@nova34.com<br>
                                      Gökalp, 38/2. Sk. No/2 D:/1, 34020 Zeytinburnu/İstanbul, Türkiye
                                    </div>
                                </div>
                            </div>

               
                            <!--
                               <div class="object-label" style="left: 47.3%; top: 34.5%;">
                                 <div class="object-info">
                                   <h3 class="object-title">New York</h3>
                                   <div class="object-content">
                                     +0 595-510-1352<br>
                                     flatley.don@weissnat.me<br>
                                     713 Dibbert Bridge
                                   </div>
                                 </div>
                               </div>

                               <div class="object-label" style="left: 50.7%; top: 20.4%;">
                                 <div class="object-info">
                                   <h3 class="object-title">New York</h3>
                                   <div class="object-content">
                                     +0 595-510-1352<br>
                                     flatley.don@weissnat.me<br>
                                     713 Dibbert Bridge
                                   </div>
                                 </div>
                               </div>

                               <div class="object-label" style="left: 64.4%; top: 22.4%;">
                                 <div class="object-info">
                                   <h3 class="object-title">New York</h3>
                                   <div class="object-content">
                                     +0 595-510-1352<br>
                                     flatley.don@weissnat.me<br>
                                     713 Dibbert Bridge
                                   </div>
                                 </div>
                               </div>

                               <div class="object-label" style="left: 82.2%; top: 32.6%;">
                                 <div class="object-info">
                                   <h3 class="object-title">New York</h3>
                                   <div class="object-content">
                                     +0 595-510-1352<br>
                                     flatley.don@weissnat.me<br>
                                     713 Dibbert Bridge
                                   </div>
                                 </div>
                               </div>

                               <div class="object-label" style="left: 84.4%; top: 82.3%;">
                                 <div class="object-info">
                                   <h3 class="object-title">New York</h3>
                                   <div class="object-content">
                                     +0 595-510-1352<br>
                                     flatley.don@weissnat.me<br>
                                     713 Dibbert Bridge
                                   </div>
                                 </div>
                               </div> -->




                        </div>
                    </div>
                </div>
            </section>


            <!-- Contacts -->

            <section id="contacts" class="contacts section">
                <div class="container">
                    <header class="section-header">
                        <h2 class="section-title">{!! __('page.get_in_touch') !!}</span></h2>
                        <strong class="fade-title-right">contacts</strong>
                    </header>
                    <div class="section-content">
                        <div class="row-base row">
                            <div class="col-address col-base col-md-4">
                                +90 (534) 460-54-04
                                <br>
                                info@nova34.com<br>
                                Gökalp, 38/2. Sk. No/2 D:/1, 34020 Zeytinburnu/İstanbul, Türkiye
                            </div>
                            <div class="col-base  col-md-8">
                                <form class="js-ajax-form" data-ajax="{{route('contact-us')}}">
                                    <div class="row-field row">
                                        <div class="col-field col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="{{__('page.form_name')}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" required placeholder="{{__('page.form_mail')}} *">
                                            </div>
                                        </div>
                                        <div class="col-field col-sm-6 col-md-4">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="phone" placeholder="{{__('page.form_phone')}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="company" placeholder="{{__('page.form_company')}}">
                                            </div>
                                        </div>
                                        <div class="col-field col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" placeholder="{{__('page.form_message')}}"></textarea>
                                            </div>
                                        </div>
                                        <div id="loading" class="lds-ring" style="display: none"><div></div><div></div><div></div><div></div></div>
                                        <div class="col-message col-field col-sm-12">
                                            <div class="form-group">
                                                <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                                                <div class="error-message">We're sorry, but something went wrong</div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-submit text-right"><button onclick="gtag('send', 'event', 'Form Submit', 100)" type="submit" class="btn btn-shadow-2 wow swing">{{__('page.form_send')}} <i class="icon-next"></i></button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>ƒ
            </section>

            <!-- Footer -->

            <footer id="footer" class="footer">
                <div class="container">
                    <div class="row-base row">
                        <div class="col-base text-left-md col-md-4">
                            <a href="#" class="brand">
                                Nova34                            </a>
                        </div>
                        <div class="text-center-md col-base col-md-4">
                            <a href="https://themeforest.net/user/murren20" class="author-link">
                                by Epsilam
                            </a>
                        </div>
                        <div class="text-right-md col-base col-md-4">
                            © Epsilam 2022. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Lines -->

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
        </div>
    </div>

    <div class="contact-fix">
        <ul>
            <li class="contact-items">
                <a href="https://wa.me/905344605404?" ><i class="fa fa-whatsapp"></i></a>
            </li>
            <li class="contact-items">
                <a href="tel:905344605404"><i class="fa fa-phone"></i></a>
            </li>

        </ul>
    </div>
@endsection
