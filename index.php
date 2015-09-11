
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

	<div id="logo">
		<h1>On The Bass</h1>
		
		<p>F</p>
		<p>Yuo</p>
	</div>

	<header id="home">
		<div id="flip">
			<h2 id="a">Menu</h2>
			<div id="menu">
				<ul id="ulMenu">
					<li><a href="#contato" data-scroll>Contato</a></li>
					<li><a href="#suaBanda" data-scroll>Sua Banda</a></li>
					<li><a href="#suaBanda" data-scroll>Contribuir</a></li>

					<li><a href="#tecnica" data-scroll>Técnicas</a></li>
					<li><a href="#teoria" data-scroll>Teoria</a> <!--  <ul id="abc"> 
					<li><a href="#">Teoria</a></li> 
					<li><a href="#">Teoria</a></li> 
					<li><a href="#">Teoria</a></li> 
					<li><a href="#">Teoria</a></li> 
				      </ul> --></li>
					<li><a href="#tecnica" data-scroll>Sobre</a></li>
					<li><a href="#">Home</a></li>

				</ul>
			</div>
		</div>

		<div id="panel">
			<ul>
				<li><a href="#" data-scroll>Contribua</a></li>
				<li><a href="#" data-scroll>Videos</a></li>
				<li><a href="#tecnica" data-scroll>Técnicas</a></li>
				<li><a href="#" data-scroll>Sobre</a>				
				<li><a href="#" data-scroll>Teoria</a>
				
			
			</ul>
		</div>
	</header>

	<!-- Final Menu -->

	

	<div id="txt">
		<h2 id="txt2">O site do baixista moderno!</h2>
		<h3>
			<a href="#start" data-scrooll>LET'S GO</a>
		</h3>
	</div>


	<!-- Final img3-->


	<section>

		<article id="start">
			<h2>
				<center>Start</center>
				
			</h2>
			
			<a href="header" data-scroll> Topo</a>

			
		</article>


		<article id="tecnica">
			<h2>
				<center>Tecncia</center>
			</h2>
			
			<a href="header" data-scroll> Topo</a>

			
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
