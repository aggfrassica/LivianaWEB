
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>PC Home</title>
</head>
<body>
	<?php include(__DIR__.'/navbar.php');?>
	<section id="maintop">
		<div class="principale">
			<h1>Prova prova</h1>
			<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.
			</h2>
		</div>
		<div class="chef muovi">
			<h1>Ristorante</h1>
			<!-- <h2>prova</h2> -->
			<a href="#chef" title="">Scopri di più</a>

		</div>
		<div class="metallo muovi">
			<!-- sfondo chef -->
			<h1>Azienda</h1>
			<!-- <h2>prova</h2> -->
			<a href="#azienda" title="">Scopri di più</a>
		</div>
		<div class="capelli muovi">
			<!-- sfondo chef -->
			<h1>Personale</h1>
			<!-- <h2>prova</h2> -->
			<a href="#metal" title="">Scopri di più</a>
		</div>
	</section>
	<section id="azienda" class="scegli">
		<header class="descr-fascia_azienda banners">
			<h1>Azienda</h1>
			<h2>Scopri come può diventare il sito per il tuo azienda<br>
				bassa, media e alta <br>
				scegli la fascia più adatta al te e guarda cosa possiamo offrire
			</h2>
			<a href="azienda.php" title="">Scopri i template disponibili</a>
		</header>
		<a href="#maintop" title="Tornasu"><img src="arrow-up.svg" alt="Torna su"></a>	
	</section>
	<section id="metal" class="scegli">
		<header class="descr-fascia_pers banners">			
			<h2>Scopri come può diventare il tuo sito WEB personale<br>
				bassa, media e alta <br>
				scegli la fascia più adatta al te e guarda cosa possiamo offrire</h2> 
			<h1>Personale</h1>
			<a href="index_personale.php" title="">Scopri i template disponibili</a>
		</header>
	</section>
	<section id="chef" class="scegli">
		<header class="descr-fascia_rest banners">
			<h1>Ristorante
			</h1>
			<h2>Scopri come può diventare il sito per il tuo ristorante<br>
				bassa, media e alta <br>
				scegli la fascia più adatta al te e guarda cosa possiamo offrire</h2> 
				<a href="index_restaurant.php" title="">Scopri i template disponibili</a>
		</header>
	</section>
	<section id="chef" class="scegli">
		<header class="descr-fascia_dent banners">
		<h2>
			Scopri come può diventare il sito per il tuo dentista<br>
				bassa, media e alta <br>
				scegli la fascia più adatta al te e guarda cosa possiamo offrire 
			</h2>
			<h1>Dentista</h1>
				<a href="index_dentista.php" title="">Scopri i template disponibili</a>
		</header>
	</section>
	<section id="scegli">
		<header class="descr-fascia_altro banners">	
		<h1>Altro..
			</h1>
			<h2>Spiegaci la tua idea per il tuo sito WEB.<br>
				Saremo felici di ascoltarti. <br>
				Lavoreremo insieme per la realizzazione del sito per te o la tua attività!</h2> 
			<a href="" title="">Contattaci</a>
		</header>
	</section>
</body>
</html>