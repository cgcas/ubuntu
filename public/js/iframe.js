var pag = 1;
var num_muestra = 6;
var clase = "movible";
var num_total = document.getElementsByClassName(clase).length;
var num_acaba = 6;
var num_empieza = 1;
var boton_izq = "btn-left";
var boton_dch = "btn-right";

if (num_total % num_muestra != 0) {
    num_vueltas = num_total / num_muestra;
    num_vueltas++;
}else{
    num_vueltas = num_total / num_muestra;
}

num_vueltas = Math.trunc(num_vueltas);


document.getElementById(boton_izq).onclick = function() {
    pag--;
            
    if (pag < 1) 
    {
        pag = num_vueltas;
    }
    
    cambioVista();
};

document.getElementById(boton_dch).onclick = function() {
    pag++;
       
    if (pag > num_vueltas) 
    {
        pag = 1;
    }
   
    cambioVista();
};

function cambioVista() {

    for (var i =  0; i < num_total; i++) {
        document.getElementsByClassName(clase)[i].style.display= "none";
    }

    num_acaba = pag * num_muestra;
    num_empieza = num_acaba - (num_muestra-1);

    if (pag == num_vueltas) {
        num_empieza = num_total - num_muestra;
        for (var i = num_empieza; i < num_total ; i++)
        {
            document.getElementsByClassName(clase)[i].style.display= "block";
        }
    }else{
        for (var i = num_empieza - 1; i < num_acaba ; i++)
        {
            document.getElementsByClassName(clase)[i].style.display= "block";
        }
    }
}