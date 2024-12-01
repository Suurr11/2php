<?php

require_once "../function.php";



$sql = "DELETE FROM tblkategori WHERE id = $id";

$result = mysqli_query($koneksi, $sql);

header("location:http://localhost/2php/restoran/kategori/select.php")


?>