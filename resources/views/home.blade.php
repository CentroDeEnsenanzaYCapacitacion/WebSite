<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('assets/css/tms.css')}}">
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.7.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/tms-0.4.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/uCarousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.ui.totop.js') }}"></script>
    <script>
    $(window).load(function(){
        $().UItoTop({ easingType: 'easeOutQuart' });
    })
    $(function(){
        $('.slider')._TMS({
            prevBu:false,
            nextBu:false,
            playBu:false,
            duration:12000,
            easing:'easeOutQuad',
            preset:'zoomer',
            pagination:$('.img-pags').uCarousel({show:4,shift:0,buttonClass:'btn'}),//'.pagination',true,'<ul></ul>'
            pagNums:false,
            slideshow:12000,
            numStatus:false,
            banners:false,// fromLeft, fromRight, fromTop, fromBottom
            waitBannerAnimation:false,
            progressBar:false
        })
        $('.carousel').uCarousel({show:3,buttonClass:'car-button', pageStep:1})
    })
</script>


	<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/img/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
    <!--[if lt IE 9]>
	 <link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
   	<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body id="main_page">
	 <div class="block1">
		  <div class="main extra_wrapper">
				<ul class="tools">
					 <li>bachillerato</li>
					 <li>licenciatura</li>
					 <!-- <li><a href="#" class="links">quick links</a></li> -->
					 {{-- <li><a href="#">área de alumno</a></li> --}}
				</ul>
		  </div>
	 </div>
	 <!--==============================header=================================-->
	 <div class="block2 bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url('{{ asset('assets/img/bg01.jpg') }}');">
		  <div class="main">
				<header>
					 <img width="275px" src="{{ asset('assets/img/dr.png') }}">
					 <nav>
						<ul class="sf-menu">
							<li class="current"><a href="#">Inicio</a></li>
							<li class="sf-with-ul"><a href="#">Oferta educativa</a>
								<ul>
									<li><a href="#">Secundaria	</a></li>
									<ul>
										<li><a href="#">En 6 meses (presencial)</a></li>
										<li class="last_it"><a href="#">Con curso de inglés o informática</a></li>
									</ul>
									<li><a href="#">Bachillerato</a>
										<ul>
											<li><a href="#">En un exámen (en línea)</a></li>
											<li><a href="#">6, 9, o 12 meses (en línea)</a></li>
											<li><a href="#">18 meses (presencial / en línea / mixta)</a></li>
											<li class="last_it"><a href="#">Con una o dos especialidades</a></li>
										</ul>
									</li>
									<li><a href="#">Licenciaturas</a>
										<ul>
											<li><a href="#">Derecho</a></li>
											<li><a href="#">Contabilidad</a></li>
											<li><a href="#">Psicología</a></li>
											<li><a href="#">Pedagogía</a></li>
											<li class="last_it"><a href="#">Administración</a></li>
										</ul>
									</li>
									<li><a href="#">Carreras técnicas</a>
										<ul>
											<li><a href="#">Inglés</a></li>
											<li class="last_it"><a href="#">Informática</a></li>
										</ul>
									</li>
									<li class="last_it"><a href="#">Cursos especiales</a>
										<ul>
											<li class="last_it"><a href="#">Kids (inglés e informática)</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="{{ route('crews') }}">Planteles</a></li>
							{{-- <li><a href="{{ route('cecnews') }}">Noticec</a></li> --}}
							<li><a href="{{ route('contact') }}">contacto</a></li>
						</ul>
					  </nav>
					 <div class="clear"></div>
				 </header>
				<div id="slider">
					 <div class="slider">
						  <ul class="items">
								<li><img src="{{ $carousel_url }}/1.jpg" alt="" /></li>
                                <li><img src="{{ $carousel_url }}/2.jpg" alt="" /></li>
                                <li><img src="{{ $carousel_url }}/3.jpg" alt="" /></li>
                                <li><img src="{{ $carousel_url }}/4.jpg" alt="" /></li>
						  </ul>
					 </div>
					 <div class="pag">
						<div class="img-pags">
						  <ul>
							<li>
								<div></div>
								<a href="#">
									<span class="text_block">
										{{ $carousel_texts[0]->title }}
										<span class="spand">{{ $carousel_texts[0]->description }}</span>
									</span>
								</a>
								<!-- <span class="but_wrap"><a href="#" class="button">more</a></span> -->
							</li>
							<li>
								<div></div>
								<a href="#">
									 <span class="text_block">
										{{ $carousel_texts[1]->title }}
										<span class="spand">{{ $carousel_texts[1]->description }}</span>
									</span>
								</a>
								<!-- <span class="but_wrap"><a href="#" class="button">more</a></span> -->
							</li>
							<li>
								<div></div>
								<a href="#">
									 <span class="text_block">
										{{ $carousel_texts[2]->title }}
										<span class="spand">{{ $carousel_texts[2]->description }}</span>
									</span>
								</a>
								<!-- <span class="but_wrap"><a href="#" class="button">more</a></span> -->
							</li>
							<li>
								<div></div>
								<a href="#">
									 <span class="text_block">
										{{ $carousel_texts[3]->title }}
										<span class="spand">{{ $carousel_texts[3]->description }}</span>
									</span>
								</a>
								<!-- <span class="but_wrap"><a href="#" class="button">more</a></span> -->
							</li>
						  </ul>
						</div>
					</div>
				</div>
		  </div>
	 </div>

