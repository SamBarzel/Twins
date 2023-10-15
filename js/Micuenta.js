function validarForm(form1){


    // TEXT  NOMBRE DEL CLIENTE**********************************
    if(form1.usu_nom.value == null ||
        form1.usu_nom.value.length == 0 ||
        /^\s+$/.test(form1.usu_nom.value)
    ){//Validacion de campo instituto vacio
        alert('Inserta tu nombre'); // envia mensaje
        form1.usu_nom.focus(); //enviar el curso al campo de instituto
        return false; // termina la funcion validarForm
    }


    // TEXT   APELLIDO PATERNO*************************
    if(form1.usu_ap_pat.value == null ||
        form1.usu_ap_pat.value.length == 0 ||
        /^\s+$/.test(form1.usu_ap_pat.value)
    ){//Validacion de campo instituto vacio
        alert('Inserta tu Apellido Paterno'); // envia mensaje
        form1.usu_ap_pat.focus(); //enviar el curso al campo de instituto
        return false; // termina la funcion validarForm
    }

    // TEXT   APELLIDO MATERNO*************************

    if(form1.usu_ap_mat.value == null ||
        form1.usu_ap_mat.value.length == 0 ||
        /^\s+$/.test(form1.usu_ap_mat.value)
    ){//Validacion de campo instituto vacio
        alert('Inserta tu Apellido Materno'); // envia mensaje
        form1.usu_ap_mat.focus(); //enviar el curso al campo de instituto
        return false; // termina la funcion validarForm
    }  
    
    // TIPO USUARIO **********************************************

    var seleccionado = false;
     for (var index = 0; index < form1.rad_usu.length; index++) {
         if (form1.rad_usu[index].checked) {
             seleccionado = true;
             break;
         }
     }
         if (!seleccionado) {
             alert('Llena el campo');
             form1.rad_usu[0].focus();
             return false;
         }

    // Id ***************************************

    if(form1.id.value.length==0 ||
        !(/^\d{12}$/.test(form1.id.value)) ){
            alert('El número de télefono');
            form1.id.focus();
            return false;
        }
    
    
    // MAIL   *****************************************

    if( !(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-z]{2,63}$/i.test(form1.usu_email.value)) ){
        alert('Verifica tu Mail');
        form1.usu_email.focus();
        return false;
    }
    
    return true;
}

    //PASSWORD
 
if(form1.txt_usu_password.length==0 ||
    isNaN(form1.txt_usu_password)){
    if(form1.txt_usu_password.length==0){
        alert('Inserta tu contraseña');
    }else if(isNaN(form1.txt_usu_password)){
        alert('Inserta tu Contraseña');
    }
    form1.txt_usu_password.focus();
    return false;
}
function unselect() {
    document.querySelectorAll('[name=Tipo]').forEach((x) => x.checked = false);
}
