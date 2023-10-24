<?php
include 'config.php';
$GET_VARS2 = array(
	"go"        => "categories",
	"do"        => "get"
);

$POST_VARS = array(
	"statusFilter" => 1,
	"resultsPerPageFilter" => 100,
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
?>
<!doctype html>
<html lang="ca">
	<head>
		<!-- Google Tag Manager -->
		<script>
			(function(w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({
					'gtm.start': new Date().getTime(),
					event: 'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-5MVV29M');
		</script>
		<!-- End Google Tag Manager -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Notícies Autònoma - UABmèdia</title>
		<meta name="description" content="<?php echo $data->data->description_seo; ?>">
		<meta name="theme-color" content="#141414">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@uabmedia">
		<meta name="twitter:title" content="<?php echo $data->data->title; ?> - UABmèdia">
		<meta name="twitter:description" content="<?php echo $data->data->description_seo; ?>">
		<meta name="twitter:image:src" content="<?php echo $data->data->img_social; ?>">
		<meta name="twitter:url" content="https://uab.media/programa/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>">
		<meta property="og:site_name" content="UABmèdia" />
		<meta property="og:url" content="https://uab.media/programa/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>" />
		<meta property="og:title" content="<?php echo $data->data->title; ?> - UABmèdia" />
		<meta property="og:description" content="<?php echo $data->data->description_seo; ?>" />
		<meta property="og:image" content="<?php echo $data->data->img_social; ?>" />
		<link rel="canonical" href="https://uab.media/programa/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://s3-eu-west-1.amazonaws.com">
		<link rel="shortcut icon" href="https://uab.media/assets/images/favicon.png" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://uab.media/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://uab.media/assets/css/typography.css">
		<link rel="stylesheet" href="https://uab.media/assets/css/style.css" />
		<link rel="stylesheet" href="https://uab.media/assets/css/responsive.css" />
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MVV29M" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) --> <?php
		include './plantilla/header.php';
		?> <div class="contingut">
		<div class="container">
			<div class="col-12 overflow-hidden">
				<div class="um-capcalera d-flex align-items-center" style="justify-content: space-between;">
					<div class="icono-capcelera">
						<a href="https://uab.media/">
							<img style="margin-right:30px;width:40px" src="./assets/images/uabmedia-color.svg" alt="UABmèdia">
						</a>
						<h1 class="main-title titol-capcelera" style="font-size: 2.369em;line-height: 0.8!important">Interactius. UABmèdia</h1>
					</div>
					<!-- Dona la data en català -->
					<div class="time_capceler"> <?php
						$formatter = new IntlDateFormatter('ca_CA', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
						echo $formatter->format(time());
						?> </div>
				</div>
				<section>
					<div class="row">
						<div class="col-8"></div>
						<div class="col-7 hide-mobile" style="margin-bottom: 2%;padding-left:0!important;">
							<nav>
								<ul class="d-flex align-items-center list-inline m-0">
									<li class="nav-item nav-icon" style="margin-right: 10px!important;">
										<a href="Informatius">Informatius </a>
									</li>
									<li class="nav-item nav-icon" style="margin-right: 10px!important;">
										<a href="Noticies_Salut">Salut </a>
									</li>
									<li class="nav-item nav-icon" style="margin-right: 10px!important;">
										<a href="Noticies_Política">Política </a>
									</li>
									<li class="nav-item nav-icon" style="margin-right: 10px!important;">
										<a href="Noticies_Igualtat">Igualtat </a>
									</li>
									<li class="nav-item nav-icon" style="margin-right: 10px!important; ">
										<div>
											<a href="Noticies_Ciencia">Ciència </a>
										</div>
									</li>
									<li class="nav-item nav-icon" style="margin-right: 10px!important; ">
										<div>
											<a href="Noticies_Autonoma">Autònoma </a>
										</div>
									</li>
									<li class="nav-item nav-icon" style="margin-right: 10px!important;">
										<a href="Noticies_Esports">Esports </a>
									</li>
									<li class="nav-item nav-icon" style="margin-right: 10px!important;">
										<a href="Columna_Opinio">Opinió </a>
									</li>
									<li class="nav-item nav-icon" style="margin-right: 10px!important;">
										<div class="autonoma_selec">
											<a href="Interactius">Interactius </a>
										</div>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</section>
				<br />
				<style>
					.programa_box h6 {
						width: 80%;
						overflow: hidden;
						display: -webkit-box;
						-webkit-line-clamp: 3;
						-webkit-box-orient: vertical;
					}

					.slide-item {
						margin-bottom: 40px;
					}
				</style>
				<section style="padding-top:40px;padding-bottom:20px">
					<div class="container1">
						<a title="Tour_FCC" href="https://tour-fcc.uab.media/">
							<img src="/assets/images/Tour_FCC.png" alt="Tour_FCC">
						</a>
						<!--<div class="overlay"><div class="text1">PRÒXIMAMENT</div><div id="countdown"></div></div>-->
					</div>
				</section>
				<section style="padding-top:40px;padding-bottom:20px">
					<div class="container1">
						<a title="GuerraUcraïna" href="/GuerraUcraïna">
							<img src="/assets/images/GuerraUcraïna.PNG" alt="Guerra Ucraïna">
						</a>
						<!--<div class="overlay"><div class="text1">PRÒXIMAMENT</div><div id="countdown"></div></div>-->
					</div>
				</section>
				<section style="padding-top:40px;padding-bottom:20px">
					<div>
						<a title="Gènere" href="/genere/genere/">
							<img src="/assets/images/Genere.png">
						</a>
					</div>
				</section>
				<br />
				<br />
			</div>
		</div>
		</div>
		<?php
		include './plantilla/footer.php';
		?>
		<script type="text/javascript" src="https://uab.media/assets/js/countdown.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init({
				duration: 500
			});
		</script>
	</body>
</html>