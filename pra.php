login check

<?php

include_once "db.php";

if($Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0){
    $_SESSION['login']=$_POST['acc'];
    to("../back.php");
}else{
    to("../index.php?do=login&error=帳號或密碼輸入錯誤");
}



?>

在loginin判斷

<?php

if(isset($_SESSION['login'])){
    to("back.php");
}

if(isset($_GET['error'])){
    echo "<script>alert('{$_GET['error']}')</script>";
}


?>

在