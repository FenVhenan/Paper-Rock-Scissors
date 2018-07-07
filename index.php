<?php

/* 
Jessica L. Craw
DWD 277 Dynamic Web Language IV (PHP & MySQL)
Lab01
Paper-Rock-Scissors
01 July 2018
 */


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['submit']){
        case "Play":
            header("Location:play.php");
            break;
        case "Exit":
            exit();
            break;
        default:
            echo 'There was an issue...';
            break;
    }
    
}

echo '<form action"" method="post">';
//play button takes you to playerone.php
echo '<input type="submit" name="submit" value="Play" /> ';
//exit button that closes game
echo '<input type="submit" name="submit" value="Exit" /> ';
echo '</form>';
echo '';
echo '';
//text box with instructions
echo '<h2 style="text-align:center;">Paper-Rock-Scissors Game Play Instructions:</h2>';
echo '';
echo '';
echo '<h3 style="text-align:center;">Navigation</h3>';
echo 'To start the game press the play button or press exit to leave.';
echo 'Before beginning be sure to decide who will play as Player One and Player Two.';
echo 'Each player will take their turn to decide from a selection of either paper, rock, or scissors and then click on submit to proceed.';
echo 'Please note that selecting forfeit will exit the game.';
echo 'At the end of the round a winner is displayed and you have a choice to select the play again button or exit button.';
echo 'The play again button takes you right to the start of the game to Player One\'s turn and the exit button will take you back to this page.';
echo '';
echo '';
echo '<h2 style="text-align:center;">How to Play</h2>';
echo 'You will have two players that take turns selecting either paper, rock, or scissors.';
echo 'Rock beats scissors, scissors beats paper, and paper beats rock.';
echo 'If both players select paper, rock, or scissors then the round ends in a draw.';