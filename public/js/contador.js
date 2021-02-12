document.addEventListener("DOMContentLoaded", descarregarArxiu);
var dataObjectiu;
var timer;

function mostraContingut() {
    if (this.readyState == 4) {
        if (this.status == 200) {
            // console.log(new Date().getTime());
            dataObjectiu = this.responseText;
            console.log('dataobjecvtiu', dataObjectiu);
            // document.getElementById("data").innerHTML = dataObjectiu;
            // dataActual();
            // dataFinal();
            timer = setInterval(diferenciaDates, 1000);
        }
    }
}
function descarregarArxiu() {
    var peticion_http = new XMLHttpRequest();
    peticion_http.onreadystatechange = mostraContingut;
    peticion_http.open('GET', 'contador', true);
    peticion_http.send();
}
window.onload = descarregarArxiu;

function dataActual() {
    dataAra = new Date();
    dateNow = dataAra.getTime();
    return dateNow;
    // Data actual en milisegons
    // console.log(dateNow.getTime());
}

function dataFinal() {
    // Data final, en ms
    fechaDestino = Date.parse(dataObjectiu);
    return fechaDestino;
    // console.log('Data final:' + fechaDestino);
}



function diferenciaDates() {
    dAra = dataActual();
    // console.log(`Data ara en ms: ${dAra}`);
    dFinal = dataFinal();
    // console.log(`Data final en ms: ${dFinal}`);
    var diferenciaDates = dFinal - dAra;
    // console.log(`Diferencia dates en ms: ${diferenciaDates}`);
    // dies amb decimals
    var dies = diferenciaDates / (1000 * 60 * 60 * 24);
    // console.log(`Dies: ${dies}`);
    // Dies sense decimals
    var dia = Math.floor(dies);
    // console.log(`Número de dies: ${dia}`);
    // Els decimals que sobren dels dies
    var decPartDays = (dies + "").split(".")[1];
    // console.log(`Part decimal dels dies: ${decPartDays}`);
    var diesDecimals = '0.' + decPartDays;
    // console.log(`Dies decimal str: ${diesDecimals}`);
    var diesDecimalsFloat = parseFloat(diesDecimals);
    // console.log(`Dies decimal en float: ${diesDecimalsFloat}`);
    var horesDecimal = diesDecimalsFloat * 24;
    // HORES //
    // console.log(`Hores amb decimals: ${horesDecimal}`);
    var horesInt = Math.floor(horesDecimal);
    // console.log(`Número d'hores int: ${horesInt}`);
    // Els decimals que sobren de les hores
    var decPartHours = (horesDecimal + "").split(".")[1];
    // console.log(`Part decimal de les hores: ${decPartHours}`);
    var horesDecimalStr = '0.' + decPartHours;
    // console.log(`Hores decimal str: ${horesDecimalStr}`);
    var horesDecimalsFloat = parseFloat(horesDecimalStr);
    // console.log(`hores decimals en float: ${horesDecimalsFloat}`);
    // MINUTS //
    var minutsDecimal = horesDecimalsFloat * 60;
    // console.log(`Minuts amb decimals: ${minutsDecimal}`);
    var minutsInt = Math.floor(minutsDecimal);
    // console.log(`Número de minuts int: ${minutsInt}`);
    // Els decimals que sobren dels minuts
    var decPartMinutes = (minutsDecimal + "").split(".")[1];
    // console.log(`Part decimal dels minuts: ${decPartMinutes}`);
    var minutsDecimalStr = '0.' + decPartMinutes;
    // console.log(`minuts decimal str: ${minutsDecimalStr}`);
    var minutsDecimalsFloat = parseFloat(minutsDecimalStr);
    // console.log(`minuts decimals en float: ${minutsDecimalsFloat}`);
    // SEGONS //
    var segonsDecimal = minutsDecimalsFloat * 60;
    // console.log(`Segons amb decimals: ${segonsDecimal}`);
    var segonsInt = Math.floor(segonsDecimal);
    // console.log(`Número de segons int: ${segonsInt}`);
    
    // REVIEW
    var htmlDay = document.getElementById('content-day');
    var htmlHours = document.getElementById('content-hours');
    var htmlMinutes = document.getElementById('content-minutes');
    var htmlSeconds = document.getElementById('content-seconds');
    htmlDay.textContent = dia;
    htmlHours.textContent = horesInt;
    htmlMinutes.textContent = minutsInt;
    htmlSeconds.textContent = segonsInt;
    // END REVIEW

    // console.log(dia);
    // htmlDay.innerHTML = `${minutsInt}`;
    // htmlDay.innerHTML = `Falten ${dia} dies, ${horesInt} hores, ${minutsInt} minuts`;

    // htmlMinutes.textContent = `${minutsInt}`;
    // htmlHours.innerHTML = `${horesInt}`;
    // htmlMinutes.innerHTML = `${minutsInt}`;
    // console.log('horas:', horesInt);
    // console.log('minuts:', minutsInt);
    // document.getElementById("data").innerHTML = `Falten ${dia} dies, ${horesInt} hores, ${minutsInt} minuts, ${segonsInt} segons per a la cursa`;
}



