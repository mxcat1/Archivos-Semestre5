function validarr()
{
	xminus=document.getElementById("txtminus").value;
	if((/^(?=(?:.*[a-z]))\S{2,3}$/.test(xminus)))
	{
		alert("Escriba de 2 a 3 letras en minuscula y sin vocales");
		return false;
	}
	return true;
	
}