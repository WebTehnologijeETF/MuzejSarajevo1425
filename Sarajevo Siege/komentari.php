<!DOCTYPE html>
<HTML>
	<head>
		<META http-equiv="Content-Type" content="text/html; charset=utf-8">
			<TITLE>Sarajevo Seige</TITLE>
			<link rel="stylesheet" type="text/css" href="SarajevoSiege.css">

		</head>

		<BODY>
<?php
$idvijesti =$_GET['vijest'];
$kom="";
$errkom="";
$veza = new PDO("mysql:dbname=sarajevoseige;host=localhost;charset=utf8", "adm", "1DvaTri");
$veza->exec("set names utf8");
$dugme="<a  href='http://localhost/ss/posaljiKom.php?vijest=".$idvijesti."'>Pošalji</a>";

$upit = $veza->prepare("select id, autor,sadrzaj, UNIX_TIMESTAMP(datumObjave) vrijeme3 from komentari where vijest=? order by datumObjave desc");
$upit->bindValue(1, $idvijesti, PDO::PARAM_INT);
$upit->execute();

	$Vijest="";
	$SviKomentari="";
       $rezultat = $veza->prepare("select id, naslov, tekst, UNIX_TIMESTAMP(datumObjave) vrijeme2, autor, url from vijest where id=? order by datumObjave desc");
     $rezultat->bindValue(1, $idvijesti, PDO::PARAM_INT);
   $rezultat->execute();
     if (!$rezultat) {
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
     }
     foreach ($rezultat as $vijest) {
     	if($vijest['url']=="nema slike")
     	{
     		 $nasl="<div class='post'><h1 class='Naslov'>".$vijest['naslov']."</h1>";
     	}
     	else 
     	{

     		 $nasl="<div class='post' style='background-image: url('".$vijest['url']."')'><h1 class='Naslov'>".$vijest['naslov']."</h1>";
     		}
		$lin="<p class='linija_ispod'>".date("d.m.Y. (h:i)", $vijest['vrijeme2']).", objavio:<a href='#''>".$vijest['autor']."</a> </p>";
		$tkst="<div class='tekst_objave'><p>".$vijest['tekst']."</p></div>";
		$Vijest=$Vijest.$nasl.$lin.$tkst;
	}
     foreach ($upit as $komentar) {
     $nasl1="<div class='post'><h1 class='Naslov'></h1>";
     $lin4="</div><p class='meta'>Komentar:".$komentar['id']."</p></div>";
          $lin4="<p class='linija_ispod'>Komentar:".$komentar['id']."</p>";
$tkst1="<div class='tekst_objave'><p>".$komentar['sadrzaj']."</p></div>";
$lin1="<p class='linija_ispod'>".date("d.m.Y. (h:i)", $komentar['vrijeme3']).", objavio:".$komentar['autor']."</p>";
     $SviKomentari=$SviKomentari.$nasl1.$lin4.$tkst1.$lin1;
     }

?>

				<div id="logo">
				<p id="logo_tekst">Sarajevo<br>1425</p>
			</div>
			<div id="centar"> 
				<ul id="menu">
					<li id="active"> <a onclick="loadPages('index.php')">POČETNA</a></li>
					<li><a onclick="loadPages('Sarajevo%20SiegeHronologija.html')">HRONOLOGIJA</a></li>
					<li><a onclick="loadPages('SarajevoSiegeGalerija.html')">GALERIJA</a></li>
					<li><a onclick="loadPages('SarajevoSiegeProjekti.html')">PROJEKTI</a></li>
					<li><a onclick="loadPages('SarajevoSiegeMapa.html')">ŠTA VIDJETI</a></li>
					<li><a onclick="loadPages('SarajevoSiegeKontakt.php')">KONTAKT</a></li>
					<li><a onclick="loadPages('suveniri.html')">SUVENIRI</a></li>
				</ul>
               <form id="vijesti" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="vijesti"  method="post" >
                   <div ><span><?php echo $Vijest;?></span> </div><br>
                   <div class='post'><h1 class='Naslov'>Komentari:</h1>
                    <div ><span><?php echo $SviKomentari;?></span> </div>
                    <div class='post'><h1 class='Naslov'></h1>
            
				 <div class="red">
						<label for="kom">Moj komentar:</label><br>
						<input id="kom" class="input" name="kom" type="text" required><br>
						<label for="kom">Moje ime:</label><br>
						<input id="aut" class="input" name="aut" type="text" ><br>
					</div>
					 <div ><span><?php echo $dugme;?></span> </div><br>

					</form>
              
			</div>
			<script type="text/javascript" src="loadPages.js"></script>
		</BODY>
	</HTML>