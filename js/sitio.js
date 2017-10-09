var swiper = new Swiper('.swiper-container', {
			pagination: '.swiper-pagination',
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			spaceBetween: 60,
			autoplay: 8000,
			autoplayDisableOnInteraction: false,
			loop: true
		});
	 <!--End Initialize Swiper -->

	<!-- Funcion para menu responsivo -->
		function myFunction()
		{	var x = document.getElementById("TopNav");
			if (x.className === "topnav")
			{	x.className += " responsive";	}
		else {	x.className = "topnav";	}	}
	<!-- Fin Funcion para menu responsivo -->

	<!-- Funcion para activar contenido menus -->
		function activar(id)	{
			var container = $(".Container_santander");
			container.removeClass("ContenedorOculto");


			$("#"+id).toggleClass("ContenedorOculto");
		}
		<!-- Fin Funcion para activar contenido menus -->



		<!-- Funcion para ocultar contenido menus -->
		$(document).mouseup(function(e)
		{
			var container = $(".Container_santander");

			// if the target of the click isn't the container nor a descendant of the container
			if (!container.is(e.target) && container.has(e.target).length === 0)
			{
				container.removeClass("ContenedorOculto");
			}
		});
		<!--Fin Funcion para ocultar contenido menus -->


		$( "#outer" ).mouseover(function() {
			$( ".cntDsc " ).append( "<div>Handler for .mouseover() called.</div>" );

		});

		<!-- $(".fondoTransparente").hover( -->
			<!-- function(){ -->
			  <!-- $(this).animate({ -->
				 <!-- bottom:'0px' -->
			  <!-- },'slow'); -->
			<!-- // This only fires if the row is not undergoing an animation when you mouseover it -->
			<!-- }, -->
			<!-- function() { -->
			  <!-- $(this).animate({ -->
				 <!-- bottom:'-142px' -->
			  <!-- },'slow'); -->
			<!-- }); -->
		/*$(".items").hover(
			function(){
			  $(this).find('img').attr('src',$(this).find('img').attr('src').replace('red', 'white' ));
			  $(this).find('p').addClass("texto-blanco");
			// This only fires if the row is not undergoing an animation when you mouseover it
			},
			function() {
			   $(this).find('img').attr('src',$(this).find('img').attr('src').replace('white', 'red' ));
			   $(this).find('p').removeClass("texto-blanco");
			});	*/


		$(".cnt").hover(
		function() {
			$(this).find(".link-img-hover").find(".fondoTransparente").animate({
				 bottom:'0px'
			  },'slow');;
		$(this).find(".link-img-hover").find(".fondoTransparente").before("<div class='fondoNegro'></div>");

			$(this).find(".fondoNegro").fadeIn( "slow", function() {
    // Animation complete.
  });
			// This only fires if the row is not undergoing an animation when you mouseover it
			},
			function() {
			$(this).find(".link-img-hover").find(".fondoNegro").remove();
			$(this).find(".link-img-hover").find(".fondoTransparente").animate({
				 bottom:'-142px'
			  },'slow');;
			  $(this).find(".fondoNegro").fadeOut( "slow", function() {
    // Animation complete.
  });
			});



			$(document).ready(function() {

					$(".fancybox").fancybox({
						'width': '80%',
						'autoDimensions':false,
						'autoSize':false
						});

			});
