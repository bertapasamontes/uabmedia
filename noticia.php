<?php
include 'config.php';
$GET_VARS2 = array(
	"go"        => "news",
	"do"        => "get"
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
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo $data->data->title; ?> - UABmèdia</title>
		<meta name="description" content="<?php echo $data->data->description_seo; ?>">
		<meta name="theme-color" content="#141414">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@uabmedia">
		<meta name="twitter:title" content="<?php echo $data->data->title; ?>">
		<meta name="twitter:description" content="<?php echo $data->data->description_seo; ?>">
		<meta name="twitter:image:src" content="<?php echo $data->data->img_social; ?>">
		<meta name="twitter:url" content="https://uab.media/noticia/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>">
		<meta property="og:site_name" content="UABmèdia" />
		<meta property="og:url" content="https://uab.media/noticia/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>" />
		<meta property="og:title" content="<?php echo $data->data->title; ?> - UABmèdia" />
		<meta property="og:description" content="<?php echo $data->data->description_seo; ?>" />
		<meta property="og:image" content="<?php echo $data->data->img_social; ?>" />
		<link rel="canonical" href="https://uab.media/noticia/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>">
		<link rel="shortcut icon" href="https://uab.media/assets/images/favicon.png" />
		<link rel="stylesheet" href="https://uab.media/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://uab.media/assets/css/typography.css">
		<link rel="stylesheet" href="https://uab.media/assets/css/style.css" />
		<link rel="stylesheet" href="https://uab.media/assets/css/responsive.css" />
		<link rel="stylesheet" href="https://uab.media/assets/css/cssDefinitiu.css">
  		<link rel="stylesheet" href="https://uab.media/assets/css/footerStyles.css">
		<link rel="stylesheet" href="https://uab.media/assets/css/directes.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://s3-eu-west-1.amazonaws.com">
		<script type="application/ld+json">
			{
				"@context": "http://schema.org/",
				"@type": "NewsArticle",
				"mainEntityOfPage": {
					"@type": "WebPage",
					"@id": "https://uab.media/noticia/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>"
				  },
				"headline": "<?php echo $data->data->title; ?>",
				"image": [
					"<?php echo $data->data->img_social; ?>"
				]
			}
		</script>
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-ES1G92PJ17"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-ES1G92PJ17');
		</script>
		<script>
			window.twttr = (function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0],
					t = window.twttr || {};
				if (d.getElementById(id)) return t;
				js = d.createElement(s);
				js.id = id;
				js.src = "https://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js, fjs);

				t._e = [];
				t.ready = function(f) {
					t._e.push(f);
				};

				return t;
			}(document, "script", "twitter-wjs"));
		</script>
		<style>
			.blog-content h1, h4, h5, h6 {
				font-size: 16px!important;
			}
			.noticia {
				margin-top: 16px!important;
			}
			.um-blog-box {
				color: black;
			}
			.um-blog-box a {
				color: #23203c!important;
			}

			.um-blog-box h3 {
				color: black!important;
				font-size: 1.5em!important;
				line-height: 2.6!important;
			}

			.um-blog-box a {
				color: #FF4C3E!important;
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
			<div class="row">
				<div class="col-lg-8 col-sm-12" style="background-color: #f1f0eb!important;padding-right: 30px!important;padding-left: 30px!important; font-size:17px!important">
					<div class="um-blog-box">
						<br/>
						<h1 style="font-size: 2em!important;color: black!important;"><?php echo $data->data->title; ?></h1>
						<br/>
						<h2 style="font-size: 1.2em;font-weight: normal!important;color: black!important;"><?php echo $data->data->description_seo; ?></h2>
						<br/>
						<?php echo substr($data->data->date_formatted,0,-3); ?> · Per <strong><?php echo $data->data->user_alias; ?></strong><br/><br/>
						<div class="um-blog-image">
							<img width="100%" src="<?php echo $data->data->img_poster; ?>" >
							<span><?php echo $data->data->img_legend; ?></span>
						</div>
						<br/><br/>
						<div class="detall-noticia">
							<div class="blog-content">
								<?php echo $data->data->description; ?>
							</div>
						</div>
						<br/>
						<div class="galeria-noticia">
							<div class="col-12 col-md-4">
								<img src="<?php echo $data->gallery_images->list['1']->img_large; ?>" class="img-fluid">
								<p><?php echo $data->gallery_images['1']->date; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12">
					<div class="widget-area" aria-label="Barra lateral">
						<div class="um-widget-menu widget">
							<h5 class="widget-title">Darreres notícies</h5>
							<?php
							include 'config.php';
							$GET_VARS3 = array(
								"go"        => "news",
								"do"        => "list"
							);

							$POST_VARS3 = array(
								"statusFilter"      => 1
							);

							$REQUEST_URL3 = $API_URL."?".http_build_query($GET_VARS)."&".http_build_query($GET_VARS3);

							$ch3 = curl_init();
							curl_setopt($ch3, CURLOPT_URL, $REQUEST_URL3);
							curl_setopt($ch3, CURLOPT_POST, true);
							curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
							curl_setopt($ch3, CURLOPT_HEADER, false);
							curl_setopt($ch3, CURLOPT_POSTFIELDS, $POST_VARS3);

							$response3 = curl_exec($ch3);

							$data3 = json_decode($response3);
							?>
							<div class="list-inline um-widget-menu">
								<ul class="um-post">
									<li>
										<div class="post-img">
											<div class="post-img-holder">
												<a href="/noticia/<?php echo $data3->list['0']->id; ?>/<?php echo $data3->list['0']->title_url; ?>" style="background-image: url('<?php echo $data3->list['0']->img_poster; ?>');"></a>
											</div>
											<div class="post-blog">
												<div class="blog-box">
													<ul class="list-inline">
														<li class="list-inline-item  mr-3"><a class="date-widget" href="/noticia?iq=<?php echo $data3->list['0']->id; ?>" style="color:#8e8e8e!important;"><i class="fa fa-calendar mr-2" aria-hidden="true"></i><?php echo substr($data3->list['0']->date_formatted,0,-3); ?></a></li>
													</ul>
													<a class="new-link" href="https://uab.media/noticia/<?php echo $data3->list['0']->id; ?>/<?php echo $data3->list['0']->title_url; ?>">
														<h6><?php echo $data3->list['0']->title; ?></h6>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="post-img">
											<div class="post-img-holder">
												<a href="https://uab.media/noticia/<?php echo $data3->list['1']->id; ?>/<?php echo $data3->list['1']->title_url; ?>" style="background-image: url('<?php echo $data3->list['1']->img_poster; ?>');"></a>
											</div>
											<div class="post-blog">
												<div class="blog-box">
													<ul class="list-inline">
														<li class="list-inline-item  mr-3"><a class="date-widget" href="/noticia?iq=<?php echo $data3->list['1']->id; ?>" style="color:#8e8e8e!important;"><i class="fa fa-calendar mr-2" aria-hidden="true"></i><?php echo substr($data3->list['1']->date_formatted,0,-3); ?></a></li>
													</ul>
													<a class="new-link" href="https://uab.media/noticia/<?php echo $data3->list['1']->id; ?>/<?php echo $data3->list['1']->title_url; ?>">
														<h6><?php echo $data3->list['1']->title; ?></h6>
													</a>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="post-img">
											<div class="post-img-holder">
												<a href="/noticia/<?php echo $data3->list['2']->id; ?>/<?php echo $data3->list['2']->title_url; ?>" style="background-image: url('<?php echo $data3->list['2']->img_poster; ?>');"></a>
											</div>
											<div class="post-blog">
												<div class="blog-box">
													<ul class="list-inline">
														<li class="list-inline-item  mr-3"><a class="date-widget" href="/noticia?iq=<?php echo $data3->list['2']->id; ?>" style="color:#8e8e8e!important;"><i class="fa fa-calendar mr-2" aria-hidden="true"></i><?php echo substr($data3->list['2']->date_formatted,0,-3); ?></a></li>
													</ul>
													<a class="new-link" href="/noticia/<?php echo $data3->list['2']->id; ?>/<?php echo $data3->list['2']->title_url; ?>">
														<h6><?php echo $data3->list['2']->title; ?></h6>
													</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="um-widget-menu widget">
							<a href="https://twitter.com/UABmedia" target="_blank" rel="noreferrer">
								<h5 class="widget-title">Piulades d'UABmèdia</h5>
							</a>
							<div class="list-inline um-widget-menu">
								<a class="twitter-timeline" data-width="100%" data-height="600" data-chrome="noheader nofooter noborders transparent" data-theme="dark" data-dnt="true" href="https://twitter.com/UABmedia?ref_src=twsrc%5Etfw">Carregant piulades...</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<?php
		include './plantilla/footer.php';
		?>
	</body>
</html>