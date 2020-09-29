
function validacion(){

    //inicializacion de variables para el manejo de los campos
    var nom = document.getElementById("NB");
    var apell = document.getElementById("AP");
    var tipDoc = document.getElementById("TD");
    var fechNac = document.getElementById("FN");
    var tel = document.getElementById("TL");
    var tipIde = document.getElementById("TI");
    var noIde = document.getElementById("NI");
    var noIde2 = document.getElementById("NI-2");
    var tipCit = document.getElementById("TC");
    

    /*Validacion de campos vacios******************************************************************************/

    //se validan todos los campos del formulario
    if (nom.value === "" && apell.value === "" && tipDoc.value === ""
        && fechNac.value === "" && tel.value === "" && tipIde.value === ""
        && noIde.value === "" && noIde2.value === "" && tipCit.value === "") {
        
            alert("todos los campos son obligatorios");
            nom.style.border = "1px solid #f00";
            apell.style.border = "1px solid #f00";
            tipDoc.style.border = "1px solid #f00";
            fechNac.style.border = "1px solid #f00";
            tel.style.border = "1px solid #f00";
            tipIde.style.border = "1px solid #f00";
            noIde.style.border = "1px solid #f00";
            noIde2.style.border = "1px solid #f00";
            tipCit.style.border = "1px solid #f00";
            return false;
    }

    //se valida el campo - Nombre
    if (nom.value === "") {
        alert("falta digitar nombre");
        nom.style.border = "1px solid #f00";
        nom.focus();
        return false;
    }else{
        nom.style.border = "1px solid #0f0";
    }

    //se valida el campo - Apellido
    if (apell.value === "") {
        alert("falta digitar apellido");
        apell.style.border = "1px solid #f00";
        apell.focus();
        return false;
    }else{
        apell.style.border = "1px solid #0f0";
    }

    //se valida el campo - Tipo de Documento
    if (tipDoc.value === "") {
        alert("falta selecionar Tipo de Documento");
        tipDoc.style.border = "1px solid #f00";
        tipDoc.focus();
        return false;
    }else{
        tipDoc.style.border = "1px solid #0f0";
    }

    //se valida el campo - Fecha de Nacimiento
    if (fechNac.value === "") {
        alert("falta selecionar Fecha de Nacimiento");
        fechNac.style.border = "1px solid #f00";
        fechNac.focus();
        return false;
    }else{
        fechNac.style.border = "1px solid #0f0";
    }

    //se valida el campo - Telefono
    if (tel.value === "") {
        alert("falta digitar Telefono");
        tel.style.border = "1px solid #f00";
        tel.focus();
        return false;
    }else{
        tel.style.border = "1px solid #0f0";
    }

    //se valida el campo - Tipo de Identificacion
    if (tipIde.value === "") {
        alert("falta selecionar Tipo de Identificacion");
        tipIde.style.border = "1px solid #f00";
        tipIde.focus();
        return false;
    }else{
        tipIde.style.border = "1px solid #0f0";
    }

    //se valida el campo - Numero de identificacion
    if (noIde.value === "") {
        alert("falta digitar Numero de Idenficacion");
        noIde.style.border = "1px solid #f00";
        noIde.focus();
        return false;
    }else{
        noIde.style.border = "1px solid #0f0";
    }

    //se valida el campo - Numero de identificacion
    if (noIde2.value === "") {
        alert("falta repetir Numero de Idenficacion");
        noIde2.style.border = "1px solid #f00";
        noIde2.focus();
        return false;
    }else{
        noIde2.style.border = "1px solid #0f0";
    }

    //se valida el campo - Numero de identificacion
    if (tipCit.value === "") {
        alert("falta selecionar Tipo de Cita");
        tipCit.style.border = "1px solid #f00";
        tipCit.focus();
        return false;
    }else{
        tipCit.style.border = "1px solid #0f0";
    }

    /*Validacion de repeticion de numero de identificacion******************************************************************************/

    //se comparan los campos de numero de identificacion
    if (noIde.value != noIde2.value) {
        alert("los campos de numero de identificacion deben ser iguales");
        noIde.vale = "";
        noIde2.value = "";
        noIde.style.border = "1px solid #f00";
        noIde2.style.border = "1px solid #f00";
        noIde.focus();
        return false;
    }

    /*Validacion de repeticion de numero de identificacion******************************************************************************/

    if (isNaN(tel.value)) {
        alert("el campo telefono debe ser numerico");
        tel.value = "";
        tel.style.border = "1px solid #f00";
        tel.focus();
        return false;
    }

    if (isNaN(noIde.value) && isNaN(noIde2.vale)) {
        alert("los campos numero de identificacion deben ser numericos");
        noIde.value = "";
        noIde2.value = "";
        noIde.style.border = "1px solid #f00";
        noIde2.style.border = "1px solid #f00";
        noIde.focus();
        return false;
    }




    

    

    




    

}