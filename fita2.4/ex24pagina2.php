<?php

$match = 0;
$withNum = 0;

if (isset($_POST["password1"]) && isset($_POST["password2"])){
    if ($_POST["password1"] == $_POST["password2"]){
        if(preg_match("/\d+/", $_POST["password1"])){
            $match = 1 ;
        }
        else{
            $withNum= 1;
        }
        
    }else{
        $match = 2;
    }
}

if ($match ==  1 ){
    print "Correct User";
}elseif ($match == 2) {
    print "ERROR: Passwords must match”.";
}elseif ($withNum == 1){
    echo "ERROR: the password must always have a number";
}


?>