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
						<h1 class="txtLft black spaB">Editar perfil</h1>
						<form name="editForm"  novalidate="" class="contCnt " role="form">
							<div>
								<p class="txtLft black">Usuario</p>
								<input class="input" type="text" name="username" disabled="true" value="usuario" autocomplete="off">
							</div>
							<div ng-class="{'has-error' : editForm.name.$invalid}" class="has-error">
								<p class="txtLft black">Nombre</p>
								<input class="input  " type="text" name="name" required="required"   value="Alejandro Cortes">  
								<p class="error " ng-show="editForm.name.$error.mail" aria-hidden="true">Muy corto</p>
							</div>
							<div ng-class="{'has-error' : editForm.email.$invalid}" class="has-error">
								<p class="txtLft black">Correo electrónico</p>
								
								<input class="input  " type="email" name="email" required="required"   aria-invalid="true" autocomplete="off" value="alejandro.cortes@socialand.com">
								<p class="error " ng-show="editForm.email.$error.minlength" aria-hidden="true">Muy corto</p>
								
							</div>
							<a href="/resetPassword">
								<p class="txtLft reds hand">Cambiar contaseña</p>
							</a>
							<button class="spaT btn white" type="submit" name="submit">Actualizar</button>
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