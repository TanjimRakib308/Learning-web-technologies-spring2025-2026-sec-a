let cells = document.querySelectorAll(".cell");
let turntext = document.getElementById("turn");

let currentPlayer = "X";
let board = ["","","","","","","","",""];
let gameActive = true;


cells.forEach(cell => {
    cell.addEventListener("click", cellClick);
});

 function cellClick(){

    let index = this.getAttribute("data-index");

    if(board[index] != "" || gameActive == false){
        return;
    }

    board[index] = currentPlayer;
    this.innertext = currentPlayer;

    checkWinner();

    if(gameActive){
        if(currentPlayer == "X"){
            currentPlayer = "O";
        }
        else{
            currentPlayer = "X";
        }

        text.innertext = "Player " + currentPlayer + " Turn";
    }

}


   
