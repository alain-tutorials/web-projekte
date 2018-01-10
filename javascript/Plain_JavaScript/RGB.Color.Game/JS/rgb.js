
var options = document.querySelectorAll('.game-modus span');
var isHard = true, isEasy, amount_square = 6;
addSquares(amount_square);

options[0].addEventListener('click', function () {
    isEasy = true;
    isHard = false;
    amount_square = 3;
     removeSquare(amount_square);
});

options[1].addEventListener('click', function () {
    isHard = true;
    isEasy = false;
    amount_square = 6;
     removeSquare(amount_square);
});
options[2].addEventListener('click',function() {
    isHard = true;
    isEasy = false;
    
    // amount_square = 6;
     removeSquare(amount_square);
});








