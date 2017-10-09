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
		<link rel="stylesheet" href="css/screens.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
										<source ng-src="upload/banners/Sismo_desk.mp4" type="video/mp4" src="upload/banners/Sismo_desk.mp4">
										<source ng-src="" type="video/ogv">
									</video>
									<img src="//via.placeholder.com/350x150">
								</div>
								<div class="swiper-slide">
										<video loop="" autoplay="" autobuffer="" muted="" id="mute1">
										<source ng-src="upload/banners/septimo-dia.mp4?new" type="video/mp4" src="upload/banners/septimo-dia.mp4?new">
										<source ng-src="" type="video/ogv">
										</video>
										<img src="//via.placeholder.com/350x150">
								</div>
								<div class="swiper-slide">
										<video loop="" autoplay="" autobuffer="" muted="" id="mute1">
										<source ng-src="upload/banners/septimo-dia.mp4?new" type="video/mp4" src="upload/banners/septimo-dia.mp4?new">
										<source ng-src="" type="video/ogv">
										</video>
										<img src="//via.placeholder.com/350x150">
								</div>
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

				<!--  -->
				<section class="promos-section"  >
					<section id="filter">
						<h3 class="txtCnt black">Promociones exclusivas que Santander Twist tiene para ti.</h3>
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
						<nav class="txtCnt "  id="subNav">

							<div class="items inlMid trans_fast bienestar"    data-id="bienestar" id="bienestar"  >

								<img src="img/c_bienestar_red.svg" class="hidden">
								<p class="link">Bienestar</p>
							</div>
							<div class="items inlMid trans_fast"  data-id="compras" id="compras" >

								<img src="img/ic_compras_red.svg" class="hidden">
								<p class="link">Compras</p>
							</div>
							<div class="items inlMid trans_fast"   data-id="entretenimiento" id="entretenimiento" >

								<img src="img/ic_entretenimiento_red.svg" class="hidden">
								<p class="link">Entretenimiento</p>
							</div>

							<div class="items inlMid trans_fast" ng-click="chooseCat('restaurantes', false, true)" data-id="restaurantes" id="restaurantes" analytics-on="click" role="button" tabindex="0">

								<img src="img/ic_restaurantes_red.svg" class="hidden">
								<p class="link">Restaurantes</p>
							</div>

							<div class="items inlMid trans_fast " ng-click="chooseCat('viajes', false, true)" data-id="viajes" id="viajes" analytics-on="click" role="button" tabindex="0">

								<img src="img/ic_viajes_red.svg" class="hidden">
								<p class="link">Viajes</p>
							</div>

							<div class="items inlMid trans_fast ng-hide" ng-click="pushFavorites()" data-id="favoritos" ng-show="logged" id="favoritos" analytics-on="click" role="button" tabindex="0" aria-hidden="true">

								<img src="img/ic_star_red.svg" class="hidden">
								<p class="link">Mis favoritos</p>
							</div>
							<div class="items inlMid trans_fast ng-hide" ng-click="pushSuggestions()" data-id="recomendamos" ng-show="logged" id="recomendamos" analytics-on="click" role="button" tabindex="0" aria-hidden="true">

								<img src="img/ic_like_red.svg" class="hidden">
								<p class="link">Te recomendamos</p>
							</div>
						</nav>
					</section>

					<!--  -->
					<section id="cupon">

						<!-- Contenedor para 2 cupones -->
						<div class="row">

							<div class="col-6 col-sm-6 col-md-6">
								<div class="cupon contenedor_imagen"  >
									<div class="cnt">
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom " style="background-image:url(https://uploads.santandertwist.com.mx/uploads/large_images/promogde-620x295_rijdnTos43ItYVtUJ0IlvJb22XW5yKlU.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Llegaron los Puntos Recompensas a Ópticas Devlyn</h5>
												<p class="trans_fast white ng-binding" >Ya puedes pagar con Puntos Recompensas en todas las Ópticas Devlyn.
												<!--<br><br>Además, en compras mayores a $2,500 MXN podrás obtener:<br>10% de descuento +20% de bonificación en Monedero Estilo Devlyn.<br><br>Visita la sucursal más cercana.</p>-->
											</div>
										</a>
										<div class="starCont" id="Promo Favorite:  Llegaron los Puntos Recompensas a Ópticas Devlyn" role="button" tabindex="0" aria-hidden="false">
											<img src="/img/ic_corazon_white.svg" class="cntr trans_fast">
											<img src="/img/ic_corazon_red.svg" class="hiddeOp cntr trans_fast">
										</div>
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
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom " style="background-image:url(https://uploads.santandertwist.com.mx/uploads/large_images/promogde-620x295_rijdnTos43ItYVtUJ0IlvJb22XW5yKlU.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Llegaron los Puntos Recompensas a Ópticas Devlyn</h5>
												<p class="trans_fast white ng-binding" >Ya puedes pagar con Puntos Recompensas en todas las Ópticas Devlyn.
												<!--<br><br>Además, en compras mayores a $2,500 MXN podrás obtener:<br>10% de descuento +20% de bonificación en Monedero Estilo Devlyn.<br><br>Visita la sucursal más cercana.</p>-->
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
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom " style="background-image:url(https://uploads.santandertwist.com.mx/uploads/large_images/promogde-620x295_rijdnTos43ItYVtUJ0IlvJb22XW5yKlU.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Llegaron los Puntos Recompensas a Ópticas Devlyn</h5>
												<p class="trans_fast white ng-binding" >Ya puedes pagar con Puntos Recompensas en todas las Ópticas Devlyn.
												<!--<br><br>Además, en compras mayores a $2,500 MXN podrás obtener:<br>10% de descuento +20% de bonificación en Monedero Estilo Devlyn.<br><br>Visita la sucursal más cercana.</p>-->
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
								<div class="cupon contenedor_imagen">
									<div class="cnt">
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom" style="background-image:url(https://uploads.santandertwist.com.mx/uploads/large_images/promogde-620x295_rijdnTos43ItYVtUJ0IlvJb22XW5yKlU.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Llegaron los Puntos Recompensas a Ópticas Devlyn</h5>
												<p class="trans_fast white ng-binding" >Ya puedes pagar con Puntos Recompensas en todas las Ópticas Devlyn.
												<!--<br><br>Además, en compras mayores a $2,500 MXN podrás obtener:<br>10% de descuento +20% de bonificación en Monedero Estilo Devlyn.<br><br>Visita la sucursal más cercana.</p>-->
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
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom" style="background-image:url(https://uploads.santandertwist.com.mx/uploads/large_images/promogde-620x295_rijdnTos43ItYVtUJ0IlvJb22XW5yKlU.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Llegaron los Puntos Recompensas a Ópticas Devlyn</h5>
												<p class="trans_fast white ng-binding" >Ya puedes pagar con Puntos Recompensas en todas las Ópticas Devlyn.
												<!--<br><br>Además, en compras mayores a $2,500 MXN podrás obtener:<br>10% de descuento +20% de bonificación en Monedero Estilo Devlyn.<br><br>Visita la sucursal más cercana.</p>-->
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
								<div class="cupon contenedor_imagen cupon2"  >
									<div class="cnt">
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom" style="background-image:url(https://uploads.santandertwist.com.mx/uploads/large_images/promogde-620x295_rijdnTos43ItYVtUJ0IlvJb22XW5yKlU.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Llegaron los Puntos Recompensas a Ópticas Devlyn</h5>
												<p class="trans_fast white ng-binding" >Ya puedes pagar con Puntos Recompensas en todas las Ópticas Devlyn.
												<!--<br><br>Además, en compras mayores a $2,500 MXN podrás obtener:<br>10% de descuento +20% de bonificación en Monedero Estilo Devlyn.<br><br>Visita la sucursal más cercana.</p>-->
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
								<div class="cupon contenedor_imagen cupon2"  >
									<div class="cnt">
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom" style="background-image:url(https://uploads.santandertwist.com.mx/uploads/large_images/promogde-620x295_rijdnTos43ItYVtUJ0IlvJb22XW5yKlU.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Llegaron los Puntos Recompensas a Ópticas Devlyn</h5>
												<p class="trans_fast white ng-binding" >Ya puedes pagar con Puntos Recompensas en todas las Ópticas Devlyn.
												<!--<br><br>Además, en compras mayores a $2,500 MXN podrás obtener:<br>10% de descuento +20% de bonificación en Monedero Estilo Devlyn.<br><br>Visita la sucursal más cercana.</p>-->
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
								<div class="cupon contenedor_imagen cupon2"  >
									<div class="cnt">

										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="hidden prImgBg back cntr trans_fast imagen-zoom" style="background-image:url(https://uploads.santandertwist.com.mx/uploads/large_images/promogde-620x295_rijdnTos43ItYVtUJ0IlvJb22XW5yKlU.png)"></div>
											</div>
											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Llegaron los Puntos Recompensas a Ópticas Devlyn</h5>
												<p class="trans_fast white ng-binding" >Ya puedes pagar con Puntos Recompensas en todas las Ópticas Devlyn.
												<!--<br><br>Además, en compras mayores a $2,500 MXN podrás obtener:<br>10% de descuento +20% de bonificación en Monedero Estilo Devlyn.<br><br>Visita la sucursal más cercana.</p>-->
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
								<div class="cupon contenedor_imagen cupon2"  >
									<div class="cnt">
										<a href="/promo/#?promo=llegaron-los-puntos-recompensas-a-opticas-devlyn"   class="link-img-hover">
											<div class="imagen-over">
												<div class="imagen-zoom  prImgBg back cntr " style="background-image:url(https://uploads.santandertwist.com.mx/uploads/large_images/promogde-620x295_rijdnTos43ItYVtUJ0IlvJb22XW5yKlU.png)"></div>
											</div>

											<div class="cntDsc fondoTransparente">
												<h5 class="white ng-binding">Llegaron los Puntos Recompensas a Ópticas Devlyn</h5>
												<p class="trans_fast white ng-binding" >Ya puedes pagar con Puntos Recompensas en todas las Ópticas Devlyn.
												<!--<br><br>Además, en compras mayores a $2,500 MXN podrás obtener:<br>10% de descuento +20% de bonificación en Monedero Estilo Devlyn.<br><br>Visita la sucursal más cercana.</p>-->
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

	</body>
</html>
