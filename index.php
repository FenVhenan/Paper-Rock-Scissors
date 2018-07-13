<?php

/* 
Jessica L. Craw
DWD 277 Dynamic Web Language IV (PHP & MySQL)
Lab02
Paper-Rock-Scissors
09 July 2018
 */
function go_to_playone($page = 'playerone.php'){
    //define the URL...
    //URL is http:// plus the host name plus the current directory:
    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    //remove any trailing slashes:
    $url = rtrim($url, '/\\');
    //add the page:
    $url .= '/' .$page;
    //redirect the user
    header("Location: $url");
    exit(); //quit the script
}//end of go_to_playone() function
function go_to_startplay($page = 'singleplayer.php'){
    //define the URL...
    //URL is http:// plus the host name plus the current directory:
    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    //remove any trailing slashes:
    $url = rtrim($url, '/\\');
    //add the page:
    $url .= '/' .$page;
    //redirect the user
    header("Location: $url");
    exit(); //quit the script
}//end of go_to_startplay function()

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['submit']){
        case "One Player Game":
            go_to_startplay();
            break;
        case "Two Player Game":
            go_to_playone();
            break;
        case"Exit":
            exit();
            break;
        default:
            echo 'There was an error with the buttons';
            break;
    }
    
}

?>
<html>
    <h1 style="text-align:center;">Welcome to Paper-Rock-Scissors!</h1>
    <h2 style="text-align:center;">Paper-Rock-Scissors Game Play Instructions:</h2>
    <h3 style="text-align:center;">Navigation</h3>
    <p>
    <ol>
        <li>To start the game select either One Player Game to play against the computer or Two Player Game to play against a friend.</li>
        <li>Before starting a Two Player Game be sure to decide who will play as Player One and Player Two.</li>
        <li>Each player will take their turn to decide from a selection of either paper, rock, or scissors and then click on submit to proceed.</li>
        <li>Please note that selecting forfeit will exit the current game and take you back to this page.</li>
        <li>At the end of the round a winner is displayed and you have a choice to select the play again button or exit button.</li>
        <li>The play again button takes you right to the start of Player One's turn and the exit button will take you back to this page.</li>
    </ol>           
    </p>
    
    <h3 style="text-align:center;">How to Play</h3>
    <p>
    <ol>
        <li>Each player will take their turn selecting either paper, rock, or scissors.</li>
        <li>Paper beats Rock</li>
        <li>Rock beats Scissors</li>
        <li>Scissors beats Paper</li>
        <li>If both players have selected the same (either paper, rock, or scissors) then the game ends in a draw.</li>
    </ol>
    </p>
    <h2>Let's Get Ready To Play!</h2>
    <form action="" method="post">
        <p>
            <input type="submit" name="submit" value="One Player Game"> OR <input type="submit" name="submit" value="Two Player Game">
        </p>
        <p>
            <input type="submit" name="submit" value="Exit">
        </p>
    </form>
</html>