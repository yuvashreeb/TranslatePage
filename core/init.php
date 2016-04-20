<?php  
session_start();
//include 'lang/english.php';
//include 'lang/telugu.php';
$allowedlang=array('english','telugu');
if(isset($_GET['lang'])===true && in_array($_GET['lang'],$allowedlang)===true){
    $_SESSION['lang']=$_GET['lang'];    
}else if (isset($_SESSION['lang']) === false) {
    $_SESSION['lang'] = 'english';
}
include 'lang/'.$_SESSION['lang'].'.php';
?>