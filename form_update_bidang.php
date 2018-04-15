<?php

namespace sukawarna;
require 'vendor/autoload.php';

use sukawarna\Connection as Connection;
use sukawarna\model_bidang as model_bidang;

$id = $_GET['id'];
$namaBidang = $_GET['namaBidang'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GBI Sukawarna</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--        FORM-->
    <form action="update_bidang.php" class="form-horizontal" method="post">
        <div class="form-group row">
            <label for="id" class="col-sm-3 control-label">ID</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="ID" name="idBidang" value="<?php echo $id?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-3 control-label">Nama Bidang</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="namaBidang" name="namaBidang" value="<?php echo $namaBidang?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-6">
                <input type="submit" class="col-sm-offset-5 btn btn-primary">
            </div>
        </div>
    </form>

</body>

