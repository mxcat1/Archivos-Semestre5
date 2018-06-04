function mostrar_clase(){
    document.getElementById("menu-cel").classList.toggle('show')

}
window.onload = function () {
    document.getElementById("menu-cel").addEventListener('click',mostrar_clase);

}