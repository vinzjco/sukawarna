<?php
namespace sukawarna;
require 'vendor/autoload.php';

use sukawarna\Connection as Connection;
use sukawarna\model_bidang as model_bidang;

try {
    $id = $_POST["idBidang"];
    $namaBidang = $_POST["namaBidang"];
    $pdo = Connection::get()->connect();

    $bidang = new model_bidang($pdo);
    $bidang->update_bidang($id, $namaBidang);
    header("Location: bidang.php?msg=Berhasil UPDATE DATA dengan ID : $id");
    die();
} catch (\PDOException $e) {
    echo $e->getMessage();
}

?>