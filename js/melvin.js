//Form Input Pengerja
$(document).ready(function() {
    $('#inputSinglePacaran').hide();
    $('#inputMenikah').hide();
    $('#inputJanda').hide();
    $('#inputDuda').hide();
    $('#inputWiraswasta').show();
    $('#inputKuliah').hide();
    $('#inputKaryawan').hide();
    $('#inputSekolah').hide();
    $('#inputAdaRekening').show();
    $('#inputKursusMusik').show();
    $('#inputKursusAudio').hide();
    $('#inputKursusKomputer').hide();
    $('#inputCoolYa').show();
    $('#inputRiwayat').show();


    $('#cmbStatus').on('change', function() {
        if(this.value == '1') {
            $('#inputSinglePacaran').hide();
            $('#inputMenikah').hide();
            $('#inputJanda').hide();
            $('#inputDuda').hide();
        } else if(this.value == '2'){
            $('#inputSinglePacaran').show();
            $('#inputMenikah').hide();
            $('#inputJanda').hide();
            $('#inputDuda').hide();
        } else if(this.value == '3'){
            $('#inputSinglePacaran').hide();
            $('#inputMenikah').show();
            $('#inputJanda').hide();
            $('#inputDuda').hide();
        } else if(this.value == '4'){
            $('#inputSinglePacaran').hide();
            $('#inputMenikah').hide();
            $('#inputJanda').show();
            $('#inputDuda').hide();
        } else if(this.value == '5'){
            $('#inputSinglePacaran').hide();
            $('#inputMenikah').hide();
            $('#inputJanda').hide();
            $('#inputDuda').show();
        }
    });

    $('#cmbPekerjaan').on('change', function() {
        if(this.value == '1'){
            $('#inputWiraswasta').show();
            $('#inputKuliah').hide();
            $('#inputSekolah').hide();
            $('#inputKaryawan').hide();
        } else if(this.value == '2'){
            $('#inputWiraswasta').hide();
            $('#inputKuliah').hide();
            $('#inputSekolah').hide();
            $('#inputKaryawan').show();
        } else if(this.value == '3'){
            $('#inputWiraswasta').hide();
            $('#inputKuliah').hide();
            $('#inputSekolah').show();
            $('#inputKaryawan').hide();
        } else if(this.value == '4'){
            $('#inputWiraswasta').hide();
            $('#inputKuliah').show();
            $('#inputSekolah').hide();
            $('#inputKaryawan').hide();
        } else if(this.value == '5'){
            $('#inputWiraswasta').hide();
            $('#inputKuliah').hide();
            $('#inputSekolah').hide();
            $('#inputKaryawan').hide();
        } else if(this.value == '6'){
            $('#inputWiraswasta').hide();
            $('#inputKuliah').hide();
            $('#inputSekolah').hide();
            $('#inputKaryawan').hide();
        } else if(this.value == '7'){
            $('#inputWiraswasta').hide();
            $('#inputKuliah').hide();
            $('#inputSekolah').hide();
            $('#inputKaryawan').hide();
        }
    });

    $('#cmbRekening').on('change', function() {
        if(this.value == '1') {
            $('#inputAdaRekening').show();
        } else if(this.value == '2') {
            $('#inputAdaRekening').hide();
        }
    });

    $('#cmbKursus').on('change', function() {
        if(this.value == '1') {
            $('#inputKursusMusik').show();
            $('#inputKursusAudio').hide();
            $('#inputKursusKomputer').hide();
        } else if(this.value == '2') {
            $('#inputKursusMusik').hide();
            $('#inputKursusAudio').show();
            $('#inputKursusKomputer').hide();
        } else if(this.value == '3') {
            $('#inputKursusMusik').hide();
            $('#inputKursusAudio').hide();
            $('#inputKursusKomputer').show();
        }
    });

    $('#cmbCool').on('change', function() {
        if(this.value == '1') {
            $('#inputCoolYa').show();
        } else {
            $('#inputCoolYa').hide();
        }
    });

    $('#cmbRiwayat').on('change', function() {
        if(this.value == '1') {
            $('#inputRiwayat').show();
        } else if (this.value == '2'){
            $('#inputRiwayat').hide();
        }
    });

});


