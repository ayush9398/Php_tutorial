<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 22/8/18
 * Time: 1:32 AM
 */
/*$handle =fopen('myfile.txt','w');
fwrite($handle,'Write me anything!');
fclose($handle);*/
$handle1 =fopen('myfile.txt','a');
fwrite($handle1,"\nPlease do append not just write!");
?>