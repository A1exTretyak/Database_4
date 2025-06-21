<?php
include "functions.php";
addInfo($_POST['fio'], $_POST['birth'], $_POST['home'], $_POST['phonenumber']);
header("Location:index.php");
?>