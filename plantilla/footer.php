<html>
<!-- Detectar el path i canviar colors -->
<script>
	$(document).ready(function() {
		var pathname = window.location.pathname;
		// alert(pathname + pathname.length);
		if (pathname.length == 1) {
			$('#navPagination').removeClass('NavActive');
			$('#navindex').addClass('NavActive');
			$('#navindex span').css("color", "red");
		};
		if (pathname.includes('uabtv')) {
			$('#navPagination').removeClass('NavActive');

			$('#navtv').addClass('NavActive');
			$('#navtv span').css("color", "red");
		};
		if (pathname.includes('uabradio')) {
			$('#navPagination').removeClass('NavActive');

			$('#navradio').addClass('NavActive');
			$('#navradio span').css("color", "red");
		};
		if (pathname.includes('opcions')) {
			$('#navPagination').removeClass('NavActive');

			$('#navopcions').addClass('NavActive');
			$('#navopcions span').css("color", "red");
		};
	});
</script>

<!-- JS dels botons de pause i play -->
<script>
	$(document).ready(function() {
		$('#pause_btn').hide();
		//$('#radio_directe').get(0).play();

		$('#play_btn').click(function() {
			$('#radio_directe').get(0).play();
			$('#play_btn').hide();
			$('#pause_btn').show();
		});

		$('#pause_btn').click(function() {
			$('#radio_directe').get(0).pause();
			$('#play_btn').show();
			$('#pause_btn').hide();



		});
	});
</script>

<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/slick-animation.min.js"></script>
<script src="./assets/js/custom.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?forceLang=ca&theme=white&customize=1&tracking=1&thirdparty=1&always=1&showNoConsent=1&noConfirm=1"></script>
<head><link rel="stylesheet" href="https://uab.media/assets/css/style.css" /></head>

<div id="back-to-top">
	<a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
</div>

<footer class="footer-one fons-dark">

	<div class="footer-top">
		<div class="container-fluid">
			<div class="row footer-standard">
				<div class="col-lg-12">
					<div class="widget text-center">
						<div class="textwidget hide-mobile">
							<a target="_blank" href="https://www.uab.cat/comunicacio/" target="_blank" rel="noreferrer"><img src="https://uab.media/assets/images/Logo_UAB_nou.png" style="margin-bottom:50px;height:80px;" alt="Universitat Autònoma de Barcelona. Facultat de Ciències de la Comunicació" /></a>
						</div>
					</div>
					<div class="widget text-center">
						<div class="menu-footer-link-1-container">
							<ul class="menu p-0">
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="/qui-som" style="color:var(--text-body)!important;">Qui som?</a>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="/participa" style="color:var(--text-body)!important;">Participa-hi</a>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page" style="padding-right: 0px!important;">
									<a href="/legal" style="color:var(--text-body)!important;">Avís legal</a>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="/Contacte" style="margin-left:40%;color:var(--text-body)!important;">Contacte</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- RADIO BAR -->
