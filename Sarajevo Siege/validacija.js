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