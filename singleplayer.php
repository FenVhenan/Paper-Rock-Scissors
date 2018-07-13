<?php

/* 
Jessica L. Craw
DWD 277 Dynamic Web Language IV (PHP & MySQL)
Lab02
Paper-Rock-Scissors
12 July 2018
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

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['submit']){
        case "Submit":
            break;
        case "Forfeit":
            go_to_index();
            break;
        default:
            echo 'There was an error with the buttons';
            break;
    }
}//end of main IF

?>
<html>
    <h1>Player One</h1>
    <form action="singlewin.php" method="post">
        <p>
            <select name="singleplayer" required>
                <option value="paper" >Paper</option>
                <option value="rock" >Rock</option>
                <option value="scissor" >Scissor</option>
            </select>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit">
            <input type="submit" name="submit" value="Forfeit">
        </p>
    </form>
</html>