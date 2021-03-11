<?php
include_once "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
      move_uploaded_file($_FILES['img']['tmp_name'],'../image/'.$_FILES['img']['name']);
      $_POST['img']=$_FILES['img']['name'];
}

$_POST['sh']=1;
$Movie->save($_POST);
to("../backend.php?do=movie");

?>