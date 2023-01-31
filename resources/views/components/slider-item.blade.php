@props([
    'text' => '',
    'title' => '',
    'image' => ""
])

<li  data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">

    <!-- Main image-->

    <img src="{{$image}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

    <!-- Layer 1 -->

    <div class=" tp-caption"
         data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']"
         data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']"
         data-fontsize="['50','45']"
         data-lineheight="['80','75', '65']"
         data-width="['1100','700','550']"
         data-height="none"
         data-whitespace="normal"
         data-transform_idle="o:1;"
         data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
         data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
         data-start="500"

         data-splitout="none"
         data-responsive_offset="on"
         data-elementdelay="0.05">{!! $title !!}
    </div>

    <!-- Layer 2 -->

    <div class="slide-subtitle tp-caption tp-resizeme mt-4"
         data-x="['right','right','right','right']" data-hoffset="['0']"
         data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
         data-fontsize="['18','19']"
         data-lineheight="['35','35']"
         data-whitespace="nowrap"
         data-transform_idle="o:1;"
         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
         data-transform_out="opacity:0;s:1000;s:1000;"
         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
         data-start="1500"
         data-splitin="none"
         data-splitout="none">{!! $text !!}
    </div>

    <!-- Layer 3 -->

    <div class="tp-caption mt-4"
         data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
         data-y="['middle','middle','middle','middle']" data-voffset="['195','215']"
         data-fontsize="['17','18']"
         data-width="none"
         data-height="none"
         data-whitespace="nowrap"
         data-transform_idle="o:1;"
         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
         data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
         data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
         data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
         data-mask_out="x:inherit;y:inherit;"
         data-start="1500"
         data-splitin="none"
         data-splitout="none"
         data-responsive_offset="on">
        <a href="tel:905344605404"  class="btn js-target-scroll"><i class="fa fa-phone"></i> {{__('page.Contacts')}} </a>
        <a href="https://wa.me/905344605404?" target="_blank" class="btn js-target-scroll"><i class="fa fa-whatsapp"></i> WhatsApp </a>
        <a href="#about" class="btn js-target-scroll">{{__('page.Look More')}} <i class="icon-next"></i></a>
    </div>


</li>
