<?php
    include 'config.php';
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
	<title>El temps al Campus de Bellaterra, Cerdanyola del Vallès - UABmèdia</title>
	<meta name="description" content="Consulta la previsió meteorològica al Campus de la Universitat Autònoma de Bellaterra, a Cerdanyola del Vallès.">
	<meta name="theme-color" content="#141414">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@uabmedia">
	<meta name="twitter:title" content="El temps al Campus de Bellaterra, Cerdanyola del Vallès - UABmèdia">
	<meta name="twitter:description" content="Consulta la previsió meteorològica al Campus de la Universitat Autònoma de Bellaterra, a Cerdanyola del Vallès.">
	<meta name="twitter:url" content="https://uab.media/temps">
	<meta property="og:site_name" content="UABmèdia" />
	<meta property="og:url" content="https://uab.media/temps" />
	<meta property="og:title" content="El temps al Campus de Bellaterra, Cerdanyola del Vallès - UABmèdia" />
	<meta property="og:description" content="Consulta la previsió meteorològica al Campus de la Universitat Autònoma de Bellaterra, a Cerdanyola del Vallès." />
	<link rel="shortcut icon" href="https://uab.media/assets/images/favicon.png" />
	<link rel="stylesheet" href="https://uab.media/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://uab.media/assets/css/typography.css">
	<link rel="stylesheet" href="https://uab.media/assets/css/style.css" />
	<link rel="stylesheet" href="https://uab.media/assets/css/responsive.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://s3-eu-west-1.amazonaws.com">
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
    <style>
        .temps {
            background-color: #dddddd!important;
            padding: 0px!important;
            color: #333333!important;
            margin: 0px!important;
        }
        body {
            background: #dddddd!important;
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
    <iframe width="100%" height="500" style="margin-top:-180px!important" src="https://embed.windy.com/embed2.html?lat=41.544&lon=2.136&detailLat=41.544&detailLon=2.136&width=650&height=450&zoom=11&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
    <br/><br/><br/>
	<div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row tempspag">
                    <div class="col-6">
                        <div class="header">El temps a Bellaterra</div>
                        <div class="temp"><?php echo (int)$data_temps->main->temp; ?> ºC</div>
                        <div class="status"><?php echo $data_temps->weather['0']->description; ?></div>
                        <div class="humitat">Humitat: <?php echo $data_temps->main->humidity; ?> %</div>
                        <div class="sol">Alba: <?php $timestamp=$data_temps->sys->sunrise; echo gmdate("H:i", $timestamp); ?> · Ocàs: <?php $timestamp=$data_temps->sys->sunset; echo gmdate("H:i", $timestamp); ?></div>
                        <br/><br/>
                        <i>Informació proporcionada per OpenWeatherMap i Windy.</i><br/><br/>
                    </div>
                    <div class="col-6" style="text-align:right">
                        <img src="http://openweathermap.org/img/wn/<?php echo $data_temps->weather['0']->icon; ?>@4x.png" width="160px" height="160px">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
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
					});
				</script>
            </div>
        </div>
        <br/><br/><br/>
	</div>
    
	<?php
	include './plantilla/footer.php';
	?>
</body>

</html>
