<?php
include 'config.php';
$GET_VARS2 = array(
	"go"        => "news",
	"do"        => "list"
);

$POST_VARS = array(
	"statusFilter" => 1,
	"resultsPerPageFilter" => 30,
	"categoriesFilter" => 21,
	"categoriesFilterStrict" => 1,
	"fields" => "id, id_user, status, status_moderation, type, title, title_url, description, description_seo, tags, img_legend, img_poster, img_social, img_thumbnail, img_icon, date, date_end, views_page, socialize, allow_comments, notification, notification_link_type, notification_link, map, map_center_lat, map_center_lng, map_zoom, map_type, map_marker_lat, map_marker_lng, id_import, date_lastmod",
);

$REQUEST_URL = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS2);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $REQUEST_URL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_VARS);

$response = curl_exec($ch);

$data = json_decode($response);

//clips
include 'config.php';
$GET_VARS3 = array(
	"go"        => "clips",
	"do"        => "list"
);

$POST_VARS2 = array(
	"statusFilter" => 1,
	"resultsPerPageFilter" => 30,
	"categoriesFilter" => 44,
	"categoriesFilterStrict" => 1,
	"fields" => "id, id_user, status, status_moderation, type, title, title_url, description, description_seo, tags, img_legend, img_poster, img_social, img_thumbnail, img_icon, date, date_end, views_page, socialize, allow_comments, notification, notification_link_type, notification_link, map, map_center_lat, map_center_lng, map_zoom, map_type, map_marker_lat, map_marker_lng, id_import, date_lastmod",
);


$REQUEST_URL2 = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS3);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $REQUEST_URL2);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_VARS2);

$response2 = curl_exec($ch);

