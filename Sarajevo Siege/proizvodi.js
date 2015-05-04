function load()
{
			var ajax = new XMLHttpRequest();
			var param = "http://zamger.etf.unsa.ba/wt/proizvodi.php";
			
			ajax.onreadystatechange = function() {// Anonimna funkcija
			if (ajax.readyState == 4 && ajax.status == 200)
			{
					var data = JSON.parse(ajax.responseText);
					
					var t = document.getElementById('proizvodi');
					
					for(var i=0;i< data.length;i++)
					{
					var novi = '<tr><td>' + data[i].naziv + '</td>' + '\
					<td>' + data[i].opis + '</td>' + '\
					<td>' + data[i].url + '</td>' + '\
					<td>' + data[i].kolicina + '</td>' +'\
					<td>' + data[i].cijena + '</td>' + '\
					<td>' + data[i].dostupnost + '</td></tr>';
					
					t.innerHTML = t.innerHTML + novi;
					
					}
				
				
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
	var ajax = new XMLHttpRequest();
			var param = "http://zamger.etf.unsa.ba/wt/proizvodi.php";
			
			var proizvod = {
			
			brIndeksa="15773",
				naziv: "Zastava",
			   opis :"Zastava koja je korištena tokom agresije",
				kolicina : "1",
			cijena : "5"
			dostupnost :"1"
				
				};
				
			
			ajax.onreadystatechange = function() {// Anonimna funkcija
			if (ajax.readyState == 4 && ajax.status == 200)
			{
					alert("Uspjesno ste dodali novi proizvod");
				
				
				}
			if (ajax.readyState == 4 && ajax.status == 404)
				{
					
					
						alert("error");
				}
		}
		
		
			  ajax.open("POST", param, true);
				ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.send("akcija=dodavanje" + "&proizvod=" + JSON.stringify(proizvod));
			


}


function update()
{
	var ajax = new XMLHttpRequest();
			var param = "http://zamger.etf.unsa.ba/wt/proizvodi.php";
			
			
			var proizvod = {
			    brIndeksa="15773",
				naziv: "Zastava",
			   opis :"Zastava koja je korištena tokom agresije",
				kolicina : "1",
			cijena : "5"
			dostupnost :"1"
				
				};
			
			ajax.onreadystatechange = function() {// Anonimna funkcija
			if (ajax.readyState == 4 && ajax.status == 200)
			{
					alert("Uspjesno ste promijenili podatke  o proizvodu");
				
				
				}
			if (ajax.readyState == 4 && ajax.status == 404)
				{
					
					
						alert("error");
				}
		}
		
		
			  ajax.open("POST", param, true);
				ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.send("akcija=promjena" + "&proizvod=" + JSON.stringify(proizvod));
			


}

function deletes()
{
	var ajax = new XMLHttpRequest();
			var param = "http://zamger.etf.unsa.ba/wt/proizvodi.php";
			
			
			var proizvod = {
			    brIndeksa="15773",
				naziv: "Zastava",
			    opis :"Zastava koja je korištena tokom agresije",
				kolicina : "1",
			    cijena : "5"
			    dostupnost :"1"
				
				};
			
			ajax.onreadystatechange = function() {// Anonimna funkcija
			if (ajax.readyState == 4 && ajax.status == 200)
			{
					alert("Uspjesno ste obrisali proizvod");
				
				
				}
			if (ajax.readyState == 4 && ajax.status == 404)
				{
					
					
						alert("error");
				}
		}
		
		
			  ajax.open("POST", param, true);
				ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			ajax.send("akcija=brisanje" + "&proizvod=" + JSON.stringify(proizvod));
			


}