<div id="peudirecte">
	<div class="container" style="padding-right: 5px!important;padding-left: 5px!important; ">
		<div class="row">
			<div class="col-8" style="text-align:left!important;margin-top:2px!important;width: 50%;padding: 10px;">
				<div id="directe" class="directesText"></div>
				<script>
					function loadDoc() {
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("directe").innerHTML =
								"<strong>Estàs escoltant:</strong> <br/>" + this.responseText;
						}
					};
					xhttp.open("GET", "https://uab.media/CurrentSong.txt", true);
					xhttp.send();
					}
					loadDoc();
					setInterval (loadDoc,15000);
				</script>
			</div>

			<!-- MODAL DEL CONTADOR -->
			<div class="fondo_transparente">
				<div class="modal">
					<div class="modal_cerrar">
						<span onclick=cerrarModal()>x</span>
					</div>
					<div class="modal_titulo"><img style="width:140px;margin-bottom:16px" src="./assets/images/uabradio_mobile.svg" alt="UABmèdia" /><br />Temporitzador</div>
					<div class="modal_botones">
						<p onclick=radioContador(5) class="boton">5 minuts</p>
						<p onclick=radioContador(10) class="boton">10 minuts</p>
						<p onclick=radioContador(30) class="boton">30 minuts</p>
						<p onclick=apagarRadio() class="boton" id="apagarRadio">Apagar</p>
					</div>
				</div>
			</div>

			<script>
				var RadioInterval = null;
				function abrirContador() {
					document.getElementsByClassName("fondo_transparente")[0].style.display = "block"

				}

				function cerrarModal() {
					document.getElementsByClassName("fondo_transparente")[0].style.display = "none"

				}

				function apagarRadio() {
					stopInterval()
					$('#radio_directe').get(0).pause();
					$('#play_btn').show();
					$('#pause_btn').hide();
					document.getElementsByClassName("fondo_transparente")[0].style.display = "none"

					document.getElementById('clock_button').classList.remove("contador_extended")
					document.getElementById("clock_button").innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M18 5V2H30V5ZM22.5 27.35H25.5V15.85H22.5ZM24 43.95Q20.3 43.95 17.025 42.525Q13.75 41.1 11.3 38.65Q8.85 36.2 7.425 32.925Q6 29.65 6 25.95Q6 22.25 7.425 18.975Q8.85 15.7 11.3 13.25Q13.75 10.8 17.025 9.375Q20.3 7.95 24 7.95Q27.35 7.95 30.3 9.075Q33.25 10.2 35.55 12.2L38.1 9.65L40.2 11.75L37.65 14.3Q39.45 16.3 40.725 19.15Q42 22 42 25.95Q42 29.65 40.575 32.925Q39.15 36.2 36.7 38.65Q34.25 41.1 30.975 42.525Q27.7 43.95 24 43.95ZM24 40.95Q30.25 40.95 34.625 36.575Q39 32.2 39 25.95Q39 19.7 34.625 15.325Q30.25 10.95 24 10.95Q17.75 10.95 13.375 15.325Q9 19.7 9 25.95Q9 32.2 13.375 36.575Q17.75 40.95 24 40.95ZM24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Z" /></svg>';

				}

				function radioContador(minutos) {
					stopInterval()

					$('#radio_directe').get(0).play(); //posa play a la radio
					$('#play_btn').hide();
					$('#pause_btn').show(); //ensenya el temps que queda del contador
					document.getElementsByClassName("fondo_transparente")[0].style.display = "none"

					var countDownDate = 0;


					document.getElementById('clock_button').classList.add("contador_extended") //posa estil del contador quadrat

					var actual = new Date().getTime();
					var countDownDate = actual + 1000 * 60 * minutos; //suma els minuts dits a la hora actual
					 RadioInterval = setInterval(interval, 1000, countDownDate);

				}

				function stopInterval() {
					clearInterval(RadioInterval);
					console.log('interval closed')

				}

				function interval(countDownDate) {
					var now = new Date().getTime();
					var distance = countDownDate - now;
					var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
					var seconds = Math.floor((distance % (1000 * 60)) / 1000);
					var time = minutes + "m " + seconds + "s ";
					console.log('Tems restant' + time)

					document.getElementById("clock_button").innerHTML = time
					if (distance < 0) {
						playCountRadio(false)
						apagarRadio()
					}
				}
			</script>


			<div class="col-4 botons_radio">

				<audio style="width:100%" class="radio" id="radio_directe">
					<source src="https://videosdigitals.uab.cat/uabradio/uabradio" type="audio/mpeg">
				</audio>

				<!-- RELLOTGE -->
				<div class="radiobutton" id="clock_button" onclick=abrirContador()>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
						<path d="M18 5V2H30V5ZM22.5 27.35H25.5V15.85H22.5ZM24 43.95Q20.3 43.95 17.025 42.525Q13.75 41.1 11.3 38.65Q8.85 36.2 7.425 32.925Q6 29.65 6 25.95Q6 22.25 7.425 18.975Q8.85 15.7 11.3 13.25Q13.75 10.8 17.025 9.375Q20.3 7.95 24 7.95Q27.35 7.95 30.3 9.075Q33.25 10.2 35.55 12.2L38.1 9.65L40.2 11.75L37.65 14.3Q39.45 16.3 40.725 19.15Q42 22 42 25.95Q42 29.65 40.575 32.925Q39.15 36.2 36.7 38.65Q34.25 41.1 30.975 42.525Q27.7 43.95 24 43.95ZM24 40.95Q30.25 40.95 34.625 36.575Q39 32.2 39 25.95Q39 19.7 34.625 15.325Q30.25 10.95 24 10.95Q17.75 10.95 13.375 15.325Q9 19.7 9 25.95Q9 32.2 13.375 36.575Q17.75 40.95 24 40.95ZM24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Q24 26 24 26Z" />
					</svg>
				</div>
				<!-- PLAY i PAUSE -->
				<div class="radiobutton" id="play_btn">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M0 0h24v24H0V0z" fill="none" />
						<path d="M10 8.64L15.27 12 10 15.36V8.64M8 5v14l11-7L8 5z" />
					</svg>
				</div>

				<div class="radiobutton" id="pause_btn">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M0 0h24v24H0V0z" fill="none" />
						<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
					</svg>

				</div>


			</div>


		</div>
	</div>
</div>
<!-- FOOTER -->
<div id="peu">
	<a class="navPagination" href="/uabplay" id="navplay"><img class=" navIMG navtvIMG" src="https://uab.media/assets/images/uabtv-color.svg" alt="UABtv" /><span>UAB<strong>play</strong></span></a>
	
	<a class="navPagination" href="/" id="navindex"><img class=" navIMG navindexIMG" src="https://uab.media/assets/images/uabmedia-color.svg" alt="UABmèdia" /><span>UAB<strong>mèdia</strong></span></a>
	
	<a class="navPagination" href="/uabradio" id="navradio"><img class=" navIMG navradioIMG" src="https://uab.media/assets/images/uabradio-color.svg" alt="UABràdio" /><span>UAB<strong>ràdio</strong></span></a>
	
	<a class="navPagination" href="/opcions" id="navopcions"><img class=" navIMG navopcionsIMG" src="https://uab.media/assets/images/mes.svg" alt="Opcions" /><span><strong>Opcions</strong></span></a>
</div>
</html>