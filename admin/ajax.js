
function checkuser(str)
{
if (str=="")
  {
  document.getElementById("xyz").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		
		if(xmlhttp.responseText==null)
		alert("yes");
	document.getElementById("xyz").innerHTML=xmlhttp.responseText;
		
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}






