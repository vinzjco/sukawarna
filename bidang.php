<?php

require 'vendor/autoload.php';

use sukawarna\Connection as Connection;
use sukawarna\model_bidang as model_bidang;

try {
    $pdo = Connection::get()->connect();

    $bidang = new model_bidang($pdo);
    $dataBidang = $bidang->select();

} catch (\PDOException $e) {
    echo $e->getMessage();
}
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
    <script src="js/melvin.js"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GBI Sukawarna</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/index.php">Beranda</a></li>
                <li><a href="#">Pengaturan</a></li>
                <li><a href="#">Bantuan</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="index.php">Beranda</a></li>
                <li class="active"><a href="bidang.php">Data Bidang</a><span class="sr-only">(current)</span></li>
                <li><a href="cool.php">Data Cool</a></li>
                <li><a href="kom.php">Data KOM</a></li>
                <li><a href="kursus.php">Data Kursus</a></li>
                <li><a href="pekerjaan.php">Data Pekerjaan</a></li>
                <li><a href="pengerja.php">Data Pengerja</a></li>
                <li><a href="pernikahan.php">Data Pernikahan</a></li>
            </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Data Bidang</h1>

            <!--        FORM-->
            <form action="insert_bidang.php" class="form-horizontal" method="post">
                <div class="form-group row">
                    <label for="id" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="idBidang" placeholder="idBidang" name="idBidang">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 control-label">Nama Bidang</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="namaBidang" placeholder="Nama Bidang" name="namaBidang">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-6">
                        <input type="submit" class="col-sm-offset-5 btn btn-primary">
                    </div>
                </div>
            </form>

            <h2 class="sub-header">Tabel Bidang</h2>
            <div class="table-responsive col-sm-9">
<!--                message-->
                <p class="bg-primary text-center" id="msg"><?php if (isset($_GET['msg'])){
                        echo $_GET['msg'];} else {echo '';} ?></p>
<!--                search-->
                <div class="form-group row">
                    <div class="col-sm-2">
                        <select name="cmbSearchBidang" id="cmbSearchBidang" class="form-control">
                            <option value="1">ID</option>
                            <option value="2">Nama</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" onkeyup="searchFunc()" id="search" placeholder="Search.." name="search">
                    </div>
                </div>
<!--                table-->
                <table class="table table-bordered" id="tblBidang">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nama Bidang</th>
                        <th colspan="2" class="text-center">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dataBidang as $item) : ?>
                        <tr>
                            <td class="text-center"><?php echo htmlspecialchars($item['id']) ?></td>
                            <td><?php echo htmlspecialchars($item['namaBidang']); ?></td>
                            <td><a href="form_update_bidang.php?id=<?php echo $item['id'] ?>&namaBidang=<?php echo $item['namaBidang']?>"
                                   class="btn btn-success btn-sm btn-block">Update</a></td>
                            <td><a href="delete_bidang.php?id=<?php echo $item['id']?>"
                                   class="btn btn-danger btn-sm btn-block">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <p id="message1"></p>
                <p id="message2"></p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="js/holder.min.js"></script>

<script type="text/javascript">
    function searchFunc() {
        var msg1, msg2, tr, td, i, input, filter, tabel, option, select;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        tabel = document.getElementById("tblBidang");
        tr = tabel.getElementsByTagName("tr");
        select = document.getElementById("cmbSearchBidang");
        option = select.options[select.selectedIndex].value;
        msg1 = document.getElementById("message1");
        msg2 = document.getElementById("message2");

        for (i = 0; i < tr.length; i++){
            if (option == '1'){
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                        //msg1.innerHTML = "ID YANG ANDA CARI TIDAK TERDAPAT DALAM DATABASE";
                    }
                }
            } else if (option == '2') {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                      //  msg2.innerHTML = "NAMA BIDANG YANG ANDA CARI TIDAK TERDAPAT DALAM DATABASE";
                    }
                }
            }
        } // end for
    }
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
