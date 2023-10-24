<?php
    include 'config.php';
    $GET_VARS2 = array(
    	"go"        => "channels",
    	"do"        => "get",
        "iq"        => 1
    );
    $REQUEST_URL = $API_URL."?".http_build_query($GET_VARS)."&".http_build_query($GET_VARS2);
    
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
    <title>Contacte– UABmèdia</title>
    <meta name="theme-color" content="#141414">
    <link rel="shortcut icon" href="https://uab.media/assets/images/favicon.png" />
    <link rel="stylesheet" href="https://uab.media/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://uab.media/assets/css/typography.css">
    <link rel="stylesheet" href="https://uab.media/assets/css/style.css" />
    <link rel="stylesheet" href="https://uab.media/assets/css/responsive.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://s3-eu-west-1.amazonaws.com">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ES1G92PJ17"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-ES1G92PJ17');
    </script>
</head>

<body>
	
  <?php
   include './plantilla/header.php';
   ?>
	<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScZaTmL2-S1atsElMOc3_xg7uiC6CPRB6e17QmJ1JNKAyRWng/viewform?embedded=true" width="640" height="850" frameborder="0" marginheight="0" marginwidth="0" style="margin-top:8%">S&#39;està carregant…</iframe>
    <?php
   include './plantilla/footer.php';
   ?>
</body>
</html>
