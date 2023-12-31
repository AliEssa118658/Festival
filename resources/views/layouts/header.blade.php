

<nav>
    <div class="top">
        <div class="container">
            <div class="row pt-2">
                <div class="col-lg-2 col-md-3 col-sm-4  d-none d-md-block  ltr" style="margin-top: 0.3rem " >

                        <span><img src="{{asset('images/svg/w-phone.svg')}}" style="margin-top:-0.3rem" alt=""></span>
                        <span ><a class="w-text header-font-large ml-1 b-hover" href="tel:+971529277779">+ 971 52 927 77 79</a></span>

                </div>
                <div class="col-lg-3  col-md-5   d-none d-md-block  ltr" style="margin-top: 0.3rem ">
                    <span><img src="{{asset('images/svg/w-email.svg')}}" alt="" style="width: 6.6%;margin-top:-0.35rem"></span><span ><a href="mailto:ali6721985@gmail.com?subject:Info" class="w-text b-hover header-font-large ml-1">  Info@arabwomenfestival.com</a></span>
                </div>
                <div class="col-lg-4  col-md-1  d-none d-sm-block "></div>

                <div class="col-lg-3  col-md-3 col-sm-12 ">
                    <ul class="social-header">
                        <li> <a href="#"><img src="{{asset('images/png/FooterFacebook.svg??')}}" alt=""></a></li>
                        <li> <a href="#"><img src="{{asset('images/png/FooterInstagram.svg??')}}" alt=""></a></li>
                        <li> <a href="#"><img src="{{asset('images/png/FooterLinkedIn.svg???')}}" alt=""></a></li>
                        <li> <a href="#"><img src="{{asset('images/svg/FooterTwiter.svg')}}" alt=""></a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <nav>
        <div class="container">
        <ul class="menu mt-2" style="padding: 0%">
            <li class="logo logo-head"><a href="{{route('welcome')}}"><img src="{{asset('images/svg/logo-head.svg')}}" alt=""> </a></li>
            <li class="item   header-font-small @if  (request()->is('/')) active-link @endif"><a class="p-text" href="{{route('welcome')}}">{{__('Home')}}</a></li>
            <li class="item  header-font-small @if  (request()->is('honorary')) active-link @endif"><a class="p-text" href="{{route('honorary')}}">{{__('Honorees')}}</a></li>
            <li class="item  header-font-small @if  (request()->is('first-gen')) active-link @endif"><a class="p-text" href="{{route('first-gen')}}">{{__('Early pioneers')}}</a></li>
            <li class="item   header-font-small @if  (request()->is('miss-arab')) active-link @endif"><a class="p-text" href="{{route('miss-arab')}}">{{__('Miss Arab Social Media')}}</a></li>
            <li class="item   header-font-small @if  (request()->is('gallery')) active-link @endif"><a class="p-text" href="{{route('gallery')}}">{{__('Gallery')}}</a></li>
            <li class="item  header-font-small @if  (request()->is('about-us')) active-link @endif"><a class="p-text" href="{{route('about-us')}}">{{__('About us')}}</a></li>
            <li class="item  header-font-small @if  (request()->is('contact-us')) active-link @endif"><a class="p-text" href="{{route('contact-us')}}">{{__('Contact us')}}</a></li>
            @foreach($available_locales as $locale_name => $available_locale)
            @if($available_locale === $current_locale)
                <span class=""></span>
            @else
            <li class="item  lang-flag mt-1 {{$locale_name}} "><a class="p-text" href="/language/{{$available_locale}}">{{ $locale_name }}</a></li>


            @endif
            @endforeach



            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </div>
    </nav>

</nav>

       <script
       src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
       integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
       crossorigin="anonymous"></script>
     <script>
     $(function() {
     $(".toggle").on("click", function() {
         if ($(".item").hasClass("active")) {
             $(".item").removeClass("active");
         } else {
             $(".item").addClass("active");
         }
     });
 });
     </script>
