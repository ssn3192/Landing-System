


function validate(){
var name=document.myForm.fname.value;  
var email=document.myForm.femail.value;  
 var num = document.myForm.fnumber.value;
  
  if(name=" " && email== " " && num==" "){
	  
	  alert("Fill out the form");
	  return false;
  }
  else if(name== " " || email==" " || num==" "){
  
      alert("Please fill out the Name");
	  return false;
  }
  }
