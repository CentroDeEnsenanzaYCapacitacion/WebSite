<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/iii.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.min.css') }}" />
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
	@include('includes.header')

<!--==============================content================================-->
<section id="content">
	<div class="container_12_news">
		<div class="wrapper-news">
			<div class="container" style="padding-right: 12px;">
				<div class="row">
					<div class="col-12">
						<div class="head">
							<header>noticec</header>
							<div class="subhead">México - <?php date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'spanish');
echo utf8_encode(strftime("%A, %d de %B de %Y"));?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<figure class="main_figure">
							<img class="main_media" alt="">
							<figcaption class="figcaption">
                                {{-- <?php echo $news->internal[0]->image_description;?> --}}
                            </figcaption>
						</figure><br>
						<div class="head"><span class="headline hlt">
                            {{-- <?php echo $news->internal[0]->title;?> --}}
                        </span><p><span class="headline hla">por
                            {{-- <?php echo strtoupper($news->internal[0]->author);?> --}}
                        </span></p></div>
						<span style="display:block; text-align: justify; ">
                            {{-- <?php echo $model_1_1.'... ';?> --}}
                            <a href="new_detail.php?new_id=
                            {{-- <?php echo $news->internal[0]->id;?> --}}
                            ">ver más</a></span>
						<div class="divider"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<div class="collumns">
							 {{-- <?php 		    foreach ($news->external as $key => $value) { ?> --}}
									{{-- <div class="collumn">
										<div class="head"><span class="headline hl3"><?php echo $value->title; ?></span><p><span class="headline hl4">por <?php echo strtoupper($value->author); ?></span></p></div>
										<p style="display:block; text-align: justify; "><?php echo $value->body.'... ';?><a href="new_detail.php?new_id=<?php echo $value->id;?>">ver más</a></p>
									</div> --}}
								{{-- <?php } ?> --}}
						</div>
					</div>
					<div class="col-1"></div>
					<div class="col-6">
						<div class="collumn">
							<div class="head">
								<span class="headline hl3">
                                    {{-- <?php echo $news->internal[1]->title;?> --}}
                                </span><p><span class="headline hl4">por
                                    {{-- <?php echo strtoupper($news->internal[1]->author);?> --}}
                                </span></p>
							</div>
							<div class="row">
								<div class="col">
									<p style="display:block;text-align:justify;">
                                        {{-- <?php echo $model_2_1.'... ';?> --}}
                                        <a href="new_detail.php?new_id=
                                        {{-- <?php echo $news->internal[1]->id;?> --}}
                                        ">ver más</a></p>
								</div>
							</div>
						</div>
						<div class="collumn">
							<div class="head">
								<span class="headline hl5">
                                    {{-- <?php echo $news->internal[2]->title;?> --}}
                                </span><p><span class="headline hl6">por
                                    {{-- <?php echo strtoupper($news->internal[2]->author);?> --}}
                                </span></p>
							</div>
							<div class="row">
								<div class="col">
									<p style="display:block;text-align:justify;text-align-last:justify;">
                                        {{-- <?php echo $model_3_1;?> --}}
                                    </p>
									<figure class="figure" style="padding-right: 75px;">
										<img  class="media"
                                        {{-- src="https://capacitacioncec.edu.mx/<?php if($_ENV['ENVIRONMENT']=='DEVELOPMENT') {
										    echo 'capcec_dev/';
										}?>intranet/assets/img/news/internal/<?php echo $news->internal[2]->id;  ?>.jpg" alt=""> --}}>
										<figcaption class="figcaption">
                                            {{-- <?php echo $news->internal[2]->image_description;?> --}}
                                        </figcaption>
									</figure>
									<p style="display:block;text-align:justify;">
                                        {{-- <?php echo $model_3_2.'... ';?> --}}
                                        <a href="new_detail.php?new_id=
                                        {{-- <?php echo $news->internal[2]->id;?> --}}
                                        ">ver más</a></p>
								</div>
							</div>
						</div>
						<div class="collumn">
							<div class="head">
								<span class="headline hl1">
                                    {{-- <?php echo $news->internal[3]->title;?> --}}
                                </span><p><span class="headline hl2">por
                                    {{-- <?php echo strtoupper($news->internal[3]->author);?> --}}
                                </span></p>
							</div>
							<div class="row">
								<p style="display:block;text-align:justify;text-align-last:justify;">
                                    {{-- <?php echo $model_4_1; ?> --}}
                                </p>
								<div class=col-4>
									<figure class="figure">
										<img width="50%" class="media"
                                        {{-- src="https://capacitacioncec.edu.mx/<?php if($_ENV['ENVIRONMENT']=='DEVELOPMENT') {
										    echo 'capcec_dev/';
										}?>intranet/assets/img/news/internal/<?php echo $news->internal[3]->id;  ?>.jpg" alt=""> --}}>
										<figcaption class="figcaption">
                                            {{-- <?php echo $news->internal[3]->image_description;?> --}}
                                        </figcaption>
									</figure>
								</div>
								<div class="col" style="padding-left:35px !important; padding-right: 0px !important;">
									<p style="display:block;text-align:justify;text-align-last:justify;">
                                        {{-- <?php echo $model_4_2;?> --}}
                                    </p>
								</div>
								<p style="display:block;text-align:justify;">
                                    {{-- <?php echo $model_4_3.'... ';?> --}}
                                    <a href="new_detail.php?new_id=
                                    {{-- <?php echo $news->internal[3]->id;?> --}}
                                    ">ver más</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--==============================footer=================================-->
@include('includes.footer')
</body>
</html>
