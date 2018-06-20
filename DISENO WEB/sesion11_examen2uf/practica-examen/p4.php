<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script src="js/funciones.js"></script>
</head>
	<script>
		function Validar(){
			texto=document.getElementById("txtValor").value;
				
			if(texto==""){
				alert("Ingrese un valor.")
				return false;
			}
			
			/*var valor=document.getElementById("lstPref");
			var selected=valor.options[valor.selectedIndex].text;
			if(selected==Musica){
				objeto=document.getElementById("contenido1").value;
				objeto.style.display="block";
				alert("asd");
				return false;
			}*/
				
			if(valor==""){
				alert("Escoja una preferencia.")
				return false;
			}
			
			num=document.getElementById("txtNombres").value;
				
			if(num==""){
				alert("Escoja un archivo.")
				return false;
			}
			
			fec=document.getElementById("fecha").value;
				
			if(fec==""){
				alert("Escoja una fecha.")
				return false;
			}
				
			return true;
		}
		
		function ValidarEspacios(){
			if(!document.getElementById("txtValor").value.trim()==""){
				alert("Valor valido.");
				return true;
			}else{
				alert("Ingrese un valor válido.");
				return false;
			}	
		}
		
		function MostrarImagen(id){
			var objeto=document.getElementById(id)
			if(objeto.style.display=="block"){
				objeto.style.display="none";
			}else{
				objeto.style.display="block";
			}
		}
		
		function ValidarLetras(){
			var charpos = document.forms[0].txtValor.value.search("[^a-z]");
			if(document.forms[0].txtValor.value.length > 0 && charpos >= 0){
				alert("El campo solo permite letras minúsculas.");
				return false;
			}
			
			p=document.getElementById("txtValor").value;
			if(p=="" || !(/^\D{2,3}$/.test(p))){
				alert("El valor debe tener de 2 a 3 letras.");
				return false;	
			}
			
			h=document.getElementById("txtValor").value;
			if(h=="" || (/(a)/.test(h))){
				alert("El valor no debe contener vocales.");
				return false;	
			}
			
			h=document.getElementById("txtValor").value;
			if(h=="" || (/(e)/.test(h))){
				alert("El valor no debe contener vocales.");
				return false;	
			}
			
			h=document.getElementById("txtValor").value;
			if(h=="" || (/(i)/.test(h))){
				alert("El valor no debe contener vocales.");
				return false;	
			}
			
			h=document.getElementById("txtValor").value;
			if(h=="" || (/(o)/.test(h))){
				alert("El valor no debe contener vocales.");
				return false;	
			}
			
			h=document.getElementById("txtValor").value;
			if(h=="" || (/(u)/.test(h))){
				alert("El valor no debe contener vocales.");
				return false;	
			}
			
			return true;
		}
		
		function Mostrar(){
			var letra=document.getElementById("txtValor").value;
			if(letra==="5"){
				alert("asd");
				objeto=document.getElementById("contenido1");
				objeto.style.display="block";
			}	
		}
		
	</script>

<body>
<h1>Validacion</h1>  
<form action="pagina2.php" name='form1' method="post" onSubmit="return Validar();">

Valor:
	<input type="text" name="txtValor" id="txtValor" value=""/>
    
    <input type="submit" name="btnEnviar" value="Enviar" onClick="return ValidarLetras();"/>


</body>
</html>