$dataclip = json_decode($response2);
?>
<!doctype html>
<html lang="ca">

	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
															  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
					'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
									})(window,document,'script','dataLayer','GTM-5MVV29M');</script>
		<!-- End Google Tag Manager -->
		<!-- Quina setmaneta, eh nai? -->
		<!-- Capità, és dimecres -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>UABmèdia, els mitjans audiovisuals de la Facultat de Ciències de la Comunicació. </title>
		<meta name="theme-color" content="#141414">
		<meta name="description" content="Els mitjans audiovisuals de la Facultat de Ciències de la Comunicació.">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@uabmedia">
		<meta name="twitter:title" content="UABmèdia">
		<meta name="twitter:description" content="Els mitjans audiovisuals de la Facultat de Ciències de la Comunicació.">
		<meta name="twitter:image:src" content="./assets/images/uabmedia_twitter.jpeg">
		<meta name="twitter:url" content="https://uab.media/">
		<meta property="og:site_name" content="UABmèdia" />
		<meta property="og:url" content="https://uab.media/" />
		<meta property="og:title" content="UABmèdia" />
		<meta property="og:description" content="Els mitjans audiovisuals de la Facultat de Ciències de la Comunicació." />
		<meta property="og:image" content="./assets/images/uabmedia_twitter.jpeg" />
		<meta name="apple-mobile-web-app-title" content="UABmèdia">
		<link rel="canonical" href="https://uab.media/">
		<link rel="shortcut icon" href="./assets/images/favicon.png" />
		<link rel="apple-touch-icon" href="./assets/images/icons/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="./assets/images/icons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="./assets/images/icons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="./assets/images/icons/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="./assets/images/icons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="./assets/images/icons/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="./assets/images/icons/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="./assets/images/icons/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="./assets/images/icons/apple-touch-icon-180x180.png" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="./assets/css/directes.css" />
		<link rel="stylesheet" href="./assets/css/typography.css" />
		<link rel="stylesheet" href="./assets/css/style.css" />
		<link rel="stylesheet" href="./assets/css/responsive.css" />
		<link rel="stylesheet" href="./assets/css/cssDefinitiu.css">
		<link rel="stylesheet" href="./assets/css/footerStyles.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://s3-eu-west-1.amazonaws.com">
		<!--<link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />-->

		<script async src="https://www.googletagmanager.com/gtag/js?id=G-ES1G92PJ17"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());
			gtag('config', 'G-ES1G92PJ17');
		</script>
		<!-- JS dels botons de pause i play -->

		<style>
			.img-fluid {
				filter: brightness(100%) !important;
			}

			.clicable {
				cursor: pointer;
			}
		</style>
	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MVV29M"
						  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php session_start();
		setlocale(LC_ALL, "es_ES"); //Setting the locale to Spanish
		?>
		<script>
		</script>
		<?php
		include './plantilla/header.php';
		?>
		<div class="contingut">
			<section id="header">
				<div class="container">
					<div class="row">
						<div class="col-12 overflow-hidden hide-mobile">
							<div class="um-capcalera d-flex align-items-center" style="justify-content: space-between;">
								<div class="icono-capcelera">
									<img style="margin-right:30px;width:40px" src="./assets/images/uabmedia-color.svg" alt="UABmèdia">
									<h1 class="main-title titol-capcelera" style="font-size: 2.369em;line-height: 0.8!important">Actualitat. UABmèdia</h1>
								</div>
								<!-- Dona la data en català -->
								<div class="time_capceler">
									<?php
									$formatter = new IntlDateFormatter('ca_CA', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
									echo $formatter->format(time());
									?>
								</div>
							</div>
							<section> 
								<div class="container">
									<div class="row">
										<div class="col-0"></div>
										<div class="col-4 hide-mobile" style="margin-bottom: 2%;padding-left:0!important;" >
											<nav>
												<ul class="d-flex align-items-center list-inline m-0">
													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Informatius>Informatius
														</a>
													</li>
													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Noticies_Salut>Salut
														</a>
													</li>
													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Noticies_Societat>Societat
														</a>
													</li>
													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Noticies_Política>Política
														</a>
													</li>

													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Noticies_Igualtat>Igualtat
														</a>
													</li>

													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Noticies_Ciencia>Ciència
														</a>
													</li>
													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Noticies_Autonoma>Autònoma
														</a>
													</li>
													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Noticies_Esports>Esports
														</a>
													</li>
													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Columna_Opinio>Opinió
														</a>
													</li>
													<li class="nav-item nav-icon" style="margin-right: 10px!important;">
														<a href=Interactius>Interactius
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>

			</section>
			<section id="portada">
				<div class="container">
					<div class="row">
						<!-- Noticia gran -->

						<?php 
						$a= $dataclip->list['0']->date;
						$b= $data->list['0']->date;
						if ($b >= $a):
						?>
						<div class="col-12 col-md-12 noticiaportada" style=" margin-left: auto;
																			margin-right: auto;">
							<h2 class="titol"><a href="/noticia/<?php echo $data->list['0']->id; ?>/<?php echo $data->list['0']->title_url; ?>">
								<div class="imatgeportada" style="background-image:url(<?php echo $data->list['0']->img_social; ?>);margin-bottom:20px;"></div>
								<?php echo $data->list['0']->title; ?>
								<p class="subtitol"><?php echo $data->list['0']->description_seo; ?></p>
								<span class="data"><?php echo substr($data->list['0']->date_formatted, 0, -9); ?></span>
								</a></h2>
						</div>	
						<?php else: ?>
						<div class="col-12 col-md-8 noticiaportada">
							<h2 class="titol"><a href="/clip/<?php echo $dataclip->list['0']->id; ?>/<?php echo $dataclip->list['0']->title_url; ?>">
								<div class="imatgeportada" style="background-image:url(<?php echo $dataclip->list['0']->img_social; ?>);"></div>
								<?php echo $dataclip->list['0']->title; ?>
								<p class="subtitol"><?php echo $dataclip->list['0']->description_seo; ?></p>
								<span class="data"><?php echo substr($dataclip->list['0']->date_formatted, 0, -9); ?></span>
								</a></h2>
						</div>
						<?php endif ?>
						<!--	<div class="col-12 col-md-4">
 <div class="widget-area" aria-label="Barra lateral">
  <a href="Columna_Opinio"><h5 class="widget-title">Columna d'opinió</h5></a>
  <hr>
  <?php
	include 'config.php';

						$GET_VARS_uab = array(
							"go" => "news",
							"do" => "list"
						);

						$POST_VARS_uab = array(
							"statusFilter" => 1,
							"resultsPerPageFilter" => 30,
							"categoriesFilter" => 33,
							"categoriesFilterStrict" => 1
						);

						$REQUEST_URL_uab = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS_uab);

						$ch_uab = curl_init();
						curl_setopt($ch_uab, CURLOPT_URL, $REQUEST_URL_uab);
						curl_setopt($ch_uab, CURLOPT_POST, true);
						curl_setopt($ch_uab, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch_uab, CURLOPT_HEADER, false);
						curl_setopt($ch_uab, CURLOPT_POSTFIELDS, $POST_VARS_uab);

						$response_uab = curl_exec($ch_uab);

						$data_uab = json_decode($response_uab);

						if ($data_uab->list['0']->id != $data->list['0']->id) {
							$i=0; 
						}else{ $i=1; 
							 }
   ?>
   <div class="list-inline um-widget-menu" style="overflow:auto; height:45vh">
 <ul class="um-post" style="list-style:none">
  <?php
