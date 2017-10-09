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
					
					<div class="maxCont">
						<h5 class="black spaB">Ingresa tu correo electrónico para reestablecer tu contraseña y/o recordar tu usuario.</h5>
						<div class="contCnt spaT">
							<!-- ng-submit="resetMailData(user)" -->
							<form class="contCnt  " name="resetMail" action="" method="POST">
								<div  class="has-error">
									<p class="txtLft black">Correo electrónico</p>
									<input class="input " type="email" name="email" required="" aria-invalid="true" autocomplete="off">
									<p class="error"   aria-hidden="false">*Requerido</p>
								</div>
								<input   class="spaT btn white btn-reset" type="submit" name="submit" value="Enviar"   autocomplete="off">
								<a href="#content-confirmacion-reset" class="fancybox">Confirmacion</a>
								<!-- <input   class="spaT btn white" type="submit" name="submit" value="Enviar"   autocomplete="off"> -->
							</form>
						</div>
					</div>
					
				</div>
			</section>
			
			
		</div>
		
		
		<!--se incluye footer-->
		<?php include("footer.php"); ?>
		<!--fin se incluye footer-->
		
		<div style="display: none">
    <div id="content-confirmacion-reset" style="width:80%">			
			<div class="text-center"> 
			Hemos recibido tu solicitud para reestablecer tu contraseña o recuperar nombre de usuario.<br>
			En breve enviaremos un correo con tu nombre de usuario y los datos para reestablecer la contraseña.
			 <div>
			 <br>
			
							<form class="contCnt" >
								 
								<input   class="spaT btn white" type="submit" name="submit" value="Listo"   autocomplete="off">
							</form>
	</div>
</div>
		<script>
		$('.btn-reset').click(function () {
        $.fancybox([
            { href : '#fancybox-popup-form' }
        ]);
		});
		</script>
	</body>
</html>	