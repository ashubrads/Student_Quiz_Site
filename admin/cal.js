function calculation()
{
  tmarks=document.getElementById("tm").value;
  marksObtain=document.getElementById("mo").value;
  per=(marksObtain/tmarks)*100;
  if(per<40)
    document.getElementById("gr").vlaue=D;
  else if(per>=40)
    document.getElementById("gr").value=C;
   else if(per>=50)
     document.getElementById("gr").value=B;
    else
      document.getElementById("gr").vlaue=A;
}
  