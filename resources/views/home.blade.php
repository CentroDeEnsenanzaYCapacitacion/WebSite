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
    <!--==============================content================================-->
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
                        <!-- <a href="" class="card_btn">BOTÓN</a> -->
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
                        <!-- <a href="" class="card_btn">BOTÓN</a> -->
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
                        <!-- <a href="" class="card_btn">BOTÓN</a> -->
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="content2 cont_pad2"> -->
        <!-- <div class="container_12">
    <div class="wrapper">
     <article class="grid_12">
      <div class="title1 capriola">
        <div class="left">Welcome to our University</div>
        <div class="right">Committed to student success for over 30 years!</div>
      </div>
      <div class="ext_box welcome">
        <figure><img src="img/1page_img4.jpg" class="img" alt="" /></figure>
        <div>
         <p>Lorem ipsum dolor sit amet, consectuer adipiscing elit, sed diam nonummy nibeui<br>
          smod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis <br>nostru exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem <br>vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dol.<br>
          ore eu feugiat nulla facilisis at vero eros et accumsan et iust.</p>
         <div class="author">
          Dr. John Smith
          <div class="status">Educated Economist and Professor-turned-entrepreneur</div>
         </div>
        </div>
      </div>
     </article>
    </div>
  </div>
 </div> -->
    </div>
    <!-- <aside class="list_box">
 <div class="container_12">
  <div class="wrapper">
    <div class="grid_3">
     <ul class="list1">
       <li><a href="#">Contact us <span></span></a></li>
       <li><a href="#">Media relations <span></span></a></li>
       <li><a href="#">Careers <span></span></a></li>
     </ul>
     </div>
     <div class="grid_3">
      <ul class="list1">
        <li><a href="#">Campus locations <span></span></a></li>
        <li><a href="#">Expand your network <span></span></a></li>
        <li><a href="#">Academic catalog <span></span></a></li>
      </ul>
     </div>
     <div class="grid_3">
      <ul class="list1">
        <li><a href="#">Workforce Solutions <span></span></a></li>
        <li><a href="#">Identify new opportunities <span></span></a></li>
        <li><a href="#">Military Division <span></span></a></li>
      </ul>
     </div>
     <div class="grid_3">
      <ul class="list1">
        <li><a href="#">Regulatory information <span></span></a></li>
        <li><a href="#">Consumer information <span></span></a></li>
        <li><a href="#">Disability services <span></span></a></li>
      </ul>
     </div>
  </div>
 </div>
 </aside>
<!--==============================footer=================================-->
    @include('includes.footer')
</body>

</html>

<!-- <article class="grid_12">
      <h2 class="ind">Top Programs</h2>
      <div class="car_box">
      <a href="#" class="prev car-button" data-type="prevPage"></a>
       <a href="#" class="next car-button" data-type="nextPage"></a>
      <div class="carousel">
       <ul>
         <li>
           <h3>associate’s degree</h3>
           Lorem ipsum dolor sit amet, consec<br>
           tuer adipiscing elit, sed diam nonummy nibeui
           smod tincidunt ut laoreet dolore magna aliqu<br>
           am erat volutpat.<br>
           <a href="#" class="button">more</a>
           <div class="ext_box program">
            <figure><img src="img/1page_img1.jpg" class="img" alt="" /></figure>
         </li>
         <li>
          <h3>master’s degree</h3>
           Lorem ipsum dolor sit amet, consec<br>
           tuer adipiscing elit, sed diam nonummy nibeui
           smod tincidunt ut laoreet dolore magna aliqu<br>
           am erat volutpat.<br>
           <a href="#" class="button">more</a>
           <div class="ext_box program">
            <figure><img src="img/1page_img3.jpg" class="img" alt="" /></figure>
            <div>
              <ul class="list1">
                <li><a href="#">Secondary Teacher Education<span></span></a></li>
                <li><a href="#">View all doctoral programs<span></span></a></li>
                <li><a href="#">Psychology<span></span></a></li>
              </ul>
            </div>
           </div>
         </li>
         <li>
           <h3>associate’s degree</h3>
           Lorem ipsum dolor sit amet, consec<br>
           tuer adipiscing elit, sed diam nonummy nibeui
           smod tincidunt ut laoreet dolore magna aliqu<br>
           am erat volutpat.<br>
           <a href="#" class="button">more</a>
           <div class="ext_box program">
            <figure><img src="img/1page_img1.jpg" class="img" alt="" /></figure>
            <div>
              <ul class="list1">
                <li><a href="#">Networking <span></span></a></li>
                <li><a href="#">Foundations of Business <span></span></a></li>
                <li><a href="#">Criminal Justice <span></span></a></li>
              </ul>
            </div>
           </div>
         </li>
         <li>
          <h3>bachelor’s degree</h3>
           Lorem ipsum dolor sit amet, consec<br>
           tuer adipiscing elit, sed diam nonummy nibeui
           smod tincidunt ut laoreet dolore magna aliqu<br>
           am erat volutpat.<br>
           <a href="#" class="button">more</a>
           <div class="ext_box program">
            <figure><img src="img/1page_img2.jpg" class="img" alt="" /></figure>
            <div>
              <ul class="list1">
                <li><a href="#">Environmental Science<span></span></a></li>
                <li><a href="#">Psychology<span></span></a></li>
                <li><a href="#">Elementary Teacher Education <span></span></a></li>
              </ul>
            </div>
           </div>
         </li>
         <li>
          <h3>master’s degree</h3>
           Lorem ipsum dolor sit amet, consec<br>
           tuer adipiscing elit, sed diam nonummy nibeui
           smod tincidunt ut laoreet dolore magna aliqu<br>
           am erat volutpat.<br>
           <a href="#" class="button">more</a>
           <div class="ext_box program">
            <figure><img src="img/1page_img3.jpg" class="img" alt="" /></figure>
            <div>
              <ul class="list1">
                <li><a href="#">Secondary Teacher Education<span></span></a></li>
                <li><a href="#">View all doctoral programs<span></span></a></li>
                <li><a href="#">Psychology<span></span></a></li>
              </ul>
            </div>
           </div>
         </li>

       </ul>
      </div>
      </div>
     </article> -->
