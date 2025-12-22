<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/tms.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/home.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.7.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/tms-0.4.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/uCarousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.ui.totop.js') }}"></script>
    <script>
        $(window).load(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        })
        $(function() {
            $('.slider')._TMS({
                prevBu: false,
                nextBu: false,
                playBu: false,
                duration: 12000,
                easing: 'easeOutQuad',
                preset: 'zoomer',
                pagination: $('.img-pags').uCarousel({
                    show: 4,
                    shift: 0,
                    buttonClass: 'btn'
                }),
                pagNums: false,
                slideshow: 12000,
                numStatus: false,
                banners: false,
                waitBannerAnimation: false,
                progressBar: false
            })
            $('.carousel').uCarousel({
                show: 3,
                buttonClass: 'car-button',
                pageStep: 1
            })
        })
    </script>
</head>

<body id="main_page">
    @include('includes.homeHeader')
    
    <div id="content">
        <div class="container_12">
            <div class="custom-text" style="margin-top: 250px">
                <h1 style="text-align: center; font-size:54px">{{ $mvv_data[0]->name }}</h1><br>
                <span style="font-size:24px">{!! nl2br(e($mvv_data[0]->description)) !!}</span>
            </div>
            <div class="wrapper">
                <div class="card_container" style="margin-right: 30px;margin-left: 30px;">
                    <div class="card_card card_front">
                        <img width="180px" src="{{ asset('assets/img/mision.png') }}">
                        <h2 style="vertical-align: top !important;font-size: 15px;" class="marked-text">
                            {{ $mvv_data[1]->name }}</h2>
                    </div>
                    <div class="card_card card_back">
                        <p class="marked-text">{{ $mvv_data[1]->description }}</p>
                        
                    </div>
                </div>
                <div class="card_container" style="margin-right: 30px;margin-left: 30px;">
                    <div class="card_card card_front">
                        <img width="180px" src="{{ asset('assets/img/vision.png') }}">
                        <h2 style="vertical-align: top !important;font-size: 15px;" class="marked-text">
                            {{ $mvv_data[2]->name }}</h2>
                    </div>
                    <div class="card_card card_back">
                        <p class="marked-text">{{ $mvv_data[2]->description }}</p>
                        
                    </div>
                </div>
                <div class="card_container" style="margin-right: 30px;margin-left: 30px;">
                    <div class="card_card card_front">
                        <img width="180px" src="{{ asset('assets/img/valores.png') }}">
                        <h2 style="vertical-align: top !important;font-size: 15px;" class="marked-text">
                            {{ $mvv_data[3]->name }}</h2>
                    </div>
                    <div class="card_card card_back">
                        <p class="marked-text">
                            {!! str_replace(' ', '<br>', e($mvv_data[3]->description)) !!}
                        </p>
                        
                    </div>

                </div>
            </div>
        </div>
        
        
    </div>
    
    @include('includes.footer')
</body>

</html>


