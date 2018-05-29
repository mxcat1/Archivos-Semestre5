function verificar() {
    let valor=prompt(" Ingrese un Numero",0)
    // SIN MOB % PARA SACAR EL RESIDUO
    // let divi=parseInt(valor/2)
    //
    // if (divi*2==valor){
    //     alert("El valor "+ valor +" es PAR")
    // }
    // else{
    //     alert("El valor "+ valor + " Es IMPAR")
    // }
    // CON MOB % PARA SACAR EL RESIDUO

    while (isNaN(valor)){
        valor=prompt("Ingrese un Numero", 0)
    }
    if (valor%2==0){
        alert("El valor "+ valor +" es PAR")
    }
    else{
        alert("El valor "+ valor + " Es IMPAR")
    }
}