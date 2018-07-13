<?php

/* 
Jessica L. Craw
DWD 277 Dynamic Web Language IV (PHP & MySQL)
Lab02
Paper-Rock-Scissors
12 July 2018
 */

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
function go_to_index($page = 'index.php'){
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
}//end of go_to_index function()

$computer = mt_rand(1,3);
$single_outcome = $computer && $_POST['singleplayer'];
switch($single_outcome){
    case $computer == 1 && $_POST['singleplayer'] == 'paper':
        echo 'Both the Computer and You have selected Paper...the game ends in a DRAW!';
        break;
    case $computer == 2 && $_POST['singleplayer'] == 'rock':
        echo 'Both the Computer and You have selected Rock...the game ends in a DRAW!';
        break;
    case $computer == 3 && $_POST['singleplayer'] == 'scissor':
        echo 'Both the Computer and You have selected Scissors...the game ends in a DRAW!';
        break;
    case $computer == 1 && $_POST['singleplayer'] == 'rock':
        echo 'The Computer has selected Paper and You have selected Rock...the Computer WINS!';
        break;
    case $computer == 1 && $_POST['singleplayer'] == 'scissor':
        echo 'The Computer has selected Paper and You have selected Scissors...You WIN!';
        break;
    case $computer == 2 && $_POST['singleplayer'] == 'paper':
        echo 'The Computer has selected Rock and You have selected Paper...You WIN!';
        break;
    case $computer == 2 && $_POST['singleplayer'] == 'scissor':
        echo 'The Computer has selected Rock and You have selected Scissors...The Computer WINS!';
        break;
    case $computer == 3 && $_POST['singleplayer'] == 'paper':
        echo 'The Computer has selected Scissors and You have selected Paper...The Computer WINS!';
        break;
    case $computer == 3 && $_POST['singleplayer'] == 'rock':
        echo 'The Computer has selected Scissors and You have selected Rock...You WIN!';
        break;
}
switch($_POST['submit']){
        case "Play Again":
            go_to_startplay();
            break;
        case "Exit":
            go_to_index();
            break;
    }

?>
<html>
    <form action="" method="post">
        <p>
            <input type="hidden" name="outcome" value="<?php echo $single_outcome; ?>"/>
            <input type="hidden" name="singleplayer" value="<?php echo $_POST['singleplayer']; ?>"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Play Again"/>
            <input type="submit" name="submit" value="Exit"/>
        </p>
    </form>
</html>