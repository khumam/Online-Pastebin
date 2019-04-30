<?php
require('dbConnect.php');
$id = mysqli_real_escape_string($db, $_GET['id']);
$sql = "select * from isi where id = $id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
if ($data == null) {
    $noEntri = true;
} else {
    $noEntri = false;
}
