import './bootstrap';
let monto=0.0
const botones = document.querySelectorAll(".asientoelegible");
const cuandoSeHaceClick = function (evento) {
    if(this.value != 'reservado'){
        let id_oculto = "asiento"+this.id 
        let datoculto = document.getElementById(id_oculto)
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
}
// botones es un arreglo así que lo recorremos
botones.forEach(boton => {
    if(boton.value == "reservado"){
        boton.style.background = "red";
    }
	//Agregar listener
	boton.addEventListener("click", cuandoSeHaceClick);
});

window.Echo.channel('asientos')
    .listen('SelectviajeChangedEvent',(e)=>{
    let viajeselec = document.getElementById("viaje"+e.idviaje); 
    if(botones.length != 0 && viajeselec != null){
        for(let i = 0; i<30; i++){
            let s = i+1;
            let idboton = s.toString();
            let botonselec = document.getElementById(idboton);
            if(e.estados[i+2] == '0' && botonselec.value != "reservado"){
                let id_oculto = "asiento"+botonselec.id;
                let datoculto = document.getElementById(id_oculto);
                if(datoculto != null){
                    if(datoculto.value == '1'){
                        monto = monto - parseFloat(botonselec.value);
                        document.getElementById("monto").innerHTML = "S/"+monto 
                    }
                    datoculto.value = "";
                }
                botonselec.value = "reservado";
                botonselec.style.background = "red";
            }
            if(e.estados[i+2] == '1' && botonselec.value == "reservado"){
                let id_oculto = "asiento"+botonselec.id;
                let datoculto = document.getElementById(id_oculto);
                datoculto.value = "";
                botonselec.value = "120";
                botonselec.style.background = "";
            }
        }
    }
})