<?php
include "connection.php";

$input=$db->exec("insert into daftar(nama,barang) values('".$_POST['nama']."','".$_POST['barang']."')");

if($input)
{
    header("Location:index.php");
}
