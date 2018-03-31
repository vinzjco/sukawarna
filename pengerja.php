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

                <form class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="">Angkatan </label>
                            <input type="text" name="angkatan" class="form-control" placeholder="Angkatan [1/2/3/4]">
                        </div>
                        <div class="col-md-3">
                            <label for="">Tahun Angkatan</label>
                            <input type="text" name="tahun" class="form-control" placeholder="Tahun Angkatan">
                        </div>
                        <div class="col-md-3">
                            <label for="">No. Audisi</label>
                            <input type="text" name="noAudisi" class="form-control" placeholder="No. Audisi">
                        </div>
                        <div class="col-md-3">
                            <label for="">No. Badge Pengerja</label>
                            <input type="text" name="noBadgePengerja" class="form-control" placeholder="No. Badge Pengerja">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="form-group col-md-3">
                            <input type="file" id="files"/>
                            <output id="face"></output>
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
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaPanggilan" class="col-sm-3 control-label">Nama Panggilan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="namaPanggilan" placeholder="Nama Panggilan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenisKelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-6">
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
                            <label for="tempatLahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="tempatLahir" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggalLahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="tanggalLahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kontak" class="col-sm-3 control-label">Nomor Kontak</label>
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
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

<!--                        Pendidikan-->
                        <div class="form-group row">
                            <label for="pendidikan" class="col-sm-3 control-label">Pendidikan Terakhir</label>
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

<!--                      Status Pernikahan-->
                        <div class="form-group row">
                            <label for="status" class="col-sm-3 control-label">Status Pernikahan</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="cmbStatus">
                                    <option value="1">Single Belum Punya Pacar</option>
                                    <option value="2">Single Sudah Punya Pacar</option>
                                    <option value="3">Menikah</option>
                                    <option value="4">Janda</option>
                                    <option value="5">Duda</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="status" class="col-sm-3"></label>
                                    <div class="col-sm-6">
<!--                                        Single Pacaran-->
                                        <div id="inputSinglePacaran">
                                            <div class="form-group row">
                                                <label for="namaPacar" class="col-sm-3 control-label">Nama Pacar </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaPacar" placeholder="Nama Pacar">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pacarKe" class="col-sm-3 control-label">Pacar ke - ....</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="pacarKe" placeholder="Pacar Ke - ....">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lamaPacaran" class="col-sm-3 control-label">Lama Pacaran </label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="lamaPacaranTahun" placeholder="Tahun">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="lamaPacaranBulan" placeholder="Bulan">
                                                </div>
                                            </div>
                                        </div>

<!--                                        Menikah-->
                                        <div id="inputMenikah">
                                            <div class="form-group row">
                                                <label for="namaSuami" class="col-sm-3 control-label">Nama Suami </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaSuami" placeholder="Nama Suami">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaIstri" class="col-sm-3 control-label">Nama Istri </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaIstri" placeholder="Nama Istri">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tglMenikah" class="col-sm-3 control-label">Tanggal Menikah </label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="tglMenikah" placeholder="Tanggal Menikah">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak1" class="col-sm-3 control-label">Anak Pertama </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak1" placeholder="Nama Anak Pertama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak2" class="col-sm-3 control-label">Anak Kedua </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak2" placeholder="Nama Anak Kedua">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak3" class="col-sm-3 control-label">Anak Ketiga </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak3" placeholder="Nama Anak Ketiga">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak4" class="col-sm-3 control-label">Anak Keempat </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak4" placeholder="Nama Anak Keempat">
                                                </div>
                                            </div>
                                        </div>

<!--                                        Janda-->
                                        <div id="inputJanda">
                                            <div class="form-group row">
                                                <div class="col-sm-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rdPernikahan" id="jandaCerai" value="option1">
                                                        <label class="form-check-label" for="jandaCerai">
                                                            Cerai
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rdPernikahan" id="jandaMati" value="option1">
                                                        <label class="form-check-label" for="jandaMati">
                                                            Mati
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="namaExSuami" class="col-sm-3 control-label">Nama Ex Suami </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaExSuami" placeholder="Nama Ex Suami">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tahunMenikahJanda" class="col-sm-3 control-label">Tahun Menikah </label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="tahunMenikahJanda" placeholder="Tahun Menikah ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tahunBerpisahJanda" class="col-sm-3 control-label">Tahun Berpisah </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="tahunBerpisahJanda" placeholder="Tahun Berpisah">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="penyebabJanda" class="col-sm-3 control-label">Penyebab </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="penyebabJanda" placeholder="Penyebab">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak1Janda" class="col-sm-3 control-label">Anak Pertama </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak1Janda" placeholder="Nama Anak Pertama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak2Janda" class="col-sm-3 control-label">Anak Kedua </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak2Janda" placeholder="Nama Anak Kedua">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak3Janda" class="col-sm-3 control-label">Anak Ketiga </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak3Janda" placeholder="Nama Anak Ketiga">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak4Janda" class="col-sm-3 control-label">Anak Keempat </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak4Janda" placeholder="Nama Anak Keempat">
                                                </div>
                                            </div>
                                        </div>

