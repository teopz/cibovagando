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
		<script src="editor/parser_rules/advanced.js"></script>
		<script src="editor/dist/wysihtml5-0.3.0.min.js"></script>
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
		<p></p><div id="wysihtml5-toolbar" style="display: none;">
			  <a data-wysihtml5-command="bold"><img src="editor/icons/bold.png" width=5% title="Grassetto"></img></a>
			  <a data-wysihtml5-command="italic"><img src="editor/icons/italic.png" width=5% title="Corsivo"></img></a>
			  <a data-wysihtml5-command="insertOrderedList"><img src="editor/icons/olist.png" width=5% title="Lista Numerata"></img></a>
			  <a data-wysihtml5-command="insertUnorderedList"><img src="editor/icons/ulist.png" width=5% title="Lista Puntata"></img></a>
			  <a data-wysihtml5-command="undo"><img src="editor/icons/undo.png" width=5% title="Annulla Azione"></img></a>
			  <a data-wysihtml5-command="redo"><img src="editor/icons/redo.png" width=5% title="Ripeti Azione"></img></a>
			  <a data-wysihtml5-command="insertImage"><img src="editor/icons/img.png" width=5% title="Inserisci Immagine"></img></a>
			  <div data-wysihtml5-dialog="insertImage" style="display: none;">
				<label>
				<h4>Immagine:</br>
				<input data-wysihtml5-dialog-field="src" value="http://cibovagando.cooperativacrearte.it/" class="text">
				</label></br>
				<label>
				Allinea:
				<select data-wysihtml5-dialog-field="className">
				<option value="">default</option>
				<option value="wysiwyg-float-left">Sinistra</option>
				<option value="wysiwyg-float-right">Destra</option>
				</select>
				
				</label>
				<a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a><h4>
			</div>

			  <!-- Some wysihtml5 commands like 'createLink' require extra paramaters specified by the user (eg. href) -->
			  <a data-wysihtml5-command="createLink"><img src="editor/icons/link.png" width=5% title="Inserisci Link"></img></a>
			  <div data-wysihtml5-dialog="createLink" style="display: none;">
				<label>
				  <h4>Link:</br>
				  <input data-wysihtml5-dialog-field="href" value="http://" class="text">
				</label></br>
				<a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a></h4>
			  </div>
			</div>
			</br>
			<?php
			if(!isset($_POST['titolo'])){
				$titolo="";
			}else $titolo=$_POST['titolo'];
			if(!isset($_POST['testo'])){
				$testo="";
			}else $testo=$_POST['testo'];
			?>
			<form method="post" action="admin.php">
				<input type="text" placeholder="Titolo" name="titolo" class="text" value="<?php echo $titolo ?>"></input>
				<textarea class="widetext" name="testo" id="wysihtml5-textarea" placeholder="Inserisci qui il testo" ><?php echo $testo ?></textarea></br>
				
				<input type="submit" value="Pubblica" class="menubuttons"></input>
			</form>

			<div id="lista1" style="float:left;">
				<?php
				echo "<h4>Cartelle disponibili:</h4><h4>";
				if(isset($_GET['cartella'])){
					foreach ( glob($_GET['cartella']."/*", GLOB_ONLYDIR) as $cartella){
						echo "<a href=\"admin.php?cartella=$cartella\">".$cartella."</a></br>";
					}
				}else{
					foreach ( glob("immagini/*", GLOB_ONLYDIR) as $cartella){
						echo "<a href=\"admin.php?cartella=$cartella\">".$cartella."</a></br>";
					}
				}
				?>
			</div>
			<div id="lista2" style="float:left; margin-left:20%;">
				<?php
				//lista cartelle disponibili
					echo "<h4>Immagini disponibili:</h4><h4>";
					if (!isset($_GET['cartella'])){
						foreach ( glob("immagini/*") as $immagine){
							echo "<a href=\"admin.php?img=$immagine\">".$immagine."</a></br>";
						}	
					}else {
						foreach ( glob($_GET['cartella']."/*") as $immagine){
							echo "<a href=\"admin.php?img=$immagine\">".$immagine."</a></br>";
						}
					}
				?>
			</div>
		</div>
	</body>
	<script>
		var editor = new wysihtml5.Editor("wysihtml5-textarea", { // id of textarea element
		  toolbar:      "wysihtml5-toolbar", // id of toolbar element
		  parserRules:  wysihtml5ParserRules // defined in parser rules set 
		});
	</script>
</html>