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
			<h2><i>A chi si rivolge il Food&Wine Personal Shopper</i></h2>
			
			<p>
				Il Personal Shopper Enogastronomico è una figura professionale nuova e flessibile, che può applicare le sue 
				competenze a diversi livelli e in diversi ambiti. Per CIBOVAGANDO  il servizio è stato pensato con tre principali 
				target e declinazioni diverse, qui di seguito, ma il progetto è in continua evoluzione e la caratteristica 
				principale di personalizzazione sulle esigenze del cliente lascia spazio ad un ventaglio di possibilità molto ampio. 
				Per richieste specifiche inviaci una <a href="mailto:cibovagando@cooperativacrearte.it">mail</a>. 
			</p>
			
			<h2><i>Servizi per il turismo</i></h2>
			
			<p>Il Personal Shopper Enogastronomico offre al turista una <b>selezione</b> "su misura" di aziende agricole, agriturismi, 
				botteghe, enoteche, ristoranti da visitare per <b>conoscere e assaporare i prodotti alimentari di qualità del territorio</b>, 
				attraverso <b>tour-degustazione</b> di vini e specialità culinarie locali, tematici e personalizzati in base alle richieste 
				ed esigenze specifiche del cliente; il consulente può fornire inoltre utili suggerimenti di cucina per i prodotti acquistati, 
				indicazioni sul valore nutrizionale degli alimenti e assistenza nell’acquisto e nella spedizione del prodotto verso i luoghi di residenza del cliente.
			</p>
			<p>
				Il personal shopper accompagna il turista all'interno di veri e propri <b>percorsi del gusto</b> tra <b>produttori, 
				commercianti e ristoratori selezionati</b> per fargli scoprire i gesti, l'autenticità e l'atmosfera del luogo... 
				per vivere <b>un'esperienza unica</b> e riscoprire il piacere del cibo genuino e il legame con la terra e le persone che lo producono.
			</p>
			<p>
				Con l'aiuto del suo assistente personale il turista potrà raggiungere tranquillamente anche i locali più 
				nascosti e ricercati del Monferrato, difficili da individuare se non si conosce profondamente il territorio. 
			</p>
			<p>
				Visita la pagina <a href="proposte_tematiche.php">Cibovagando per il turismo</a> per scoprire alcune proposte tematiche o per inviarci la tua specifica richiesta. 
			</p>
			
			<h2><i>Servizi per le aziende</i></h2>
			
			<p>
				Negli ultimi anni è sempre più evidente quanto la <b>sostenibilità e la qualità</b> rappresentino per le aziende un <b>valore 
				aggiunto strategico</b> per affrontare la concorrenza sul mercato. L'attenzione e la sensibilità dei consumatori per la 
				qualità e la sostenibilità ambientale riguarda anche le loro <b>scelte alimentari</b> e premia le aziende che accettano la 
				sfida, adeguando la loro offerta in funzione di questi due principi. Il Personal Shopper Enogastronomico si colloca 
				in questa fase di rinnovamento come consulente, per far fronte alle difficoltà che l'azienda può incontrare nel processo, 
				dall'individuazione delle criticità alla comunicazione efficacie delle sue scelte virtuose.  
			</p>
			<p>
				Il Personal Shopper Enogastronomico offre <b>agli esercizi commerciali</b> (es. ristoratori, bar, pub, ecc.) un servizio di 
				consulenza sull'individuazione di fornitori e prodotti alimentari per la propria attività, valutazione della sostenibilità 
				della propria attività, assistenza nel processo di conversione della propria offerta alimentare verso un modello di 
				consumo più sostenibile e con il miglior rapporto qualità/prezzo, assistenza nella comunicazione della sostenibilità 
				della sua attività verso la clientela, servizio di gestione degli ordini e rapporti con i fornitori. 
			</p>
			<p>
				Alle <b>aziende che non operano in campo alimentare</b>, ma che vogliono comunque privilegiare un consumo alimentare sostenibile, 
				il Personal Shopper offre consulenza e supporto organizzativo per eventi e cene e ricevimenti aziendali (scelta dei fornitori, 
				della location, dei menù, ecc.). Il Food&Wine Personal Shopper è inoltre la figura ideale, professionale e qualificata, per 
				accompagnare gli ospiti aziendali italiani e stranieri alla scoperta dei prodotti enogastronomici d'eccellenza del territorio 
				durante i giorni di soggiorno in Monferrato. Su richiesta può essere fornito anche un servizio di autista in aggiunta al 
				personal shopper. Grazie alla nostra realtà di Cooperativa (compatibilmente con la disponibilità) possiamo fornire il servizio 
				in diverse lingue straniere: inglese, francese, tedesco, spagnolo, portoghese e cinese. 
			</p>
			<p>
				Per maggiori informazioni, visita la pagina dedicata ai <a href="aziende.php">Servizi per le aziende</a>
			</p>
			<h2><i>Servizi per i privati</i></h2>
			<p>
				Il Personal Shopper Enogastronomico, consulente per gli acquisti alimentari, si rivolge ovviamente anche ai privati residenti nella zona, persone con poco tempo a disposizione che vogliono affidare a una persona competente i loro acquisti alimentari, magari per affrontare un cambiamento di dieta, delle esigenze alimentari nuove, oppure per semplice comodità e curiosità di scoprire un modo più sano e responsabile di nutrirsi con prodotti km 0, di stagione e biologici. Anche per le occasioni importanti (festività, cerimonie, feste, cene e ricevimenti) il personal shopper può aiutare il cliente nella scelta della location, del menù e naturalmente dei prodotti migliori del territorio, da portare a tavola o in dono, sempre secondo il budget di spesa richiesto. 
			</p>
			<p>
				Se il desiderio è quello di passare qualche ora tra le colline del Monferrato per conoscere meglio i prodotti più particolari e ricercati, anche per gli abitanti del territorio sono disponibili ovviamente tutte le proposte per i turisti, ma con una particolare attenzione perché l'esperienza sia davvero unica anche per loro. 
			</p>
			<p>			
				Per maggiori informazioni visita la pagina <a href="proposte_tematiche.php">Cibovagando per il turismo</a> e <a href="privati.php">Cibovagando per i privati</a>
			</p>
			</fieldset>
		</div>
		
	</body>
	<footer><!--<p class="center">We speak: Italiano, English, Português, Français, Espanhol, Deutsch</p>-->
		<a href="https://www.linkedin.com/pub/matteo-patrucco/7b/562/989"><h6 class="center">License: (CC) 2014 Matteo Patrucco</h6></a>
	</footer>
</html>