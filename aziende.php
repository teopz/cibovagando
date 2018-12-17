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
						<li><input type="button" class="menubuttons" onclick="document.location='chi.php'" value="<?php echo utf8_decode($lang['btn_chi'])?>"></input></li>
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
			<h2><i>SERVIZI PER LE AZIENDE</i></h2>
			<h4><i>La nostra passione, un valore aggiunto per la vostra azienda</i></h4>
			<p>Alcuni dei nostri servizi per la tua azienda:</p>
			<p><ul>
				<li>Personal Shopper Enogastronomico per ospiti aziendali</li>
				<li>Confezionamento Cesti Regalo</li>
				<li>Consulenza e organizzazione eventi</li>
				<li>Supporto per il miglioramento della sostenibilità</li>
				<li>Educazione e consulenza alimentare e ambientale</li>
				<li>Gestione ordini e fornitori</li>
				<li>Supporto per la Comunicazione della sostenibilità</li>
			</ul></p>
			
			<h2><i>Food&Wine Personal Shopper per gli ospiti aziendali</i></h2>
			<p>Cibovagando è la soluzione perfetta per accompagnare i vostri clienti in visita tra le bellezze del Monferrato e non solo. 
			</p>
			<p>Il Food&Wine Personal Shopper è, infatti, la figura ideale, professionale e qualificata, per <b>accompagnare gli 
				ospiti aziendali alla scoperta dei prodotti enogastronomici d'eccellenza del territorio durante i giorni di soggiorno 
				in Monferrato.</b> Su richiesta può essere fornito anche un servizio di autista e di guida turistica in aggiunta al 
				personal shopper. Possiamo fornire il servizio in diverse lingue straniere: inglese, francese, tedesco, spagnolo, 
				portoghese e cinese. 
			</p>
			<p>Per maggiori informazioni sul Personal Shopper Enogastronomico, visitare anche la pagina <a href="proposte_tematiche.php">Cibovagando per il turismo.</a></p>
			
			<h2><i>Altri servizi per le aziende...</i></h2>

			<p>Negli ultimi anni è sempre più evidente quanto la <b>sostenibilità e la qualità</b> rappresentino per le aziende un 
			<b>	valore aggiunto strategico</b> per affrontare la concorrenza sul mercato. L'attenzione e la sensibilità dei consumatori 
				per la qualità e la sostenibilità ambientale riguarda anche le loro <b>scelte alimentari</b> e premia le aziende che accettano 
				la sfida, adeguando la loro offerta in funzione di questi due principi. Il Personal Shopper Enogastronomico si colloca 
				in questa fase di rinnovamento come consulente, per far fronte alle difficoltà che l'azienda può incontrare nel processo, 
				dall'individuazione delle criticità alla comunicazione efficacie delle sue scelte virtuose. 
			</p>
			<p>
				Alle <b>aziende che non operano in campo alimentare</b>, ma che vogliono comunque privilegiare un consumo alimentare sostenibile, 
				il Personal Shopper offre <b>consulenza e supporto organizzativo per eventi e cene e ricevimenti aziendali</b> 
				(scelta dei fornitori, della location, dei menù, ecc.). 
			</p>
			<h2><i>Food & Wine Personal Shopper per Bar e Ristoranti</i></h2>
			
			<p>Il Personal Shopper Enogastronomico offre <b>agli esercizi commerciali</b> (es. ristoratori, bar, pub, ecc.) un servizio 
				di consulenza sull'individuazione di fornitori e prodotti alimentari per la propria attività, valutazione della sostenibilità 
				della propria attività, assistenza nel processo di conversione della propria offerta alimentare verso un modello di consumo 
				più sostenibile e con il miglior rapporto qualità/prezzo, assistenza nella comunicazione della sostenibilità della sua attività 
				verso la clientela, servizio di gestione degli ordini e rapporti con i fornitori. 
			</p>
			<p>Per ulteriori informazioni inviateci una <a href="mailto:cibovagando@cooperativacrearte.it">mail</a></p>
			</fieldset>
		</div>
		
	</body>
	<footer><!--<p class="center">We speak: Italiano, English, Português, Français, Espanhol, Deutsch</p>-->
		<a href="https://www.linkedin.com/pub/matteo-patrucco/7b/562/989"><h6 class="center">License: (CC) 2014 Matteo Patrucco</h6></a>
	</footer>
</html>