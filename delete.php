<?php

$title= $_POST['title'];

require_once 'database.php';

$query = "DELETE FROM recipes WHERE TITLE = '$title'";

$db->exec($query);

include 'deleterec.php';
?>