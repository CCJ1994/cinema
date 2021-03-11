<?php
include_once "../base.php";
print_r($_POST);
$chk=$Mem->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($chk){
  switch ($_POST['acc']) {
    case 'admin':
      $_SESSION['login']=$_POST['acc'];
    to("../backend.php");
      break;
    default:
    $_SESSION['login']=$_POST['acc'];
    to("../index.php");
      break;
  }
}

?>