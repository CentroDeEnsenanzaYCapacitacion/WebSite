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
                                
                            </figcaption>
						</figure><br>
						<div class="head"><span class="headline hlt">
                            
                        </span><p><span class="headline hla">por
                            
                        </span></p></div>
						<span style="display:block; text-align: justify; ">
                            
                            <a href="new_detail.php?new_id=
                            
                            ">ver más</a></span>
						<div class="divider"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<div class="collumns">
							 
									
								
						</div>
					</div>
					<div class="col-1"></div>
					<div class="col-6">
						<div class="collumn">
							<div class="head">
								<span class="headline hl3">
                                    
                                </span><p><span class="headline hl4">por
                                    
                                </span></p>
							</div>
							<div class="row">
								<div class="col">
									<p style="display:block;text-align:justify;">
                                        
                                        <a href="new_detail.php?new_id=
                                        
                                        ">ver más</a></p>
								</div>
							</div>
						</div>
						<div class="collumn">
							<div class="head">
								<span class="headline hl5">
                                    
                                </span><p><span class="headline hl6">por
                                    
                                </span></p>
							</div>
							<div class="row">
								<div class="col">
									<p style="display:block;text-align:justify;text-align-last:justify;">
                                        
                                    </p>
									<figure class="figure" style="padding-right: 75px;">
										<img  class="media"
                                        >
										<figcaption class="figcaption">
                                            
                                        </figcaption>
									</figure>
									<p style="display:block;text-align:justify;">
                                        
                                        <a href="new_detail.php?new_id=
                                        
                                        ">ver más</a></p>
								</div>
							</div>
						</div>
						<div class="collumn">
							<div class="head">
								<span class="headline hl1">
                                    
                                </span><p><span class="headline hl2">por
                                    
                                </span></p>
							</div>
							<div class="row">
								<p style="display:block;text-align:justify;text-align-last:justify;">
                                    
                                </p>
								<div class=col-4>
									<figure class="figure">
										<img width="50%" class="media"
                                        >
										<figcaption class="figcaption">
                                            
                                        </figcaption>
									</figure>
								</div>
								<div class="col" style="padding-left:35px !important; padding-right: 0px !important;">
									<p style="display:block;text-align:justify;text-align-last:justify;">
                                        
                                    </p>
								</div>
								<p style="display:block;text-align:justify;">
                                    
                                    <a href="new_detail.php?new_id=
                                    
                                    ">ver más</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('includes.footer')
</body>
</html>
