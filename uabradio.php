<!doctype html>
<html lang="ca">

<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>UABràdio, la ràdio de l'Autònoma 100.3FM</title>
		<meta name="theme-color" content="#141414">
		<meta name="description" content="Els mitjans audiovisuals de la Facultat de Ciències de la Comunicació.">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@uabmedia">
		<meta name="twitter:title" content="UABràdio, la radio de l'Autònoma">
		<meta name="twitter:description" content="La ràdio de la Facultat de Ciències de la Comunicació.">
		<meta name="twitter:image:src" content="https://uab.media/assets/images/uabradio_twitter.jpeg">
		<meta name="twitter:url" content="https://uab.media/uabradio">
		<meta property="og:site_name" content="UABmèdia" />
		<meta property="og:url" content="https://uab.media/uabradio" />
		<meta property="og:title" content="UABràdio, la ràdio de la Facultat de Ciències de la Comunicació." />
		<meta property="og:description" content="La ràdio de la Facultat de Ciències de la Comunicació." />
		<meta property="og:image" content="https://uab.media/assets/images/uabradio_twitter.jpeg" />
		<meta name="apple-mobile-web-app-title" content="Campus Mèdia">
		<link rel="canonical" href="https://uab.media/uabradio">
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

	<script src="https://uab.media/assets/jwplayer/jwplayer.js"></script>
	<script>
		jwplayer.key = "2Lflw31/0Kno4ToDzY0G2IloriO57rEvYPqj6VDs6HQ=";
	</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-ES1G92PJ17"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-ES1G92PJ17');
	</script>
</head>

