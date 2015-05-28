<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
	<head>
		<META http-equiv="Content-Type" content="text/html; charset=utf-8">
			<TITLE>Sarajevo Seige</TITLE>
			<link rel="stylesheet" type="text/css" href="SarajevoSiege.css">

		</head>

		<BODY>

  <?php
  $autor=$naslov=$tekst=$slika="";
  $veza = new PDO("mysql:dbname=sarajevoseige;host=localhost;charset=utf8", "adm", "1DvaTri");
   $veza->exec("set names utf8");

   if(isset($_POST['obrisiVijest'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {
 $sql = "delete from vijest WHERE id=".$_POST['idVijesti'];
 $veza->exec($sql);
 echo "Vijesti je obrisana";
 }
catch(PDOException $e) {
 echo $sql . $e->getMessage();
 }

}
}



   if(isset($_POST['obrisiKom'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {
 $sql = "delete from komentari WHERE id=".$_POST['idKom'];
 $veza->exec($sql);
 echo "Komentar je obrisan";
 }
catch(PDOException $e) {
 echo $sql . $e->getMessage();
 }

}
}

if(isset($_POST['dodajVijest'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {

 $prna = $veza->prepare("insert vijest (autor, naslov, tekst, url) VALUES (:autor, :naslov, :tekst, :slika)");
 $prna->bindParam(':autor', $_POST['dodajAutor']);
 $prna->bindParam(':naslov', $_POST['dodajNaslov']);
 $prna->bindParam(':tekst', $_POST['dodajTekst']);
$prna->bindParam(':slika', $_POST['dodajSlika']);
 $prna->execute();


echo "Vijest je dodana";
 
 }
catch(PDOException $e) {
 echo $sql . $e->getMessage();
 }

}
}


if(isset($_POST['izmijeniVijest'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {

 $sql = "update vijest SET autor='".$_POST['dodajAutor']."',naslov= '".$_POST['dodajNaslov']."', tekst= '".$_POST['dodajTekst']."', url='".$_POST['dodajSlika']."' where id=".$_POST['idVijesti1'];
 $stmt = $veza->prepare($sql);
 $stmt->execute();
echo "Vijest je promijenjena";
 
 }
catch(PDOException $e) {
 echo $sql . $e->getMessage();
 }

}
}

if(isset($_POST['ucitaj'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {
    $stmt = $veza->prepare("select  naslov, tekst, autor, url from vijest where id=".$_POST['idVijesti1']);
 $stmt->execute();
  $vijest = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 $naslov=$vijest['naslov'];
 $autor=$vijest['autor'];
 $tekst=$vijest['tekst'];
 $slika=$vijest['slika'];

 }
catch(PDOException $e) {
 echo $sql . $e->getMessage();
 }

}
}

 if(isset($_POST['odjava'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$veza=null;
session_unset();
  }
}
?>
			<div id="logo">
				<p id="logo_tekst">Sarajevo<br>1425</p>
			</div>
			<div id="centar"> 
       <form id="kontakt_forma"  name="panel"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <input id="odjava" type="submit" value="Odjavi se" name="odjava" onclick="loadPages('index.php')" ><br>
                 <br> <label for="brisiVijest">ID vijesti za obrisati:</label><br>
                  <input id="idVijesti" class="input" name="idVijesti" type="text" size="30" ><br>
                  <input id="obrisiVijest" type="submit" value="Obriši" name="obrisiVijest" ><br>

                 <br>  <label for="naslov">Naslov:</label><br>
                  <input id="dodajNaslov" class="input" name="dodajNaslov" type="text" size="30" ><br>

                   <label for="autor">Autor:</label><br>
                  <input id="dodajAutor" class="input" name="dodajAutor" type="text" size="30" ><br>

                   <label for="tekst">Tekst:</label><br>
                  <input id="dodajTekst" class="input" name="dodajTekst" type="text" size="30" ><br>

                   <label for="slika">Slika:</label><br>
                  <input id="dodajSlika" class="input" name="dodajSlika" type="text" size="30" ><br>
                   <input id="dodajVijest" type="submit" value="Spremi" name="dodajVijest" > <br>

                   <br>  <label for="brisiVijest">ID vijesti za promijeniti:</label>
                  <input id="idVijesti1" class="input" name="idVijesti1" type="text" size="30" >
                   <input id="ucitaj" type="submit" value="Učitaj" name="ucitaj" ><br>
                   <br>  <label for="naslov">Naslov:</label><br>
                  <input id="dodajNaslov1" class="input" name="dodajNaslov" type="text" size="30" value="<?php echo $naslov;?>"><br>

                   <label for="autor">Autor:</label><br>
                  <input id="dodajAutor1" class="input" name="dodajAutor1" type="text" size="30" value="<?php echo $autor;?>"><br>

                   <label for="tekst">Tekst:</label><br>
                  <input id="dodajTekst1" class="input" name="dodajTekst1" type="text" size="30" value="<?php echo $tekst;?>"><br>

                   <label for="slika">Slika:</label><br>
                  <input id="dodajSlika1" class="input" name="dodajSlika1" type="text" size="30" value="<?php echo $slika;?>"><br>
                   <input id="izmijeniVijest" type="submit" value="Spremi" name="izmijeniVijest" > <br>

             <br> <label for="brisiKomentar">ID komentara za obrisati:</label><br>
                  <input id="idKom" class="input" name="idKom" type="text" size="30" ><br>
                  <input id="obrisiKom" type="submit" value="Obriši" name="obrisiKom" ><br>
                  </form> </div>
                  <script type="text/javascript" src="loadPages.js"></script>
			
		</BODY>
	</HTML>