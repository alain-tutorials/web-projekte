

function removeSquare(amont_square) {
    initialise();
    addSquares(amount_square);
   
}

function initialise() {
    var header_initialise, result;
    parent_square = document.querySelector('.square-box');

    var squares = document.querySelectorAll('.square');
    for (var i = 0; i < squares.length; i++) {
        parent_square.removeChild(squares[i]);
    }
    header_initialise = document.querySelector('.header');
    header_initialise.style.background = "#3980b9";

    result = document.querySelector(".result-try");
    result.textContent = '';
}


function addSquares(amont_square) {
    var showColorObjects = getSelectedColorObjects(amount_square);
    var parent = document.querySelector('.square-box');
    

    /** initialiser les noeuds dand le DOM */
    var squares = [];
    for(var i = 0; i < amont_square; i++){
        squares[i] = createSquare();
         // initialise l´element
        showColorObjects[i].addNode(squares[i]);
        var color = showColorObjects[i].colorName; // make simple !
        showColorObjects[i].nodeElement.style.background = color;
        parent.appendChild(showColorObjects[i].getNodeElement());
    }

    var rightNodeObject = getRightObject(showColorObjects);
    
    var goodRGB = document.querySelector(".true-rgb");
    goodRGB.textContent = rightNodeObject.rgb;
    //goodRGB.textContent = rightNodeObject.rgb + rightNodeObject.colorName;
    
    guess(rightNodeObject, showColorObjects);
}

    /** ici on trouver aleatoirement la bonne couleur et afficher
     *  a titre de . Juste pour savoir la bonne couleur * */
    function getRightObject(showColorObjects) {
        var quantiteAffiche = showColorObjects.length;
        var bonIndex = getRandomInt(quantiteAffiche);
        var rightIndexValue = showColorObjects[bonIndex];
        return rightIndexValue;
    }

function guess(rightIndexValue, showColorObjects) {
    var nodeElement;
    var rightNodeValue = rightIndexValue.nodeElement;
    var flag = document.querySelector('.result-try');
    for (let index = 0; index < showColorObjects.length; index++) {
        nodeElement = showColorObjects[index].nodeElement; // pour simplifier
        nodeElement.addEventListener('click', function () {
            if (this == rightNodeValue) {
                console.log('vrai');
                
                flag.textContent = "Correct";
                flag.style.color = "	#005000";
                winColor(rightIndexValue, showColorObjects);
                
            } else {
                console.log('faux');
                
                this.style.background = '#241a1a';
                flag.textContent = "Try Again";
                flag.style.color = "red";
                
            }
        });
    }
}



function getSelectedColorObjects(amount_square) {
    var random_Array = getRandomUniqueInt(amount_square);
    // console.log(random_Array);
    var selectedColorObjects = [];
    for (let index = 0; index < random_Array.length; index++) {
        selectedColorObjects[index] = colorContainer[random_Array[index]];
    }
    
    return selectedColorObjects;
}

/** 
 * cette fonction choisir aleatoirement les valeurs des couleur parmi les 16
 *  couleur seront selctionne. on prendra 3 ou 6 element 
 * */
function getRandomUniqueInt(amount_square) {
    
    var couleurs = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];
    let counter = couleurs.length;
    var showColors = [];

    // aussi longtemps qu´il y a un element dans couleurs
    while (counter > 0) {
        // On prend un element quelconque
        let index = Math.floor(Math.random() * counter);

        // decrementer de 1
        counter--;

        // Aechanger le dernier element avec
        let temp = couleurs[counter];
        couleurs[counter] = couleurs[index];
        couleurs[index] = temp;
    }
    /*  je prend les 6 premiers elements du tableau */
    showColors = couleurs.slice(0, amount_square);
    return showColors; // un tableau
}

function winColor(rightIndexValue, nodeCouleurs) {
    var goodColor = rightIndexValue.colorName;
    var nodeCouleurs = document.getElementsByClassName("square");
    var headerWinColor = document.querySelector(".header");

    for (let index = 0; index < nodeCouleurs.length; index++) {
        nodeCouleurs[index].style.background = goodColor;
    }
    headerWinColor.style.background = goodColor;
}

function getRandomInt(listColor) {
    var min = 0, max = (listColor -1);

    return Math.floor(Math.random() * (max - min + 1) + min);
}

function createSquare() {
    var element = document.createElement('div');
    element.setAttribute('class', 'square');
    //element.style.background = 'blue';
    return element;
}



