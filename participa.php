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
    <title>Participa-hi – UABmèdia</title>
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
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MVV29M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?php
   include './plantilla/header.php';
   ?>
    <div class="container" style="padding-top:100px">
        <h4>Participa-hi</h4><br/>
        <?php echo $data->data->description; ?>
    </div>
    <?php
   include './plantilla/footer.php';
   ?>
</body>
</html>
