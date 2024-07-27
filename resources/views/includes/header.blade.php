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
<div class="block bg-img1 overlay1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15" style="background-image: url('{{ asset('assets/img/bg01.jpg') }}');">
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
    </div>
</div>
