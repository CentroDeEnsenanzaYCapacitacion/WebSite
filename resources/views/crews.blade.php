<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/crews.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.7.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script>
    $(window).load(function(){
        $().UItoTop({ easingType: 'easeOutQuart' });
    })
    </script>
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
						   <li class="current"><a href="#">Planteles</a></li>
						   {{-- <li><a href="{{ route('cecnews') }}">Noticec</a></li> --}}
						   <li><a href="{{ route('contact') }}">contacto</a></li>
					   </ul>
					 </nav>
					<div class="clear"></div>
				</header>
		 </div>
	</div>

<!--==============================content================================-->
<div class="container mt-4">
    {{-- <div class="row d-flex text-center mt-3 mb-3">
        <div class="col">
            <h1>Planteles</h1>
        </div>
    </div> --}}
    <div id="content">
        <div class="container_12">
            <div class="row feature design justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="title">Visita cualquiera de nuestros 3 planteles</div>
                    <p>En CEC queremos estar cerca de ti. Por ese motivo continuamos expandiéndonos por donde tú más necesitas, para poner a tu alcance la excelencia educativa y que de este modo logres todas tus metas.</p>
                </div>
            </div>
            <div class="card shadow my-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Chimalhuacán</h3>
                            <p>AV. NEZAHUALCOYOTL #5 CABECERA MUNICIPAL CHIMALHUACAN</p>
                            <p>Tel: 55 5113 8136</p>
                            <p>chimalhuacan@capacitacioncec.edu.mx</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7525.815427049256!2d-98.945559!3d19.416393!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9515f2a1dd59cf0!2sCEC+CHIMALHUACAN!5e0!3m2!1ses!2s!4v1496867686194" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow my-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Ixtapaluca</h3>
                            <p>AV CUAUHTEMOC #1 IXTAPALUCA</p>
                            <p>Tel: 55 5972 3763</p>
                            <p>ixtapaluca@capacitacioncec.edu.mx</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.284209125238!2d-98.89346248585674!3d19.313469786952073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1e50689ad4d5%3A0x8205d00c3433106!2sCEC%20IXTAPALUCA!5e0!3m2!1ses!2smx!4v1620280203713!5m2!1ses!2smx" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow my-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Texcoco</h3>
                            <p>AV. JUAREZ SUR #307 ESQ. ALDAMA CENTRO TEXCOCO</p>
                            <p>Tel: 59 5955 5607</p>
                            <p>texcoco@capacitacioncec.edu.mx</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1880.3616948427118!2d-98.882643!3d19.510533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x978606a6615dfa71!2sCEC+TEXCOCO!5e0!3m2!1ses!2sus!4v1496867831365" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
