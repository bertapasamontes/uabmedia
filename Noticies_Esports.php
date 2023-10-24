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
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5MVV29M');</script>
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
	<style>
		.slide-item {
			padding: 0px 0px !important;
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
		<div class="container">
					<div class="capnoti row">
						<div class="col-12 overflow-hidden">
							<div class="um-capcalera d-flex align-items-center">
								<div class="icono-capcelera">
									<a href="https://uab.media/"><img style="margin-right:30px;width:40px" src="./assets/images/uabmedia-color.svg" alt="UABmèdia"></a>
									<h1 class="main-title titol-capcelera" style="font-size: 2.369em;line-height: 0.8!important">Notícies Esports. UABmèdia</h1>
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
				  <div class="col-8"></div>
				  <div class="col-7 hide-mobile" style="margin-bottom: 2%;" >
				  <nav>
					  <ul class="d-flex align-items-center list-inline m-0">
						  <li class="nav-item nav-icon" style="margin-right: 10px!important;">
							  <a href="Informatius">Informatius
							  </a>
						  </li>
						  <li class="nav-item nav-icon" style="margin-right: 10px!important;">
							  <a href="Noticies_Salut">Salut
							  </a>
						  </li>
						  <li class="nav-item nav-icon" style="margin-right: 10px!important;">
							  <a href="Noticies_Política">Política
							  </a>
						  </li>
						  <li class="nav-item nav-icon" style="margin-right: 10px!important;">
							  <a href="Noticies_Igualtat">Igualtat
							  </a>
						  </li>
						  <li class="nav-item nav-icon" style="margin-right: 10px!important; ">
							 <div > <a href="Noticies_Ciencia">Ciència
								 </a> </div>
						  </li>
						  <li class="nav-item nav-icon" style="margin-right: 10px!important;">
							  <a href="Noticies_Autonoma">Autònoma
							  </a>
						  </li>
						  <li class="nav-item nav-icon" style="margin-right: 10px!important;">
							<div class="esports_selec">  <a href="Noticies_Esports">Esports
								</a></div>
						  </li>
						  <li class="nav-item nav-icon" style="margin-right: 10px!important;">
							  <a href="Columna_Opinio">Opinió
							  </a>
						  </li>
						  <li class="nav-item nav-icon" style="margin-right: 10px!important;">
							  <div><a href="Interactius">Interactius
								  </a></div>
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
		<div class="container">
			
			<section id="llista-horitzontal">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 overflow-hidden">
							<!--<div class="um-capcalera d-flex align-items-center">
								<img style="margin-right:30px;width:80px;border-radius: 50%;" src="<?php echo $data->data->img_social; ?>" alt="<?php echo $data->data->title; ?>">
								<h1 style="font-size:2.2em!important;line-height: 0.9!important"><?php echo $data->data->title; ?><br><span style="font-size:14px!important;line-height: 0.9!important"><?php echo $data->data->description_seo; ?></span></h1>
							</div>-->
							<!--<section id="noticies">
				
				<div class="um-capcalera d-flex align-items-center">
							<h4 class="main-title">Notícies</h4>
						</div>
				<div class="row">
					<?php
                    $j = 0;
                    while ($j < 4) {
                    ?>
					<div class="col-12 col-md">
						<div class="block-images position-relative">
							<div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_NEWS->list['0']->img_social; ?>)">
							</div>
						</div><br/>
						<h6 class="titol"><a href="/noticia/<?php echo $data_NEWS->list['0']->id; ?>/<?php echo $data_NEWS->list['0']->title_url; ?>"><?php echo $data_NEWS->list['0']->title; ?></a></h6>
						<div class="capitol d-flex align-items-center my-2">
							<span class="text-white"><?php echo substr($data_NEWS->list['0']->date_formatted, 0, -9); ?></span>
						</div>
						<br /><br />
					</div>
					<?php
                        $j++;
                    }
                    ?>
				</div>
			</section>-->
							<style>
								.programa_box h6{
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
    <div class="container-fluid">    
      <div data-aos="zoom-in" class="row">
		  
		  
		  <?php
		  
		  	for ($i = 0; $i < count($data_esports->list); $i++) {
		  ?>
		  <div class="col-12 col-md-4">
            <div class="block-images position-relative clicable" onclick="window.location= '/noticia/<?php echo $data_esports->list[$i]->id; ?>/<?php echo $data_esports->list[$i]->title_url; ?>'">
              <div class="img-noticia noticia_flex" style="background-image:url(<?php echo $data_esports->list[$i]->img_social; ?>)">
              </div>
            </div>
            <br />
            <h6 class="titol"><a href="/noticia/<?php echo $data_esports->list[$i]->id; ?>/<?php echo $data_esports->list[$i]->title_url; ?>"><?php echo $data_esports->list[$i]->title; ?></a></h6>
            <div class="capitol d-flex align-items-center my-2">
              <span class="text-white"><?php echo substr($data_esports->list[$i]->date_formatted, 0, -9); ?></span>
            </div>
            <br /><br />
          </div>
		  <?php } ?>
      </div>		
					
				</div>
			</section>
			<br /><br />
		</div>
	</div>
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