<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 22/8/18
 * Time: 1:41 AM
 */

$thefile= file('myfile.txt');
$mydata='';
foreach($thefile as $lineoff){
    $mydata.= trim($lineoff).',';
}
$myarr=explode(',',$mydata);
echo $myarr[3];
?>