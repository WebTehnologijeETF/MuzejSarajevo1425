<?php
$idvijesti =$_GET['vijest'];
$kom="";
$errkom="";
$veza = new PDO("mysql:dbname=sarajevoseige;host=localhost;charset=utf8", "adm", "1DvaTri");
$veza->exec("set names utf8");
   try {
 $prna = $veza->prepare("insert komentari (vijest,autor,sadrzaj) VALUES (:vijest, :autor, :sadrzaj)");
  $prna->bindParam(':vijest', $idvijesti);
 $autor="Anoniman";
 if(empty($_POST["aut"]))
	{
		 $prna->bindParam(':autor', $autor);
	}
 else $prna->bindParam(':autor', $_POST['aut']);
  $prna->bindParam(':sadrzaj', $_POST['kom']);
 $prna->execute();
$homepage = file_get_contents('http://localhost/ss/komentari.php?vijest='.$idvijesti);
echo $homepage;

 }
catch(PDOException $e) {
 echo $sql . $e->getMessage();
 }
?>