for (; $i < count($data_uab->list); $i++) {
   ?>
  <li>
   <div class="post-img">
 <div class="post-img-holder">
  <a class="img-noticia noticia_flex" href="/noticia/<?php echo $data_uab->list[$i]->id; ?>/<?php echo $data_uab->list[$i]->title_url; ?>" style="background-image: url('<?php echo $data_uab->list[$i]->img_poster; ?>');"></a>
 </div>
  <div class="post-blog">
   <div class="blog-box">
 <ul class="list-inline">
  <li class="list-inline-item  mr-3"><a class="date-widget" href="/noticia?iq=<?php echo $data_uab->list[$i]->id; ?>" style="color:#8e8e8e!important;"><i class="fa fa-calendar mr-2" aria-hidden="true"></i><?php echo substr($data_uab->list[$i]->date_formatted,0,9); ?></a></li>
 </ul>
   <h6 style="margin-right:1rem"><a class="new-link" href="https://uab.media/noticia/<?php echo $data_uab->list[$i]->id; ?>/<?php echo $data_uab->list[$i]->title_url; ?>">
 <?php echo $data_uab->list[$i]->title; ?>
   </a></h6>
  </div>
 </div>
   </div>
  </li>
  <?php } ?>
 </ul>
   </div>
 </div>
 </div> -->
						<br/><br/>
						<div class="bnoticies">
							<div class="container">
								<div data-aos="zoom-in" class="row">
									<?php
									$i = 1;
									// 4 Primeres noticies
									while ($i > 0 and $i < 5) {
									?>
									<div class="col-12 col-md">
										<h6 class="titol"><a href="/noticia/<?php echo $data->list[$i]->id; ?>/<?php echo $data->list[$i]->title_url; ?>">
											<div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data->list[$i]->img_social; ?>)">
											</div>
											<br />
											<?php echo $data->list[$i]->title; ?>
											<div class="capitol d-flex align-items-center my-2">
												<p class="text-white"><?php echo substr($data->list[$i]->date_formatted, 0, -9); ?></p>
											</div></a></h6>
										<br /><br />
									</div>
									<?php
										$i++;
									}
									?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- SECCIÓ INFORMATIUS -->

			<section id="noticies" style="background-color:#FF4C3E!important;padding-top:40px;padding-bottom:20px">
				<?php
				include 'config.php';
				$GET_VARS3 = array(
					"go"        => "clips",
					"do"        => "list"
				);

				$POST_VARS3 = array(
					"sortByFilter"      => "date",
					"categoriesFilter"  => '2',
					"statusFilter"    => 1,
					"resultsPerPageFilter" => 4,
				);

				$REQUEST_URL3 = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS3);

				$ch3 = curl_init();
				curl_setopt($ch3, CURLOPT_URL, $REQUEST_URL3);
				curl_setopt($ch3, CURLOPT_POST, true);
				curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch3, CURLOPT_HEADER, false);
				curl_setopt($ch3, CURLOPT_POSTFIELDS, $POST_VARS3);
				$response3 = curl_exec($ch3);
				$data3 = json_decode($response3);
				?>
				<div class="container">
					<a href="Informatius" style="text-align:center;"><h3 data-aos="fade-down">Informatius d'UABràdio</h3></a><br />
					<div data-aos="zoom-in" class=" informatius-row-Index">

						<!-- Tot el script que mira si estem en directe o no -->
						<script type="text/javascript">
							function enDirecte() {
								var date = new Date();
								var day = date.getDate();
								var hour = date.getHours();
								var month = date.getUTCMonth();
								month++; //sumem un perque de normal va de 0 a 11, no de 1 (gener) a 12 (desembre)
								var minutes = date.getMinutes();
								var weekday = date.getUTCDay();

								var directe = true;

								if (month == '7' || month == '8') { //Vacances
									directe = false;
									console.log('Estem de vacances')
								}
								if (month == '6' && day > '19') { //a juny, a partir del 19: vacances
									directe = false;
									console.log('Comencem vacances')

								}
								if (hour < '17' || hour >= '18') { //si no es entre 5 i 6, apagat
									directe = false
									console.log('menys de 17 o més de 18')
								}
								if (hour == '17' && minutes >= '50') {
									//si son les 5 però els minuts passen de 30
									directe = false
									console.log('més de 17:30 però les cinc')
								}

								return directe;

							}
							enDirecte();
							setTimeout(enDirecte, 5000); //Realitza la funció cada 5 segons.

							if (enDirecte() == true) {
								<?php $QI = 3; ?>
								<?php $InformatiuDirecte = true; ?>
							}
							if (enDirecte() == false) {
								<?php $QI = 4;
								?>

							}
						</script>

						<?php

						// Si està en directe, es mostra el directe + 3 informatius; si no ho estem, se'n mostren 4.

						if ($QI == 3) {
						?>
						<script>
							$(document).ready(function() {

								$('#pause_btn').hide();
								$('#radio_directe').get(0).pause();

								$('#play_btn').click(function() {
									$('#radio_directe').get(0).play();
									$('#play_btn').hide();
									$('#pause_btn').show();
								});

								$('#pause_btn').click(function() {
									$('#radio_directe').get(0).pause();
									$('#play_btn').show();
									$('#pause_btn').hide();
								});
							});
						</script>
						<div class="informatiu-directe informatiuIndex">
							<div class="title-directe-Index">
								Estem en directe!
							</div>
							<div class="button-directe-Index">
								<audio class="radio" id="radio_directe">
									<source src="https://videosdigitals.uab.cat/uabradio/uabradio" type="audio/mpeg">
								</audio>

								<div class="radiobutton" id="play_btn">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M10 8.64L15.27 12 10 15.36V8.64M8 5v14l11-7L8 5z" />
									</svg>
								</div>

								<div class="radiobutton" id="pause_btn">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
									</svg>
								</div>
							</div>
						</div>

						<?php
						}

						$i = 0;
						while ($i < $QI) {
						?>
						<div class="informatiuIndex">
							<div class="slide-item">
								<div class="block-images position-relative">
									<h6 class="titol"><a href="/clip/<?php echo $data3->list[$i]->id; ?>/<?php echo $data3->list[$i]->title_url; ?>">
										<div class="img-box">
											<img src="<?php echo $data3->list[$i]->img_social; ?>" class="img-fluid" alt="">
										</div>
										<div class="block-description">
											<!--<div class="capitol d-flex align-items-center my-2">-->
											<span class="text-white" id="info_data"><?php echo substr($data3->list[$i]->date_formatted, 0, -9); ?></span>
										</div>
										<!--</div>--></a></h6>
								</div>
							</div>
						</div>

						<?php
							$i++;
						}
						?>
					</div>
				</div>
				<br/>
			</section>


			<!-- SECCIÓ AUTÒNOMA -->
			<section id="uab" style="background-color:#043e39!important;padding-top:40px;padding-bottom:20px">
				<?php
				include 'config.php';

				$GET_VARS_uab = array(
					"go" => "news",
					"do" => "list"
				);

				$POST_VARS_uab = array(
					"statusFilter" => 1,
					"resultsPerPageFilter" => 30,
					"categoriesFilter" => 22,
					"categoriesFilterStrict" => 1
				);

				$REQUEST_URL_uab = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS_uab);

				$ch_uab = curl_init();
				curl_setopt($ch_uab, CURLOPT_URL, $REQUEST_URL_uab);
				curl_setopt($ch_uab, CURLOPT_POST, true);
				curl_setopt($ch_uab, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch_uab, CURLOPT_HEADER, false);
				curl_setopt($ch_uab, CURLOPT_POSTFIELDS, $POST_VARS_uab);

				$response_uab = curl_exec($ch_uab);

				$data_uab = json_decode($response_uab);
				?>
				<div class="container">
					<a href="Noticies_Autonoma" style="text-align:center;"><h3 data-aos="fade-down" style="font-weight:normal">Autònoma</h3></a><br />
					<div data-aos="zoom-in" class="row">
						<?php
						$i = 0;
						while ($i < 4) {
						?>
						<div class="col-12 col-md">
							<h6 class="titol"><a href="/noticia/<?php echo $data_uab->list[$i]->id; ?>/<?php echo $data_uab->list[$i]->title_url; ?>"><div class="block-images position-relative clicable" onclick="window.location= '/noticia/<?php echo $data_uab->list[$i]->id; ?>/<?php echo $data_uab->list[$i]->title_url; ?>'">
								<div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_uab->list[$i]->img_social; ?>)">
								</div>
								</div>
								<br />
								<?php echo $data_uab->list[$i]->title; ?>
								<div class="capitol d-flex align-items-center my-2">
									<span class="text-white"><?php echo substr($data_uab->list[$i]->date_formatted, 0, -9); ?></span>
								</div></a></h6>
							<br /><br />
						</div>
						<?php
							$i++;
						}
						?>
					</div>
				</div>
			</section>
			<!-- SECCIÓ POLITICA -->
			<section id="politica" style="padding-top:40px;padding-bottom:20px">
				<?php
				include 'config.php';
				$GET_VARS_politica = array(
					"go" => "news",
					"do" => "list"
				);

				$POST_VARS_politica = array(
					"statusFilter" => 1,
					"resultsPerPageFilter" => 30,
					"categoriesFilter" => 31,
					"categoriesFilterStrict" => 1
				);

				$REQUEST_URL_politica = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS_politica);

				$ch_politica = curl_init();
				curl_setopt($ch_politica, CURLOPT_URL, $REQUEST_URL_politica);
				curl_setopt($ch_politica, CURLOPT_POST, true);
				curl_setopt($ch_politica, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch_politica, CURLOPT_HEADER, false);
				curl_setopt($ch_politica, CURLOPT_POSTFIELDS, $POST_VARS_politica);

				$response_politica = curl_exec($ch_politica);

				$data_politica = json_decode($response_politica);
				?>
				<div class="container">
					<a href="Noticies_Política" style="text-align:center;"><h3 data-aos="fade-down" style="font-weight:normal">Política</h3></a><br />
					<div data-aos="zoom-in" class="row">
						<?php
						$i = 0;
						while ($i < 4) {
						?>
						<div class="col-12 col-md">
							<h6 class="titol"><a href="/noticia/<?php echo $data_politica->list[$i]->id; ?>/<?php echo $data_politica->list[$i]->title_url; ?>"><div class="block-images position-relativ clicable" onclick="window.location= '/noticia/<?php echo $data_politica->list[$i]->id; ?>/<?php echo $data_politica->list[$i]->title_url; ?>'">
								<div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_politica->list[$i]->img_social; ?>)">
								</div>
								</div>
								<br />
								<?php echo $data_politica->list[$i]->title; ?>
								<div class="capitol d-flex align-items-center my-2">
									<span class="text-white"><?php echo substr($data_politica->list[$i]->date_formatted, 0, -9); ?></span>
								</div></a></h6>
							<br /><br />
						</div>
						<?php
							$i++;
						}
						?>
					</div>
				</div>
			</section>

			<!-- Secció Igualtat -->
			<!--
 <section id="Igualtat" style="background-color: var(--play)!important;padding-top:40px;padding-bottom:20px">
   <?php
