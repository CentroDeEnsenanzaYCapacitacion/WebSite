<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
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
					{{-- <li><a href="#">área de alumno</a></li> --}}
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
						   <li><a href="{{ route('crews') }}">Planteles</a></li>
						   <li><a href="{{ route('cecnews') }}">Noticec</a></li>
						   <li class="current"><a href="#">contacto</a></li>
					   </ul>
					 </nav>
					<div class="clear"></div>
				</header>
		 </div>
	</div>

<!--==============================content================================-->
<section id="content">
	<div class="container_12"><br>
		<h2>Formulario de contacto</h2>
		<p></p>
		<br>
		<form>
			<div class="form-group">
				<label class="col-sm-10" for="name" class="control-label">Nombre</label>
				<div class="col-sm-10">
				<input name="name" type="text" class="form-control" id="name" placeholder="Nombre">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-10" for="cel" class="control-label">Teléfono</label>
				<div class="col-sm-10">
				<input name="cel" type="text" class="form-control" id="cel" placeholder="Teléfono">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-10" for="cel" class="control-label">Correo electrónico</label>
				<div class="col-sm-10">
				<input name="mail" type="email" class="form-control" id="mail" placeholder="Correo electrónico">
				</div>
			</div>
			<div class="d-flex">
				<div class="form-group col-4">
					<label for="cel" class="control-label">Plantel</label>
					<div>
						<select class="form-control">
							<option>Ixtapaluca</option>
							<option>Texcoco</option>
							<option>Chimalhuacán</option>
						</select>
					</div>
				</div>
				<div class="form-group col-4">
					<label for="cel" class="control-label">Curso</label>
					<div>
						<select class="form-control">
							{{-- <?php foreach ($courses as $key => $value) { ?>
								<option><?php echo $value->name; ?></option>
							<?php } ?> --}}
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-10" for="cel" class="control-label">Mensaje</label>
				<div class="col-sm-10">
				<textarea rows="5" name="msg" class="form-control" id="msg" placeholder="mensaje"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning btn-lg">Enviar</button>
				</div>
			</div>
		</form>
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
