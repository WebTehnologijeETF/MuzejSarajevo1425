<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
	<head>
		<META http-equiv="Content-Type" content="text/html; charset=utf-8">
			<TITLE>Sarajevo Seige</TITLE>
			<link rel="stylesheet" type="text/css" href="SarajevoSiege.css">
			<script type="text/javascript" src="ajaxValidacija.js"></script>
		</head>

		<BODY>

<?php
// define variables and set to empty values
$errime = $errprezime = $erremail = $errporuka = $pod= $siguran=$obavijest=$reset=$poslanMail="";
$ime = $prezime = $email = $poruka = $opcina =$mjesto ="";
$provjera=false;
if(isset($_POST['reset'])){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$errime = $errprezime = $erremail = $errporuka = $pod= $siguran=$obavijest=$reset="";
$ime = $prezime = $email = $poruka = $opcina =$mjesto ="";
$provjera=false;
}
}
if(isset($_POST['siguran'])){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//$email = test_input($_POST["email"]);
$to = "abesic4@etf.unsa.ba";
$subject ="Poruka posjetioca";
$txt = "Ime: ".$ime.PHP_EOL." Prezime: ".$prezime.PHP_EOL." Općina: ".$opcina.PHP_EOL." Mjesto: ".$mjesto.PHP_EOL." Email: ".$email. PHP_EOL." Poruka:".$poruka;
$headers = "From:".email."\r\n"."CC: irfanpra@gmail.com"."\r\n". "Replay:".$email;

mail($to,$subject,$txt,$headers);
$errime = $errprezime = $erremail = $errporuka = $pod= $siguran=$obavijest=$reset="";
$ime = $prezime = $email = $poruka = $opcina =$mjesto ="";
$provjera=false;
$poslanMail="<p>Zahvaljujemo se što ste nas kontaktirali</p>";
}
}

if(isset($_POST['posalji'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $opcina = test_input($_POST["opcina"]);
  $mjesto = test_input($_POST["mjesto"]);
	if(empty($_POST["ime"]))
	{
		$errime="Niste unijeli ime";
		$provjera=true;
	}
	else{
  $ime = test_input($_POST["ime"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$ime)) {
  $errime = "Niste unijeli ispravno ime!"; 
  $provjera=true;
}
  else if(strlen($ime)<=2){
  	 $errime = "Niste unijeli ispravno ime!"; 
  	 $provjera=true;
}
}

	if(empty($_POST["email"]))
	{
		$erremail="Niste unijeli email adresu";
		$provjera=true;
	}
	else{
  $email = test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $erremail = "Niste unijeli ispravnu email adresu!"; 
  $provjera=true;
}
}

	if(empty($_POST["prezime"]))
	{
		$errprezime="Niste unijeli prezime";
		$provjera=true;
	}
	else{
  $prezime = test_input($_POST["prezime"]);
   if (!preg_match("/^[a-zA-Z ]*$/",$prezime)) {
  $errprezime = "Niste unijeli ispravno prezime!"; 
  $provjera=true;
}
 else if(strlen($prezime)<=2){
  	 $errprezime = "Niste unijeli ispravno prezime!"; 
  	 $provjera=true;
}
}

	if(empty($_POST["poruka"]))
	{
		$errporuka="Niste unijeli poruku";
		$provjera=true;
	}
	else{
  $poruka = test_input($_POST["poruka"]);
 if(strlen($poruka)<=20){
  	 $errporuka = "Poruka je prekratka!"; 
  	 $provjera=true;
}
}
}
if($provjera==false){
   //include 'prikaz.php';
	$pod="<h2 class='sadrzaj'>Provjerite da li ste ispravno popunili kontakt formu</h2><p>Ime:".$ime."</p>"."<p>Prezime:".$prezime."</p>"."<p>Općina:".$opcina."</p>"."<p>Mjesto:".$mjesto."</p>"."<p>Email:".$email."</p>" ."<p>Poruka:".$poruka."</p>";
$siguran="<p>Da li ste sigurni da želite poslati ove podatke?</p><input id='btnSiguran' type='submit' value='Siguran sam' name='btnSiguran' type='submit'>";
$obavijest="<p>Ako ste pogrešno popunili formu,možete ispod prepraviti unusene podatke.</p>";
$reset="<input id='reset' type='submit' value='Reset' name='reset'>";
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

			<div id="logo">
				<p id="logo_tekst">Sarajevo<br>1425</p>
			</div>
			<div id="centar">
				<ul id="menu">
					<li> <a onclick="loadPages('index.html')">POČETNA</a></li>
					<li><a onclick="loadPages('Sarajevo%20SiegeHronologija.html')">HRONOLOGIJA</a></li>
					<li><a onclick="loadPages('SarajevoSiegeGalerija.html')">GALERIJA</a></li>
					<li><a onclick="loadPages('SarajevoSiegeProjekti.html')">PROJEKTI</a></li>
					<li><a onclick="loadPages('SarajevoSiegeMapa.html')">ŠTA VIDJETI</a></li>
					<li id="active"><a onclick="loadPages('SarajevoSiegeKontakt.php')">KONTAKT</a></li>
					<li><a onclick="loadPages('suveniri.html')">SUVENIRI</a></li>
				</ul>
				<form id="kontakt_forma" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="kontakt_forma"  method="post">
					<div ><span><?php echo $pod;?></span> </div>
					<div ><span><?php echo $siguran;?></span> </div>
						<div ><span><?php echo $obavijest;?></span> </div>
						<div ><span><?php echo $poslanMail;?></span> </div>
					<div class="red">
						<label for="ime">Ime:</label><br>
						<input id="ime" class="input" name="ime" type="text" value="<?php echo $ime;?>" size="30" required><br>
						<span class="error"><?php echo $errime;?></span>
					</div>
					<div class="red">
						<label for="prezime">Prezime:</label><br>
						<input id="prezime" class="input" name="prezime" type="text" value="<?php echo $prezime;?>" size="30" ><br>
						<span class="error"><?php echo $errprezime;?></span>
					</div>
					<div class="red">
						<label for="email">Email:</label><br>
						<input id="email" class="input" name="email" type="text" value="<?php echo $email;?>" size="30" required><br>
						<span class="error"><?php echo $erremail;?></span>
					</div>
					<div class="red">
						<label for="opcina">Općina:</label><br>
						<input id="opcina" name="opcina" type="text"  size="30" value="<?php echo $opcina;?>" ><br>
					</div>
					<div class="red">
						<label for="mjesto">Mjesto:</label><br>
						<input id="mjesto" name="mjesto" type="text"  size="30" value="<?php echo $mjesto;?>" ><br>
						<p id="obavjestenje"></p>
					</div>
					
					<div class="red">
						<label for="poruka">Poruka:</label><br>
						<input id="poruka" class="input" name="poruka" type="text" value="<?php echo $poruka;?>" required><br>
						<span class="error"><?php echo $errporuka;?></span>
					</div>
					<input id="posalji" type="submit" value="Pošalji" name="posalji">
	                 <div ><span><?php echo $reset;?></span> </div>
					<!--<script type="text/javascript" src="validacija.js"></script>  -->
					<script type="text/javascript" src="validirajFormu.js"></script>
				</form>	

			</div>
		<script type="text/javascript" src="loadPages.js"></script>
		
		</BODY>

</HTML>