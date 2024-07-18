<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/contact.css') }}">
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
                           <li><a href="{{ route('crews') }}">Planteles</a></li>
                           {{-- <li><a href="{{ route('cecnews') }}">Noticec</a></li> --}}
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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('contact.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Nombre</label>
                <div>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group">
                <label for="cel" class="control-label">Teléfono</label>
                <div>
                    <input name="cel" type="text" class="form-control" id="cel" placeholder="Teléfono">
                </div>
            </div>
            <div class="form-group">
                <label for="mail" class="control-label">Correo electrónico</label>
                <div>
                    <input name="mail" type="email" class="form-control" id="mail" placeholder="Correo electrónico">
                </div>
            </div>
            <div class="d-flex">
                <div class="form-group col-4">
                    <label for="plantel" class="control-label">Plantel</label>
                    <div>
                        <select name="crew" class="form-control" id="plantel">
                            <option>Ixtapaluca</option>
                            <option>Texcoco</option>
                            <option>Chimalhuacán</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-4">
                    <label for="curso" class="control-label">Curso</label>
                    <div>
                        <select name="course" class="form-control" id="curso">
                            @foreach ($courses as $course)
                                <option>{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="msg" class="control-label">Mensaje</label>
                <div>
                    <textarea rows="5" name="msg" class="form-control" id="msg" placeholder="mensaje"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <button type="submit" class="btn bg-orange">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>
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
