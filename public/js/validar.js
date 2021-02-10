function validarDNI(nie) {
    // console.log(nie);
    if (nie.length == 9) {
        // Agafar el primer caràcter
        var caracter = nie.slice(0, 1);
        // Convertir a número
        caracter = parseInt(caracter);
        if (Number.isInteger(caracter)) {
            // És NIE Espanyol
            // console.log("DNI");
            var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
            // Extreu només els números
            var numeroNie = nie.slice(0, 8);
            // console.log("dni: " + numeroNie);
            numeroNie = parseInt(numeroNie);
            var numero = numeroNie % 23;
            // console.log("Número: " + numero);
            // Extreure tot menys últim caràcter
            var letraUsuario = nie.slice(8, 9).toUpperCase();
            // console.log("LETRA USUARIO: " + letraUsuario);
            var letraCalculada = letras[numero];

            // if(letraUsuario == letraCalculada) {
            //     alert("Número y letra correctos");
            // }else {
            //     alert("La letra indicada no es correcta");
            // }
            if (letraUsuario == letraCalculada) {
                // alert("Número y letra correctos");
                return true;
            } else {
                // alert("La letra indicada no es correcta");
                return false;
            }
        } else {
            // Es NIE Extranger
            var numeroNie = nie.slice(1, 8);
            // console.log("primeros: " + numeroNie);
            letraInicial = nie.slice(0, 1).toUpperCase();
            if (letraInicial == 'X') {
                numeroInicial = '0';
            } else if (letraInicial == 'Y') {
                numeroInicial = '1';
            } else if (letraInicial == 'Z') {
                numeroInicial = '2';
            } else {
                // alert("Letra inicial incorrecta");
                return false;
            }
            var numeroNie = parseInt(numeroInicial + numeroNie);
            // console.log("numero: " + numeroNie);
            var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
            var numero = numeroNie % 23;
            // console.log("Número: " + numero);
            // Extreure tot menys últim caràcter
            var letraUsuario = nie.slice(8, 9).toUpperCase();
            // console.log("LETRA USUARIO: " + letraUsuario);
            var letraCalculada = letras[numero];
            if (letraUsuario == letraCalculada) {
                // alert("Número y letra correctos");
                return true;
            } else {
                // alert("La letra indicada no es correcta");
                return false;
            }
        }
    } else {
        // alert("Longitud del NIE incorrecta");   
        return false;
    }
}

function canviarData() {
    var categoria = document.getElementById('categoria');
    categoria.innerHTML = "";
    var data = document.getElementById('data_naixement').value;
    if (!/[0-9]{4}-[0-9]{2}-[0-9]{2}/.test(data)) { // expressió regular per saber si el format de data és correcte. Si no ho és sortim
        console.log("Invalid date");
        return;
    }
    dataNaixement = new Date(data);
    // console.log(dataNaixement);
    var diferencia = new Date().getTime() - dataNaixement.getTime();
    var diferenciaAnys = diferencia / (1000 * 60 * 60 * 24 * 365);
    if (diferenciaAnys > 3) {
        if (diferenciaAnys < 12) {
            categoria.innerHTML = "Entra a la categoria sub-12";
        } else if (diferenciaAnys < 18) {
            categoria.innerHTML = "Entra a la categoria sub-18";
        } else if (diferenciaAnys < 30) {
            categoria.innerHTML = "Entra a la categoria sub-30";
        } else if (diferenciaAnys < 60) {
            categoria.innerHTML = "Entra a la categoria sub-60";
        } else {
            categoria.innerHTML = "Entra a la categoria veterà";
        }
    }
}

window.onload = function() {
    var submit = document.getElementById('registrar');
    var inputs = document.querySelectorAll('input');
    var camps_buits = document.getElementById('camps_buits');
    var dni_error = document.getElementById('dni_error');
    var data_error = document.getElementById('data_error');
    var data = document.getElementById('data_naixement');
    var dni = document.getElementById('dni');
    // Data actual (una altre forma de calcular dates)
    var dataActual = new Date();
    var anyActual = dataActual.getFullYear();
    var mesActual = dataActual.getMonth() + 1;
    var diaActual = dataActual.getDate();
    // console.log(`any actual: ${anyActual}`);
    // console.log(`mes actual: ${mesActual}`);
    // console.log(`dia actual: ${diaActual}`);
    // Fi data actual
    data.addEventListener('blur', canviarData);

    // DNI
    dni.addEventListener('input', function() {
        dni_error.innerHTML = ""
        if (validarDNI(dni.value) == false) {
            dni_error.innerHTML = "DNI incorrecte";
            dni.style.border = "1px solid red";
        } else {
            dni.style.border = "1px solid #bfbfbf";
        }
    });

    // DATA
    data.addEventListener('input', function() {
        data_error.innerHTML = "";
        var dataArray = (data.value).split("-");
        var anyUsuari = dataArray[0];
        var mesUsuari = dataArray[1];
        var diaUsuari = dataArray[2];
        if ((anyActual - anyUsuari) < 3) {
            data_error.innerHTML = "Inferior a 3 anys.";
        } else if ((anyActual - anyUsuari) == 3 && (mesActual < mesUsuari)) {
            data_error.innerHTML = "Inferior a 3 anys.";
        } else if ((anyActual - anyUsuari) == 3 && (mesActual == mesUsuari) && diaActual < diaUsuari) {
            data_error.innerHTML = "Inferior a 3 anys.";
        }
    });
    // FI DATA
    submit.addEventListener('submit', function(event) {
        camps_buits.innerHTML = "";
        dni_error.innerHTML = "";
        for (var i = 0; i < inputs.length - 1; i++) {
            var element = inputs[i].value;
            if (element == '') {
                event.preventDefault();
                inputs[i].style.border = "1px solid red";
                camps_buits.innerHTML = "Falten camps per omplir!";
            } else {
                inputs[i].style.border = "1px solid #bfbfbf";
            }
        }
        // Actualització 23-11-20 
        // if (validarDNI(dni.value) == false) {
        //     // REVIEW
        //         // event.preventDefault();
        //         // END REVIEW
        //     dni_error.innerHTML = "DNI incorrecte";
        //     dni.style.border = "1px solid red";
        //     console.log('DNI incorrecte');
        // } else {
        //     dni.style.border = "1px solid #bfbfbf";
        //     console.log('DNI correcte');
        // }
        // FIN 23-11-20
    });

}