function verificar() {
    let formulario = document.getElementById("form1")
    let conta = 0
    for (let i=0;i<formulario.elements.length;i++){
        let elemento = formulario.elements[i]
        console.log(formulario.elements.length)
        if (elemento.type == "checkbox" && elemento.checked){
            conta++
        }
    } 
    if (conta!=3){
        alert("Falta seleccionar "+ (3-conta) + " opciones")
        return false
    }

    return true
}