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
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@uabmedia">
        <meta name="twitter:title" content="<?php echo $data->data->title; ?> - UABmèdia">
        <meta name="twitter:description" content="<?php echo $data->data->description_seo; ?>">
        <meta name="twitter:image:src" content="<?php echo $data->data->img_social; ?>">
        <meta name="twitter:url" content="https://uab.media/reportatge/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>">
        <meta property="og:site_name" content="UABmèdia" />
        <meta property="og:url" content="https://uab.media/reportatge/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>" />
        <meta property="og:title" content="<?php echo $data->data->title; ?> - UABmèdia" />
        <meta property="og:description" content="<?php echo $data->data->description_seo; ?>" />
        <meta property="og:image" content="<?php echo $data->data->img_social; ?>" />
        <link rel="shortcut icon" href="https://uab.media/assets/images/favicon.png" />
        <link rel="stylesheet" href="https://uab.media/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://uab.media/assets/css/typography.css">
        <link rel="stylesheet" href="https://uab.media/assets/css/style.css" />
        <link rel="stylesheet" href="https://uab.media/assets/css/responsive.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://s3-eu-west-1.amazonaws.com">
		<script type="application/ld+json">
			{
				"@context": "http://schema.org/",
				"@type": "NewsArticle",
				"mainEntityOfPage": {
					"@type": "WebPage",
					"@id": "https://uab.media/reportatge/<?php echo $data->data->id; ?>/<?php echo $data->data->title_url; ?>"
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
    </head>
    <body>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MVV29M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <header id="capcalera">
            <div class="capcalera">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">
                                <a class="navbar-brand" href="https://uab.media/"> <img class="logo" src="https://uab.media/assets/images/uabmedia_mobile.svg" alt="UABmèdia" /></a>
                                <div class="collapse navbar-collapse">
                                    <div class="menu-main-menu-container">
                                        <ul id="top-menu" class="navbar-nav ml-auto">
                                            <li class="menu-item">
                                                <a href="https://uab.media/uabtv"> <img class="logo" src="https://uab.media/assets/images/uabtv-bw.svg" alt="UABtv" /> UAB<strong>tv</strong></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="https://uab.media/"> <img class="logo" src="https://uab.media/assets/images/uabmedia-color.svg" alt="UABmèdia" /> UAB<strong>mèdia</strong></a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="https://uab.media/uabradio"> <img class="logo" src="https://uab.media/assets/images/uabradio-bw.svg" alt="UABràdio" /> UAB<strong>ràdio</strong></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="navbar-right menu-right">
                                    <ul class="d-flex align-items-center list-inline m-0">
                                        <li class="nav-item nav-icon" style="margin-right: 10px!important;">
                                            <a href="https://www.instagram.com/uabmedia" target="_blank" rel="noreferrer" style="color:var(--text-body)!important;">
                                            <i class="fa fa-instagram"></i>
                                            </a>
                                        <li class="nav-item nav-icon" style="margin-right: 10px!important;">
                                            <a href="https://twitter.com/uabmedia" target="_blank" rel="noreferrer" style="color:var(--text-body)!important;">
                                            <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item nav-icon" style="margin-right: 10px!important;">
                                            <a href="#" class="search-toggle device-search" style="color:var(--text-body)!important;">
                                            <i class="fa fa-search"></i>
                                            </a>
                                            <div class="search-box um-search-bar d-search">
                                                <form action="cerca" method="post" class="searchbox">
                                                    <div class="form-group position-relative">
                                                        <input type="text" name="cerca" class="text search-input font-size-12" placeholder="Cercar un programa, capítol o notícia">
                                                        <i class="search-link ri-search-line"></i>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="nav-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="portada">
            <div class="portada-reportatge" style="background-image:url(<?php echo $data->data->img_poster; ?>);"></div>
        </section>
        <main id="main" class="reportatge">
            <div class="container">
                <article>
					<center>
						<h2><?php echo $data->data->title; ?></h2>
						<h5><?php echo $data->data->description_seo; ?></h5>
						<br/>
						<?php echo substr($data->data->date_formatted,0,-3); ?> · Un reportatge de <strong><?php echo $data->data->user_alias; ?></strong>
					</center>
					<br/><br/>
					<div class="detall-noticia">
						<div class="blog-content">
							<?php echo $data->data->description; ?>
						</div>
					</div>
                </article>
            </div>
        </main>
        <?php
            include './plantilla/footer.php';
            ?>
    </body>
</html>