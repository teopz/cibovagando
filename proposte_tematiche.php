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
			<h2><i>CIBOVAGANDO PER IL TURISMO</i></h2>
			<h4><i>Esperienze enogastronomiche di qualità - Taste Trails Planning</i></h4>
			<p>Il Food&Wine Personal Shopper accompagna il turista da <b>produttori, commercianti e ristoratori selezionati </b>
				per fargli scoprire i prodotti enogastronomici d'eccellenza del Monferrato e permettergli di acquistarli e consumarli. 
				Le esperienze e i prodotti proposti sono stati precedentemente testati per i nostri clienti dal Food & Wine Personal 
				Shopper – consulente enogastronomico personale.
			</p>
			<p>
			<b>Un esempio di selezione</b> potrebbe comprendere un’azienda agricola con vendita diretta dei suoi prodotti, una o più botteghe di prodotti 
				tipici, un’enoteca o una cantina dove sorseggiare un buon bicchiere di vino DOC del Monferrato e per finire in un ristorante o agriturismo 
				dall'atmosfera accogliente dove poter gustare in compagnia un <i>menù appositamente studiato</i> per voi dal vostro Personal Shopper con i cuochi del locale. 
			</p>
			<p>
				Il vostro Personal Shopper Enogastronomico potrà essere a vostra disposizione per poche ore fino all'intera giornata. 
				Tutte le proposte di seguito sono flessibili ed adattabili.
			</p>
			<h2><i>Proposte tematiche</i></h2>
			<p><ul>
				<li><p><b>CASALE NEL PIATTO --></b> selezione di botteghe alimentari storiche, enoteche e ristoratori d'eccellenza della città capitale del Monferrato. </p></li>
				<li><p><b>IL MONFERRATO DEGLI INFERNOT --></b> selezione di aziende agricole, cantine e ristoranti nel <b>“Monferrato degli infernot”, patrimonio UNESCO</b> (Rosignano Monferrato, Cella Monte, Frassinello Monferrato, Olivola, Ottiglio, Sala Monferrato, Ozzano Monferrato, Camagna Monferrato, Vignale Monferrato), con la possibilità di visitare le caratteristiche cantine scavate nella pietra da cantone che danno il nome al sito ("infernot") e degustare il vino Barbera tipico della zona.  </p></li>
				<li><p><b>MONFERRATO DOLCE MONFERRATO --></b> selezione delle migliori caffetterie, pasticcerie, laboratori artigianali per gustare <b>tutti i dolci della tradizione locale</b>, in una pausa di dolcezza e relax.  </p></li>
				<li><p><b>De.Co - TIPICITA' COMUNALI --></b> percorso alla scoperta dei <b>prodotti tipici a denominazione comunale</b>, dalla ricetta autentica, tramandata da generazioni e tradizionalmente prodotti in un determinato comune e a volte addirittura da uno specifico produttore, l'unico dove si possa gustare <b>la ricetta originale</b>. Tra le tante De.Co del Monferrato, la muletta e il pane della Iucci di Sala Monferrato, gli agnolotti e i krumiri di Casale Monferrato, la torta di nocciole di Murisengo, la bagna cauda di Vignale Monferrato e molte molte altre. </p></li>
				<li><p><b>PANORAMA MOZZAFIATO --></b> selezione di locali dove poter gustare un'ottima cucina e godere di <b>un panorama e un’ambientazione particolarmente suggestivi</b>.  </p></li>
				<li><p><b>DOC --></b> selezione di enoteche, cantine e aziende agricole dove degustare ed acquistare i <b>17 vini DOC prodotti nel Monferrato Casalese</b>, dei quali 5 DOC esclusivi di questo territorio, nel 1963 culla della Denominazione di Origine Controllata (DOC).  </p></li>
				<li><p><b>LOVING NATURE - MONFERRATO BIO --></b> selezione di <b>aziende agricole biologiche, agriturismi e ristoranti con cucina biologica</b> dove gustare i piatti tipici del territorio, preparati con prodotti a km 0 e biologici, per chi ama l'ambiente e il rapporto diretto con i produttori.  </p></li>
				<li><p><b>KEEP CALM (AND ENJOY MONFERRATO) --> un'intera giornata</b> dedicata a voi, una selezione <b>all'insegna del relax e del buon cibo</b>, per recuperare i tempi naturali delle cose semplici e godersi una selezione di ambientazioni rilassanti, dimenticando l'orologio. Con il tempo a disposizione potremo organizzare anche altre attività ricreative in aggiunta a quelle culinarie (una seduta di pittura naturalistica, musica dal vivo durante la cena, karaoke, una lezione di danza, una visita guidata tra i borghi, una passeggiata tra le vigne insieme agli agricoltori, una lezione di cucina monferrina ed altro ancora).   </p></li>
				<li><p><b>GLUTEN FREE --></b> per non rinunciare al piacere di gustare le specialità del Monferrato, una selezione di produttori e ristoratori in cui trovare <b>prodotti e piatti senza glutine e di particolare qualità.</b> </p></li>
				<li><p><b>4 ZAMPE FRIENDLY --></b> per non dover lasciare a casa o in albergo il compagno di viaggio a 4 zampe, selezioniamo una serie di locali <b>dove anche lui può entrare</b> e magari anche godersi una zampettata nel verde, dotati di giardino o appositi spazi.  </p></li>
				<li><p><b>SELEZIONE PERSONALIZZATA A 360° --></b> se in vacanza non volete nemmeno pensare a cosa mangiare, nessun problema!! <b>Raccontaci chi siete e vi diremo....dove mangiare!</b>  </p></li>
		</ul>
		</p>
		<p>Per maggiori informazioni su come puoi personalizzare il servizio di Cibovagando, visita la pagina <a href="esp_personalizzate.php">Esperienze personalizzate.</a></p>
		</fieldset>
		</div>
		
	</body>
	<footer><!--<p class="center">We speak: Italiano, English, Português, Français, Espanhol, Deutsch</p>-->
		<a href="https://www.linkedin.com/pub/matteo-patrucco/7b/562/989"><h6 class="center">License: (CC) 2014 Matteo Patrucco</h6></a>
	</footer>
</html>