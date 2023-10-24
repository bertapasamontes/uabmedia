<?php
	include 'config.php';
	$GET_VARS2 = array(
		"go"        => "clips",
		"do"        => "get"
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
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5MVV29M');</script>
<!-- End Google Tag Manager -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo $data->data->title; ?> - UABmèdia</title>
		<meta name="description" content="<?php echo $data->data->description_seo; ?>">
		<meta name="theme-color" content="#141414">
		<meta name="twitter:card" content="player">
		<meta name="twitter:player" content="https://uab.media/embed/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>">
		<meta name="twitter:player:height" content="360">
		<meta name="twitter:player:width" content="200">
		<meta name="twitter:site" content="@uabmedia">
		<meta name="twitter:title" content="<?php echo $data->data->title; ?> - UABmèdia">
		<meta name="twitter:description" content="<?php echo $data->data->description_seo; ?>">
		<meta name="twitter:image" content="<?php echo $data->data->img_social; ?>">
		<meta name="twitter:url" content="https://uab.media/clip/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>">
		<meta property="og:site_name" content="UABmèdia" />
		<meta property="og:url" content="https://uab.media/clip/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>" />
		<meta property="og:title" content="<?php echo $data->data->title; ?> - UABmèdia" />
		<meta property="og:description" content="<?php echo $data->data->description_seo; ?>" />
		<meta property="og:image" content="<?php echo $data->data->img_social; ?>" />
		<link rel="canonical" href="https://uab.media/clip/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>">
		<link rel="shortcut icon" href="https://uab.media/assets/images/favicon.png" />
		<link rel="stylesheet" href="https://uab.media/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://uab.media/assets/css/typography.css">
		<link rel="stylesheet" href="https://uab.media/assets/css/style.css" />
		<link rel="stylesheet" href="https://uab.media/assets/css/responsive.css" />
		<link rel="stylesheet" href="https://uab.media/assets/player/video.css" />
		<link rel="stylesheet" href="https://uab.media/assets/player/video-js.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://s3-eu-west-1.amazonaws.com">
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-ES1G92PJ17"></script>
		<script src="https://uab.media/assets/jwplayer/jwplayer.js"></script>
		<script>jwplayer.key="2Lflw31/0Kno4ToDzY0G2IloriO57rEvYPqj6VDs6HQ=";</script>
		<script type="application/ld+json">
        {
        "@context":"http://schema.org/",
        "@type":"VideoObject",
        "name":"<?php echo $data->data->title; ?>",
        "description":"<?php echo $data->data->description_seo; ?>",
        "thumbnailUrl":"<?php echo $data->data->img_social; ?>",
        "@id":"https://uab.media/clip/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>",
        "embedUrl":"https://uab.media/embed/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>",
		"uploadDate":"<?php echo $data->data->date_formatted; ?>"
        }
		</script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'G-ES1G92PJ17');
		</script>
		<style>
			@media(max-width:991px) {
				h3 {
					font-size: 1.600em;
				}
			}
		</style>
	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MVV29M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		<?php
		include './plantilla/header.php';
		?>		
		<div class="contingut">
			<!--<div class="menu-left" style="margin-left:10% "> 
			<a href="/programa/<?php echo $data->categories[0]->id; ?>/<?php echo $data->categories[0]->title_url; ?>">
				<i class="fa fa-angle-left fa-2x1"></i>
			</a> 
		</div>-->
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8">
					<div id="reproductor"></div>
					<script type="text/JavaScript">
						jwplayer("reproductor").setup({ 
							"width": "75%",
							"displaytitle": false,
							"displaydescription": false,
							"abouttext": "2023 UABmèdia. Universitat Autònoma de Barcelona",
							"generateSEOMetadata": true,
							"pipIcon": false,
							"playbackRateControls": true,
							"thumbnail_type": "static",
							"file": "<?php echo $data->media['0']->vod_html5_h264; ?>",
							"image": "<?php echo $data->data->img_poster; ?>",
							"title": "<?php echo $data->data->title; ?>",
							"description": "<?php echo $data->data->description_seo; ?>",
							"cast": {},
							"sharing": {
								sites: ["email","facebook","twitter"]
							},
							"ga": {
       							label: "mediaid"
    						}
						});
					</script>
					<br/>
				</div>
				<div class="col-12 col-md-4">
					
					<?php
					include 'config.php';
					$GET_VARS_usuari = array(
						"go"        => "categories",
						"do"        => "get",
						"iq"        => $data->categories['0']->id
					);
					$REQUEST_URL_usuari = $API_URL."?".http_build_query($GET_VARS)."&".http_build_query($GET_VARS_usuari);

					$ch_usuari = curl_init();
					curl_setopt($ch_usuari, CURLOPT_URL, $REQUEST_URL_usuari);
					curl_setopt($ch_usuari, CURLOPT_POST, true);
					curl_setopt($ch_usuari, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch_usuari, CURLOPT_HEADER, false);
					curl_setopt($ch_usuari, CURLOPT_POSTFIELDS, $POST_VARS_usuari);

					$response_usuari = curl_exec($ch_usuari);

					$data_usuari = json_decode($response_usuari);
					?>
					<h3 class="trending-text big-title text-uppercase mt-0">
						<?php echo $data->data->title; ?>
					</h3>
					<div class="d-flex align-items-center" style="margin-top:30px!important;margin-bottom:40px!important">
						<img style="margin-right:20px;width:40px;border-radius: 50%;" src="<?php echo $data_usuari->data->img_social; ?>" alt="<?php echo $data->categories['0']->title; ?>">
						<h6><strong><?php echo $data->categories['0']->title; ?></strong><br/><div style="color:#d1d0cf!important;font-size:10pt!important">Publicat el <?php echo substr($data->data->date_formatted,0,-9); ?></div></h6>
					</div>
					<p><?php echo $data->data->description; ?></p>
				</div>
			</div>
		</div>
		</div>
		<?php
		include './plantilla/footer.php';
		?>
	</body>

</html>
