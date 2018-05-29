
function validar() {
    let texto= document.getElementById("txtValor").value
    if (texto == '' || /^\s+$/.test(texto)){
        alert("No hay texot")
        return false

    }
    let numeros= document.getElementById("txtnumeros").value
    if (numeros == '' || !(/^\d{9}$/.test(numeros))){
        alert("solo numeros")
        return  false
    }
    let checkbox= document.getElementById("chkcheck")
    if (!checkbox.checked){
        alert("Haga un check")
        return  false
    }
    // let opcion = document.getElementById("chkTodos1")
    // if (!opcion.checked){
    //     alert("Falta Checks")
    //     return false
    // }
    let formulario =document.getElementById("form1")
    let conta=0
    for (let i = 1;i<formulario.elements.length;i++){
        let elemento = formulario.elements[i]
        let hola=elemento.id
        console.log("Elemento ID"+hola)

        if (elemento.type == "checkbox"){
            // if (!elemento.checked){
            //     alert("Falta Checks"+i)
            //     return false
            //
            // }
            if (elemento.checked && elemento.id!="chkcheck"){
                conta++

                // if (conta==2){
                //     break
                // }
            }
        }
    }
    console.log(conta)
    if(conta!=2){
        alert("No marcaste dos opciones")
        return false
    }

    let rbop=document.getElementsByName("rbopcion")
    let seleccionado =false
    for (let q=0;q<rbop.length;q++){
        if (rbop[q].checked){
            seleccionado =true
            break
        }
    }
    if (seleccionado==false){
        alert("Falta Checks")
        return false
    }
    return true
}
