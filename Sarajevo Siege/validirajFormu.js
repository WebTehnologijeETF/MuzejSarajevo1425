function validirajFormu(){

var opc = document.getElementById('opcina').value;
  opc = encodeURIComponent(opc);
var mj=document.getElementById('mjesto').value;
  mj = encodeURIComponent(mj);
var url = "http://zamger.etf.unsa.ba/wt/mjesto_opcina.php";
var t = document.getElementById('obavjestenje');
var ajax;
if (window.XMLHttpRequest)
   {
      ajax=new XMLHttpRequest();
   }
   else
   {
      ajax=new ActiveXObject("Microsoft.XMLHTTP");
   }

	ajax.open("GET", url + "?opcina=" + opc + "&mjesto=" + mj,true);
	ajax.onreadystatechange = function() {// Anonimna funkcija
		if (ajax.readyState == 4 && ajax.status == 200)
		{
			  var data = JSON.parse(ajax.responseText);
				if (data.ok) {

					t.innerHTML = "";
					
					}
					else t.innerHTML = "Imate grešku u unosu općine i mjesta!"
    
		}
		else if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("obavjestenje").innerHTML = "Greska: nepoznat URL";
	}

	ajax.send();
	validacija();
}

function validacija()
{
var name = document.forms["kontakt_forma"]["ime"].value;
var lastname = document.forms["kontakt_forma"]["prezime"].value;
var mail = document.forms["kontakt_forma"]["email"].value;
var message = document.forms["kontakt_forma"]["poruka"].value;

//provjera email adrese
  var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

if(re.test(mail)==false)
{
	alert("Niste unijeli ispravnu email adresu!");
	return false;
}

//projevera unosa imena
if(name.length <2 || /\d/.test(name)==true)
{
	alert("Niste unijeli ispravno ime!");
	return false;
}
//provjera unosa poruke
if(message.length <20 )
{
	alert("Poruka je prekratka!");
	return false;
}
//provjera unosa prezimena
if(lastname!=null && lastname!="" )
{
	if(lastname.length<2 || /\d/.test(lastname))
	alert("Niste unijeli ispravno prezime!");
	return false;          
}
}