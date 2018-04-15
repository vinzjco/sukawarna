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
        if ($id <> '' || $namaBidang <> ''){
            $bidang->insert_bidang($id, $namaBidang);
            header("Location: bidang.php?msg=Berhasil INSERT DATA dengan ID : $id");
            die();
        } else {
            header("Location: bidang.php?msg=Anda Belum Melengkapi Data");
            die();
        }

    } catch (\PDOException $e) {
//        echo $e->getMessage();
        if ($e->getCode() == 23505) {
            header("Location: bidang.php?msg=DUPLIKASI KEY. ID $id SUDAH TERDAFTAR.");
        }  elseif ($e->getCode() == 22001) {
            header("Location: bidang.php?msg=ID HANYA DAPAT DIISI MAX 3 KARAKTER. NAMA HANYA DAPAT DIISI MAX 35 KARAKTER.");
        }

//        else {
//            echo $e->getMessage();
//        }
    }

?>