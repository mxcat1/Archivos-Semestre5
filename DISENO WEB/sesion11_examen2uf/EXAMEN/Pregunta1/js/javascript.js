function verificarfecha() {
    let fecha = document.getElementById('txtfecha')
    let dia = parseInt(fecha.value.substring(0,2))
    let mes = parseInt(fecha.value.substring(3,5))
    let ano = parseInt(fecha.value.substring(6))
    let boton=document.getElementById("btnverificar")
    console.log("paso"+(typeof(dia))+dia+mes+ano)
    if(dia>=1 && dia<=31){
        if(mes>=1 && mes<=12){
            console.log("paso")
            if(ano>=1970 && ano<=2018){
                console.log("paso")
                boton.innerText="Correcto "+ fecha.value
                boton.style.color='green'
                boton.style.borderColor = 'green'
            }else{
                boton.innerText="Datos Incorrectos"
                boton.style.color='red'
                boton.style.borderColor = 'red'
            }
        }else {
            boton.innerText="Datos Incorrectos"
            boton.style.color='red'
            boton.style.borderColor = 'red'
        }
    }else{
        boton.innerText="Datos Incorrectos"
        boton.style.color='red'
        boton.style.borderColor = 'red'
    }

}