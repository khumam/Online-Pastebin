<?php
require('dbConnect.php');
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['insert'])) {
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $author = mysqli_real_escape_string($db, $_POST['author']);
    $kode = mysqli_real_escape_string($db, $_POST['kode']);
    $isi = htmlspecialchars(mysqli_real_escape_string($db, $_POST['isi']), false);
    $date = date('d-m-Y , H:i:s') . "WIB";

    $sql = "insert into isi (judul, author, bahasa, konten, date) values ('$judul','$author','$kode','$isi','$date')";
    $query = mysqli_query($db, $sql);

    $cek = "select count(*) from isi";
    $new = mysqli_query($db, $cek);
    $total = mysqli_fetch_assoc($new);
    $total = (int)$total['count(*)'];


    if ($query) {
        header('location: ../see.php?id=' . $total);
    } else {
        header('location: ../index.php');
    }
}
