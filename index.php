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
				<a href="index.php"><img src="immagini/logoCV.jpg" width=130px class="headIMG"></a>
				<div class="mainTitle">
					<h2><i>CIBOVAGANDO - Food&Wine Personal Shopper</i></h2>
					<h2><i><?php echo $lang['titolone'];?></i>
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
			</br>
			<fieldset>
			<p id="index_par1">
				<?php echo $lang['index_par1'];?>
			</p>
			
			<img src="immagini/logoCV.png" alt="Logo" width=13%></img><p id="index_tit1"><?php echo $lang['index_tit1'];?></p>
			<h2>
				<i id="index_tit2"><?php echo $lang['index_tit2'];?></i>
			</h2>
			<p id="index_par2">
				<?php echo $lang['index_par2'];?>
			</p>
			<h2>
				<i id="index_tit1"><?php echo $lang['index_tit3'];?></i>
			</h2>
			<p id="index_par3">
				<?php echo $lang['index_par3'];?>
			</p>
			</fieldset>
			<h4>
				<i>
					<a href="chi.php"><?php echo $lang['link_1'];?></a>
				</i>
			</h4>
		
		
		<iframe src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/CibovagandoTasteTrail?fref=ts"
			scrolling="no" frameborder="0"
			style="border:none; width:70%; height:80px;"></iframe>
		</div>
	</body>
	<footer><!--<p class="center">We speak: Italiano, English, Portugu�s, Fran�ais, Espanhol, Deutsch</p>-->
		<a href="https://www.linkedin.com/pub/matteo-patrucco/7b/562/989"><h6 class="center">License: (CC) 2014 Matteo Patrucco</h6></a>
	</footer>
</html>