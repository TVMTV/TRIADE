<?php
session_start();
/***************************************************************************
 *                              T.R.I.A.D.E
 *                            ---------------
 *
 *   begin                : Janvier 2000
 *   copyright            : (C) 2000 E. TAESCH - T. TRACHET - 
 *   Site                 : http://www.triade-educ.com
 *
 *
 ***************************************************************************/
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
?>
<?php include_once("./common/config5.inc.php"); header('Content-type: text/html; charset='.CHARSET); ?>
<HTML>
<HEAD>
<META http-equiv="CacheControl" content = "no-cache">
<META http-equiv="pragma" content = "no-cache">
<META http-equiv="expires" content = -1>
<meta name="Copyright" content="Triade©, 2001">
<LINK TITLE="style" TYPE="text/CSS" rel="stylesheet" HREF="./librairie_css/css.css">
<script language="JavaScript" src="./librairie_js/lib_defil.js"></script>
<script language="JavaScript" src="./librairie_js/clickdroit.js"></script>
<script language="JavaScript" src="./librairie_js/function.js"></script>
<script language="JavaScript" src="./librairie_js/info-bulle.js"></script>
<script language="JavaScript" src="./librairie_js/lib_css.js"></script>
<title>Triade - Compte de <?php print $_SESSION["nom"]." ".$_SESSION["prenom"] ?></title>
</head>
<body id='bodyfond' marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" onload="Init();" >
<?php include("./librairie_php/lib_licence.php"); ?>
<SCRIPT language="JavaScript" src="<?php print './librairie_js/'.$_SESSION[membre].'.js'?>"></SCRIPT>
<?php include("./librairie_php/lib_defilement.php"); ?>
<?php  $today= date ("j M, Y");  ?>
</TD><td width="472" valign="middle" rowspan="3" align="center">
<div align='center'>
<?php top_h(); ?>
<SCRIPT language="JavaScript" src="<?php print './librairie_js/'.$_SESSION[membre].'1.js'?>"></SCRIPT>
<table border="0" cellpadding="3" cellspacing="1" width="100%" bgcolor="#0B3A0C" height="85">
<tr id='coulBar0' ><td height="2"><b><font   id='menumodule1' ><?php print "Archivage des données élèves"?>  </font></b></td>
</tr>
<tr id='cadreCentral0'>
<td valign=top>
<?php
include_once("./librairie_php/db_triade.php");
validerequete("menuadmin");
?>
<br />
<font class="T2">
	<ul>Ce module permet de récupérer les bulletins des <?php print INTITULEELEVES ?>.</ul>
</font>
<br><br>
<?php
	include_once("./librairie_php/lib_get_init.php");
	if (php_module_load("sqlite3") == 1) {
		print "<form method='get' action='base_de_donne_key.php' >";
		print "<table align='center'>";
		print "<tr><td><script language=JavaScript>buttonMagicSubmit('Poursuivre --> ','rien');</script>";
		print "</td></tr>";
		print "</table>";
		print "<input type='hidden' name='base' value='archive' >";
		print "</form>";
	}else if((php_module_load("sqlite") == 1)) {
		print "<form method='get' action='base_de_donne_key.php' >";
		print "<table align='center'>";
		print "<tr><td><script language=JavaScript>buttonMagicSubmit('Poursuivre --> ','rien');</script>";
		print "</td></tr>";
		print "</table>";
		print "<input type='hidden' name='base' value='archive4' >";
		print "</form>";
	}else{
		print "<form method='get' action='base_de_donne_key.php' >";
		print "<table align='center'>";
		print "<tr><td><script language=JavaScript>buttonMagicSubmit('Poursuivre --> ','rien');</script>";
		print "</td></tr>";
		print "</table>";
		print "<input type='hidden' name='base' value='archive2' >";
		print "</form>";

	}
	
?>

<!-- // fin  -->
</font>
<br><br>
</td></tr></table>
<BR>
<SCRIPT language="JavaScript" src="<?php print './librairie_js/'.$_SESSION[membre].'2.js'?>"> </SCRIPT>
<SCRIPT language="JavaScript">InitBulle("#000000","#FFFFFF","red",1);</SCRIPT>
</BODY></HTML>
