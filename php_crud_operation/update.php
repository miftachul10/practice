<?php

include "connection.php";

$update=$db->exec("update daftar set nama='".$_POST['nama']."',barang='".$_POST['barang']."'where id=".$_POST['id']);

    header("Location:index.php");


// var_dump($_POST);