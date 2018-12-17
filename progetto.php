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
			<h2><i>IL PROGETTO</i></h2>
			<h2><i>L'idea</i></h2>
			<p>Il progetto "CIBOVAGANDO - Food&Wine Personal Shopper" nasce all'interno dell'incubatore 
				d'imprese giovanili "Start Up Monferrato", da un'idea delle giovani imprenditrici monferrine 
				della <i>Cooperativa CreArte</i> (Società composta da sole donne, under 35) e dalla loro passione 
				per la sana alimentazione e per il consumo alimentare sostenibile, unita all'amore per il Monferrato, 
				territorio ricco di prodotti agro-alimentari d'eccellenza e tradizionalmente votato all'agricoltura, 
				primo paesaggio culturale vitivinicolo italiano a ricevere il riconoscimento UNESCO di Patrimonio 
				dell'Umanità, il 22 Giugno 2014, all'interno del sito "I Paesaggi Vitivinicoli del Piemonte: Langhe-Roero e Monferrato". 
			</p>
			<h2>
				<i>Obiettivi del progetto</i>
			</h2>
			<p>
				<ul>
					<li>Creare un <b>servizio innovativo, qualificato e specializzato</b> in ambito enogastronomico, 
						di consulenza e assistenza agli acquisti, rivolto a turisti, aziende e privati. 
					</li>
					<li>Costruire una <b>figura professionale nuova e flessibile</b>, rispondente alle esigenze del mercato e della società. 
					</li>
					<li>Sostenere <b>l'economia locale</b>, specialmente i piccoli produttori, ristoratori e commercianti 
						locali, facendoli conoscere e valorizzando la loro attività attraverso il lavoro di personal 
						shopper, promuovendo un modello di <b>sviluppo sostenibile</b> dal punto di vista <b>ambientale, sociale ed economico.</b> 
					</li>
					<li>Diffondere la conoscenza della cultura agricola ed enogastronomica del Monferrato e 
						<b>incoraggiare uno stile alimentare sostenibile</b> tra i turisti, i residenti e gli operatori 
						stessi attraverso la promozione dei prodotti di qualità del territorio. 
					</li>
					<li>Creare una rete di rapporti e <b>collaborazioni positive e sinergiche</b> con riflessi positivi 
						sull'economia locale e sul flusso turistico. 
					</li>
				</ul>
			</p>
			</fieldset>
		</div>
		
	</body>
	<footer><!--<p class="center">We speak: Italiano, English, Português, Français, Espanhol, Deutsch</p>-->
		<a href="https://www.linkedin.com/pub/matteo-patrucco/7b/562/989"><h6 class="center">License: (CC) 2014 Matteo Patrucco</h6></a>
	</footer>
</html>