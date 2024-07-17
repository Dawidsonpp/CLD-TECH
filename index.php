<!DOCTYPE html>
<html>
<head>
	<title>CLD TECH</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/logo1.ico" type="images/logo1.ico" />
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
			<br />
			<br />
			<div class="w50 time-descricao">
				<h2>Melhore a sua forma de chegar a quem é preciso.</h2>
				<p>Estamos aqui para te ajudar, criando uma forma mais rápida de chegar ao seu cliente.</p>
			</div><!--w50-->
			<div class="w50 time-imagem">
				<img src="images/equipe.png" />
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->

	<section class="diferenciais">
			
			<div class="center">
				<h2>Contribuímos de ponta a ponta</h2>

				<div class="icons-diferenciais">

					<div class="box-single-diferenciais">
						<img src="images/icon1.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que sua empresa esteja no celular.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="images/icon2.png" />
						<h3>Internet</h3>
						<p>Garanta que você esteja na web.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="images/icon3.png" />
						<h3>Equipe</h3>
						<p>Um meio mais fácil para sua equipe disponibilizar os produtos.</p>
					</div><!--box-single-diferenciais-->
					<div class="clear"></div>
				</div><!--icons-diferenciais-->

			</div>

	</section>

	<section class="sobre-time">
		<div class="center">
			<div class="w50 time-descricao-2">
				<h2>Um time experiente,<br/>comunicador e coeso.</h2>
				<p>A CDL TECH acredita que marcas fortes são construídas a partir de transformações importantes e positivas na vida das pessoas. Exatamente como uma conversa que ganha forma, a ideia que se transforma.
				<br /><br/>
				Comunicar de forma coerente e clara não é algo fácil, mas estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou público interno, você determina como vamos te ajudar.</p>
			</div><!--w50-->
			<div class="w50 img-time">
				<img src="images/time.png" />
			</div>
			<div class="clear"></div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<footer>
	<section class="metodologia">
		<div class="center">
			<h2>Conheça nossa Metodologia</h2>
			<p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por e-mail ou telefone.</p>
			<a href="contato.php">Entrar Contato</a>
		</div>
	</section>
		<div class="center">
			<div style="width: 40%;text-align: right;" class="col-footer">
				
			</div>
		</div>

		<div style="width: 100%; text-align: center;" class="col-footer"><p>Todos os direitos reservados!</p></div>
	</footer>

<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script type="text/javascript"></script>
<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
	$('.menu-mobile').find('ul').slideToggle();
	})
</script>
</body>
</html>