// JavaScript Document
function check()
 {
	
   username=document.getElementById("us").value;
   password=document.getElementById("pas").value;
   cpassword=document.getElementById("cp").value;
   email=document.getElementById("eml").value;
   phone=document.getElementById("pho").value;
   city=document.getElementById("ct").value;
   address=document.getElementById("Add").value;
   output="";
   f=0;
   if(username=="")
   {
   output+="please enter your name<br>";
     f++;
   }
   if(password.length<10)
   {
     output+="please enter a valid password<br>";
     f++;
   }
   if(password!=cpassword)
   {
      output+="password is not matchingr<br>"; 
      f++;
   }
   if(email=="")
   {
      output+="please select any country<br>";
      f++;
   }
   if(phone=="" || isNaN(phone))
    {
      output+="please a enter a valid phone number<br>";
	}
	if(city=="")
   {
      output+="please select any country<br>";
      f++;
   }
   if(address=="")
   {
      output+="please select any country<br>";
      f++;
   }
       
     document.getElementById("xyz").innerHTML=output;
	
  if(f==0)
  return true;
  else
  return false;
} 
function res()
{
  document.getElementById("xy").innerHTML="";
  document.getElementById("xy1").innerHTML="";
}
function calculation()
{
	
  tmarks=document.getElementById("tm").value;
  marksObtain=document.getElementById("mo").value;
  per=(marksObtain*100)/tmarks;
  if(per<40)
    document.getElementById("gr").value="D";
  else if(per>=40 && per<50)
    document.getElementById("gr").value="C";
   else if(per>=50 && per<60)
     document.getElementById("gr").value="B";
    else
      document.getElementById("gr").value="A";
   alert("function call");
   return false;
}
  