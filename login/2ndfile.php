<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 21/8/18
 * Time: 11:59 PM
 */
session_start();
include 'firstfile.php';
if (isset($_POST['user']) && empty($_POST['user'])){
    echo '<h1 style="margin-top: 10px; margin-bottom: 10px;">This isn\'t funny enter something :(</h1>';
    die();
}

$myform='<form action="./2ndfile.php" method="post">
            <label for="user">Username:
                <input name="user" type="text" >
            </label>
            <br>
            <label for="pass">Password:
                <input name="pass" type="password">
            </label>
            <br>
            <input type="submit" name="submit" value="Login">
         </form>';
$notform='<h2>Welcome bro!, you got it atlast!!!!</h2>'

?>

<h1>Hello guys! I did some work here, appreciate it. If u don't, leave already.</h1>

<?php
    if(!isset($_POST['user']) or empty($_POST['user']) or empty($_POST['pass'])){
        echo $myform;
    }
    if($_SESSION[$_POST['user']]==true) {
            echo $notform;
    }
?>



