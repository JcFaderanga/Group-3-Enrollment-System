



function admission(){

		document.getElementById("contentenroll").style.display="flex";
		document.getElementById("lr").style.display="none";		
		  document.getElementById("content").style.display="none";
		 document.getElementById("admin").style.background="rgba(31,31,31,1)";
		  document.getElementById("admission").style.background="green"
		   document.getElementById("login").style.display="none";
		    document.getElementById("footer").style.display="none";
}

function enrollbtn(){
	document.getElementById("contentenroll").style.display="flex";
    document.getElementById("lr").style.display="none";
    document.getElementById("admission").style.background="green"
	document.getElementById("admission").style.display="flex";
	document.getElementById("home").style.background="rgba(31,31,31,1)";
	  document.getElementById("content").style.display="none";
	   document.getElementById("login").style.display="none";
	    document.getElementById("footer").style.display="none";
}
function login(){

if(document.getElementById("Username").value != 'admin' && 
	document.getElementById("Password").value != 'admin123'){
alert('admin yung username tapos sa password kahit ano');
}
else{
	 document.getElementById("login").style.display="none";
	  document.getElementById("content").style.display="flex";
	  document.getElementById("footer").style.display="none";
}
}

function home(){


 document.getElementById("lr").style.display="flex";
 document.getElementById("contentenroll").style.display="none";
 document.getElementById("admission").style.background="rgba(31,31,31,1)"
 document.getElementById("home").style.background="green";
 document.getElementById("admission").style.display="none";
  document.getElementById("content").style.display="none";
  document.getElementById("admin").style.background="transparent";
document.getElementById("footer").style.display="flex";
   document.getElementById("login").style.display="none";

}

function admin(){
 document.getElementById("login").style.display="flex";
   document.getElementById("lr").style.display="none";
    document.getElementById("content").style.display="none";
   document.getElementById("admission").style.background="rgba(31,31,31,1)";
   document.getElementById("home").style.background="rgba(31,31,31,1)";
   document.getElementById("admin").style.background="green";
   document.getElementById("admission").style.display="flex";
   document.getElementById("admission").style.hover="green";
   document.getElementById("contentenroll").style.display="none";
    document.getElementById("footer").style.display="flex";

   }







