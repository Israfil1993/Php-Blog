<?php
require_once "../config/config.php";
$id = $_GET['id'];
$database->delete('categories', "id='$id'");
if ($database == true) {
    header('Location:index.php?route=categories');
}