<!--                                        Duda-->
                                        <div id="inputDuda">
                                            <div class="form-group row">
                                                <div class="col-sm-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rdPernikahan" id="dudaCerai" value="option1">
                                                        <label class="form-check-label" for="dudaCerai">
                                                            Cerai
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rdPernikahan" id="dudaMati" value="option1">
                                                        <label class="form-check-label" for="dudaMati">
                                                            Mati
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="namaExIstri" class="col-sm-3 control-label">Nama Ex Istri </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaExIstri" placeholder="Nama Ex Istri">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tahunMenikahDuda" class="col-sm-3 control-label">Tahun Menikah </label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="tahunMenikahDuda" placeholder="Tahun Menikah ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tahunBerpisahDuda" class="col-sm-3 control-label">Tahun Berpisah </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="tahunBerpisahDuda" placeholder="Tahun Berpisah">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="penyebabDuda" class="col-sm-3 control-label">Penyebab </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="penyebabDuda" placeholder="Penyebab">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak1Duda" class="col-sm-3 control-label">Anak Pertama </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak1Duda" placeholder="Nama Anak Pertama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak2Duda" class="col-sm-3 control-label">Anak Kedua </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak2Duda" placeholder="Nama Anak Kedua">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak3Duda" class="col-sm-3 control-label">Anak Ketiga </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak3Duda" placeholder="Nama Anak Ketiga">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namaAnak4Duda" class="col-sm-3 control-label">Anak Keempat </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="namaAnak4Duda" placeholder="Nama Anak Keempat">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

<!--                      Pekerjaan-->
                        <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="cmbPekerjaan">
                                    <option value="1">Wiraswasta</option>
                                    <option value="2">Karyawan</option>
                                    <option value="3">Sekolah</option>
                                    <option value="4">Kuliah</option>
                                    <option value="5">Belum Bekerja</option>
                                    <option value="6">Ibu Rumah Tangga</option>
                                    <option value="7">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-3"></label>
                            <div class="col-sm-6">
<!--                                wiraswasta-->
                                <div id="inputWiraswasta">
                                    <div class="form-group row">
                                        <label for="bidangWiraswasta" class="col-sm-3 control-label">Bidang </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="bidangWiraswasta" placeholder="Bidang">
                                        </div>
                                    </div>
                                </div>
<!--                                karyawan-->
                                <div id="inputKaryawan">
                                    <div class="form-group row">
                                        <label for="karyawanTempat" class="col-sm-3 control-label">Tempat Bekerja </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="karyawanTempat" placeholder="Tempat Bekerja">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="karyawanJabatan" class="col-sm-3 control-label">Jabatan </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="karyawanJabatan" placeholder="Jabatan">
                                        </div>
                                    </div>
                                </div>
<!--                                sekolah-->
                                <div id="inputSekolah">
                                    <div class="form-group row">
                                        <label for="sekolahLokasi" class="col-sm-3 control-label">Lokasi Sekolah </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sekolahLokasi" placeholder="Lokasi Sekolah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sekolahJurusan" class="col-sm-3 control-label">Jurusan </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sekolahJurusan" placeholder="Jurusan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sekolahKelas" class="col-sm-3 control-label">Kelas </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sekolahKelas" placeholder="Kelas">
                                        </div>
                                    </div>
                                </div>
<!--                                kuliah-->
                                <div id="inputKuliah">
                                    <div class="form-group row">
                                        <label for="kuliahLokasi" class="col-sm-3 control-label">Lokasi Sekolah </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="kuliahLokasi" placeholder="Lokasi Sekolah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kuliahJurusan" class="col-sm-3 control-label">Jurusan </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="kuliahJurusan" placeholder="Jurusan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kuliahSemester" class="col-sm-3 control-label">Semester </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="kuliahSemester" placeholder="Semester">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!--                        kendaraan pribadi-->
                        <div class="form-group row">
                            <label for="kendaraan" class="col-sm-3 control-label">Kendaraan</label>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdKendaraan" id="ada" value="option1" checked>
                                    <label class="form-check-label" for="ada">
                                        Ada
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdKendaraan" id="tidakAda" value="option1" checked>
                                    <label class="form-check-label" for="tidakAda">
                                        Tidak Ada
                                    </label>
                                </div>
                            </div>
                        </div>

