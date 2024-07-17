<!DOCTYPE html>
<html>
<head>
	<title>CLD TECH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>

	<section class="topo">
		<div class="center">
			<img src="images/logo1.png" height="100px" />
			<ul class="menu-desktop">
				<li><a href="index.php">Home</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="contato.php">Contato</a></li>
			</ul>
			<div class="menu-mobile">
			<i class="fas fa-align-right"></i>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->


	<section class="contato">
		<div class="center">
			<div class="w50 contato-info">
				<h2>O mais importante, primeiro contato.</h2>
				<br />
				<br />

			<div class="mapa-container">
				<div id="mapa"></div>
			</div><!--mapa-->
			</div>

			<div class="w50 contato-form">
				<form>
					<input placeholder="Nome" type="text" />
					<input placeholder="E-mail" type="text" />
					<input placeholder="Telefone" type="text" />
					<select>
						<option>Geral</option>
						<option>Suporte</option>
					</select>
					<textarea placeholder="Mensagem"></textarea>
					<input type="submit" value="Enviar!">
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</section>


	<footer style="padding:60px 0;">
		<div class="center">
			<div style="width: 40%;text-align: right;" class="col-footer">
				
			</div>
		</div>
		
		<div style="width: 100%; text-align: center;" class="col-footer"><p>Todos os direitos reservados!</p></div>
	</footer>

<script src="js/jquery.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
<script src="js/map.js"></script>
<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
	$('.menu-mobile').find('ul').slideToggle();
	})
</script>
</body>
</html>