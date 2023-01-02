// request als globale Variable anlegen (haesslich, aber bequem)
var request = new XMLHttpRequest();

function handle()
{
    "use strict";
    requestData();
    window.setInterval(requestData, 2000);
}

function process(jString)
{
    "use strict";
    let div_overview = document.getElementById("div-overview");
    if(div_overview != null) 
    {
        div_overview.remove();
    } 
    let order = JSON.parse(jString);

    div_overview = document.createElement("div");
    div_overview.setAttribute("id", "div-overview");
    

    let stats = ["Bestellt", "Im Ofen", "Fertig", "Unterwegs", "Geliefert"];
    if (order == null) {
        div_overview.appendChild
            (document.createTextNode("Keine Pizza vorhanden "));
    } else {
        for (let i = 0; i < order.length; i++) {
            let pizza_name = order[i][0];
            let status = parseInt(order[i][1]);
            let id = parseInt(order[i][2]);

            let fieldset = document.createElement("fildset");
            let legend = document.createElement("legend");
            legend.appendChild(document.createTextNode(pizza_name));
            fieldset.appendChild(legend);
            var div_status = document.createElement("div");

            for (let j = 0; j < 5; j++) {
                let radio = document.createElement("input");
                radio.setAttribute("type", "radio");
                radio.disabled = true;
                if (status == j) radio.checked = true;
                div_status.appendChild(radio);
                div_status.appendChild(document.createTextNode(stats[j]));
                div_status.appendChild(document.createElement("br"));
            }
            fieldset.appendChild(div_status);
            div_overview.appendChild(fieldset);
        }
    }
    document.body.append(div_overview);
    
}



function requestData() 
{ // fordert die Daten asynchron an
    "use strict";
    request.open("GET", "ClientStatus.php"); // URL für HTTP-GET
    request.onreadystatechange = processData; //Callback-Handler zuordnen
    request.send(null); // Request abschicken
}

function processData() {
    "use strict";
    if(request.readyState == 4) { // Uebertragung = DONE
       if (request.status == 200) {   // HTTP-Status = OK
         if(request.responseText != null) 
           process(request.responseText);// Daten verarbeiten
         else console.error ("Dokument ist leer");        
       } 
       else console.error ("Uebertragung fehlgeschlagen");
    } else ;          // Uebertragung laeuft noch
}