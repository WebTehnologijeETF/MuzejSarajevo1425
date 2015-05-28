<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
	<head>
		<META http-equiv="Content-Type" content="text/html; charset=utf-8">
			<TITLE>Sarajevo Seige</TITLE>
			<link rel="stylesheet" type="text/css" href="SarajevoSiege.css">

		</head>

		<BODY>

  <?php
if(isset($_POST['login'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
session_start();

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }
  else {
    $username = $_POST['kime'];
    if ($username === "admin" && $_POST['sifra'] === "admin"){
      $_SESSION['username'] = $username;

    }
    else{
      print "Pogrešni pristupni podaci !";
    }
  }
}
}
?>
			<div id="logo">
				<p id="logo_tekst">Sarajevo<br>1425</p>
			</div>
			<div id="centar"> 
       <form id="kontakt_forma"  name="login"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                  <label for="Korisničko ime">Korisničko ime:</label><br>
                  <input id="kime" class="input" name="kime" type="text" size="30" ><br>
                  <label for="Sifra">Šifra:</label><br>
                  <input id="sifra" class="input" name="sifra" type="text" size="30" ><br>
                  <input id="login" type="submit" value="Prijavi se" name="login" onclick=" loadPages('adminPanel.php')" >
                  </form> </div>
			<script type="text/javascript" src="loadPages.js"></script>
		</BODY>
	</HTML>