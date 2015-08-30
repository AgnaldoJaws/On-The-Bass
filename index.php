
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
		<li><a href="#">Contato</a></li>
		<li><a href="#">Contribua</a></li>
		<li><a href="#">Videos</a></li>
		<li><a href="#">Técnicas</a></li>
		 <li><a href="#">Teoria</a> 
		      <!--  <ul id="abc"> 
			<li><a href="#">Teoria</a></li> 
			<li><a href="#">Teoria</a></li> 
			<li><a href="#">Teoria</a></li> 
			<li><a href="#">Teoria</a></li> 
		      </ul> -->
		    </li>
		<li><a href="#">Principal</a></li>
	</ul>
</div>
		</div>

		<div id="panel">
			<ul>
				<li><a href="#blog" data-scroll>Sobre</a></li>
				<li><a href="#blog" data-scroll>Noticias</a></li>
				<li><a href="#blog" data-scroll>Blog</a></li>

			</ul>
		</div>
	</header>
	<!-- Final Menu -->

	<hr>



	<script> 
$(document).ready(function(){
    $("#a").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

</body>
</html>