include 'config.php';
$GET_VARS_salut = array(
	"go" => "news",
	"do" => "list"
);

$POST_VARS_salut = array(
	"statusFilter" => 1,
	"resultsPerPageFilter" => 30,
	"categoriesFilter" => 30,
	"categoriesFilterStrict" => 1
);

$REQUEST_URL_salut = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS_salut);

$ch_salut = curl_init();
curl_setopt($ch_salut, CURLOPT_URL, $REQUEST_URL_salut);
curl_setopt($ch_salut, CURLOPT_POST, true);
curl_setopt($ch_salut, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_salut, CURLOPT_HEADER, false);
curl_setopt($ch_salut, CURLOPT_POSTFIELDS, $POST_VARS_salut);

$response_salut = curl_exec($ch_salut);

$data_salut = json_decode($response_salut);
   ?>
   <div class="container">
 <a href="Noticies_Igualtat" style="text-align:center;"><h3 data-aos="fade-down" style="font-weight:normal">Igualtat</h3></a><br />
 <div data-aos="zoom-in" class="row">
  <?php
$i = 0;
while ($i < 4) {
  ?>
  <div class="col-12 col-md">
   <h6 class="titol"><a href="/noticia/<?php echo $data_salut->list[$i]->id; ?>/<?php echo $data_salut->list[$i]->title_url; ?>"><div class="block-images position-relative clicable" onclick="window.location= '/noticia/<?php echo $data_salut->list[$i]->id; ?>/<?php echo $data_salut->list[$i]->title_url; ?>'">
 <div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_salut->list[$i]->img_social; ?>)">
 </div>
   </div>
   <br />
   <?php echo $data_salut->list[$i]->title; ?>
   <div class="capitol d-flex align-items-center my-2">
 <span class="text-white"><?php echo substr($data_salut->list[$i]->date_formatted, 0, -9); ?></span>
   </div></a></h6>
   <br /><br />
  </div>




  <?php
	$i++;
}
  ?>
 </div>
   </div>
  </section>

 -->	

			<!-- SECCIÓ ESPORTS -->
			<!--
  <section id="esports" style="background-color:#30638e!important;padding-top:40px;padding-bottom:20px">
   <?php
