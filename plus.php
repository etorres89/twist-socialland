<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Santander Twist </title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,maximum-scale=1,user-scalable=no">
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" >		 
		<link rel="stylesheet" href="css/application.css">		
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/estilo.css">		
		<link rel="stylesheet" href="css/swiper.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/media.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"/> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"/>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/5c3b1798fb.js"></script>
		
	</head>
	<body>
		<!--Menu inicial-->
		<!--se incluye header-->
		<?php include("header.php"); ?>
		<!--fin se incluye header--> 
		
		
		
		<div id="" class="fondoBlanco">
			<div class="st" ng-show="home" aria-hidden="false">
				
				<!--Inicio Swipe Slider-->
				<section class="slider-section" style="height:360px;">
					<div class="contSlide">
						
						<div class="swiper-container" >
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<video loop="" autoplay="" autobuffer="" muted="" id="mute0">
										<source ng-src="upload/gif_images/DespegarDesk.mp4" type="video/mp4" src="upload/gif_images/DespegarDesk.mp4">
										<source ng-src="" type="video/ogv">
									</video></div>
									<div class="swiper-slide"><video loop="" autoplay="" autobuffer="" muted="" id="mute1">
										<source ng-src="upload/gif_images/SantanderPlusDesk.mp4" type="video/mp4" src="upload/gif_images/SantanderPlusDesk.mp4">
										<source ng-src="" type="video/ogv">
									</video></div>
									<div class="swiper-slide">Slide 3</div>
									<div class="swiper-slide">Slide 4</div>
									<div class="swiper-slide">Slide 5</div>
									
							</div>
							<!-- Add Pagination -->
							<div class="swiper-pagination"></div>
							<!-- Add Arrows -->
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
						
						<div class="logInMessage cntR txtCnt row  alinear-medio"  aria-hidden="false">
							<div class="col-md-6 ">
								<h4 class="spaL float-md-right ">Vive la experiencia personalizada.</h4>
							</div>
							<div class="col-md-6">
								<div class="btn green cntR d-inline-block" onclick="activar('logIn');" role="button" tabindex="0">
									<p class="inlMid" id="Iniciar_Sesion" analytics-on="click">Iniciar sesión</p>
								</div>
								<div class="btn white green cntR d-inline-block" onclick="activar('register');" id="Regístrate" analytics-on="click" role="button" tabindex="0">
									<p class="inlMid">Regístrate</p>
								</div>
							</div>
							
							
							
						</div>
					</div>
				</section>
				
				
				
				
				
				
				<section class="st ng-scope" id="carouselPlus" ng-controller="bannerCtrl"> 
					<div class="slickTwo">
						<div class="slickBG"> </div>
						<slick settings="slickConfigCarouselPlus" id="moreProm" class="ng-isolate-scope slick-initialized slick-slider" style="display: block;">
							<div aria-live="polite" class="slick-list" tabindex="0" style="padding: 0px 60px;"><div class="slick-track" style="opacity: 1; width: 5835px; transform: translate3d(-1167px, 0px, 0px);"><div class="cupon medium colums-three slick-slide slick-cloned" style="width: 389px;" data-slick-index="-4" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=esquizofrenia-2&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/esquizofrenia-show-case_v2pJs4kZ79eE5yYANNhHNLW9xVuLShi9.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide slick-cloned" style="width: 389px;" data-slick-index="-3" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=el-juego-de-la-silla&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/el-juego-de-la-silla-show-case_U40mT3fndPWv8n5bXVYL7XUZFRT7oRuL.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide slick-cloned" style="width: 389px;" data-slick-index="-2" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=obra-la-tiendita-de-los-horrores&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/tiendita-de-los-horrores-show-case_BkdodIIMOnqRfEsOM8Xj9ZAK6qUi91h8.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide slick-cloned slick-active" style="width: 389px;" data-slick-index="-1" aria-hidden="false">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=obra-mujer-es-asunto-de-hombres&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/mujeres-asunto-hombres-showcase_XY3puAOjD5Ng9MEECbgpNvd25WGYg238.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide slick-active slick-center" style="width: 389px;" data-slick-index="0" aria-hidden="false">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=m-i-n-d&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/mind-show-case_2nCOplhX2RfkzpED3qqKVeIgGk7W5DRT.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide slick-active" style="width: 389px;" data-slick-index="1" aria-hidden="false">
								<div class="cnt">
									<a target="_blank" href="http://www.ticketmaster.com.mx/artist/2237550?segmento=PREMIER">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/bannershowcase-460x1921_UJl6z8eWxrOxMzn5UwlMSIbjmMGZbCW0.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide" style="width: 389px;" data-slick-index="2" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=entre-sapos&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/entre-sapos-show-case_cL24EyHBBiiilktqTODmn3Bbe4u4qTRy.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide" style="width: 389px;" data-slick-index="3" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=esquizofrenia-2&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/esquizofrenia-show-case_v2pJs4kZ79eE5yYANNhHNLW9xVuLShi9.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide" style="width: 389px;" data-slick-index="4" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=el-juego-de-la-silla&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/el-juego-de-la-silla-show-case_U40mT3fndPWv8n5bXVYL7XUZFRT7oRuL.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide" style="width: 389px;" data-slick-index="5" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=obra-la-tiendita-de-los-horrores&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/tiendita-de-los-horrores-show-case_BkdodIIMOnqRfEsOM8Xj9ZAK6qUi91h8.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide" style="width: 389px;" data-slick-index="6" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=obra-mujer-es-asunto-de-hombres&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/mujeres-asunto-hombres-showcase_XY3puAOjD5Ng9MEECbgpNvd25WGYg238.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide slick-cloned slick-center" style="width: 389px;" data-slick-index="7" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=m-i-n-d&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/mind-show-case_2nCOplhX2RfkzpED3qqKVeIgGk7W5DRT.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide slick-cloned" style="width: 389px;" data-slick-index="8" aria-hidden="true">
								<div class="cnt">
									<a target="_blank" href="http://www.ticketmaster.com.mx/artist/2237550?segmento=PREMIER">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/bannershowcase-460x1921_UJl6z8eWxrOxMzn5UwlMSIbjmMGZbCW0.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide slick-cloned" style="width: 389px;" data-slick-index="9" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=entre-sapos&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/entre-sapos-show-case_cL24EyHBBiiilktqTODmn3Bbe4u4qTRy.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
								</div><div class="cupon medium colums-three slick-slide slick-cloned" style="width: 389px;" data-slick-index="10" aria-hidden="true">
								<div class="cnt">
									<a target="_self" href="https://www.santandertwist.com.mx/promo/#?promo=esquizofrenia-2&amp;segmento=">
										<div class="cntr trans_fast" style="background:url(https://console.santandertwist.com.mx/uploads/carousel_plus_banners/esquizofrenia-show-case_v2pJs4kZ79eE5yYANNhHNLW9xVuLShi9.png) no-repeat center;  background-size: contain"> </div>
									</a>
								</div>
							</div></div></div>	 
							
							
						<button type="button" data-role="none" class="slick-prev" aria-label="previous">Previous</button><button type="button" data-role="none" class="slick-next" aria-label="next">Next</button></slick>
					</div>
				</section>
				
				
				
				
				
				<section class="promos-section"  >
					<section id="filter">
						<h3 class="txtCnt black">Promociones exclusivas que Santander Plus tiene para ti.</h3>
						<div class="txtCnt">
							<div id="search" class="cntR inlMid">
								<div>
									
									<input type="search" id="input-0" name="" 								 
									placeholder="Buscar promoción"							 
									class="">
									
									
								</div>
								<div class="select inlMid">
									<select >
										<option value="start" selected="selected">Todo México</option>										 
										<option  value="aguascalientes"  style="">Aguascalientes</option>										
										<option  value="baja_california" >Baja California</option>										
										<option  value="b_california_sur" >Baja California Sur</option>										
										<option  value="campeche" >Campeche</option>										
										<option  value="chiapas" >Chiapas</option>										
										<option  value="chihuahua" >Chihuahua</option>										
										<option  value="coahuila" >Coahuila</option>										
										<option  value="colima" >Colima</option>										
										<option  value="distrito_federal" >CDMX</option>										
										<option  value="durango" >Durango</option>										
										<option  value="guanajuato" >Guanajuato</option>										
										<option  value="guerrero" >Guerrero</option>										
										<option  value="hidalgo" >Hidalgo</option>										
										<option  value="jalisco" >Jalisco</option>										
										<option  value="mexico" >México</option>										
										<option  value="michoacan" >Michoacán</option>										
										<option  value="morelos" >Morelos</option>
										<option  value="nayarit" >Nayarit</option>										
										<option  value="nuevo_leon" >Nuevo León</option>										
										<option  value="oaxaca" >Oaxaca</option>										
										<option  value="otro" >Otros</option>										
										<option  value="puebla" >Puebla</option>										
										<option  value="queretaro" >Queretaro</option>										
										<option  value="quintana_roo" >Quintana Roo</option>
										<option  value="san_luis_potosi" >San Luis Potosí</option>
										<option  value="sinaloa" >Sinaloa</option>
										<option  value="sonora" >Sonora</option>
										<option  value="tabasco" >Tabasco</option>
										<option  value="tamaulipas" >Tamaulipas</option>
										<option  value="tlaxcala" >Tlaxcala</option>
										<option  value="veracruz" >Veracruz</option>
										<option  value="yucatan" >Yucatán</option>
										<option  value="zacatecas" >Zacatecas</option>
									</select>
								</div>
							</div>
							<div class="btn mid white inlMid cntR spaR"  >
								<p class="inlMid">Cercanos a mí</p>
								<img src="img/ic_check_red.svg" class="cntrV hiddeOp">
								<img src="img/ic_check_white.svg" class="cntrV">
							</div>
						</div>
						<nav class="txtCnt cntR all" id="subNav" style="padding-top: 0">
								<div class="items inlMid trans_fast" data-id="all" style="" role="button" tabindex="0">
									<img src="/img/ic_todas_white.svg" class="hidden active hiddeOp">
									<img src="/img/ic_todas_red.svg" class="hidden">
									<p class="link" style="font-size: 24px;color:#EC0000">TODAS LAS PROMOCIONES</p>
								</div>
								<div class="items inlMid trans_fast" data-id="entretenimiento" style="" role="button" tabindex="0">
									<img src="/img/ic_entretenimiento_white.svg" class="hidden active hiddeOp">
									<img src="/img/ic_entretenimiento_red.svg" class="hidden">
									<p class="link" style="font-size: 24px;color:#EC0000"">SHOWCASE</p>
								</div>
							</nav>
					</section>
					
					<!--<nav class="txtCnt cntR all" ng-class="filter" id="subNav">
						<div class="items inlMid trans_fast" ng-click="chooseCat('all', false, true)" data-id="all" style="" role="button" tabindex="0">
							<img src="img/ic_todas_white.svg" class="hidden active hiddeOp">
							<img src="img/ic_todas_red.svg" class="hidden">
							<p class="link">TODAS LAS PROMOCIONES</p>
							</div>
							<div class="items inlMid trans_fast" ng-click="chooseCat('entretenimiento', false, true)" data-id="entretenimiento" style="" role="button" tabindex="0">
							<img src="img/ic_entretenimiento_white.svg" class="hidden active hiddeOp">
							<img src="img/ic_entretenimiento_red.svg" class="hidden">
							<p class="link">SHOWCASE</p>
							</div>-->
							
					<!--</nav>-->
					<!--  -->
					<section id="cupon">
						
						<!-- Contenedor para 2 cupones -->
						<div class="row">
							
							<div class="col-6 col-sm-6 col-md-6">								
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="#"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom " style="background-image:url(https://console.santandertwist.com.mx/uploads/large_images/primerafilacalculadora_yujWkhc1zkC7uY3BXHr6BCechcL3vpQN.jpg)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Calculadora</h5>
												<p class="trans_fast white " ></p>
											</div>
										</a>	
									</div>
									<div class="action cntR">
										<div class="ssrr cntR inlMid">
											<i class="fa fa-facebook-square fa-2x icono" aria-hidden="true"></i>
											<i class="fa fa-twitter-square fa-2x icono" aria-hidden="true"></i>													
										</div>
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn" class="btn cntR btn_rojo">
											<p class="texto_bold ">Ver Promoción</p>
										</a>										
									</div>
								</div>								
							</div>
							<div class="col-6 col-sm-6 col-md-6">								
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="#"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom " style="background-image:url(https://console.santandertwist.com.mx/uploads/large_images/los-tigres-del-norte-620x295_CwK9nZ32eYR466AE9IpSHvY2RZfKFGiZ.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Preventa Santander: Los Tigres del Norte en Concierto MTY</h5>
												<p class="trans_fast white ng-binding" ></p>
											</div>
										</a>	
									</div>
									<div class="action cntR">
										<div class="ssrr cntR inlMid">
											<i class="fa fa-facebook-square fa-2x icono" aria-hidden="true"></i>
											<i class="fa fa-twitter-square fa-2x icono" aria-hidden="true"></i>													
										</div>
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn" class="btn cntR btn_rojo">
											<p class="texto_bold ">Ver Promoción</p>
										</a>										
									</div>
								</div>								
							</div>
							<div class="col-6 col-sm-6 col-md-4">								
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="#"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom " style="background-image:url(https://console.santandertwist.com.mx/uploads/large_images/banners-soda-cirque-septimo-620x295_92bi1Qhm9afgKw7mc19DkKey9Sch3Qk7.jpg)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Promo:  Cirque du Soleil - Séptimo Día</h5>
												<p class="trans_fast white ng-binding" >Un espectáculo que te quitará el aliento. Recuerda los 90's al sonar una #MúsicaLigera que te haga vibrar, haciendote sentir #EnLaCiudadDeLaFuria.</p>
											</div>
										</a>	
									</div>
									<div class="action cntR">
										<div class="ssrr cntR inlMid">
											<i class="fa fa-facebook-square fa-2x icono" aria-hidden="true"></i>
											<i class="fa fa-twitter-square fa-2x icono" aria-hidden="true"></i>													
										</div>
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn" class="btn cntR btn_rojo">
											<p class="texto_bold ">Ver Promoción</p>
										</a>										
									</div>
								</div>								
							</div>
							<div class="col-6 col-sm-6 col-md-4">								
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="#"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom " style="background-image:url(https://console.santandertwist.com.mx/uploads/large_images/banners-soda-cirque-septimo-620x295_92bi1Qhm9afgKw7mc19DkKey9Sch3Qk7.jpg)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Promo:  Cirque du Soleil - Séptimo Día</h5>
												<p class="trans_fast white ng-binding" >Un espectáculo que te quitará el aliento. Recuerda los 90's al sonar una #MúsicaLigera que te haga vibrar, haciendote sentir #EnLaCiudadDeLaFuria.</p>
											</div>
										</a>	
									</div>
									<div class="action cntR">
										<div class="ssrr cntR inlMid">
											<i class="fa fa-facebook-square fa-2x icono" aria-hidden="true"></i>
											<i class="fa fa-twitter-square fa-2x icono" aria-hidden="true"></i>													
										</div>
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn" class="btn cntR btn_rojo">
											<p class="texto_bold ">Ver Promoción</p>
										</a>										
									</div>
								</div>								
							</div>
							<div class="col-6 col-sm-6 col-md-4">								
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="#"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom " style="background-image:url(https://console.santandertwist.com.mx/uploads/large_images/banners-soda-cirque-septimo-620x295_92bi1Qhm9afgKw7mc19DkKey9Sch3Qk7.jpg)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Promo:  Cirque du Soleil - Séptimo Día</h5>
												<p class="trans_fast white ng-binding" >Un espectáculo que te quitará el aliento. Recuerda los 90's al sonar una #MúsicaLigera que te haga vibrar, haciendote sentir #EnLaCiudadDeLaFuria.</p>
											</div>
										</a>	
									</div>
									<div class="action cntR">
										<div class="ssrr cntR inlMid">
											<i class="fa fa-facebook-square fa-2x icono" aria-hidden="true"></i>
											<i class="fa fa-twitter-square fa-2x icono" aria-hidden="true"></i>													
										</div>
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn" class="btn cntR btn_rojo">
											<p class="texto_bold ">Ver Promoción</p>
										</a>										
									</div>
								</div>								
							</div>
							
							
							<div class="col-6 col-sm-6 col-md-3">								
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom" style="background-image:url(https://console.santandertwist.com.mx/uploads/medium_images/amor-tormento-410x220_tEISjZ84fjqUJobVEyixnfICjAkInsZm.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Obra de Teatro: Amor y Tormento</h5>
												<p class="trans_fast white ng-binding" >Compra tus boletos a un precio especial de $30 MXN al pagar con Tarjetas Santander.</p>
											</div>
										</a>	
									</div>
									<div class="action cntR">
										<div class="ssrr cntR inlMid">
											<i class="fa fa-facebook-square fa-2x icono" aria-hidden="true"></i>
											<i class="fa fa-twitter-square fa-2x icono" aria-hidden="true"></i>											
										</div>
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn" class="btn cntR btn_rojo">
											<p class="texto_bold ">Ver Promoción</p>
										</a>										
									</div>
								</div>								
							</div>
							
							<div class="col-6 col-sm-6 col-md-3">								
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom" style="background-image:url(https://console.santandertwist.com.mx/uploads/medium_images/amor-tormento-410x220_tEISjZ84fjqUJobVEyixnfICjAkInsZm.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Obra de Teatro: Amor y Tormento</h5>
												<p class="trans_fast white ng-binding" >Compra tus boletos a un precio especial de $30 MXN al pagar con Tarjetas Santander.</p>
											</div>
										</a>	
									</div>
									<div class="action cntR">
										<div class="ssrr cntR inlMid">
											<i class="fa fa-facebook-square fa-2x icono" aria-hidden="true"></i>
											<i class="fa fa-twitter-square fa-2x icono" aria-hidden="true"></i>											
										</div>
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn" class="btn cntR btn_rojo">
											<p class="texto_bold ">Ver Promoción</p>
										</a>										
									</div>
								</div>								
							</div>
							
							<div class="col-6 col-sm-6 col-md-3">								
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom" style="background-image:url(https://console.santandertwist.com.mx/uploads/medium_images/amor-tormento-410x220_tEISjZ84fjqUJobVEyixnfICjAkInsZm.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Obra de Teatro: Amor y Tormento</h5>
												<p class="trans_fast white ng-binding" >Compra tus boletos a un precio especial de $30 MXN al pagar con Tarjetas Santander.</p>
											</div>
										</a>	
									</div>
									<div class="action cntR">
										<div class="ssrr cntR inlMid">
											<i class="fa fa-facebook-square fa-2x icono" aria-hidden="true"></i>
											<i class="fa fa-twitter-square fa-2x icono" aria-hidden="true"></i>											
										</div>
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn" class="btn cntR btn_rojo">
											<p class="texto_bold ">Ver Promoción</p>
										</a>										
									</div>
								</div>								
							</div>
							
							<div class="col-6 col-sm-6 col-md-3">								
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom" style="background-image:url(https://console.santandertwist.com.mx/uploads/medium_images/amor-tormento-410x220_tEISjZ84fjqUJobVEyixnfICjAkInsZm.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Obra de Teatro: Amor y Tormento</h5>
												<p class="trans_fast white ng-binding" >Compra tus boletos a un precio especial de $30 MXN al pagar con Tarjetas Santander.</p>
											</div>
										</a>	
									</div>
									<div class="action cntR">
										<div class="ssrr cntR inlMid">
											<i class="fa fa-facebook-square fa-2x icono" aria-hidden="true"></i>
											<i class="fa fa-twitter-square fa-2x icono" aria-hidden="true"></i>											
										</div>
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn" class="btn cntR btn_rojo">
											<p class="texto_bold ">Ver Promoción</p>
										</a>										
									</div>
								</div>								
							</div>
							
							
							
							
						</div> 
						
					</section>
					<div class="row"></div>
					<div class="txtCnt separacion" >
						<div class="btn inlMid cntR btn_gris"  >Ver más</div>
						<p class="black spaB spaT ng-binding ng-hide" ng-show="!promoMore" ng-init="textDesc = 'Cargando';" aria-hidden="true" style=""></p>
					</div>
					
				</section>
				
			</div>
			
			
		</div>  
		<!--se incluye footer-->
		<?php include("footer.php"); ?>
		<!--fin se incluye footer-->
		<script type="text/javascript" src="slick/slick.min.js"></script>
		
		<script>
			
			
		</script>
	</body>
</html>	