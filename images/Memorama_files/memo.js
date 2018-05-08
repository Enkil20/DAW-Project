/**************************************************************
                VARIABLES
***************************************************************/

var config; //Almacena la config del juego
var cardContainer; //Almacena el contenedor de las tarjetas
var board = []; //Guardar la información del tablero en una estructura de datos
var numbersMatrix;
var name = "./img/"+back();
var valueCar1;
var posPastCard;
var valueCar2;
var nameCard1;
var nameCard2;
var counter = 0;
var correct = 0;
var rows;
var columns;
var arraux = [];
var maxrand=52;

/************************************************************** 
                FUNCTIONS
***************************************************************/
function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}
//Funcion random para la tapa
function back(){
    return randomNumber(0,5)+"b.png";
}

//Validación de Random
function rand(){
    var i;
    aux =  randomNumber(0,maxrand-1);
    console.debug("aux",aux);
    console.debug("uuuu",maxrand);
    //console.debug("aux",aux);
    console.debug("arraux bien",arraux);
    cont = 0;
    for(i=0;i<52;++i){
        //console.debug("cont",cont);
        if(cont == aux){
            //console.debug("te rompistes perro");
            break;

        }
        if(arraux[i] == 0){
            ++cont;
        }
    }
    arraux[i] = 1;
    maxrand--;
    console.debug("arraux puto",arraux);
    console.log(i+1);
    return i+1;
}

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

//Función que maneja el click en la tarjeta
function clickcard(event){
    var card = event.target;
    var cardId = card.id;
    var pos = cardId.split("_");


    counter++;
    if(counter == 1){//llevar max dos clicks a la vez
        valueCar1 = numbersMatrix[pos[0]][pos[1]];
        nameCard1 = "./img/" + numbersMatrix[pos[0]][pos[1]] + ".png";
        card.setAttribute("src",nameCard1);
        posPastCard = pos;
    }
    if(counter == 2){
        valueCar2 = numbersMatrix[pos[0]][pos[1]];
        nameCard2 = "./img/" + numbersMatrix[pos[0]][pos[1]] + ".png";
        card.setAttribute("src",nameCard2);

        if( valueCar1 == valueCar2){
            correct++;
            console.log(correct)
            counter = 0;
        }else{
            console.log("Error");
            setTimeout(function(){//despues de 3 segundos la tarjeta se voltea again
            //console.log(board[posPastCard[0]][posPastCard[1]].element.childNodes.item(0));
            board[posPastCard[0]][posPastCard[1]].element.childNodes.item(0).setAttribute("src",name);
            card.setAttribute("src",name);
            counter = 0;
            },2000);
        }
        
        sleep(250);
    }
    
    
    if(correct == (columns*rows/2)){
        console.log("aqui");
        alert("Encontraste todos los pares :)");
        location.reload(false); 
        
    }
    
}


//Construye una carta vacía del tablero
function buildCard(row,col,name){
   
    //Crear el elemento principal
    var card = document.createElement("div");
    //Agregar la clase
    card.className = "card";

    //Crear el contenido
    var valueConteiner = document.createElement("img");
    valueConteiner.src = name;
    valueConteiner.setAttribute("height", 100);
    valueConteiner.setAttribute("with", 100);
    
    //Agregar ID
    valueConteiner.id=row + "_" + col;
    //Agregar a la carta
    card.appendChild(valueConteiner);

    card.addEventListener("click",clickcard);
    
    return card;
}

//Generar una matriz de tamano rows x cols y llena de numeros duplicados
function generateNumbers(rows , cols){

    for(var i = 0; i < 52; ++i)
        arraux[i] = 0;
    
    console.debug("arr ini",arraux);
    var TotalNumbers = (rows*cols)/2;
    var result = [];

    for(var i=0;i<rows;i++){
        result[i] = [];
        
        for(var j=0;j<cols;j+=2){
            //El número que se tiene que generar con el rango de la configuación
            result[i][j] = rand();
            result[i][j+1] = result[i][j]
        }
    }
    //console.log(arraux);
    console.log(result);
    return result;
}

//Mezcla los números lmacenados en una matríz
function mixNumbers(mat){
    for(var i=0;i<mat.length;i++){
        for(var j=0;j<mat[i].length;j++){
            //Generar la nueva posición aleatoria 
            var newRow = randomNumber(0, mat.length-1);
            var newCol = randomNumber(0, mat[i].length-1);
            //Guardar el númro actual en la variable temporal
            var currentNumber = mat[i][j];
            //Intercambiar los números
            mat[i][j] = mat[newRow][newCol];
            mat[newRow][newCol] = currentNumber;
        }
    }
    return mat;
}

function clickSubmit(event){
    rows = document.getElementById("rows").value;
    columns = document.getElementById("columns").value;
    if((columns * rows)%2 == 0){
        if((columns * rows) <= 52){
            numbersMatrix = generateNumbers(rows,columns);
            numbersMatrix = mixNumbers(numbersMatrix);
            //Generar tablero 
            for(var i=0; i<rows; i++){
                board[i]=[];
            for(var j=0;j<columns;j++){
                //Construir carta y agregarla al contenedor
                var card = buildCard(i,j,name);
                cardContainer.appendChild(card);
                board[i][j] = {"element" : card};
            }
            //Insertar un Salto de linea
            var newLine = document.createElement("br");
            cardContainer.appendChild(newLine);
            }   
        }else{
            alert("El número sobrepasa la cantidad de cartas");
        }
    }else{
        alert("Alguno de los valores de columnas o renglones debe ser par");
    }
    
}
//Función que se encarga de cargar el tablero
function loadgame(data){
    config = data;
    
    let submit = document.getElementById("submit");
    submit.addEventListener("click",clickSubmit);
   
}

/***************************************************************
                LOGIC
****************************************************************/

//Función que se ejecuta al cargar el doc  y dispara el startgame

function documentLoaded(){
    cardContainer = document.getElementById("memorama");
    getJsonFile("./config/config.json", loadgame);
    window.onload = function () {
        var timer = 60 * 5,
            display = document.querySelector('#time');
        startTimer(timer, display);
    };
}