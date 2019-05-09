<!DOCTYPE html>
<html>
<head>
	
	<title>Danni | Balões Personalizados </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/baloes.png" sizes="32x32"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">

	
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" charset="iso-8859-1"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
      	scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    });
    } // End if
});
});
</script>
</head>

<body data-spy="scroll" data-target="#navbarResponsive" data-offset="50">

	<!-- Start Home Section -->

	<div id="home">

		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="#home"><img src="images/logo1.png"></a>
			
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="https://api.whatsapp.com/send?phone=5512982233396" target="_blank"><img src="images/whats.png" style=" "></a></li>
			</ul>
			

			

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>

			

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#sobre">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portifolio">Portifólio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contato">Contato</a>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Image Slider -->
		<div id="carouselExamplesIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExamplesIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExamplesIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExamplesIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active" style="background-image: url(images/img1.png);">
					<div class="carousel-caption text-center">
					</div>
				</div>
				<div class="carousel-item" style="background-image: url(images/img2.png);">
					<div class="carousel-caption text-center">
					</div>
				</div>
				<div class="carousel-item" style="background-image: url(images/img3.png);">
					<div class="carousel-caption text-center">
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExamplesIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExamplesIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>

		</div>
		<!-- End Image Slider -->
	</div>

	<!-- Start Soluções Section -->

	<div id="sobre" class="offset">

		<div class="col-12 text-center">
			<h3 class="heading">Sobre</h3>
		</div>

		<div class="row pading">

			<div class="col-md-6 col-sm-12 text-center" id="sobreimagem">

				<img src="images/logo.png">

			</div>

			<div class="col-md-6 col-sm-12 text-center" id="sobretexto">

				<h4>Olá meu nome é Danielle tenho 21 anos e sou uma apaixonada por balões. Trabalho nesse ramo desde meus 16 anos ou seja tenho 5 anos de esperiência ja, amo satisfazer meus clientes com minhas decorações e balões personalizados. Ta esperando o que para fazer um orçamento comigo. </h4>

			</div>
		</div>

	</div>

	<!-- End Sobre Section -->

	<!-- Start Portifolio Section -->

	<div id="portifolio" class="offset">

		<div class="col-12 text-center">
			<h3 class="heading">Portifólio</h3>
		</div>

		<div class="row no-padding">

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio1.png" data-lightbox="mygallery"><img src="images/small/portifolio1.png"></a>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio2.png" data-lightbox="mygallery"><img src="images/small/portifolio2.png"></a>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio3.png" data-lightbox="mygallery"><img src="images/small/portifolio3.png"></a>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio4.png" data-lightbox="mygallery"><img src="images/small/portifolio4.png"></a>
				</div>
			</div>

			<!--------------------------------------------------------------------------------------------------------------->

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio5.png" data-lightbox="mygallery"><img src="images/small/portifolio5.png"></a>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio6.png" data-lightbox="mygallery"><img src="images/small/portifolio6.png"></a>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio7.png" data-lightbox="mygallery"><img src="images/small/portifolio7.png"></a>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio8.png" data-lightbox="mygallery"><img src="images/small/portifolio8.png"></a>
				</div>
			</div>

			<!--------------------------------------------------------------------------------------------------------------->

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio9.png" data-lightbox="mygallery"><img src="images/small/portifolio9.png"></a>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio10.jpeg" data-lightbox="mygallery"><img src="images/small/portifolio10.png"></a>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio11.jpeg" data-lightbox="mygallery"><img src="images/small/portifolio11.png"></a>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12 text-center">
				<div class="portifolio">
					<a href="images/portifolio12.jpeg" data-lightbox="mygallery"><img src="images/small/portifolio12.png"></a>
				</div>
			</div>
		</div>
	</div>

	<!-- End Portifolio Section -->

	<!-- Start Contato Section -->

	<div id="contato" class="offset">

		<div class="col-12 text-center">
			<h3 class="heading">Contato</h3>
		</div>

		<div class="row text-center">
			<div class="col-md-12 col-xs-12">

				<h3>
					Entre em contato
				</h3>
				<p>
					Estou muito feliz por chegar ate aqui. 
				</p>
				<br>
				<br>
				<p>
					Me ligue ou mande uma mensagem para batermos um papo e você me contar mais sobre o que quer fazer para sua festa ou até mesmo para presentear aquela pessoa que é especial para você!
				</p>
				<br>
				<br>
				<p>
					Não esqueça de curtir nossa página do facebook e nos seguir no instagram.
				</p>
				<br>
				<br>
				<p>
					Cel: (12) 98223-3396 
				</p>
				<p>
					Telefone: (12)3302-7124
				</p>


			</div>
		</div>

	</div>

	<footer class="footer">

		<div class="container-fluid">
			<div class="row text-center">
				<div class=" meu-footer col-md-12">
					<div class="">
						<p>© 2019 Danni Balões | Todos os direitos reservados. Desenvolvido por <a href="https://www.mnwebdesigner.com.br" target="_blank">MN Web Designer</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!--- Script Source Files -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
</body>
</html>