<?php
include 'config.php';
$GET_VARS2 = array(
	"go"        => "clips",
	"do"        => "list"
);

$POST_VARS = array(
	"sortByFilter"          => "date",
	"categoriesFilter"      => "16",
	"statusFilter"          => "1"
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
		<title>UABplay, la televisió de l'Autònoma - UABmèdia</title>
		<meta name="description" content="La televisió de la Universitat Autònoma de Barcelona">
		<meta name="theme-color" content="#141414">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@uabmedia">
		<meta name="twitter:title" content="UABtv, la televisió de l'Autònoma">
		<meta name="twitter:description" content="La televisió de la Universitat Autònoma de Barcelona">
		<meta name="twitter:image:src" content="https://uab.media/assets/images/uabtv_twitter.jpeg">
		<meta name="twitter:url" content="https://uab.media/uabtv">
		<meta property="og:site_name" content="UABmèdia" />
		<meta property="og:url" content="https://uab.media/uabtv" />
		<meta property="og:title" content="UABtv, la televisió de l'Autònoma" />
		<meta property="og:description" content="La televisió de la Universitat Autònoma de Barcelona" />
		<meta property="og:image" content="https://uab.media/assets/images/uabtv_twitter.jpeg" />
		<link rel="canonical" href="https://uab.media/uabtv/">
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
		<script>jwplayer.key="2Lflw31/0Kno4ToDzY0G2IloriO57rEvYPqj6VDs6HQ=";</script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-ES1G92PJ17"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'G-ES1G92PJ17');
		</script>
		<script type="application/ld+json">
			{
			"@context":"http://schema.org/",
			"@type":"VideoObject",
			"name":"UABtv en directe",
			"uploadDate": "2022-01-01",
			"description":"Emissió en directe d'UABtv, la televisió de l'Autònoma",
			"thumbnailUrl":"https://pbs.twimg.com/profile_banners/1935337867/1422618522/1500x500",
			"@id":"https://uab.media/uabtv/",
			"embedUrl":"https://uab.media/uabtv/",
			"publication": [
				{
				  "@type": "BroadcastEvent",
				  "isLiveBroadcast": true,
				  "startDate": "2022-01-01T00:00:00+00:00",
				  "endDate": "2022-01-01T00:00:00+00:00"
				}
			  ]
			}
		</script>
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
			<!--<section id="directetv">
				<div id="reproductor"></div>
				<script type="text/JavaScript">
					jwplayer("reproductor").setup({ 
						"width": "100%",
						"height": "500px",
						"displaytitle": false,
						"displaydescription": false,
						"abouttext": "2022 UABmèdia",
						"generateSEOMetadata": true,
						"playbackRateControls": true,
						"type": "m3u8",
						"file": "https://videosdigitals.uab.cat/live/uabtv/playlist.m3u8",
						"image": "https://uab.media/assets/images/portadatv.png",
						"title": "UABtv en directe",
						"description": "La televisió de l'Autònoma",
						"cast": {},
					});
				</script>
			</section>-->
			<!--Reproductor de twitch -->
		<!-- Add a placeholder for the Twitch embed -->
    	<div id="twitch-embed"></div>

    	<!-- Load the Twitch embed JavaScript file -->
    	<script src="https://embed.twitch.tv/embed/v1.js"></script>

    	<!-- Create a Twitch.Embed object that will render within the "twitch-embed" element -->
    	<script type="text/javascript">
      	new Twitch.Embed("twitch-embed", {
        	width: 854,
        	height: 480,
			theme: "dark", 
        	channel: "UABmedia",
        	// Only needed if this page is going to be embedded on other websites
        	//parent: ["embed.example.com", "othersite.example.com"]
      	});
    	</script>
			<br />
			<div class="container">
				<div class="col-3 um-capcalera align-items-center hide-mobile">
					<img style="margin-right:30px;width:40px" src="https://uab.media/assets/images/uabtv-color.svg" alt="UABtv">
								<h1 class="main-title" style="font-size: 2.369em;line-height: 0.8!important">UAB<strong>play</strong><br/><span style="font-size:16px!important;line-height: 0.8!important">La televisió de l'Autònoma</span></h1>
				</div>
				<section id="llista-programes">
<?php
				include 'config.php';
				$GET_VARS3 = array(
					"go"        => "categories",
					"do"        => "list"
				);

				$POST_VARS3 = array(
					"sortByFilter"      => "date",
					"includeData"       => 1,
					"parentFilter"      => 16,
					"statusFilter"      => 1
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
					<h4 data-aos="fade-right" class="main-title">Programes d’UABplay</h4>
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
	</body>
</html>