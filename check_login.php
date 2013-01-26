<?php
include("connect.php");
require_once('../recaptcha-php-1.11/recaptchalib.php');
// Get a key from http://recaptcha.net/api/getkey
$publickey = "6LcI29oSAAAAAIBFLnNAAFp1xaEveQA2sHG7tPYZ";
$privatekey = "6LcI29oSAAAAAMLbrBsBuKDqRQ3J9rUnVDjoVkxr";
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$e=mysql_fetch_array(mysql_query("select * from `member` where `username`='$username' and `password`='$password'"));
if(!$e)
{
$_SESSION['error']="user name or password you have entered is incorrect";
header('Location:login.php');
}
if ($_POST["submit"]) {
    $response = recaptcha_check_answer($privatekey,
        $_SERVER["REMOTE_ADDR"],
        $_POST["recaptcha_challenge_field"],
        $_POST["recaptcha_response_field"]);
 
        if ($response->is_valid) {
                echo "Yes, that was correct!";
        } else {
                # set the error code so that we can display it
        echo "Eh, That wasn't right. Try Again.";
 
        }
}

if (!($response->is_valid)) {
                //$_SESSION['error']=$response->is_valid;
				//header('Location:login.php');
				//exit;
        }
if($e)
{
$id=$e['id'];
$_SESSION['id']=$id;
$_SESSION['inbox']=0;
header('Location:home.php');
}
?>