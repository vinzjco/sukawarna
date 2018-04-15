<?php
namespace sukawarna;
require 'vendor/autoload.php';

use sukawarna\Connection as Connection;
use sukawarna\model_bidang as model_bidang;

try {
    $id = $_GET["id"];
    $pdo = Connection::get()->connect();

    $bidang = new model_bidang($pdo);
    $bidang->delete_bidang($id);
    header("Location: bidang.php?msg=Berhasil DELETE DATA dengan ID : $id");
    die();
} catch (\PDOException $e) {
    echo $e->getMessage();
}

?>
