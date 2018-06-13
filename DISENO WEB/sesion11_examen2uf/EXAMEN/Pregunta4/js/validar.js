function validarr()
{
	xminus=document.getElementById("txtminus").value;
	if((/[aeiou|A-Z|0-9]/.test(xminus)) || !(xminus.length>=2 && xminus.length<=3)) {
		alert("Escriba de 2 a 3 letras en minuscula y sin vocales");
		return false;
	}
	return true;
	
}