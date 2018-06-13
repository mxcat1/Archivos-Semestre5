function verificarchk(nform,chkn) {
    let formulario=document.getElementById(nform)
    let contapre=0
    for (let i=0;i<formulario.elements.length;i++){
        let elemetochk=formulario.elements[i]
        console.log(elemetochk.id)
        if (elemetochk.type == "checkbox" && elemetochk.name ==chkn && elemetochk.checked){
            console.log(elemetochk.id + chkn)
            contapre++
        }
    }
    console.log(contapre)
    if (contapre!=2){
        alert("No marcaste dos opciones")
        return false
    }
    return true
}
function verificar(){
    if ((verificarchk("formulario","chkpreferencias[]"))&&( verificarchk("formulario","chkcuentas[]"))) {
        return true
    }
    return false
}