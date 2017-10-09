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
			
		<link rel="stylesheet" href="css/swiper.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="css/estilo.css">	
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"/> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"/>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src="https://use.fontawesome.com/5c3b1798fb.js"></script>
		
	</head>
	<body>
		 
		<!--se incluye header-->
		<?php include("header.php"); ?>
		<!--fin se incluye header-->
		
		
		
		<div id="content">
			
			
			<section id="" class="all-view txtCnt st " >
				<div class="cntR">
					<div class="maxCont">
						 
							<div class="md-no-sticky md-subheader _md subheader">  
								<div class="md-subheader-inner">    
									<div class="md-subheader-content">
										<h3 class="gray ng-scope">Mis Promociones favoritas</h3>
									</div>  
								</div>
							</div>
							
							
							<div class="row col-12">
								<div class="col-10 text-left">
									<img alt="Mi nombre" class="md-avatar d-inline-block" src="https://console.santandertwist.com.mx/uploads/small_images/mens-fashion-300x195_SvtebfnXDjKfyxoMW337SKEjsgQ6kvlv.png">
									<p class="black d-inline-block">Men's Fashion</p>
								</div>
								<div class="col-2 text-right">
									<div class="starCont active"  >
										<img src="img/ic_corazon_white.svg" class="cntr trans_fast">
										<a class="promo-pop-up" href="#data">
											<img src="img/ic_corazon_red.svg" class="cntr trans_fast">
										</a>
									</div>
								</div>
							</div>
							
							
							<div class="row col-12">
								<div class="col-10 text-left">
									<img alt="Mi nombre" class="md-avatar d-inline-block" src="https://console.santandertwist.com.mx/uploads/small_images/mens-fashion-300x195_SvtebfnXDjKfyxoMW337SKEjsgQ6kvlv.png">
									<p class="black d-inline-block">Men's Fashion</p>
								</div>
								<div class="col-2 text-right">
									<div class="starCont active"  >
										<img src="img/ic_corazon_white.svg" class="cntr trans_fast">
										<img src="img/ic_corazon_red.svg" class="cntr trans_fast">
									</div>
								</div>
							</div>
							
							
							<div class="row col-12">
								<div class="col-10 text-left">
									<img alt="Mi nombre" class="md-avatar d-inline-block" src="https://console.santandertwist.com.mx/uploads/small_images/mens-fashion-300x195_SvtebfnXDjKfyxoMW337SKEjsgQ6kvlv.png">
									<p class="black d-inline-block">Men's Fashion</p>
								</div>
								<div class="col-2 text-right">
									<div class="starCont active"  >
										<img src="img/ic_corazon_white.svg" class="cntr trans_fast">
										<img src="img/ic_corazon_red.svg" class="cntr trans_fast">
									</div>
								</div>
							</div>
							
							
							<div class="row col-12">
								<div class="col-10 text-left">
									<img alt="Mi nombre" class="md-avatar d-inline-block" src="https://console.santandertwist.com.mx/uploads/small_images/mens-fashion-300x195_SvtebfnXDjKfyxoMW337SKEjsgQ6kvlv.png">
									<p class="black d-inline-block">Men's Fashion</p>
								</div>
								<div class="col-2 text-right">
									<div class="starCont active"  >
										<img src="img/ic_corazon_white.svg" class="cntr trans_fast">
										<img src="img/ic_corazon_red.svg" class="cntr trans_fast">
									</div>
								</div>
							</div>		
							
							
							
						</div>
					</div>
				</section>
				
				
				
			</div>
			
			
			<!--se incluye footer-->
			<?php include("footer.php"); ?>
			<!--fin se incluye footer-->

			<div style="display:none">
				<div id="data">
					<div>
						<h3 class="md-title">¿Seguro quieres quitar de favoritos esta promoción?</h3>
					</div>
					<div>
						<div style="float: right;padding: 20px 5px 0 0;">
							<a href="#" style="margin: 0 12px">NO</a>
							<a href="#" style="margin: 0 12px">SI<a>
						</div>
					</div>
				</div>
			</div>
		
			<script type="text/javascript">
				$(document).ready(function() {
					$("a.promo-pop-up").fancybox({
						'hideOnContentClick': true,
						'smallBtn':false
					});
				});
			</script>
</body>
</html>	