function Validar(){
	v=document.getElementById("txtValor").value;
	if(v=="" || /^\s+$/.test(v)){
		alert("Escriba un valor.");
		return false;	
	}

	n=document.getElementById("txtNum").value;
	if(n=="" || !(/^\d{9}$/.test(n))){
		alert("Escriba 9 digitos.");
		return false;	
	}
	
	//Lectura de un elemento
	c=document.getElementById("chkBox");
	if(!c.checked){
		alert("Marque la casilla.");
		return false;	
	}
	
	//Lectura de un formulario
	f=document.getElementById("form1");
	i=0;
	j=7;
	while(i<f.elements.length){
		//Lectura de cada elemento
		var e=f.elements[i];
		if(e.type=="checkbox"){
			if(!e.checked){
				alert("Marque todas las casillas."+j);
				return false;
			}
		}
		i++;
		j--;
	}
	
	//Lectura de un elemento tipo radio
	opc=document.getElementsByName("r1");
	var sel=false;
	k=0;
	while(k<opc.length){
		if(opc[k].checked){
			sel=true;
			break;
		}
		k++;
	}
	
	if(!sel){
		alert("Seleccione un turno.");
		return false;
	}
	return true;
}