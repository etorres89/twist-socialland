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
		<script src="https://use.fontawesome.com/5c3b1798fb.js"></script>
		
	</head>
	<body>
		<!--se incluye header-->
		<?php include("header.php"); ?>
		<!--fin se incluye header-->
		
		
		
		
		
		<div id="content">
			
			
			<section class="all-view txtCnt st " >
				<div class="cntR">
					
					<div class="maxCont auto">
					
					<h1 class="txtLft black spaB">Contáctanos</h1>
					<form name="contact" class="contCnt " role="form" action="" method="POST">
					
					
					<div class="row col-12">
						<div class="col-12 col-sm-6 col-md-6">
							<div class="">
							<h1 class="txtLft reds spaB">Superlínea</h1> 
							<h6 class="txtLft smbld black spaB">DF y Zona Metropolitana</h6>
							<p class="txtLft black spaB">5169-4300</p>
							<h6 class="txtLft smbld black spaB spaT">Del interior de la República</h6>
							<p class="txtLft black spaB">01800-501-0000</p>
							<h1 class="txtLft reds spaB">Línea Recompensa</h1> 
							<h6 class="txtLft smbld black spaB">01 800 RECOMPE (73-266-73)</h6>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-6">
								
							<div class="">
							<div   class="has-error">
							  <p class="txtLft black">Nombre</p>
							  <input class="input"   required="required" aria-invalid="true" autocomplete="off">
							  <p class="error"   aria-hidden="false">*Requerido</p>
							</div>
							<div   class="has-error">
							  <p class="txtLft black">Mail de contacto</p>
							  <input class="input " type="email" name="email_contact"   validate-email="" aria-invalid="true" autocomplete="off">   
							  
							  <p class="error "   aria-hidden="true">*Requerido</p>
							</div>
							<div   class="has-error">
							  <p class="txtLft black">¿En qué te podemos ayudar?</p>
							  <textarea class="textarea " name="subject"   required="required" aria-invalid="true"></textarea>   
							  <p class="error"   aria-hidden="false">*Requerido</p>
							</div>
						   </div>
						</div>
					</div>
			
			

	        <input   class="spaT btn white" type="submit" name="Enviar" placeholder="Enviar" value="Enviar"   autocomplete="off">
	      </form>
	    </div>
				</div>
			</section>
			
			
		</div>
		
		
		<!--se incluye footer-->
		<?php include("footer.php"); ?>
		<!--fin se incluye footer-->
		
		 
	
</body>
</html>	