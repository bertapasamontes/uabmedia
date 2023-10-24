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
		<title>Cerca: <?php echo $_POST["cerca"] ?> - UABmèdia</title>
		<meta name="theme-color" content="#141414">
		<meta name="robots" content="noindex">
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
		<div class="contingut">
			<div class="container">
				<div class="container-fluid">
					<h4 class="main-title">
						Resultats de cerca per:
						<strong><?php echo $_POST["cerca"] ?></strong>
					</h4>
					<br/>
					<section id="resultats-clips">
						<?php
	include 'config.php';
							$GET_VARS2 = array(
								"go"        => "clips",
								"do"        => "list"
							);

							$POST_VARS = array(
								"sortByFilter"          => "date",
								"search"      			=> $_POST["cerca"],
								"statusFilter"			=> 1

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
								padding: 0!important;
							}
						</style>
						<h5>Clips</h5><br/>
						<div class="row">
							<?php for ($i = 0; $i < count($data->list); $i++) { ?>
							<div class="col-12 col-md-4">
								<div class="slide-item">
									<div class="block-images position-relative">
										<div class="img-box">
											<img src="<?php echo $data->list[$i]->img_social; ?>" class="img-fluid" alt="<?php echo $data->list[$i]->title; ?>">
										</div>
										<div class="block-description">
											<h6 class="titol">
												<a href="/clip/<?php echo $data->list[$i]->id; ?>/<?php echo $data->list[$i]->title_url; ?>"><?php echo $data->list[$i]->title; ?></a>
											</h6>
											<div class="capitol d-flex align-items-center my-2">
												<div class="badge badge-programa p-1 mr-2">
													<?php echo $data->list[$i]->user_alias; ?>
												</div>
												<span class="text-white">
													<?php echo substr($data->list[$i]->date_formatted, 0, -9); ?>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</section>

					<section id="resultats-noticies">
						<?php
						include 'config.php';
						$GET_VARS_news = array(
							"go"        => "news",
							"do"        => "list"
						);

						$POST_VARS_news = array(
							"sortByFilter"          => "date",
							"search"      			=> $_POST["cerca"],
							"statusFilter"			=> 1
						);

						$REQUEST_URL_news = $API_URL."?".http_build_query($GET_VARS)."&".http_build_query($GET_VARS_news);

						$ch_news = curl_init();
						curl_setopt($ch_news, CURLOPT_URL, $REQUEST_URL_news);
						curl_setopt($ch_news, CURLOPT_POST, true);
						curl_setopt($ch_news, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch_news, CURLOPT_HEADER, false);
						curl_setopt($ch_news, CURLOPT_POSTFIELDS, $POST_VARS_news);

						$response_news = curl_exec($ch_news);

						$data_news = json_decode($response_news);
						?>
						<h5>Notícies</h5><br/>
						<div class="row">
							<?php for ($inews = 0; $inews < count($data_news->list); $inews++) { ?>
							<div class="col-12 col-md-4">
								<div class="slide-item">
									<div class="block-images position-relative">
										<div class="img-box">
											<img src="<?php echo $data_news->list[$inews]->img_social; ?>" class="img-fluid" alt="<?php echo $data_news->list[$inews]->title; ?>">
										</div>
										<div class="block-description">
											<h6 class="titol">
												<a href="/noticia/<?php echo $data_news->list[$inews]->id; ?>/<?php echo $data_news->list[$inews]->title_url; ?>"><?php echo $data_news->list[$inews]->title; ?></a>
											</h6>
											<div class="capitol d-flex align-items-center my-2">
												<span class="text-white">
													<?php echo substr($data_news->list[$inews]->date_formatted, 0, -9); ?>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</section>
				</div>
			</div>
		</div>
		<?php
		include './plantilla/footer.php';
		?>
	</body>
</html>