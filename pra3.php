<?php

include_once "db.php";

$table=$_POST['table'];
$DB=${ucfirst($table)};
// $row=$DB->find($_POST['id']);

foreach($_POST['id'] as $idx=>$id){
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){
        $DB->del($id);
    }else{
        $row=$DB->find($id);
        if(isset($_POST['text'])){
            $row['text']=$_POST['text'][$idx];
        }
        switch($table){
            case "admin":
                $row['acc']=$_POST['acc'][$idx];
                $row['pw']=$_POST['pw'][$idx];
            break;
            case "titile":
                $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
            break;
            case "menu":
                $row['href']=$_POST['href'][$idx];
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
            break;
            default:
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        }
        $DB->save($row);
    }
}

to("../back.php?do=$table");



?>