include 'config.php';

$GET_VARS_esports = array(
	"go" => "news",
	"do" => "list"
);

$POST_VARS_esports = array(
	"statusFilter" => 1,
	"resultsPerPageFilter" => 30,
	"categoriesFilter" => 32,
	"categoriesFilterStrict" => 1
);

$REQUEST_URL_esports = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS_esports);

$ch_esports = curl_init();
curl_setopt($ch_esports, CURLOPT_URL, $REQUEST_URL_esports);
curl_setopt($ch_esports, CURLOPT_POST, true);
curl_setopt($ch_esports, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_esports, CURLOPT_HEADER, false);
curl_setopt($ch_esports, CURLOPT_POSTFIELDS, $POST_VARS_esports);

$response_esports = curl_exec($ch_esports);

$data_esports = json_decode($response_esports);
   ?>
   <div class="container">
 <a href="Noticies_Esports" style="text-align:center;"><h3 data-aos="fade-down" style="font-weight:normal">Esports</h3></a><br />
 <div data-aos="zoom-in" class="row">
  <?php
$i = 0;
while ($i < 4) {
  ?>
  <div class="col-12 col-md">
   <h6 class="titol"><a href="/noticia/<?php echo $data_esports->list[$i]->id; ?>/<?php echo $data_esports->list[$i]->title_url; ?>"><div class="block-images position-relative clicable" onclick="window.location= '/noticia/<?php echo $data_esports->list[$i]->id; ?>/<?php echo $data_esports->list[$i]->title_url; ?>'">
 <div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_esports->list[$i]->img_social; ?>)">
 </div>
   </div>
   <br />
   <?php echo $data_esports->list[$i]->title; ?>
   <div class="capitol d-flex align-items-center my-2">
 <span class="text-white"><?php echo substr($data_esports->list[$i]->date_formatted, 0, -9); ?></span>
   </div></a></h6>
   <br /><br />
  </div>
  <?php
	$i++;
}
  ?>
 </div>
   </div>
  </section>
 -->
			<!-- SECCIÓ CIÈNCIA -->

			<section id="ciencia" style="background-color:green!important;padding-top:40px;padding-bottom:20px">
				<?php
				include 'config.php';

				$GET_VARS_ciencia = array(
					"go" => "news",
					"do" => "list"
				);

				$POST_VARS_ciencia = array(
					"statusFilter" => 1,
					"resultsPerPageFilter" => 30,
					"categoriesFilter" => 66,
					"categoriesFilterStrict" => 1
				);

				$REQUEST_URL_ciencia = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS_ciencia);

				$ch_ciencia = curl_init();
				curl_setopt($ch_ciencia, CURLOPT_URL, $REQUEST_URL_ciencia);
				curl_setopt($ch_ciencia, CURLOPT_POST, true);
				curl_setopt($ch_ciencia, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch_ciencia, CURLOPT_HEADER, false);
				curl_setopt($ch_ciencia, CURLOPT_POSTFIELDS, $POST_VARS_ciencia);

				$response_ciencia = curl_exec($ch_ciencia);

				$data_ciencia = json_decode($response_ciencia);
				?>
				<div class="container">
					<a href="Noticies_Ciencia" style="text-align:center;"><h3 data-aos="fade-down" style="font-weight:normal">Ciència</h3></a><br />
					<div data-aos="zoom-in" class="row">
						<?php
						$i = 0;
						while ($i < 4) {
						?>
						<div class="col-12 col-md">
							<h6 class="titol"><a href="/noticia/<?php echo $data_ciencia->list[$i]->id; ?>/<?php echo $data_ciencia->list[$i]->title_url; ?>"><div class="block-images position-relative clicable" onclick="window.location= '/noticia/<?php echo $data_ciencia->list[$i]->id; ?>/<?php echo $data_ciencia->list[$i]->title_url; ?>'">
								<div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_ciencia->list[$i]->img_social; ?>)">
								</div>
								</div>
								<br />
								<?php echo $data_ciencia->list[$i]->title; ?>
								<div class="capitol d-flex align-items-center my-2">
									<span class="text-white"><?php echo substr($data_ciencia->list[$i]->date_formatted, 0, -9); ?></span>
								</div></a></h6>
							<br /><br />
						</div>
						<?php
							$i++;
						}
						?>
					</div>
				</div>
			</section>

			<!-- SECCIÓ SALUT -->
			<!--
  <section id="salut" style="background-color:#063044!important;padding-top:40px;padding-bottom:20px">
   <?php
