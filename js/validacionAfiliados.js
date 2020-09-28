

function validacion(){
    var tipDoc = document.getElementById("TD");
    var numDoc = document.getElementById("ND");
    var fechNac = document.getElementById("FN");

    if (tipDoc.value === "") {
        alert("falta selecionar tipo de documento")
        tipDoc.style.border = "1px solid #f00";
        return false;
    }else{
        tipDoc.style.border = "1px solid #0f0";
    }

    if (numDoc.value === "") {
        alert("falta digitar numero de documento");
        numDoc.style.border = "1px solid #f00";
        return false;
    }else{
        numDoc.style.border = "1px solid #0f0";
    }

    if (fechNac.value === "") {
        alert("falta selecionar fecha de nacimiento");
        fechNac.style.border = "1px solid #f00";
        return false;
    }else{
        fechNac.style.border = "1px solid #0f0";
    }
}