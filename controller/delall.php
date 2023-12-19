<?php
session_start();
if(isset($_SESSION['card'])){
    if(isset($_GET['id']) &&($_GET['id']>0)){
        array_splice($_SESSION['id'],$_GET['id']-1,1);
    }
}
if(count($_SESSION['card'])>0){
    header('location: ../view/card.php');

}else header('location:../view/card.php');
?>