<?php
require('dbConnect.php');
$sql = "select * from isi order by date desc limit 0,5";
$query = mysqli_query($db, $sql);
