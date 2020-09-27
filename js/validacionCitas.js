
function validacion(){

    
    var tipCit = document.getElementById("TI");
    

    //verificacion de datos - tipo de cita
    if (tipCit.value === "") {
        alert("falta selecionar Tipo de cita");
        tipCit.style.border = "1px solid #f00";
        return false;
    }else{
        tipCit.style.border = "1px solid #0f0";
    }


    var noIde = document.getElementById("NI");
    var noIde2 = documen.getElementById("NI-2");
    
    //verificacion de datos - Nro Identificacion
    if (noIde.value === "") {
        alert("falta digitar Nro de identificacion");
        noIde.style.border = "1px solid #f00";
        return false;
    }else{
        noIde.style.border = "1px solid #0f0";
    }

    if (noIde2.value === "") {
        alert("falta digitar Nro de identificacion");
        noIde2.style.border = "1px solid #f00";
        return false;
    }else{
        noIde2.style.border = "1px solid #0f0";
    }

}