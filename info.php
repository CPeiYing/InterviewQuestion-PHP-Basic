<?php
// post method
$userName = $_POST['postname'];

//if user enter abc, then will show the error message (in javascript)
if($userName == "abc"){
    echo "1";
//if empty, then will show the error message (in javascript)    
}else if ($userName ==""){
    echo "2";

//otherwise show other error message (in javascript)
}else {
    echo "3";
}     
    
?>