<!--                        rekening BCA-->
                        <div class="form-group row">
                            <label for="rekening" class="col-sm-3 control-label">Rekening BCA</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="cmbRekening">
                                    <option value="1">Ada</option>
                                    <option value="2">Tidak Ada</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adaRekening" class="col-sm-3"></label>
                            <div class="col-sm-6">
<!--                                adaRekening-->
                                <div id="inputAdaRekening">
                                    <div class="form-group row">
                                        <label for="noRek" class="col-sm-3 control-label">noRek </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="noRek" placeholder="noRek">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="namaRek" class="col-sm-3 control-label">namaRek </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="namaRek" placeholder="namaRek">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!--                        kursus-->
                        <div class="form-group row">
                            <label for="kursus" class="col-sm-3 control-label">Kursus</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="cmbKursus">
                                    <option value="1">Musik</option>
                                    <option value="2">Audio</option>
                                    <option value="3">Komputer</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adaRekening" class="col-sm-3"></label>
                            <div class="col-sm-6">
<!--                                kursus musik-->
                                <div id="inputKursusMusik">
                                    <div class="form-group row">
                                        <label for="tempatKursusMusik" class="col-sm-3 control-label">Tempat Kursus </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tempatKursusMusik" placeholder="Nama Tempat Kursus Musik">
                                        </div>
                                    </div>
                                </div>
<!--                                kursus audio-->
                                <div id="inputKursusAudio">
                                    <div class="form-group row">
                                        <label for="tempatKursusAudio" class="col-sm-3 control-label">Tempat Kursus </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tempatKursusAudio" placeholder="Nama Tempat Kursus Audio">
                                        </div>
                                    </div>
                                </div>
<!--                                kursus komputer-->
                                <div id="inputKursusKomputer">
                                    <div class="form-group row">
                                        <label for="tempatKursusKomputer" class="col-sm-3 control-label">Tempat Kursus </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tempatKursusKomputer" placeholder="Nama Tempat Kursus Komputer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!--                        emergency call-->
                        <div class="form-group row">
                            <label for="eCall" class="col-sm-3 control-label">Emergency Call</label>
                            <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label for="namaECall" class="col-sm-3 control-label">Nama </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="namaECall" placeholder="Nama">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="eCall" class="col-sm-3"></label>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="teleponECall" class="col-sm-3 control-label">teleponECall </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="teleponECall" placeholder="teleponECall">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="eCall" class="col-sm-3"></label>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="alamatECall" class="col-sm-3 control-label">alamatECall </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="alamatECall" placeholder="alamatECall">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="eCall" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <div class="col-sm-3">
                                        <input class="form-check-input" type="radio" name="rdKekerabatan" id="ortu" value="option1" checked>
                                        <label class="form-check-label" for="ortu">
                                            Orang Tua
                                        </label>
                                        </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" type="radio" name="rdKekerabatan" id="pasangan" value="option1" checked>
                                        <label class="form-check-label" for="pasangan">
                                            Pasangan
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" type="radio" name="rdKekerabatan" id="wali" value="option1" checked>
                                        <label class="form-check-label" for="wali">
                                            Wali
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="form-check-input" type="radio" name="rdKekerabatan" id="saudara" value="option1" checked>
                                        <label class="form-check-label" for="saudara">
                                            Saudara
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <p><b>RIWAYAT KEROHANIAN</b></p>
                        <br>
<!--                            lahir baru-->
                        <div class="form-group row">
                            <label for="lahirBaru" class="col-sm-3 control-label">Lahir Baru</label>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdLahirBaru" id="sudahlahirBaru" value="option1" checked>
                                    <label class="form-check-label" for="sudahlahirBaru">
                                        Sudah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdLahirBaru" id="belumlahirBaru" value="option1">
                                    <label class="form-check-label" for="belumlahirBaru">
                                        Belum
                                    </label>
                                </div>
                            </div>
                        </div>

<!--                        baptis selam-->
                        <div class="form-group row">
                            <label for="baptisSelam" class="col-sm-3 control-label">Baptis Selam</label>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdBaptisSelam" id="sudahBaptisSelam" value="option1" checked>
                                    <label class="form-check-label" for="sudahBaptisSelam">
                                        Sudah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdBaptisSelam" id="belumBaptisSelam" value="option1">
                                    <label class="form-check-label" for="belumBaptisSelam">
                                        Belum
                                    </label>
                                </div>
                            </div>
                        </div>

<!--                        sertifikat baptis selam-->
                        <div class="form-group row">
                            <label for="sertifikatBaptisSelam" class="col-sm-3 control-label">Sertifikat Baptis Selam</label>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdSertifikatBaptisSelam" id="adaSertifikatBaptisSelam" value="option1" checked>
                                    <label class="form-check-label" for="adaSertifikatBaptisSelam">
                                        Ada
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdSertifikatBaptisSelam" id="tidakSertifikatBaptisSelam" value="option1">
                                    <label class="form-check-label" for="tidakSertifikatBaptisSelam">
                                        Tidak Ada
                                    </label>
                                </div>
                            </div>
                        </div>

