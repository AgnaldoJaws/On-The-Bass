
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Layout Fixo</title>
<link href="css/style.css" rel="stylesheet" />


<meta name="viewport" content="width=device-width, initial-scale=1">

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<body>

	<header id="home">
		<div id="flip">
			<h2 id="a">Menu</h2>

			<div id="menu">

				<ul id="ulMenu">
					<li><a href="#contato" data-scroll>Contato</a></li>

					<li><a href="#suaBanda" data-scroll>Sua Banda</a></li>
					<li><a href="#">Videos</a></li>
					<li><a href="#tecnica" data-scroll>Técnicas</a></li>
					<li><a href="#teoria" data-scroll>Teoria</a> <!--  <ul id="abc"> 
			<li><a href="#">Teoria</a></li> 
			<li><a href="#">Teoria</a></li> 
			<li><a href="#">Teoria</a></li> 
			<li><a href="#">Teoria</a></li> 
		      </ul> --></li>
					<li><a href="#">Home</a></li>
				</ul>
				<h1>ON THE BASS</h1>
			</div>
		</div>

		<div id="panel">
			<ul>
				<li><a href="#" data-scroll>Contribua</a></li>
				<li><a href="#" data-scroll>Videos</a></li>
				<li><a href="#" data-scroll>Técnicas</a></li>
				<li><a href="#" data-scroll>Teoria</a>
			
			</ul>
		</div>
	</header>
	<!-- Final Menu -->

	<div id="imgDeskTop"></div>
	<div id="txt">
		<h3 id="txt2">Bem vindo ao maior portal sobre contrabaixo.</h3>
	</div>

	<div id="btn">
		<a href="#start" data-scroll><h3>START</h3></a>
	</div>

	<div id="btn2">
		<p></p>
	</div>
	<!-- Final img3-->


	<section id="section">
	
		<article id="start">
			<h2>Sobre</h2>
			<a href="header" data-scroll> Topo</a>
			<div id="anuncio"><p>Anuncio</p></div>
		</article>
		
		<article id="teoria">
			<h2>Teoria</h2>
			<a href="header" data-scroll>topo</a>
			<div id="anuncio"><p>Anuncio</p></div>
		</article>
		
		
	</section>




	<script> 
$(document).ready(function(){
    $("#a").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

</body>
</html>