<body>
	<?php
			include './plantilla/header.php';
			?>
	<div class="contingut">
		<div class="container">
			<section id="header">
				<div class="row">
					<div class="col-sm-6 um-capcalera align-items-center hide-mobile">
						<img style="margin-right:30px;width:40px" src="https://uab.media/assets/images/uabradio-color.svg" alt="UABràdio">
						<h1 class="main-title" style="font-size: 2.369em;line-height: 0.8!important">UABràdio<br /><span style="font-size:16px!important;line-height: 0.8!important">La ràdio de l'Autònoma 100.3 FM</span></h1>
					</div>
					<div class="col-sm-6 d-sm-block overflow-hidden hide-mobile" style="text-align:right">
						<h5 style="margin-bottom:5px">
							<div id="directeweb"></div>
						</h5>
						<div id="reproductor"></div>
						<script type="text/JavaScript">
							jwplayer("reproductor").setup({ 
									"width": "100%",
									"height": "40px",
									"displaytitle": false,
									"displaydescription": false,
									"abouttext": "2022 UABmèdia",
									"generateSEOMetadata": true,
									"pipIcon": false,
									"playbackRateControls": true,
									"type": "mpeg",
									"file": "https://videosdigitals.uab.cat/uabradio/uabradio",
									"image": "https://uab.media/assets/images/uabradio_twitter.jpeg",
									"title": "UABràdio en directe",
									"description": "La ràdio de l'Autònoma",
								});
							</script>
						<script>
							function loadDoc() {
							var xhttp = new XMLHttpRequest();
							xhttp.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									document.getElementById("directeweb").innerHTML =
										"<strong style='color: #FF4C3E!important'>En directe: </strong>" + this.responseText;
								}
							};
							xhttp.open("GET", "https://uab.media/CurrentSong.txt", true);
							xhttp.send();
							}
							loadDoc();
							setInterval (loadDoc,15000);
						</script>
					</div>
				</div>
			</section>
			
			<section id="carrusel" class='hide-mobile'>
				<div class="um-capcalera d-flex align-items-center">
					<h4 data-aos="fade-right" class="main-title">Últims programes</h4>
				</div>
				<?php
							include 'config.php';
							$GET_VARS3 = array(
								"go"        => "clips",
								"do"        => "list"
							);

							$POST_VARS3 = array(
								"sortByFilter"      => "date",
								"categoriesFilter"  => 56,
								"statusFilter"		=> 1,
								"resultsPerPageFilter" => 100,
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
				<div id="carouseluabmedia" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner w-50 m-auto">
					<div class="carousel-item active">
					  <a href="/clip/<?php echo $data3->list['0']->id; ?>/<?php echo $data3->list['0']->title_url; ?>"><img class="d-block w-100" src="<?php echo $data3->list['0']->img_social; ?>" alt="<?php echo $data3->list['0']->title; ?>">
						</a>
						<div class="carousel-caption d-none d-md-block">
    						<h5><a href="/clip/<?php echo $data3->list['0']->id; ?>/<?php echo $data3->list['0']->title_url; ?>"><?php echo $data3->list['0']->title; ?>
								<p> <?php echo substr($data3->list['0']->date_formatted, 0, -9); ?></p></a></h5>
  						</div>
					  </div>
					<div class="carousel-item">
					  <a href="/clip/<?php echo $data3->list['1']->id; ?>/<?php echo $data3->list['1']->title_url; ?>"> <img class="d-block w-100" src="<?php echo $data3->list['1']->img_social; ?>" alt="<?php echo $data3->list['1']->title; ?>">
						</a>
						<div class="carousel-caption d-none d-md-block">
    						<h5><a href="/clip/<?php echo $data3->list['1']->id; ?>/<?php echo $data3->list['1']->title_url; ?>"><?php echo $data3->list['1']->title; ?>
								<p><?php echo substr($data3->list['1']->date_formatted, 0, -9); ?></p></a></h5>
  						</div>
					  </div>
					<div class="carousel-item">
					  <a href="/clip/<?php echo $data3->list['2']->id; ?>/<?php echo $data3->list['2']->title_url; ?>"><img class="d-block w-100" src="<?php echo $data3->list['2']->img_social; ?>" alt="<?php echo $data3->list['2']->title; ?>">
						</a>
						<div class="carousel-caption d-none d-md-block">
    						<h5><a href="/clip/<?php echo $data3->list['2']->id; ?>/<?php echo $data3->list['2']->title_url; ?>"><?php echo $data3->list['2']->title; ?>
								<p><?php echo substr($data3->list['2']->date_formatted, 0, -9); ?></p></a></h5>
  						</div>
					  </div>
					  <div class="carousel-item">
					  <a href="/clip/<?php echo $data3->list['3']->id; ?>/<?php echo $data3->list['3']->title_url; ?>"><img class="d-block w-100" src="<?php echo $data3->list['3']->img_social; ?>" alt="<?php echo $data3->list['3']->title; ?>">
						</a>
						 <div class="carousel-caption d-none d-md-block">
    						<h5><a href="/clip/<?php echo $data3->list['3']->id; ?>/<?php echo $data3->list['3']->title_url; ?>"><?php echo $data3->list['3']->title; ?>
								<p><?php echo substr($data3->list['3']->date_formatted, 0, -9); ?></p></a></h5>
  						</div> 
					  </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouseluabmedia" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true" style="transform: ScaleX(-1)"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouseluabmedia" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</section>
			<br>
			<!--<section id="noticies" class="hide-mobile">
				<div class="um-capcalera d-flex align-items-center">
					<h4 data-aos="fade-right" class="main-title">Noticies d’UABràdio</h4>
				</div>
				<?php
				include 'config.php';
				$GET_VARS_NEWS = array(
					"go"        => "news",
					"do"        => "list"
				);

				$POST_VARS_NEWS = array(
					"statusFilter" => 1,
					"categoriesFilter" => 1,
					"resultsPerPageFilter" => 30
				);

				$REQUEST_URL_NEWS = $API_URL . "?" . http_build_query($GET_VARS) . "&" . http_build_query($GET_VARS_NEWS);

				$ch_NEWS = curl_init();
				curl_setopt($ch_NEWS, CURLOPT_URL, $REQUEST_URL_NEWS);
				curl_setopt($ch_NEWS, CURLOPT_POST, true);
				curl_setopt($ch_NEWS, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch_NEWS, CURLOPT_HEADER, false);
				curl_setopt($ch_NEWS, CURLOPT_POSTFIELDS, $POST_VARS_NEWS);

				$response_NEWS = curl_exec($ch_NEWS);

				$data_NEWS = json_decode($response_NEWS);
				?>

				<div class="row">
					<?php
					for ($i = 0; $i < 4; $i++) {
					?>
					<div class="col-12 col-md">
						<h6 class="titol">
							<a href="/noticia/<?php echo $data_NEWS->list[$i]->id; ?>/<?php echo $data_NEWS->list[$i]->title_url; ?>"><div class="block-images position-relative">
							<div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_NEWS->list[$i]->img_social; ?>)">
							</div>
						</div>
						<div class="badge badge-programa p-1 mr-2">
							<?php echo $data_NEWS->list[$i]->user_alias; ?>
						</div>
						<div><p><?php echo $data_NEWS->list[$i]->title; ?><p></div>
						<div class="capitol d-flex align-items-center my-2">
							<p class="text-white"><?php echo substr($data_NEWS->list[$i]->date_formatted, 0, -9); ?></p>
						</div></a></h6>
						<br/><br />
					</div>
					<?php } ?>
				</div>
			</section>-->

			<section id="llista-programes">
				<?php
				include 'config.php';
				$GET_VARS3 = array(
					"go"        => "categories",
					"do"        => "list"
				);

				$POST_VARS3 = array(
					"sortByFilter"          => "date",
					"includeData"           => 1,
					"parentFilter"          => 1,
					"statusFilter"          => 1,
					"resultsPerPageFilter"  => 30
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
				<div class="um-capcalera d-flex align-items-center">
					<h4 data-aos="fade-right" class="main-title">Programes d’UABràdio</h4>
				</div>
				<div data-aos="zoom-in" class="row">
					<?php
					for ($i = 0; $i < count($data3->list); $i++) {
					?>
						<div class="col-4 col-md-2">
							<div class="block-images position-relative">
								<a href="/programa/<?php echo $data3->list[$i]->id; ?>/<?php echo $data3->list[$i]->title_url; ?>">
									<div class="img-box icon-programa">
										<img src="<?php echo $data3->list[$i]->img_poster; ?>" class="icon-programa" alt="<?php echo $data3->list[$i]->title; ?>">
									</div>

									<center><?php echo $data3->list[$i]->title; ?></center>
								</a><br /><br />
							</div>
						</div>
					<?php } ?>
				</div>
		</section>
	</div>
	</div>
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