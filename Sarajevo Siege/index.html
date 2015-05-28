<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
	<head>
		<META http-equiv="Content-Type" content="text/html; charset=utf-8">
			<TITLE>Sarajevo Seige</TITLE>
			<link rel="stylesheet" type="text/css" href="SarajevoSiege.css">

		</head>

		<BODY>

		<?php 
		 function prikaziCijeluVijest() {
  }

  if (isset($_GET['klikNaDetaljnije'])) {
    prikaziCijeluVijest();
  }
		$sveVijesti="";
		$veza = new PDO("mysql:dbname=sarajevoseige;host=localhost;charset=utf8", "adm", "1DvaTri");
       $veza->exec("set names utf8");
       $rezultat = $veza->query("select id, naslov, tekst, UNIX_TIMESTAMP(datumObjave) vrijeme2, autor, url from vijest order by datumObjave desc");
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
     	$komentari=$veza->query( "select count(*) broj from komentari where vijest=".$vijest['id']);     	
     	$array = explode('\n',$vijest['tekst']);
        $firstLine = $array[0];
		$lin="<p class='linija_ispod'>".date("d.m.Y. (h:i)", $vijest['vrijeme2']).", objavio:<a href='#''>".$vijest['autor']."</a> </p>";
		$tkst="<div class='tekst_objave'><p>".$firstLine."...</p>";
        $brojKomentara0="<small>Nema komentara</small><br>";
        $bk = $komentari->fetch(PDO::FETCH_ASSOC);
        $brojKomentarax="<small>Komentari: ".$bk['broj']."</small><br>";
        if($bk['broj']==0){

        	$det="</div>".$brojKomentara0."<p class='meta'><a href='index.php?klikNaDetaljnije=true class='detaljnije'>Detaljnjije</a> </p></div>";
        $sveVijesti=$sveVijesti.$nasl.$lin.$tkst.$det;
    }
     
    else
    {
    	$det="</div>".$brojKomentarax."<p class='meta'><a href='index.php?likNaDetaljnije=true class='detaljnije'>Detaljnjije</a> </p></div>";
        $sveVijesti=$sveVijesti.$nasl.$lin.$tkst.$det;
    }
 
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
					<li><a onclick="loadPages('admin.php')">Admin</a></li>
				</ul>
               <form id="vijesti" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="vijesti"  method="post" >
                   <div ><span><?php echo $sveVijesti;?></span> </div>
				
               </form>
			</div>
<script type="text/javascript" src="loadPages.js"></script>
			
		</BODY>
	</HTML>