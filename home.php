<?php

include_once 'koneksi.php';

$sql = 'SELECT * FROM tmakan';
$result = mysqli_query($conn, $sql);
include_once 'header.php';

if ($result) : 
?>


<div id="content">
  SELAMAT DATANG...
 </div>

<?php 
endif;

include_once 'sidebar.php';
?>