<!--                        baptis Roh Kudus-->
                        <div class="form-group row">
                            <label for="baptisRK" class="col-sm-3 control-label">Baptis Roh Kudus</label>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdBaptisRK" id="sudahBaptisRK" value="option1" checked>
                                    <label class="form-check-label" for="sudahBaptisRK">
                                        Sudah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdBaptisRK" id="belumBaptisRK" value="option1">
                                    <label class="form-check-label" for="belumBaptisRK">
                                        Belum
                                    </label>
                                </div>
                            </div>
                        </div>

<!--                        cool-->
                        <div class="form-group row">
                            <label for="cool" class="col-sm-3 control-label">Cool</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="cmbCool">
                                    <option value="1">Ya</option>
                                    <option value="2">Belum</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cool" class="col-sm-3"></label>
                            <div class="col-sm-6">
<!--                                Ya-->
                                <div id="inputCoolYa">
                                    <div class="form-group row">
                                        <label for="namaCool" class="col-sm-3 control-label">Nama Cool </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="namaCool" placeholder="Nama Cool">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!--                        kom-->
                        <div class="form-group row">
                            <label for="cool" class="col-sm-3 control-label">KOM</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="cmbCool">
                                    <option value="1">Sudah Sampai KOM 100</option>
                                    <option value="2">Sudah Sampai KOM 200</option>
                                    <option value="3">Sudah Sampai KOM 300</option>
                                    <option value="4">Belum</option>
                                </select>
                            </div>
                        </div>

<!--                        sertifikat kom-->
                        <div class="form-group row">
                            <label for="sertifikatKom" class="col-sm-3 control-label">Sertifikat KOM</label>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdLahirBaru" id="sudahSertifikatKom" value="option1" checked>
                                    <label class="form-check-label" for="sudahSertifikatKom">
                                        Sudah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rdLahirBaru" id="belumSertifikatKom" value="option1">
                                    <label class="form-check-label" for="belumSertifikatKom">
                                        Belum
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <p><b>KEANGGOTAAN GEREJA</b></p>
                        <br>
                        <div class="form-group row">
                            <label for="sekarangDi" class="col-sm-3 control-label">Sekarang di</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="sekarangDi" placeholder="Sekarang di">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="berjemaatSejak" class="col-sm-3 control-label">Berjemaat Sejak</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="berjemaatSejak" placeholder="Berjemaat Sejak">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempatIbadahRutin" class="col-sm-3 control-label">Tempat Ibadah Rutin</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="tempatIbadahRutin" placeholder="Tempat Ibadah Rutin">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gerejaSebelum" class="col-sm-3 control-label">Gereja sebelum di GBI SUKAWARNA</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="gerejaSebelum" placeholder="Nama Gereja">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <p><b>RIWAYAT PELAYANAN</b></p>
                        <br>
                        <div class="form-group row">
                            <label for="luarGBISukawarna" class="col-sm-3 control-label">Di Luar GBI Sukawarna</label>
                            <div class="col-sm-6">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td>Rentang Waktu dalam Tahun</td>
                                        <td>Sebagai</td>
                                        <td>Gereja</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="selainDpemus" class="col-sm-3 control-label">Tergabung dalam Departemen Selain Musik?</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="cmbRiwayat">
                                    <option value="1">Ya</option>
                                    <option value="2">Tidak</option>
                                </select>
                            </div>
                        </div>

                        <div id="inputRiwayat">
                            <div class="form-group row">
                                <label for="tergabung" class="col-sm-3 control-label"></label>
                                <div class="col-sm-6">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td>Rentang Waktu dalam Tahun</td>
                                        <td>Sebagai</td>
                                        <td>Departemen</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

<!--            Tabel Pengerja-->
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
<script src="js/melvin.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    function handleFileSelect(evt) {
        var files = evt.target.files; // FileList object

        // Loop through the FileList and render image files as thumbnails.
        for (var i = 0, f; f = files[i]; i++) {

            // Only process image files.
            if (!f.type.match('image.*')) {
                continue;
            }

            var reader = new FileReader();

            // Closure to capture the file information.
            reader.onload = (function(theFile) {
                return function(e) {
                    // Render thumbnail.
                    document.getElementById('face').innerHTML = ['<img class="img-responsive" width="200px" src="', e.target.result,
                        '" title="', theFile.name, '"/>'].join('');
                };
            })(f);

            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
        }
    }

    document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
</body>
</html>
