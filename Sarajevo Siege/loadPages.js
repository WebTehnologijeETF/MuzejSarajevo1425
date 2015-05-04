
    function loadPages(url) {
   var ajax;
if (window.XMLHttpRequest)
   {
      ajax=new XMLHttpRequest();
   }
   else
   {
      ajax=new ActiveXObject("Microsoft.XMLHTTP");
   }
    ajax.onreadystatechange = function() {
        if(ajax.status == 200 && ajax.readyState == 4) {
            document.open();
            document.write(ajax.responseText);
            document.close();
        }
    }

    ajax.open("GET", url, true);
    ajax.send();
}

    
