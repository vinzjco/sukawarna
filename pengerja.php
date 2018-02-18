<?php

require 'vendor/autoload.php';

use sukawarna\Connection as Connection;

try {
    Connection::get()->connect();
    echo 'A connection to the PostgreSQL database sever has been established successfully.';
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
    <link href="css/melvin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
                <li><a href="#">Beranda</a></li>
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
                <li class="active"><a href="pengerja.php">Data Pengerja <span class="sr-only">(current)</span></a></li>
            </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <h2 class="page-header">DATA PRIBADI DEPARTEMEN MUSIK</h2>
            <button data-toggle="collapse" data-target="#inputPengerja" class="btn btn-primary">INPUT</button>
            <br><br>
            <div id="inputPengerja" class="collapse">

                <form>
                    <div class="form-group row">
                        <div class="form-group col-md-3">
                            <label for="">Angkatan </label>
                            <input type="text" name="angkatan" class="form-control" placeholder="Angkatan [1/2/3/4]">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Tahun Angkatan</label>
                            <input type="text" name="tahun" class="form-control" placeholder="Tahun Angkatan">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">No. Audisi</label>
                            <input type="text" name="noAudisi" class="form-control" placeholder="No. Audisi">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">No. Badge Pengerja</label>
                            <input type="text" name="noBadgePengerja" class="form-control" placeholder="No. Badge Pengerja">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group col-md-3">
                            <img src="image/beckham.jpg" alt="" width="200px" height="250px">
                        </div>
                        <div class="form-group col-md-9">
                            <p><b>BIDANG PELAYANAN</b></p>
    <!--vokal-->
                            <div class="form-group col-md-3">
                                <p>VOKAL</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkWL">
                                    <label class="form-check-label" for="WL">
                                        Worship Leader
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkSinger">
                                    <label class="form-check-label" for="Singer">
                                        Singer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkChoir">
                                    <label class="form-check-label" for="Choir">
                                        Choir
                                    </label>
                                </div>
                            </div>

    <!--musik-->
                            <div class="form-group col-md-3">
                                <p>MUSIK</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkKeyboard">
                                    <label class="form-check-label" for="keyboard">
                                        Keyboard
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkBass">
                                    <label class="form-check-label" for="bass">
                                        Bass
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkDrum">
                                    <label class="form-check-label" for="drum">
                                        Drum
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkGitar">
                                    <label class="form-check-label" for="gitar">
                                        Gitar Elektrik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkSaxophone">
                                    <label class="form-check-label" for="saxophone">
                                        Saxophone
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkBiols">
                                    <label class="form-check-label" for="biola">
                                        Biola
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkPerkusi">
                                    <label class="form-check-label" for="perkusi">
                                        Perkusi
                                    </label>
                                </div>
                            </div>
    <!--Dance-->
                            <div class="form-group col-md-3">
                                <p>DANCE</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkDance">
                                    <label class="form-check-label" for="dance">
                                        Dance
                                    </label>
                                </div>
                            </div>
    <!--Support-->
                            <div class="form-group col-md-3">
                                <p>AUDIO</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkMixer">
                                    <label class="form-check-label" for="mixer">
                                        Mixer Operator
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkEquipment">
                                    <label class="form-check-label" for="equipment">
                                        Equipment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkLight">
                                    <label class="form-check-label" for="light">
                                        Light
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkGraphic">
                                    <label class="form-check-label" for="Graphic">
                                        Graphics
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="chkTV">
                                    <label class="form-check-label" for="TV">
                                        TV
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <p><b>DATA PRIBADI</b></p>
                        <p>ISI DENGAN HURUF KAPITAL YANG JELAS</p>
                        <br>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaPanggilan" class="col-sm-3 col-form-label">Nama Panggilan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="namaPanggilan" placeholder="Nama Panggilan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenisKelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="Laki" value="option1" checked>
                                    <label class="form-check-label" for="Laki">
                                        Laki - laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="Perempuan" value="option2">
                                    <label class="form-check-label" for="Perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempatLahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tempatLahir" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggalLahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="tanggalLahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kontak" class="col-sm-3 col-form-label">Nomor Kontak</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="kontak" placeholder="Nomor Kontak (WhatsApp)">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="rumah" placeholder="Rumah">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="kantor" placeholder="Kantor">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pendidikan" class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdPendidikan" id="SD" value="option1" checked>
                                    <label class="form-check-label" for="SD">
                                        SD
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdPendidikan" id="SMP" value="option2">
                                    <label class="form-check-label" for="SMP">
                                        SMP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdPendidikan" id="SMA" value="option3">
                                    <label class="form-check-label" for="SMA">
                                        SMA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdPendidikan" id="S1" value="option4">
                                    <label class="form-check-label" for="S1">
                                        S1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdPendidikan" id="S2" value="option5">
                                    <label class="form-check-label" for="S2">
                                        S2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdPendidikan" id="S3" value="option6">
                                    <label class="form-check-label" for="S3">
                                        S3
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-3 col-form-label">Status Pernikahan</label>
                            <div class="col-sm-3">

                                <div class="form-check">
                                    <input class="form-check-input" data-toggle="collapse" data-target="#inputSingle" type="radio" name="rdPernikahan" id="single" value="option1" checked>
                                    <label class="form-check-label" for="single">
                                        Single
                                    </label>
                                    <div id="inputSingle" class="collapse">
                                        <p>kampret</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" data-toggle="collapse" data-target="#inputSinglePacaran" type="radio" name="rdPernikahan" id="single" value="option1" checked>
                                    <label class="form-check-label" for="single">
                                        Single
                                    </label>
                                    <div id="inputSinglePacaran" class="collapse">
                                        <p>kampret</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>




            <h2 class="sub-header">Tabel Pengerja</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>dolor</td>
                        <td>sit</td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>amet</td>
                        <td>consectetur</td>
                        <td>adipiscing</td>
                        <td>elit</td>
                    </tr>

                    </tbody>
                </table>
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
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
