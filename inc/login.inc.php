<?php

if(isset($_POST["submit"])){


$username = $_POST["uid"];
$pwd = $_POST["pwd"];

require_once 'db.inc.php';
require_once 'functions.php';

if(emptyInputLogin($username,$pwd) !== false){
    header("location: ../index.php?error=emptyinput");
    exit();
}

loginUsere($conn,$username,$pwd);
}
else{
    header("location: ../index.php");
    exit();

}

?>