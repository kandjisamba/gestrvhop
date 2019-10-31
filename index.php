<?php 
	session_start(); 
	require_once("includes/Functions.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Choisir un Patient</title><!-- todo change title when press next document.title = 'test'; -->
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/jquery.timepicker.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- multistep form -->
<form id="msform" method="post" action="Resultat.php">
	<div class="container">
	<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
			<div class="form-group">
			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active">Patient</li>
				<li>Medecin</li>
				<li>Rendez Vous</li>
			</ul>
		</div>
	<!-- fieldsets -->
	<fieldset class="panel panel-info form-horizontal">
		<div class="panel-heading">Choisir ou ajouter un patient</div>
		<div class="panel-body">
		
		<div class="form-group">
			<div class="col-lg-12">
				<input type="text" name="CodePat"  id="CodePat" class="form-control" placeholder="Code patient" required />
			</div>
		</div>
  
		<div class="form-group">
			<div class="col-lg-12">
				<input type="text" name="PrenomPat" id="PrenomPat" class="form-control" placeholder="Prénom" required />
			</div>
		</div>  
	
		<div class="form-group">
			<div class="col-lg-12">
				<input type="text" name="NomPat" id="NomPat" class="form-control" placeholder="Nom" required />
			</div>
		</div>  
		
			
		<div class="form-group">
			<div class="col-lg-12">
				<input type="text" name="TelPat" id="TelPat" class="form-control"  placeholder="Téléphone" required />
			</div>
		</div>    
		
		<div class="form-group">
			<div class="col-lg-12">
				<input type="mail" name="MailPat" id="MailPat" class="form-control"  placeholder="Adresse mail" required />
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-lg-offset-5">
			  <input type="button" name="ajouter" value="Ajouter" onClick="addPatient()" class="btn btn-primary"/>  <input type="reset" value="Vider" class="btn btn-danger"/>
			</div>
		</div>
		<div class="form-group">
			<table class="table table-hover">
				<tr><th>Code Patient</th><th>Prénom</th><th>Nom</th><th>Téléphone</th><th>Téléphone</th> <th>#</th></tr>
				<?php 
				$result = getPatient();
					while($tab=mysqli_fetch_array($result)){
					   echo "<tr class='success' onclick='fill(".json_encode($tab).")'><td>".$tab['CodePat']."</td><td>".$tab['PrenomPat']."</td><td>".$tab['NomPat']."</td><td>".$tab['TelPat']."</td><td>".$tab['MailPat']."</td><td><a href='SupprimerPatient.php?CodePat=".$tab['CodePat']."'>Supprimer</a></td></tr>";
					}
				?>
			</table>
		</div>
		<div class="form-group">
			<div class="col-lg-6 col-lg-offset-5">	  
				<input type="button" name="next" class="next action-button" value="Next" />
			</div>
		</div>
		</div>
	</fieldset>
	<fieldset class="panel panel-info form-horizontal">
		<div class="panel-heading">Choisir un medecin</div>
		<div class="panel-body">
			<div class="form-group">
			<div class="col-lg-6 col-lg-offset-3">
				<select class="form-control" name="spec_id" id="spec_id"	onchange="getDateRdv()">
					<?php $res_spec = getMedecin();
						while($tab=mysqli_fetch_array($res_spec)){
							echo "<option value='".$tab["IdMed"]."'>".$tab["IdMed"]."</option>";
						}
					?>
				</select>
			</div>
			</div>
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-4">
				<input type="button" name="previous" class="previous action-button" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next" />  
			</div>
		</div>
		</div>
	</fieldset>
	<fieldset class="panel panel-info form-horizontal">
		<div class="panel-heading">Choisir un Rendez Vous</div>
		<div class="panel-body">
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-4">
			  <div id="datepicker"></div>
			</div>
		</div>		
		<div class="form-group">
			<label class="col-lg-4 control-label" for="date_Reservation">Choisir une date</label>
			<div class="col-lg-8">
			  <input class="form-control" type="text" id="date_Reservation" name="date_Reservation" required readonly="readonly"/>
			</div>
		</div>		
		<div class="form-group">
			<label class="col-lg-4 control-label" for="timepicker">Choisir un rendez vous</label>
			<div class="col-lg-8">
			  <input class="form-control" type="text" id="timepicker" name="timepicker" required />
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-8 col-lg-offset-4">	
				<input type="button" name="previous" class="previous action-button" value="Previous" /> <input type="submit" name="submit" class="submit action-button" value="Submit" />  
			</div>
		</div>
		</div>
	</fieldset>
	</div>
	</div>
	</div>
</form>
</body>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/datepicker-fr.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/jquery.easing.min.js" type="text/javascript"></script>
    <script  src="js/index.js"></script>
    <script  src="js/main.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		getDateRdv(); //get rdv depending on speciality with ajax & update calendar
	</script>
<html>
