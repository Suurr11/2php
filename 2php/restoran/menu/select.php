<div class="float-left">
    <a class="btn btn-primary" href="?f=menu&m=insert" role="button">TAMBAH DATA</a>
</div>

<h3>Menu</h3>

<?php

if (isset($_POST['opsi'])) {
    $opsi=$_POST['opsi'];

    echo $opsi;
}

?>

<div class="mt-4 mb-4">
    <?php

    $row =$db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");

    ?>

    <form action="" method="post" ">
        <select name="opsi" id="" onchange="this.form.submit()>
            <?php foreach($row as $r): ?>
            <option value="<?php echo $r['id'] ?>"><?php echo $r['kategori'] ?></option>
            <?php endforeach?>


        </select>
    </form>
</div>

<?php

$jumlahdata = $db->rowCOUNT("SELECT id FROM tblmenu");
$bnyk = 4;

$halaman = ceil ($jumlahdata / $bnyk);

if (isset($_GET['p'])) {
    $p=$_GET['p'];
    $mulai = ($p * $bnyk) - $bnyk;
}else {
    $mulai = 0;
}


$sql = "SELECT * FROM tblmenu ORDER BY menu ASC LIMIT $mulai,$bnyk";
$row = $db->getALL($sql);


$no=1+$mulai;

?>

<table class="table table-bordered w-50">
    <thead>
        <tr>
            <th>No</th>
            <th>Menu</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($row as $r): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $r['menu'] ?></td>
            <td><a href="?f=menu&m=delete&id=<?php echo $r['id'] ?>">Delete</a></td>
            <td><a href="?f=menu&m=update&id=<?php echo $r['id'] ?>">Update</a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>


<?php

for ($i=1; $i <= $halaman ; $i++) { 
    echo '<a href="?f=menu&m=select&p='.$i.'">'.$i.'</a>';
    echo '&nbsp &nbsp';
}

?>