<?php
//define variables and set to empty values
$name=$email=$password="";
$nameERR=$emailERR=$passwordERR="";

//function to sanitize data
function test_input($data){
   $data=trim($data);
   $data=stripslashes($data);
   $data=htmlspecialchars($data);
   return $data;

}
if($_server["REQUEST_METHOD"]=="POST"){
    //validation name
    if(empty($_post["post"])){
        $nameErr="NAME IS REQUIRED";
    }else{
        $name=test_input($_POST["name"]);
        //check if name only contains letters and whitespaces
        if(!preg_match("/^[a-zA-Z-']*$/",$name)){
            $nameErr="only letters and whitespaces allowed";
        }

    }
    //validation email 
    if(emoty($_post["email"])){

    }else{
        $email=test_input ($_post["email"]);
        //check if emails well_formed
        if(!filter_var($email,FILTER_VALIDATION_EMAIL)){
            $emailErr="INVALID EMAIL FORMAT";

        }
    }
    //VALIDATION PASSWORD
    if(emoty($_post["PASSWORD"])){
        $emailErr="PASSWORD IS REQUIRED";
    }else {
        $EMAIL=test_input($_post["PASSWORD"])
        //CHECK PASSWORD STRENGTH(MINIMUM 8 CHARACTERS,AT LEAST 1 NUMBER)
        IF(STRLEN($PASSWORD)<8||!PREG_MATCH("/[0_9]/",$PASSWORD)){
            $passwordErr="password must be 8 character long and include atleast one number";
            
        }
    }
    
}