// Form Validation

function validate()
{
var packageName=document.forms["qr-generator"]["packageName"].value;
var packageNameStyle = document.getElementById("packageName");
var packageNumber = document.getElementById("packageNumber");
var packageNumber=document.forms["qr-generator"]["packageNumber"].value;
if (packageName==null || packageName=="")
  {  
  document.getElementById("packageName").style.backgroundColor = "#FF9"; 
  document.getElementById("packageNumber").style.backgroundColor = "#FF9"; 
  return false;
  }
if (packageNumber==null || packageNumber=="")
  {  
  document.getElementById("packageNumber").style.backgroundColor = "#FF9"; 
  return false;
  }  
}
