<?php
include_once 'lingua.php';
?>
<html>
	<head>
		<title>Cibovagando</title>
		<meta charset="utf-8" />
		<meta name="keywords" content="cibo,vagando,cibovagando,food,shopper,personal,crearte, cooperativa, casale, casale monferrato, lavoro, offerte lavoro, eventi, piemonte, manifestazioni, organizzazione eventi, teatro, maschere, aiuto compiti, scuola, doposcuola, ripetizioni">
		<meta name="description" content="Cooperativa Crearte di Casale Monferrato, progetto Cibovagando">
		<link rel="stylesheet" type="text/css" media="screen" title="style" href="style.css" />
		<link rel="icon" type="image/png" href="immagini/lg.png" />
	</head>
	<body>
    	<div id="header" class="header">
			<div>
				<br/>
				<a href="index.php" ><img src="immagini/logoCV.jpg" width=130px class="headIMG"></a>
				<div class="mainTitle">
					<h2><i>CIBOVAGANDO - Food&Wine Personal Shopper</i></h2>
					<h2><i><?php echo $lang['titolone'];?></i></h2><br/><br/><br/><br/><br/>
				</div>
			</div>
		</div>
		<div>	
			<div class="content_menu">
				<ul class="list" id="horiznav">
				<li class="list"><input type="button" class="menubuttons" onclick="document.location='index.php'" value="Home"></input></li>
				<li class="list"><input type="button" class="menubuttons" onclick="document.location='progetto.php'" value="<?php echo $lang['btn_progetto']?>"></input></li>
				<li class="list"><input type="button" class="menubuttons" value="Food&Wine personal shopper"></input>
					<ul class="list">
						<li><input type="button" class="menubuttons" onclick="document.location='chi.php'" value="<?php echo $lang['btn_chi']?>"></input></li>
						<li><input type="button" class="menubuttons" onclick="document.location='target.php'" value="<?php echo $lang['btn_aChi']?>"></input></li>
					</ul>
				</li>
				<li class="list"><input type="button" class="menubuttons"  value="Info"></input>
					<ul class="list">
						<li><input type="button" class="menubuttons" onclick="document.location='chi_siamo.php'" value="<?php echo $lang['btn_noi']?>"></input></li>
						<li><input type="button" class="menubuttons" onclick="document.location='contatti.php'" value="<?php echo $lang['btn_contatti']?>"></input></li>
						<li><input type="button" class="menubuttons" onclick="document.location='faq.php'" value="FAQ"></input></li>
					</ul>
				</li>
				<li class="list"><input type="button" class="menubuttons"  value="Lingua / Language"></input>
					<ul class="list">
						<li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=it'" value="Italiano"></input></li>
						<li><input type="button" class="menubuttons" onclick="document.location='index.php?lang=en'" value="English"></input></li>
					</ul>
				</li>
			</ul>
			</div>
		</div>
		
		<div class="menu">
		<ul id="vertnav" >
			<li><input type="button" class="menubuttons" onclick="document.location='aziende.php'" value="<?php echo $lang['btn_aziende']?>"></input></li>
			<li><input type="button" class="menubuttons" onclick="document.location='privati.php'" value="<?php echo $lang['btn_privati']?>"></input></li>
			<li><input type="button" class="menubuttons" value="<?php echo $lang['btn_turismo']?>"></input>
				<ul class="list">
					<li><input type="button" class="menubuttons" onclick="document.location='proposte_tematiche.php'" value="<?php echo $lang['btn_tema']?>"></input></li>
					<li><input type="button" class="menubuttons" onclick="document.location='esp_personalizzate.php'" value="<?php echo $lang['btn_esperienze']?>"></input></li>
					<!--<li><input type="button" class="menubuttons"  value="Prezzo del servizio"></input></li>-->
				</ul>
			</li>
			<li class="list"><input type="button" class="menubuttons" onclick="document.location='notizie.php'" value="<?php echo $lang['btn_notizie']?>"></input></li>
		</ul>
		</div>
    
		<div id="contents" class="content">
			<br/>
			<fieldset>
				<h2><i>Notizie</i></h2>
			</fieldset>
			<fieldset>
				<h4>Cibovagando a Natal'esco il 13 e 14 Dicembre</h4>

				<p>In occasione dell'evento NATAL'ESCO, che si svolgerà nei nove comuni interessati dal riconoscimento UNESCO ("Monferrato degli Infernot"), Cibovagando offrirà gratuitamente il servizio di Personal Shopper Enogastronomico, sabato 13 e domenica 14 Dicembre, dalle ore 14 alle ore 19, per itinerari a scelta di 1 ora o 2 ore per persona/gruppo di persone. Il servizio è garantito <b>solo su prenotazione</b> fino ad esaurimento disponibilità di personale, <b>entro le ore 17 del giorno 12 Dicembre</b>, tramite mail a: <a href="mailto:cibovagando@cooperativacrearte.it">cibovagando@cooperativacrearte.it</a> oppure al numero (+39) 3388739791. Cibovagando sarà inoltre presente presso il punto informativo allestito ad Olivola in occasione della manifestazione, per fornire informazioni sul proprio servizio e sull'enogastronomia locale.
				</p><p>Di seguito la locandina e il programma di Natal'esco...</p>
				<iframe src="documenti/natalesco2014/natalesco_manifesto.pdf" width="100%" height="600px">
					<p>Sembra che non ci sia un lettore PDF integrato, puoi scaricare il documento da <a href="documenti/natalesco2014/natalesco_manifesto.pdf">qui</a></p>
				</iframe>
				<iframe src="documenti/natalesco2014/natalesco_programma.pdf" width="100%" height="600px">
					<p>Sembra che non ci sia un lettore PDF integrato, puoi scaricare il documento da <a href="documenti/natalesco2014/natalesco_programma.pdf">qui</a></p>
				</iframe>
			</fieldset>
			<fieldset>
				<h4>La nostra storia comincia da qui…</h4>
                <iframe src="documenti/monf_2014_10_17_075_001.pdf" width="100%" height="600px">
					<p>Sembra che non ci sia un lettore PDF integrato, puoi scaricare il documento da <a href="documenti/monf_2014_10_17_075_001.pdf">qui</a></p>
				</iframe>
			</fieldset>
			<fieldset>
                <iframe src="documenti/monf_2014_10_17_075_007.pdf" width="100%" height="600px">
				<p>Sembra che non ci sia un lettore PDF integrato, puoi scaricare il documento da <a href="documenti/monf_2014_10_17_075_007.pdf">qui</a></p>
				</iframe>
			</fieldset>
		</div>
		
	</body>
	<footer><!--<p class="center">We speak: Italiano, English, Português, Français, Espanhol, Deutsch</p>-->
		<a href="https://www.linkedin.com/pub/matteo-patrucco/7b/562/989"><h6 class="center">License: (CC) 2014 Matteo Patrucco</h6></a>
	</footer>
</html>