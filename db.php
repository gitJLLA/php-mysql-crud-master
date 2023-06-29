<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'inventario_mini_super_galaxia'
) or die(mysqli_erro($mysqli));

?>
