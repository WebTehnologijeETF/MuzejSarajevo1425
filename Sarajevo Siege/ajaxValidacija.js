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
					return 1;
					}
					else
					{t.innerHTML = "Imate grešku u unosu općine i mjesta!"
				return 0;
			}
    
		}
		else if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("obavjestenje").innerHTML = "Greska: nepoznat URL";
	}

	ajax.send();
}
