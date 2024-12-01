<div style="margin:auto; width:900px">

<h1><a href="http://localhost/2php/restoran/kategori/insert.php">TAMBAH</a></h1>
<p>tambah di insert.php</p>

<?php

require_once "../function.php";

if (isset($_GET['update'])) {
    $id=$_GET['update'];
    require_once "apdet.php";
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    require_once "delete.php";
}

echo '<br>';

$sql = "SELECT id FROM tblkategori";
$result = mysqli_query($koneksi, $sql);

$jumlahdata = mysqli_num_rows($result);



$bnyk = 4;

$halaman = ceil ($jumlahdata / $bnyk);

for ($i=1; $i <= $halaman ; $i++) { 
    echo '<a href="?p='.$i.'">'.$i.'</a>';
    echo '&nbsp &nbsp';
}

if (isset($_GET['p'])) {
    $p=$_GET['p'];
    $mulai = ($p * $bnyk) - $bnyk;
}else {
    $mulai = 0;
}



$sql = "SELECT * FROM tblkategori LIMIT $mulai, $bnyk";

$result = mysqli_query($koneksi, $sql);

// var_dump($result);

$jumlah = mysqli_num_rows($result);
// echo '<br>';
// echo $jumlah;

echo '

<table border="1px">
<tr>
    <th>No</th>
    <th>Kategori</th>
    <th>Hapus</th>
    <th>Update</th>
</tr>

';
$no = $mulai+1;
if ($jumlah > 0) {
    while ($row = mysqli_fetch_assoc( $result)) {
        echo '<tr>';

        echo '<td>'.$no++.'</td>';
        echo '<td>'.$row['kategori'].'</td>';
        echo '<td><a href="?hapus='.$row['id'].'">'.'Hapus'.'</a></td>';
        echo '<td><a href="?update='.$row['id'].'">'.'Update'.'</a></td>';
        echo '</tr>';
    }
}

echo '</table>';

?>

</div>