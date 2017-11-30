         var pag = 1;
         var num_muestra = 6;
         var clase = "muestra-canal muestra-canal-tube movible";
         var num_total = document.getElementsByClassName(clase).length;
         var num_acaba = 6;
         var num_empieza = 1;
         var boton_izq = "btn-left";
         var boton_dch = "btn-right";

         document.getElementById(boton_izq).onclick = function() {
            pag--;
            
            if (pag < 1) 
            {
                pag = num_total/num_muestra;
            }

            cambioVista();
         };

         document.getElementById(boton_dch).onclick = function() {
            pag++;
            
            if (pag > num_total/num_muestra) 
            {
                pag = 1;
            }

            cambioVista();
         };

        function cambioVista() {
            num_acaba = pag * num_muestra;
            num_empieza = num_acaba - (num_muestra-1);

            for (var i = 1; i <= num_total; i++) {
                document.getElementById("muestra"+i).style.display= "none";
            }
    
            for (var i = num_empieza; i <= num_acaba ; i++)
            {
                document.getElementById("muestra"+i).style.display= "block";

            }
        }