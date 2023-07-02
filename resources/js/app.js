import './bootstrap';
let monto=0.0
const botones = document.querySelectorAll(".asientopermitido");
// Definir función y evitar definirla de manera anónima
const cuandoSeHaceClick = function (evento) {
	// Podemos cambiar cualquier cosa, p.ej. el estilo
    let id_oculto = "asiento"+this.id 
    let datoculto=document.getElementById(id_oculto)
	if(this.style.background  == "green"){
        monto = monto - parseFloat(this.value)
        this.style.background  = ""
        datoculto.value = ""
    }
    else{
        monto = monto + parseFloat(this.value)
        this.style.background  = "green"
        datoculto.value = "1"
    }
    
    document.getElementById("monto").innerHTML = "S/"+monto 
}
// botones es un arreglo así que lo recorremos
botones.forEach(boton => {
	//Agregar listener
	boton.addEventListener("click", cuandoSeHaceClick);
});