<div class="topnav row" id="TopNav">
			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			<div class=" col-offset-2 col-6">
				<a href="#">
					<img src="img/logo-santander.png" class="logo">
				</a>
				<a href="#">
					<img src="img/logo-twist.svg" class="logo">
				</a>
				<a href="#">
					<h6>Promociones</h6>
				</a>
				<a href="plus.php">
					<h6>Santander Plus</h6>
				</a>
			</div> 
			<div class="col-6  "> 
				<a href="javascrip:void(0);" class="" onclick="activar('logIn')" >
					<h6 class="inlMid"  >
						<img src="img/ic-account-circle.svg" class="inlBot">
						<span class="smBld animLink white">Iniciar sesión</span>
					</h6>
				</a>
				<a href="javascrip:void(0);" class="pull-right" onclick="activar('register')" >
					<h6 class="inlMid"  >
						<img src="img/ic-account-circle.svg" class="inlBot">
						<span class="smBld animLink white">Regístrate</span>
					</h6>
				</a>
				<a href="javascrip:void(0);" onclick="activar('microSite')" class="pull-right">
					<h6 class="">
						<img id="filt" class="inlBot" src="img/ic-apps.svg" data-id="microSite" ng-click="navOpen('micro');" role="button" tabindex="0">
					</h6>
				</a>
			</div>
		</div>
		<!--fin Menu inicial-->
		<!-- Login -->
		<div id="logIn" class="trans_fast txtCnt Container_santander" ng-class="navOpenLogIn" ng-show="navOpenLogIn == 'active'" aria-hidden="false" style="">
			<div class="closeMain black hidden" ng-click="navOpen('close');" role="button" tabindex="0"></div>
			<h1 class="txtLft">INICIO DE SESIÓN</h1>
			<!--  -->
			<form name="loginForm" ng-submit="loginForm.$valid &amp;&amp; login(user)" class="txtCnt ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" novalidate="" ng-show="login" aria-hidden="false">
				<div ng-class="{'has-error' :  loginForm.username.$invalid}" class="has-error">
					<p class="txtLft">Nombre de usuario </p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" type="text" name="username" ng-model="user.username" required="required" ng-minlength="6" ng-maxlength="50" aria-invalid="true" autocomplete="off">
					<p class="error ng-hide" ng-show="loginForm.username.$error.minlength" aria-hidden="true">Muy corto (6 caracteres)</p>
				</div>
				<div ng-class="{'has-error' : loginForm.password.$invalid}" class="has-error">
					<p class="txtLft">Contraseña</p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" type="password" name="password" ng-model="user.password" required="required" ng-minlength="8" ng-maxlength="20" autocomplete="off" aria-invalid="true">
					<p class="error ng-hide" ng-show="loginForm.password.$error.minlength" aria-hidden="true">Muy corto (8 caracteres)</p>
					<p class="error ng-hide" ng-show="loginForm.password.$error.maxlength" aria-hidden="true">Muy largo (20 caracteres)</p>
				</div>
				<input class="spaT btn white" type="submit" name="submit" value="Iniciar Sesión" id="submitLog" autocomplete="off">
				<a href="/resetPassMail"><p class="gray spaT">¿Olvidaste tu usuario y/o contraseña?</p></a>
			</form>
			<!--  -->
			<form name="newUser" ng-submit="newUser.$valid &amp;&amp; sendNewUser(user) " ng-show="loginResponse" class="ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-hide" aria-hidden="true">
				<p>Recuerda que apartir de ahora, iniciarás sesión
				con el nombre de usuario que elijas y tu contraseña.</p>
				<div ng-class="{'has-error' :  newUser.new_username.$invalid}" class="has-error">
					<p class="txtLft">Nombre de usuario</p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength" type="text" name="new_username" ng-model="user.new_username" ng-minlength="8" required="required" aria-invalid="true" autocomplete="off">
					<p class="error ng-hide" ng-show="newUser.new_username.$error.minlength" aria-hidden="true">Muy corto (8 caracteres)</p>
					<p class="error ng-hide" ng-show="newUser.new_username.$error.email" aria-hidden="true">No debe ser un email</p>
				</div>
				<input class="spaT btn white" type="submit" name="submit" value="Guardar" id="submitLog" autocomplete="off">
			</form>
		</div>
		<!-- Register -->
		<div id="register" class="trans_fast txtCnt Container_santander" ng-class="navOpenRegister" ng-show="navOpenRegister == 'active'" aria-hidden="true" style="">
			<div class="closeMain black hidden" ng-click="navOpen('close');" role="button" tabindex="0"></div>
			<h1 class="txtLft">REGISTRARSE</h1>
			<form name="registerForm" ng-submit="register(user)" class="ng-pristine ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-email" novalidate="">
				<p class="txtLft">Afiliarse con</p>
				<div>
					<input id="client_number" class="spaL ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" type="radio" name="content" value="numClient" ng-model="content" ng-checked="true" ng-required="required" checked="checked" aria-invalid="false" autocomplete="off"><span>Número de cliente</span>
					<input id="card_number" class="spaR spaL ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" type="radio" name="content" value="numCard" ng-model="content" ng-required="required" aria-invalid="false" autocomplete="off"><span>Número de tarjeta de crédito</span>
				</div>
				<!--  -->
				<div ng-show="content == 'numClient'" ng-class="{'has-error' : registerForm.numberClient.$invalid}" aria-hidden="false" class="has-error">
					<p class="txtLft">Número de cliente</p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" name="numberClient" type="text" placeholder="Número de cliente" ng-model="user.numberClient" ng-minlength="8" ng-maxlength="8" numbers-only="" required="required" maxlength="8" minlength="8" aria-invalid="true" autocomplete="off">
					<p class="error ng-hide" ng-show="registerForm.numberClient.$error.minlength" aria-hidden="true">Muy corto (8 carateres)</p>
					<p class="error ng-hide" ng-show="registerForm.numberClient.$error.maxlength" aria-hidden="true">Muy largo (8 carateres)</p>
					<p class="error" ng-show="registerForm.numberClient.$error.required" aria-hidden="false">*Requerido</p>
				</div>
				<!--  -->
				<div ng-show="content == 'numCard'" ng-class="{'has-error' : registerForm.numberCard.$invalid}" aria-hidden="true" class="ng-hide has-error">
					<p class="txtLft">Número de Tarjeta</p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" name="numberCard" type="text" placeholder="Número de Tarjeta" ng-model="user.numberCard" ng-minlength="16" ng-maxlength="16" numbers-only="" required="required" maxlength="16" minlength="16" aria-invalid="true" autocomplete="off"> 
					<p class="error ng-hide" ng-show="registerForm.numberCard.$error.minlength" aria-hidden="true">Muy corto (16 caracteres)</p>
					<p class="error ng-hide" ng-show="registerForm.numberCard.$error.maxlength" aria-hidden="true">Muy largo (16 caracteres)</p>
					<p class="error" ng-show="registerForm.numberCard.$error.required" aria-hidden="false">*Requerido</p>
				</div>
				<!--  -->
				<div ng-class="{'has-error' :  registerForm.username.$invalid}" class="has-error">
					<p class="txtLft">Usuario</p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" name="username" type="text" ng-model="user.username" ng-minlength="6" ng-maxlength="15" required="required" aria-invalid="true" autocomplete="off"> 
					<p class="error ng-hide" ng-show="registerForm.username.$error.minlength" aria-hidden="true">Muy corto (6 caracteres)</p>
					<p class="error" ng-show="registerForm.username.$error.required" aria-hidden="false">*Requerido</p>
				</div>
				<!--  -->
				<div ng-class="{'has-error' :  registerForm.name.$invalid}" class="has-error">
					<p class="txtLft">Nombre</p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" name="name" type="text" ng-model="user.name" ng-minlength="5" ng-maxlength="50" required="required" aria-invalid="true" autocomplete="off"> 
					<p class="error" ng-show="registerForm.name.$error.required" aria-hidden="false">*Requerido</p>
					<p class="error ng-hide" ng-show="registerForm.name.$error.minlength" aria-hidden="true">Muy corto (5 caracteres)</p>
				</div>
				<!--  -->
				<div ng-class="{'has-error' :  registerForm.email.$invalid}" class="has-error">
					<p class="txtLft">Correo electrónico</p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-valid-email" name="email" type="email" ng-model="user.email" ng-minlength="5" ng-maxlength="50" required="required" aria-invalid="true" autocomplete="off"> 
					<p class="error ng-hide" ng-show="registerForm.email.$error.minlength" aria-hidden="true">Muy corto (5 caracteres)</p>
					<p class="error ng-hide" ng-show="registerForm.email.$error.email" aria-hidden="true">No es un correo</p>
					<p class="error" ng-show="registerForm.email.$error.required" aria-hidden="false">*Requerido</p>
				</div>
				<!--  -->
				<div ng-class="{'has-error' :  registerForm.password.$invalid}" class="has-error">
					<p class="txtLft">Contraseña</p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" name="password" type="password" ng-model="user.password" ng-minlength="8" ng-maxlength="20" required="required" autocomplete="off" aria-invalid="true"> 
					<p class="error ng-hide" ng-show="registerForm.password.$error.minlength" aria-hidden="true">Muy corto (8 caracteres)</p>
					<p class="error ng-hide" ng-show="registerForm.password.$error.maxlength" aria-hidden="true">Muy largo (20 caracteres)</p>
					<p class="error" ng-show="registerForm.password.$error.required" aria-hidden="false">*Requerido</p>
				</div>
				<!--  -->
				<div ng-class="{'has-error' :  registerForm.password_confirmation.$invalid}" class="has-error">
					<p class="txtLft">Confirmar contraseña</p>
					<input class="input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength" name="password_confirmation" type="password" ng-model="user.password_confirmation" ng-minlength="8" ng-maxlength="20" required="required" aria-invalid="true" autocomplete="off">
					<p class="error ng-hide" ng-show="registerForm.password_confirmation.$error.minlength" aria-hidden="true">Muy corto (8 caracteres)</p>
					<p class="error ng-hide" ng-show="registerForm.password_confirmation.$error.maxlength" aria-hidden="true">Muy largo (20 caracteres)</p>
					<p class="error" ng-show="registerForm.password_confirmation.$error.required" aria-hidden="false">*Requerido</p>
				</div>
				<br>
				<div>
					<p><input id="termReg" ng-mode="user.terms" class="inlMid spaT" type="checkbox" name="terms" value="Politicas" required="" autocomplete="off"> Acepto los <span class="ln hand" ng-click="showLegal(ev)" role="button" tabindex="0">términos y condiciones de uso</span>, y las <span class="ln hand" ng-click="showLegal(ev)" role="button" tabindex="0">políticas de privacidad.</span></p>
					<p><input id="termMail" ng-mode="user.termsMail" class="inlMid spaT" type="checkbox" name="termsMail" value="Politicas" required="" autocomplete="off"> Acepto recibir los boletines y promociones.</p>
					<div ng-show="termsAccepted" aria-hidden="true" class="ng-hide">
						<div>Debes de aceptar los términos y condiciones, así como el envio de mails con boletines y promociones</div>
					</div>
				</div>
				<input ng-show="!loaderR" ng-submit="registerForm.$invalid" class="spaT btn white" type="submit" name="submit" value="Registrarse" id="submitReg" aria-hidden="false" autocomplete="off">
				<md-progress-circular ng-show="loaderR" class="md-accent md-hue-2 progressR ng-isolate-scope md-mode-indeterminate ng-hide" md-diameter="20px" aria-valuemin="0" aria-valuemax="100" role="progressbar" md-mode="indeterminate" aria-hidden="true" style="width: 20px; height: 20px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="width: 20px; height: 20px; transform-origin: 10px 10px 10px;"><path fill="none" d="M10.000785398162401,18.99999996573054A9,9 0 1,1 18.560139449915333,12.779210786896751" style="stroke-width: 2px;"></path></svg></md-progress-circular>
			</form>
		</div>
		<!-- Links externos -->
		<div id="microSite" class="row trans_fast txtCnt Container_santander" ng-class="navOpenMicro" ng-show="navOpenMicro == 'active'" aria-hidden="true">
			<div class="col-md-6 bordegris" >
				<div class="lnk inlTop">
					<a href="http://www.santander.com.mx/" target="_blank" onclick="dataLayer.push({'event':'tk-event','evt-cat': 'Nav','evt-act': 'click','evt-lab': 'Sitio Santander','evt-val': 1});" id="Header: Sitio Santander" analytics-on="click">
						<div>
							<img src="img/logo_09.png">
						</div>
					</a>
					<a href="https://www.aeromexico.com/es-mx/promociones/experiencias-santander-aeromexico" target="_blank" onclick="dataLayer.push({'event':'tk-event','evt-cat': 'Nav','evt-act': 'click','evt-lab': 'Aeromexico','evt-val': 1});" id="Header: Aeromexico" analytics-on="click">
						<div>
							<img src="img/logo_06.png">
						</div>
					</a>
					<a href="http://www.viajacompara.com/" target="_blank" onclick="dataLayer.push({'event':'tk-event','evt-cat': 'Nav','evt-act': 'click','evt-lab': 'Viajacompara','evt-val': 1});" id="Header: Viajacompara" analytics-on="click">
						<div>
							<img src="img/logo_05.png">
						</div>
					</a>
					<a href="https://www.fiestarewards.com/es" target="_blank" onclick="dataLayer.push({'event':'tk-event','evt-cat': 'Nav','evt-act': 'click','evt-lab': 'Fiesta Rewards','evt-val': 1});" id="Header: Fiesta Rewards" analytics-on="click">
						<div>
							<img src="img/logo_07.png">
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-6 " >		
				<div class="lnk inlTop">
					<a href="https://www.loyaltygateway.com/recompensassantanderrewards/rewards/SignInServlet?bank_id=36621&amp;i18n=es_US" target="_blank" onclick="dataLayer.push({'event':'tk-event','evt-cat': 'Nav','evt-act': 'click','evt-lab': 'c','evt-val': 1});" id="Header: Recompensas Rewards" analytics-on="click">
						<div>
							<img src="img/logo_02.png">
						</div>
					</a>
					<a href="https://www.santandertwist.com.mx/pagaconpuntos" target="_blank" onclick="dataLayer.push({'event':'tk-event','evt-cat': 'Nav','evt-act': 'click','evt-lab': 'Paga con Puntos','evt-val': 1});" id="Header: Paga con Puntos" analytics-on="click">
						<div>
							<img src="img/logo_10.png">
						</div>
					</a>
					<a href="http://www.tienda.santandertwist.com.mx/" target="_blank" onclick="dataLayer.push({'event':'tk-event','evt-cat': 'Nav','evt-act': 'click','evt-lab': 'Tienda','evt-val': 1});" id="Header: Aeromexico" analytics-on="click">
						<div>
							<img src="img/logo_04.png">
						</div>
					</a>
					<a href="https://www.tucarrera.mx/" target="_blank" onclick="dataLayer.push({'event':'tk-event','evt-cat': 'Nav','evt-act': 'click','evt-lab': 'Fiesta Rewards','evt-val': 1});" id="Header: Tu carrera" analytics-on="click">
						<div>
							<img src="img/tu_carrera.jpeg">
						</div>
					</a>
				</div>
			</div>
		</div>
		
		