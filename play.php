<?php

/* 
Jessica L. Craw
DWD 277 Dynamic Web Language IV (PHP & MySQL)
Lab01
Paper-Rock-Scissors
07 July 2018
 */

if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['submit'] == "Submit"){
        if(isset($_POST['player_one']) && isset($_POST['player_two'])){
            $outcome = $_POST['player_one'] && $_POST['player_two'];
            switch ($outcome){
                case $_POST['player_one'] == 'one_paper' && $_POST['player_two'] == 'two_paper':
                    echo '<h2 style="color:#A7120E;">Both players selected paper so it\'s a draw!</h2>';
                    break;
                case $_POST['player_one'] == 'one_rock' && $_POST['player_two'] == 'two_rock':
                    echo '<h2 style="color:#A7120E;">Both players selected rock so it\s a draw!</h2>';
                    break;
                case $_POST['player_one'] == 'one_scissor' && $_POST['player_two'] == 'two_scissor':
                    echo '<h2 style="color:#A7120E;">Both players selected scissor so it\s a draw!</h2>';
                    break;
                case $_POST['player_one'] == 'one_paper' && $_POST['player_two'] == 'two_rock':
                    echo '<h2 style="color:#A7120E;">Paper beats Rock so Player One wins!</h2>';
                    break;
                case $_POST['player_one'] == 'one_paper' && $_POST['player_two'] == 'two_scissor':
                    echo '<h2 style="color:#A7120E;">Scissor beats Paper so Player Two wins!</h2>';
                    break;
                case $_POST['player_one'] == 'one_rock' && $_POST['player_two'] == 'two_paper':
                    echo '<h2 style="color:#A7120E;">Paper beats Rock so Player Two wins!</h2>';
                    break;
                case $_POST['player_one'] == 'one_rock' && $_POST['player_two'] == 'two_scissor':
                    echo '<h2 style="color:#A7120E;">Rock beats Scissor so Player One wins!</h2>';
                    break;
                case $_POST['player_one'] == 'one_scissor' && $_POST['player_two'] == 'two_paper':
                    echo '<h2 style="color:#A7120E;">Scissor beats Paper so Player One wins</h2>';
                    break;
                case $_POST['player_one'] == 'one_scissor' && $_POST['player_two'] == 'two_rock':
                    echo '<h2 style="color:#A7120E;">Rock beats Scissor so Player Two wins</h2>';
                    break;
            }
        }else{
                echo 'Please enter your selection to continue!';
        }
    }elseif($_POST['submit'] == "Forfeit"){
            header("Location:index.php");
    }elseif($_POST['submit'] == "Exit"){
        exit();
    }else{
        echo 'Error';
    }     
}//end of main IF

?>
<html>
    <form action="" method="post">
        <p>Player One:
            <select name="player_one" required>
                <option value="one_paper" <?php if (isset($_POST['player_one']) && ($_POST['player_one'] == 'one_paper')) echo ' selected="selected"'; ?>>Paper</option>
                <option value="one_rock" <?php if (isset($_POST['player_one']) && ($_POST['player_one'] == 'one_rock')) echo ' selected="selected"'; ?>>Rock</option>
                <option value="one_scissor" <?php if (isset($_POST['player_one']) && ($_POST['player_one'] == 'one_scissor')) echo 'selected="selected"'; ?>>Scissor</option>
            </select>
        </p>
        <p>Player Two:
            <select name="player_two" required>
                <option value="two_paper" <?php if (isset($_POST['player_two']) && ($_POST['player_two'] == 'two_paper')) echo ' selected="selected"'; ?>>Paper</option>
                <option value="two_rock" <?php if (isset($_POST['player_two']) && ($_POST['player_two'] == 'two_rock')) echo ' selected="selected"'; ?>>Rock</option>
                <option value="two_scissor" <?php if (isset($_POST['player_two']) && ($_POST['player_two'] == 'two_scissor')) echo ' selected="selected"'; ?>>Scissor</option>
            </select>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit"/>
            <input type="submit" name="submit" value="Forfeit"/>
            <input type="submit" name="submit" value="Exit"/>
        </p>
    </form>
</html>