
function validacion(){
    var tipCit = document.getElementById("TI");

    if (tipCit.value === "") {
        alert("falta selecionar Tipo de cita");
        tipCit.style.border = "1px solid #f00";
        return false;
    }else{
        tipCit.style.border = "1px solid #0f0";
        return true;
    }
}