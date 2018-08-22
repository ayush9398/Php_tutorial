<?php
session_start();

$values=array('ayush9398'=>'ayush1234','alok'=>'2048');
try {
    if (isset($_POST['pass']) && $_POST['pass'] == $values[$_POST['user']]) {
        $_SESSION[$_POST['user']] = true;
    } else
        $_SESSION[$_POST['user']] = false;
}
 catch (Exception $e){
    echo "Hey! u got some bt over here!\n ".$e->getMessage();
 }

?>