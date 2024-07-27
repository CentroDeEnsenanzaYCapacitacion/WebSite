@extends('layout.mainLayout')
@push('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/crews.css') }}">
@endpush
@section('title', 'Planteles')
@section('content')
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
@endsection
