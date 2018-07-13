<?php

/* 
Jessica L. Craw
DWD 277 Dynamic Web Language IV (PHP & MySQL)
Lab02
Paper-Rock-Scissors
09 July 2018
 */
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
}//end of go_to_playone function()

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['player_one'] && $_POST['player_two']){
        $outcome = $_POST['player_one'] && $_POST['player_two'];
        switch($outcome){
            case $_POST['player_one'] == 'one_paper' && $_POST['player_two'] == 'two_paper':
                echo 'Both players selected PAPER so it is a DRAW!';
                break;
            case $_POST['player_one'] == 'one_rock' && $_POST['player_two'] == 'two_rock':
                echo 'Both players selected ROCK so it is a DRAW!';
                break;
            case $_POST['player_one'] == 'one_scissor' && $_POST['player_two'] == 'two_scissor':
                echo 'Both players selected SCISSORS so it is a DRAW!';
                break;
            case $_POST['player_one'] == 'one_paper' && $_POST['player_two'] == 'two_rock':
                echo 'PAPER beats ROCK so Player One WINS!';
                break;
            case $_POST['player_one'] == 'one_paper' && $_POST['player_two'] == 'two_scissor':
                echo 'SCISSORS beat PAPER so Player Two WINS!';
                break;
            case $_POST['player_one'] == 'one_rock' && $_POST['player_two'] == 'two_paper':
                echo 'PAPER beats ROCK so Player Two WINS!';
                break;
            case $_POST['player_one'] == 'one_rock' && $_POST['player_two'] == 'two_scissor':
                echo 'ROCK beats SCISSORS so Player One WINS!';
                break;
            case $_POST['player_one'] == 'one_scissor' && $_POST['player_two'] == 'two_paper':
                echo 'SCISSORS beats PAPER so Player One WINS!';
                break;
            case $_POST['player_one'] == 'one_scissor' && $_POST['player_two'] == 'two_rock':
                echo 'ROCK beats SCISSORS so Player Two WINS!';
                break;
        }
    }else{
        echo 'Error with winner switch...';
    }
    switch($_POST['submit']){
        case "Play Again":
            go_to_playone();
            break;
        case "Exit":
            go_to_index();
            break;
    }
}

?>
<html>
    <form action="" method="post">
        <p>
           <input type="hidden" name="outcome" value="<?php echo $outcome; ?>"
            <input type="hidden" name="player_one" value="<?php echo $_POST['player_one']; ?>"/>
            <input type="hidden" name="player_two" value="<?php echo $_POST['player_two']; ?>"/> 
        </p>
        <p>
            <input type="submit" name="submit" value="Play Again"/>
            <input type="submit" name="submit" value="Exit"/>
        </p>
    </form>
</html>