function MostrarCaja_1(){
	var A= document.getElementById("Caja_1");
	var B= document.getElementById("Caja_2");
	if(A.style.display == "none"){
		A.style.display = "block";		
		A.style.transitionDuration= "2s";
	}
	else if(A.style.display == "none"){
		alert("hola");
		//A.style.display= "none";
	}	
	else if(B.style.display == "block"){
		B.style.display= "none";
	}
}

function MostrarCaja_2(){
	var A= document.getElementById("Caja_1");
	var B= document.getElementById("Caja_2");
	if(B.style.display == "none"){
		B.style.display = "block";
	}
	else if(B.style.display == "block"){
		alert("hola");
		//A.style.display= "none";
	}	
	else{
		alert("Error");
	}
}
