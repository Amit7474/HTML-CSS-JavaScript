var scores, roundcore, activePlayer;

//Initiat the game
newGame()

//Roll dice click listener
document.querySelector('.btn-roll').addEventListener('click', function() {
    var dice = Math.floor(Math.random() * 6) + 1;
    document.querySelector('.dice').style.display = 'block';
    document.querySelector('.dice').src = 'dice-'+dice+'.png';
    if(dice != 1){
        roundcore += dice;
        document.querySelector('#current-' + activePlayer).textContent = roundcore;
    }else{
        nextPlayer();
        }
});

//Hold the score click listener
document.querySelector('.btn-hold').addEventListener('click', function(){
    scores[activePlayer] += roundcore;
    document.querySelector('#score-'+activePlayer).textContent = scores[activePlayer];
    nextPlayer();
});

//New game click listener
document.querySelector('.btn-new').addEventListener('click', newGame);


function nextPlayer(){
    //Checks if there is a winner
    if(scores[activePlayer] >= 100){
        document.querySelector('#name-'+activePlayer).textContent = 'Winner!';
        document.querySelector('.btn-roll').style.display = 'none';
        document.querySelector('.btn-hold').style.display = 'none';
    }else{
    roundcore = 0;
    document.querySelector('#current-' + activePlayer).textContent = roundcore;

     //Change turn of the players and the apperance of the players div element
    document.querySelector('.player-'+activePlayer+'-panel').classList.remove('active');
   
    activePlayer === 0 ? activePlayer = 1 : activePlayer = 0;

    document.querySelector('.player-'+activePlayer+'-panel').classList.add('active');
    }
}

function newGame(){
    scores = [0, 0];
    roundcore = 0;
    activePlayer = 0;   //0-first player, 1-second player
    document.querySelector('.btn-roll').style.display = 'block';
    document.querySelector('.btn-hold').style.display = 'block';
    document.querySelector('#name-0').textContent = 'Player 1';
    document.querySelector('#name-1').textContent = 'Player 2';
    document.querySelector('.dice').style.display = 'none';
    document.querySelector('#score-0').textContent = '0';
    document.querySelector('#score-1').textContent = '0';
    document.querySelector('#current-0').textContent = '0';
    document.querySelector('#current-1').textContent = '0';
}