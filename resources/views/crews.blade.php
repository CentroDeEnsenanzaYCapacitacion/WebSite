@extends('layout.mainLayout')
@section('title', 'Planteles - CEC')

@section('content')
<div class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-secondary">Nuestros Planteles</h1>
            <div class="bg-primary mx-auto mb-3 title-underline"></div>
            <p class="lead text-muted">En CEC queremos estar cerca de ti. Por ese motivo continuamos expandiéndonos por donde tú más necesitas, para poner a tu alcance la excelencia educativa y que de este modo logres todas tus metas.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header text-white crew-card-header">
                        <h3 class="mb-0"><i class="bi bi-geo-alt-fill me-2"></i>Ixtapaluca</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="bi bi-pin-map-fill fs-4 text-primary me-3"></i>
                                <div>
                                    <strong>Dirección</strong>
                                    <p class="mb-0 text-muted">Av. Cuauhtémoc #1, Ixtapaluca</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="bi bi-telephone-fill fs-4 text-primary me-3"></i>
                                <div>
                                    <strong>Teléfono</strong>
                                    <p class="mb-0 text-muted">55 5972 3763</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="bi bi-envelope-fill fs-4 text-primary me-3"></i>
                                <div>
                                    <strong>Correo electrónico</strong>
                                    <p class="mb-0 text-muted">ixtapaluca@capacitacioncec.edu.mx</p>
                                </div>
                            </div>
                        </div>

                        <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.284209125238!2d-98.89346248585674!3d19.313469786952073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1e50689ad4d5%3A0x8205d00c3433106!2sCEC%20IXTAPALUCA!5e0!3m2!1ses!2smx!4v1620280203713!5m2!1ses!2smx" class="map-iframe" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <div class="mt-4">
                            <a href="https://wa.me/525549867488" target="_blank" class="btn btn-success w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Contactar por WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header text-white crew-card-header">
                        <h3 class="mb-0"><i class="bi bi-geo-alt-fill me-2"></i>Texcoco</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="bi bi-pin-map-fill fs-4 text-primary me-3"></i>
                                <div>
                                    <strong>Dirección</strong>
                                    <p class="mb-0 text-muted">Av. Juárez Sur #307 Esq. Aldama, Centro Texcoco</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="bi bi-telephone-fill fs-4 text-primary me-3"></i>
                                <div>
                                    <strong>Teléfono</strong>
                                    <p class="mb-0 text-muted">59 5955 5607</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3">
                                <i class="bi bi-envelope-fill fs-4 text-primary me-3"></i>
                                <div>
                                    <strong>Correo electrónico</strong>
                                    <p class="mb-0 text-muted">texcoco@capacitacioncec.edu.mx</p>
                                </div>
                            </div>
                        </div>

                        <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1880.3616948427118!2d-98.882643!3d19.510533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x978606a6615dfa71!2sCEC+TEXCOCO!5e0!3m2!1ses!2sus!4v1496867831365" class="map-iframe" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <div class="mt-4">
                            <a href="https://wa.me/525573743951" target="_blank" class="btn btn-success w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Contactar por WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-info mt-5 border-0 shadow-sm">
            <div class="d-flex align-items-center">
                <i class="bi bi-info-circle fs-3 me-3"></i>
                <div>
                    <h5 class="mb-1">¿No encuentras un plantel cerca de ti?</h5>
                    <p class="mb-0">Contáctanos y te informaremos sobre nuestras opciones de estudio en línea.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
