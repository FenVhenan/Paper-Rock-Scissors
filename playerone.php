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

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['submit']){
        case "Submit":
            //if(isset($_POST['player_one'])){
                
            //}else{
            //    echo 'Error with player one';
            //}//end of player check
            break;
        case "Forfeit":
            go_to_index();
            break;
        default:
            echo 'There was an error with the buttons';
            break;
    }
    //if($_POST['one_submit'] == "Submit"){
    //    if(isset($_POST['player_one'])){
    //        $player_one = $_POST['player_one'];
    //    }else{
    //        echo 'Error with player one switch';
    //    }//end of player check
    //}elseif($_POST['one_submit'] == "Forfeit"){
    //    go_to_index();
    //}else{
    //    echo 'Error with player one buttons';
    //}//end of checking buttons
}//end of main IF

?>
<html>
    <h1>Player One</h1>
    <form action="playertwo.php" method="post">
        <p>
            <select name="player_one" required>
                <option value="one_paper" >Paper</option>
                <option value="one_rock" >Rock</option>
                <option value="one_scissor" >Scissor</option>
            </select>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit">
            <input type="submit" name="submit" value="Forfeit">
        </p>
    </form>
</html>