<!--==============================content================================-->
 <section id="content">
	<div class="container_12">
		<div class="wrapper">
			<div class="card_container" style="margin-right: 30px;margin-left: 15px;">
				<div class="card_card card_front">
					<img  width="180px" src="{{ asset('assets/img/dc.png') }}">
					<h2 style="vertical-align: top !important;font-size: 15px;" class="marked-text">{{ $mvv_data[0]->name }}</h2>
				</div>
				<div class="card_card card_back">
					<p class="marked-text">{{ $mvv_data[0]->description }}</p>
					<!-- <a href="" class="card_btn">BOTÓN</a> -->
				</div>
			</div>
			<div class="card_container" style="margin-right: 30px;margin-left: 30px;">
				<div class="card_card card_front">
					<img  width="180px" src="{{ asset('assets/img/mision.png') }}">
					<h2 style="vertical-align: top !important;font-size: 15px;" class="marked-text">{{ $mvv_data[1]->name }}</h2>
				</div>
				<div class="card_card card_back">
					<p class="marked-text">{{ $mvv_data[1]->description }}</p>
					<!-- <a href="" class="card_btn">BOTÓN</a> -->
				</div>
			</div>
			<div class="card_container" style="margin-right: 30px;margin-left: 30px;">
				<div class="card_card card_front">
					<img  width="180px" src="{{ asset('assets/img/vision.png') }}">
					<h2 style="vertical-align: top !important;font-size: 15px;" class="marked-text">{{ $mvv_data[2]->name }}</h2>
				</div>
				<div class="card_card card_back">
					<p class="marked-text">{{ $mvv_data[2]->description }}</p>
					<!-- <a href="" class="card_btn">BOTÓN</a> -->
				</div>
			</div>
			<div class="card_container" style="margin-right: 30px;margin-left: 30px;">
				<div class="card_card card_front">
					<img  width="180px" src="{{ asset('assets/img/valores.png') }}">
					<h2 style="vertical-align: top !important;font-size: 15px;" class="marked-text">{{ $mvv_data[3]->name }}</h2>
				</div>
				<div class="card_card card_back">
					<p class="marked-text">{{ $mvv_data[3]->description }}</p>
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
 </section>
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
<footer>
		 <div class="privacy">
			   Centro de enseñanza y capacitación © <?php echo date("Y"); ?><br>
		 </div>
		 <!-- <div class="social">
			   <a href="#">facebook</a>&nbsp; | &nbsp;<a href="#">twitter</a>&nbsp; |&nbsp; <a href="#">linkedin</a>
		 </div> -->
   </footer>
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
