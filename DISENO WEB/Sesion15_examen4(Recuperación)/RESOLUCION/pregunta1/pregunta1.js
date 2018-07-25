function verificarfecha() {
    let fecha = document.getElementById('txtFecha')
    let dia = fecha.value.substring(0,2)
    let mes = fecha.value.substring(3,5)
    let ano = fecha.value.substring(6)
    let boton=document.getElementById("btnVer")
    console.log("paso"+(typeof(dia))+dia+mes+ano)
    if((dia>=1 && dia<=31)&&(mes>=1 && mes<=12)&&(ano>=1970 && ano<=2018)){
        console.log("paso")
        boton.innerText="Correcto "+ fecha.value
        boton.style.color='green'
        boton.style.borderColor = 'green'
    }else{
        boton.innerText="Datos Incorrectos"
        boton.style.color='red'
        boton.style.borderColor = 'red'
    }
}