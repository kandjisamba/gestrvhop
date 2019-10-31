<?php 
session_start(); 
//if($_SESSION["autoriser"]!="oui"){ 
//header("location:profiles.php"); 
//exit(); 
//} 
	//if(date("H")<18) $bienvenue="Bonjour et bienvenue ". $_SESSION["Login"]. " dans votre espace personnel"; 
	//else $bienvenue="Bonsoir et bienvenue ". $_SESSION["Login"]. " dans votre espace personnel";
?>

<?php
//include('session.php');
//include('index.php');
?>
<!DOCTYPE html>
<html>

<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS---------------
var d=new Date();
monthname= new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//--------------- END LOCALIZEABLE   ---------------
</script>

<head>
<title>Vous etes dans votre profil</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_travel2.css" type="text/css" />

<link rel="stylesheet" href="css/menu.css" type="text/css" />

<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#C0DFFD">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#3366CC">
    <td width="382" colspan="2" rowspan="2" nowrap="nowrap"><img src="mm_travel_photo.jpg" alt="Header image" width="382" height="127" border="0" /></td>
    <td width="378" height="63" id="logo" valign="bottom" align="center" nowrap="nowrap">Gestion des rendez-vous d'un hopital</td>
    <td width="100%">&nbsp;</td>
  </tr>
  <tr bgcolor="#3366CC">
    <td height="64" id="tagline" valign="top" align="center">Emplacement du slogan (facultatif)</td>
	<td width="100%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#003366"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>
<body>
 <tr>
    <td colspan="4" bgcolor="#003366"><img src="mm_spacer.gif" alt="" width="1" height="1" border="0" /></td>
  </tr>
  

 <tr>
    <td width="40">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;<br />
    <table border="0" cellspacing="0" cellpadding="2" width="610">
        <tr>
          <td class="pageName" colspan="3">EMPLACEMENT DU NOM DE LA PAGE<br />
		  &nbsp;<br />		  </td>
        </tr>
        <tr>
          <td width="320" height="250" rowspan="2" align="center" class="subHeader"><img src="mm_product_lg.gif" alt="large product photo" border="0" /></td>
		  
		  <div id="profile">
<b id="welcome">Welcome : <i><?php // echo $_SESSION["Login"].' ' .$bienvenue?></i></b>
<b id="logout"><a href="logout.php">Se déconnecter</a></b>
</div>
		  
	<!-- Menu	 -->  
 <div id="menu">
<ul>
  <li><a href="#">Rendez-vous</a>
  <ul>
      <li><a href="#">Ajouter</a></li>
      <li><a href="#">Afficher</a></li>
    </ul>
  </li>
 	 
  <li><a href="#">Patients</a>
  </li>
  <li><a href="#">Medecins</a></li>
</ul>
</div>

          <td width="30" rowspan="2">&nbsp;</td>
          <td width="260" class="subHeader">Emplacement du nom de produit<br />
		  <br />          </td>
        </tr>
        <tr>
          <td valign="top" class="bodyText">Brief product description here. Lorem
            ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
            diam voluptua.
		<p><strong>[Emplacement du bouton PayPal]</strong></p></td>
        </tr>
      </table>	  </td>
      <td width="100%">&nbsp;</td>
  </tr>



</body>
</html>
