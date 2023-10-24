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
                                        <a href="https://uab.media/uabplay" id="/uabplay.php"  
										   <?php if ( $_SERVER['PHP_SELF'] == '/uabplay.php' ) { 
													echo 'style="filter:grayscale(0)"';
													}else{ 
													echo 'style="filter:grayscale(100)"';
													}?>><img class="logo" src="https://uab.media/assets/images/uabtv-color.svg" alt="Logotip d'UABplay" />UAB<strong>play</strong></a>
                                    </li>
                                    <li class="menu-item">
                                    	<a href="https://uab.media/" id="/index.php" 
										   <?php if ( $_SERVER['PHP_SELF'] == '/uabradio.php' ) { 
													echo 'style="filter:grayscale(100)"';
													}elseif ( $_SERVER['PHP_SELF'] == '/uabplay.php' ){ 
													echo 'style="filter:grayscale(100)"';
													}
										   			elseif ( $_SERVER['PHP_SELF'] == '/Interactius.php' ){ 
													echo 'style="filter:grayscale(100)"';
													}
													else{ 
													echo 'style="filter:grayscale(0)"';
													}?>> 
											<img class="logo" src="https://uab.media/assets/images/uabmedia-color.svg" alt="Logotip d'UABmèdia" />UAB<strong>mèdia</strong></a>
                                    </li>
									 <li class="menu-item">
                                        <a href="https://uab.media/Interactius" id="/Interactius.php"
										   <?php if ( $_SERVER['PHP_SELF'] == '/Interactius.php' ) { 
													echo 'style="filter:grayscale(0)"';
													}elseif ( $_SERVER['PHP_SELF'] == '/uabmedia.php' ){ 
													echo 'style="filter:grayscale(100)"';
													}
										  			else{ 
													echo 'style="filter:grayscale(100)"';
													}?>> <img class="logo" src="https://uab.media/assets/images/uabmedia-color.svg" alt="Logotip d'Interactius" />UAB<strong>interactius</strong></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://uab.media/uabradio" id="/uabradio.php"
										   <?php if ( $_SERVER['PHP_SELF'] == '/uabradio.php' ) { 
													echo 'style="filter:grayscale(0)"';
													}else{ 
													echo 'style="filter:grayscale(100)"';
													}?>><img class="logo" src="https://uab.media/assets/images/uabradio-color.svg" alt="Logotip d'UABràdio" /> UAB<strong>ràdio </strong></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="navbar-right menu-right">
                           <ul class="d-flex align-items-center list-inline m-0">
							   <li class="nav-item nav-icon" style="margin-right: 10px!important;">
								 
                                 <a href="https://www.twitch.com/uabmedia" target="_blank" rel="noreferrer">
                                     <i class="fa fa-twitch"></i>
                                 </a>
                             <li class="nav-item nav-icon" style="margin-right: 10px!important;">
								 
                                 <a href="https://www.instagram.com/uabmedia" target="_blank" rel="noreferrer">
                                     <i class="fa fa-instagram"></i>
                                 </a>
                              <li class="nav-item nav-icon" style="margin-right: 10px!important;">
                                 <a href="https://twitter.com/uabmedia" target="_blank" rel="noreferrer">
                                     <i class="fa fa-twitter"></i>
                                 </a>
                              </li>
                              <li class="nav-item nav-icon" style="margin-right: 10px!important;">
                                 <a href="#" class="search-toggle device-search">
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
