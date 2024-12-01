

<?php

require_once "../function.php";


$kategori = 'keju';

$sql = "INSERT INTO tblkategori VALUES ('','$kategori')";

$result = mysqli_query($koneksi, $sql);

echo 'yoi';

?>

<!-- if (isset($_POST['simpan'])) {

$kategori = $_POST['kategori'];

$sql = "INSERT INTO tblkategori VALUES ('', '$kategori)";

$result = mysqli_query($koneksi, $sql);

header("location:http://localhost/2php/restoran/kategori/select.php");
} -->

