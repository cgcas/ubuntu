         var pag = 1;
         var num_muestra = 6;
         var num_total = 24;
         var num_acaba = 6;
         var num_empieza = 1;

         document.getElementById("btn-left").onclick = function() {
            pag--;
            
            if (pag < 1) 
            {
                pag = num_total/num_muestra;
            }

            num_acaba = pag * num_muestra;
            num_empieza = num_acaba - 5;

            for (var i = 1; i <= num_total; i++) {
                document.getElementById("muestra"+i).style.display= "none";
            }

            for (var i = num_empieza; i <= num_acaba ; i++)
            {
                document.getElementById("muestra"+i).style.display= "block";

            }
         };

         document.getElementById("btn-right").onclick = function() {
            pag++;
            
            if (pag > num_total/num_muestra) 
            {
                pag = 1;
            }

            num_acaba = pag * num_muestra;
            num_empieza = num_acaba - 5;

            for (var i = 1; i <= num_total; i++) {
                document.getElementById("muestra"+i).style.display= "none";
            }

            for (var i = num_empieza; i <= num_acaba ; i++)
            {
                document.getElementById("muestra"+i).style.display= "block";

            }
         };