<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 19/8/18
 * Time: 11:59 PM
 */
$find=$_POST['search_here'];
$replace=$_POST['replace_with'];
if(isset($_POST['user_input'])&& !empty($_POST['user_input'])){
    $myinpnew=str_ireplace($find,$replace,$_POST['user_input']);
    echo $myinpnew;
}

?>
<hr>
<form action="Find_and_replace.php" method="post">
    <textarea type="text" name="user_input" rows="5" cols="50"><?php echo $_POST['user_input']?></textarea>
    <br>
    <label for="search_here">Search here:
        <input name="search_here" type="text">
    </label>
    <br>
    <label for="replace_with">Replace with:
        <input name="replace_with" type="text">
    </label>
    <br>
    <input type="submit" name="submit">
</form>
