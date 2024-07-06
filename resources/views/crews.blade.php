<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/styles.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.7.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script>
    $(window).load(function(){
        $().UItoTop({ easingType: 'easeOutQuart' });
    })
	</script>
	<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
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
					<li><a href="#">área de alumno</a></li>
			   </ul>
		 </div>
	</div>
	<!--==============================header=================================-->
	<div class="block2-child bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url('{{ asset('assets/img/bg01.jpg') }}'); padding-bottom: 25px;">
		 <div class="main">
			   <header>
					<img width="275px" src="{{ asset('assets/img/dr.png') }}">
					<nav>
					   <ul class="sf-menu">
						   <li><a href="{{ route('home') }}">Inicio</a></li>
						   <li class="sf-with-ul"><a href="#">Oferta educativa</a>
							   <ul>
								   <li><a href="#">Secundaria</a></li>
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
						   <li class="current"><a href="#">Planteles</a></li>
						   <li><a href="{{ route('cecnews') }}">Noticec</a></li>
						   <li><a href="{{ route('contact') }}">contacto</a></li>
					   </ul>
					 </nav>
					<div class="clear"></div>
				</header>
		 </div>
	</div>

<!--==============================content================================-->
<section id="content">
   <div class="container_12">
	   <div class="wrapper-child">
			  <h2>Planteles</h2>
			  <p></p>
			</div>
			<div class="row feature design">
			  <div class="area1 columns left">
				<h3>Visita cualquiera de nuestros 3 planteles</h3>
				<p>En CEC querenos estar certa de ti. Por ese motivo continuamos expandiéndonos por donde tú más necesitas, para poner a tu alcance la excelencia educativa y que de este modo logres todas tus metas. </p>
				  <!--<a href="#" class="btn">Request Quote</a>-->
			  </div>
			  <div class="area2 columns feature-media right"> <img src="images/about-img.jpg" alt="" width="100%"> </div>
			</div>
			<div class="row dataTxt">
								<div class="col-md-4 col-sm-6">
									<h3>Chimalhuacán</h3>
									<p>AV. NEZAHUALCOYOTL #5 CABECERA MUNICIPAL CHIMALHUACAN</p>
									<p>Tel: 51138136</p>
									<p>chimalhuacan@bachilleratocec.com</p>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7525.815427049256!2d-98.945559!3d19.416393!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9515f2a1dd59cf0!2sCEC+CHIMALHUACAN!5e0!3m2!1ses!2s!4v1496867686194" width="400" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
								</div>

								<div class="col-md-4 col-sm-6">

									<h3>Ixtapaluca</h3>
									<p>AV CUAUHTEMOC #20 IXTAPALUCA</p>
									<p>Tel: 59723763</p>
									<p>ixtapaluca@bachilleratocec.com</p><br>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.284209125238!2d-98.89346248585674!3d19.313469786952073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1e50689ad4d5%3A0x8205d00c3433106!2sCEC%20IXTAPALUCA!5e0!3m2!1ses!2smx!4v1620280203713!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
									<!-- <ul class="listArrow">
										<li>Lorem ipsum dolor consectetursit amet, consectet</li>
										<li>Has molestie percipit an. Falli volumus efficiantur</li>
										<li>Falli volumus efficiantur sed id, ad vel noster</li>
										<li>Lorem ipsum dolor consectetursit amet, consectetur</li>
										<li>Ius ut etiam vivendo, graeci iudicabit constitutoa</li>
									</ul>
									<!-- Accordion starts -->
									</div>

								<div class="col-md-4 col-sm-6">

									<h3>Texcoco</h3>
									<p>AV. JUAREZ SUR #307 ESQ. ALDAMA CENTRO TEXCOCO</p>
									<p>Tel: (01 595) 9555607</p>
									<p>texcoco@bachilleratocec.com</p><br>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1880.3616948427118!2d-98.882643!3d19.510533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x978606a6615dfa71!2sCEC+TEXCOCO!5e0!3m2!1ses!2sus!4v1496867831365" width="400" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
									<!-- <ul  class="list3">
										<li>Lorem ipsum dolor consectetursit</li>
										<li>Has molestie percipit an Falli</li>
										<li>Falli volumus efficiantur sed id</li>
										<li>Lorem ipsum dolor consectetu</li>
									</ul>

									<!-- Accordion starts -->
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
							   <figure><img src="images/1page_img4.jpg" class="img" alt="" /></figure>
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
   <!-- <footer>
		 <div class="privacy">
			   international university © 2012 <a href="index-5.html">Privacy Policy</a><br>
		 </div>
		 <div class="social">
			   <a href="#">facebook</a>&nbsp; | &nbsp;<a href="#">twitter</a>&nbsp; |&nbsp; <a href="#">linkedin</a>
		 </div>
   </footer> -->
</body>
</html>
