@extends('layouts.master')
@section('content')

<section style="background-color: #">
    <img src="/images/png/square1.png?" alt="" class="scale-respo4" style="position: absolute;left:0;top:20%">
    <img src="/images/png/square2.png" alt="" class="scale-respo3" style="position: absolute;right:0;top:35%">
    <img src="/images/png/square3.png" alt="" class="scale-respo4" style="position: absolute;left:0;top:200%">
    <img src="/images/png/square4.png" alt="" class="scale-respo3" style="position: absolute;right:0;top:80rem">

    <div class="container my-5">

        <div class="row" style="direction: rtl !important;margin-bottom:10rem;">
            <div class="col-md-6">
                <img src="/images/svg/main-square1.svg??" alt="" class="main-square one">
                <img src="/images/svg/main-square3.svg??" alt="" class="main-square sec" style="top:7% !important">
                <img src="/images/svg/main-square2.svg??" alt="" class="main-square third">
                <img src="/images/png/main-square4.png??" alt="" class="main-square fourth">
                <img src="/images/png/main-square5.png??" alt="" class="main-square sec " >

            </div>
            <div class="col-md-6  mt-5">
                <img src="/images/svg/large-logo.svg?" alt="" class="d-block m-auto large-logo" style="width:60%" >
            </div>
        </div>

        <div class=" box-vision m-auto p-5 ">
            <p class="p-text med-font3  text-center">{{__('Announced the Annual Festival of Arab Women 2024 in cooperation with Local and Arab institutions and bodies hold the annual Womens Festival Al Arabiya on March 9, 2024 in Dubai in the presence of high-ranking figures At the Arab level, a group of people of culture, science, and artistic stars And the media, to honor a group of Emirati women in sectors and fields Multiple women are selected according to criteria and nominations, in coordination with institutions Civil society.')}}</p>
        <h2 class="med-font3 p-text  mb-2  text-center">{{__('Because the issues of Emirati women do not differ far from the issues of their Arab sisters, it was also decided to honor a group of Arab women in the same sectors on the same day, according to transparent nominations and criteria. The festival also witnesses the honoring of a group of women from the Arab world, regardless of whether they are alive or have moved to the side of their Lord, who have had clear influential imprints in feminist work.')}}</h2>
        </div>

    </div>

</section>

<section class=""  style="background-color: #FBFBFB">
    <div class="overflow-sec my-5">
        <div class="row  justify-content-center " >
            <div class="col-md-7 text-center">
                <h1 class="bigb-font bold p-text text-center" >{{ __('Our Events') }}</h1>
            </div>
        </div>
        <div class=" row justify-content-center" style="margin:3% 3% 12% auto" >
            <div class="event-square mb-3">
                <img src="/images/svg/miss-arab.svg?" alt="" style="width: 63%;">
                <div>
                <h1 class=" text-center m-auto"  >{{__('Miss Arab Social Media 2024')}}</h1>
                <a href="{{ route('miss-arab')}}" class="learn-more-p" style="margin-top: -1rem">{{__('Learn More')}}</a>
                        </div>
            </div>
            <div class="event-square mb-3">
                <img src="/images/png/daimond.jpeg?" alt="">
                <div>
                <h1 class=" text-center m-auto"  style="margin-top: 30% !important">{{__('Mother of the Emirates necklace')}}</h1>
                <a href="{{ route('news', ['news' => 1]) }}" class="learn-more-p">{{__('Learn More')}}</a>
                            </div>
            </div>
            <div class="event-square mb-3">
                <img src="/images/png/koakb.jpg?" alt="">
                <div>
                <h1 class=" text-center m-auto" style="margin-top: 30% !important">{{__('Twelve Planets')}}</h1>
                <a href="{{ route('news', ['news' =>2]) }}" class="learn-more-p">{{__('Learn More')}}</a>
                            </div>
            </div>
        </div>
    </div>
    <!-- ....... -->

    <!-- ...... -->
</section>
@endsection

