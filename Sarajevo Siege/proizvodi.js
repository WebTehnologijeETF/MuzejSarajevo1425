function load()
{
			var ajax;
if (window.XMLHttpRequest)
   {
      ajax=new XMLHttpRequest();
   }
   else
   {
      ajax=new ActiveXObject("Microsoft.XMLHTTP");
   }
			var param = "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=15773";
			
			ajax.onreadystatechange = function() {// Anonimna funkcija
			if (ajax.readyState == 4 && ajax.status == 200)
			{
					var data = JSON.parse(ajax.responseText);
					
					var t = document.getElementById('proizvodi');
					var t1='<tr><th>ID</th><th>Naziv</th><th>Opis</th><th>Količina</th><th>Cijena</th><th>Dostupnost</th></tr>;'
					for(var i=0;i< data.length;i++)
					{
					var novi = '<tr><td>' + data[i].id + '</td>' + '\
					<td>' + data[i].naziv + '</td>' + '\
					<td>' + data[i].opis + '</td>' + '\
					<td>' + data[i].kolicina + '</td>' +'\
					<td>' + data[i].cijena + '</td>' + '\
					<td>' + data[i].dostupnost + '</td></tr>';
					t1=t1+novi;
					
					}
					t.innerHTML = t1;
				
				
				}
			if (ajax.readyState == 4 && ajax.status == 404)
				{
					
					
						alert("error");
				}
		}
			ajax.open("GET", param, true);
			ajax.send();


}



function add()
{
	var ajax;
if (window.XMLHttpRequest)
   {
      ajax=new XMLHttpRequest();
   }
   else
   {
      ajax=new ActiveXObject("Microsoft.XMLHTTP");
   }
			var param = "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=15773";
	var _naziv = document.getElementById("naziv");
    var _opis = document.getElementById("opis");
    var _kolicina=document.getElementById("kolicina");
    var _cijena=document.getElementById("cijena");
    var _dostupnost=document.getElementById("dostupnost");
	
			var proizvod = {
			naziv: _naziv.value,
			opis :_opis.value,
			kolicina : _kolicina.value,
			cijena : _cijena.value,
			dostupnost :_dostupnost.value};
				
			
			ajax.onreadystatechange = function() {// Anonimna funkcija
			if (ajax.readyState == 4 && ajax.status == 200)
			{
					alert("Uspjesno ste dodali novi proizvod");
					load();
				return true;
				
				}
			else if (ajax.readyState == 4 && ajax.status == 404)
				{
					
					
						alert("Nepostojeći proizvod!");
						return false;
				}
				else if (ajax.readyState == 4 && ajax.status == 400)
				{
					
					
						alert("Pogrešni podaci!");
						return false;
				}
		}
		
		
			  ajax.open("POST", param, true);
				ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.send("akcija=dodavanje" + "&proizvod=" + JSON.stringify(proizvod));
			


}


function update()
{
			var ajax;
if (window.XMLHttpRequest)
   {
      ajax=new XMLHttpRequest();
   }
   else
   {
      ajax=new ActiveXObject("Microsoft.XMLHTTP");
   }
			var param = "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=15773";
			
			
			var _naziv = document.getElementById("naziv");
    var _opis = document.getElementById("opis");
    var _kolicina=document.getElementById("kolicina");
    var _cijena=document.getElementById("cijena");
    var _dostupnost=document.getElementById("dostupnost");
	
			var proizvod = {
		    id: parseInt(document.getElementById("id").value),
			naziv: _naziv.value,
			opis :_opis.value,
			kolicina : _kolicina.value,
			cijena : _cijena.value,
			dostupnost :_dostupnost.value};
				
			
			
			ajax.onreadystatechange = function() {// Anonimna funkcija
			if (ajax.readyState == 4 && ajax.status == 200)
			{
					alert("Uspjesno ste promijenili podatke  o proizvodu");
						load();
				return true;
				
				}
			else if (ajax.readyState == 4 && ajax.status == 404)
				{
					
					
						alert("Nepostojeći proizvod!");
						return false;
				}
				else if (ajax.readyState == 4 && ajax.status == 400)
				{
					
					
						alert("Pogrešni podaci!");
						return false;
				}
		}
		
		
			  ajax.open("POST", param, true);
				ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.send("akcija=promjena" + "&proizvod=" + JSON.stringify(proizvod));
			


}

function deletes()
{
		var ajax;
if (window.XMLHttpRequest)
   {
      ajax=new XMLHttpRequest();
   }
   else
   {
      ajax=new ActiveXObject("Microsoft.XMLHTTP");
   }
		var param = "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=15773";
			
			
			var proizvod = {
			id: parseInt(document.getElementById("id").value),
            naziv: "",
            opis: "",
			kolicina : "",
			cijena : "",
			dostupnost :"0" };
			
			ajax.onreadystatechange = function() {// Anonimna funkcija
			if (ajax.readyState == 4 && ajax.status == 200)
			{
					alert("Uspjesno ste obrisali proizvod");
						load();
				return true;
				
				}
			else if (ajax.readyState == 4 && ajax.status == 404)
				{
					
					
						alert("Nepostojeći proizvod!");
						return false;
				}
				else if (ajax.readyState == 4 && ajax.status == 400)
				{
					
					
						alert("Pogrešni podaci!");
						return false;
				}
		}
		
		
			  ajax.open("POST", param, true);
				ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.send("akcija=brisanje" + "&proizvod=" + JSON.stringify(proizvod));
			


}