include 'config.php';
$GET_VARS_salut = array(
	"go" => "news",
	"do" => "list"
);

$POST_VARS_salut = array(
	"statusFilter" => 1,
	"resultsPerPageFilter" => 30,
	"categoriesFilter" => 25,
	"categoriesFilterStrict" => 1
);

$REQUEST_URL_salut = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS_salut);

$ch_salut = curl_init();
curl_setopt($ch_salut, CURLOPT_URL, $REQUEST_URL_salut);
curl_setopt($ch_salut, CURLOPT_POST, true);
curl_setopt($ch_salut, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_salut, CURLOPT_HEADER, false);
curl_setopt($ch_salut, CURLOPT_POSTFIELDS, $POST_VARS_salut);

$response_salut = curl_exec($ch_salut);

$data_salut = json_decode($response_salut);
   ?>
   <div class="container">
 <a href="Noticies_Salut" style="text-align:center;"><h3 data-aos="fade-down" style="font-weight:normal">Salut</h3></a><br />
 <div data-aos="zoom-in" class="row">
  <?php
$i = 0;
while ($i < 4) {
  ?>
  <div class="col-12 col-md">
   <h6 class="titol"><a href="/noticia/<?php echo $data_salut->list[$i]->id; ?>/<?php echo $data_salut->list[$i]->title_url; ?>"><div class="block-images position-relative clicable" onclick="window.location= '/noticia/<?php echo $data_salut->list[$i]->id; ?>/<?php echo $data_salut->list[$i]->title_url; ?>'">
 <div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_salut->list[$i]->img_social; ?>)">
 </div>
   </div>
   <br />
   <?php echo $data_salut->list[$i]->title; ?>
   <div class="capitol d-flex align-items-center my-2">
 <span class="text-white"><?php echo substr($data_salut->list[$i]->date_formatted, 0, -9); ?></span>
   </div></a></h6>
   <br /><br />
  </div>




  <?php
	$i++;
}
  ?>
 </div>
   </div>
  </section>

  -->		

			<!-- SECCIÓ SOCIETAT -->

			<section id="societat" style="background-color:#e6ac25!important;padding-top:40px;padding-bottom:20px">
				<?php
				include 'config.php';
				$GET_VARS_societat = array(
					"go" => "news",
					"do" => "list"
				);

				$POST_VARS_societat = array(
					"statusFilter" => 1,
					"resultsPerPageFilter" => 30,
					"categoriesFilter" => 24,
					"categoriesFilterStrict" => 1
				);

				$REQUEST_URL_societat = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS_societat);

				$ch_societat = curl_init();
				curl_setopt($ch_societat, CURLOPT_URL, $REQUEST_URL_societat);
				curl_setopt($ch_societat, CURLOPT_POST, true);
				curl_setopt($ch_societat, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch_societat, CURLOPT_HEADER, false);
				curl_setopt($ch_societat, CURLOPT_POSTFIELDS, $POST_VARS_societat);

				$response_societat = curl_exec($ch_societat);

				$data_societat = json_decode($response_societat);
				?>
				<div class="container">
					<a href="Noticies_Societat" style="text-align:center;"><h3 data-aos="fade-down" style="font-weight:normal">Societat</h3></a><br />
					<div data-aos="zoom-in" class="row">
						<?php
						$i = 0;
						while ($i < 4) {
						?>
						<div class="col-12 col-md">
							<h6 class="titol"><a href="/noticia/<?php echo $data_societat->list[$i]->id; ?>/<?php echo $data_societat->list[$i]->title_url; ?>"><div class="block-images position-relative clicable" onclick="window.location= '/noticia/<?php echo $data_societat->list[$i]->id; ?>/<?php echo $data_societat->list[$i]->title_url; ?>'">
								<div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_societat->list[$i]->img_social; ?>)">
								</div>
								</div>
								<br />
								<?php echo $data_societat->list[$i]->title; ?>
								<div class="capitol d-flex align-items-center my-2">
									<span class="text-white"><?php echo substr($data_societat->list[$i]->date_formatted, 0, -9); ?></span>
								</div></a></h6>
							<br /><br />
						</div>




						<?php
							$i++;
						}
						?>
					</div>
				</div>
			</section>
		</div>



		<!-- FOOTER -->
		<?php
		include './plantilla/footer.php';
		?>
		
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init({
				duration: 500
			});
		</script>
	</body>
</html>