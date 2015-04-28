
var xmlhttp;
function load(str, url, cfunc)
{

  if (window.XMLHttpRequest)
  {
    xmlhttp=new XMLHttpRequest();
  }
  else
  {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=cfunc;
  xmlhttp.open("POST",url,true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send(str);
}

function metodoAjax(datos, ruta)
{
 load(datos, ruta, function()
 { 
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
   {
     document.getElementById("cuerpo").innerHTML=xmlhttp.responseText;
   }
 });
}


function ElegirBanda(idBanda)
{
 metodoAjax("valor="+idBanda,"recibeBanda.php","cuerpo");
}



function getRequestObject() {
  // Asynchronous objec created, handles browser DOM differences

  if(window.XMLHttpRequest) {
    // Mozilla, Opera, Safari, Chrome IE 7+
    return (new XMLHttpRequest());
  }
  else if (window.ActiveXObject) {
    // IE 6-
    return (new ActiveXObject("Microsoft.XMLHTTP"));
  } else {
    // Non AJAX browsers
    return(null);
  }
}



