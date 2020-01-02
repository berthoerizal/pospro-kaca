<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    if ($this->session->flashdata('sukses')) {
        echo '<div class="alert alert-success">';
        echo $this->session->flashdata('sukses');
        echo '</div>';
    }
    //error validasi
    echo validation_errors('<div class="alert alert-warning">', '</div>'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?></h1>

    <!-- DataTales Example -->
    <?php echo form_open(base_url('entri_baru')); ?>
    <div class="card shadow mb-4 col-md-12">
        <div class="card-header py-3">
            <?php if ($this->session->userdata('username')) { ?>
                <div class="float-right">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
                </div>
            <?php } ?>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ri">Refractive Index (Ri)</label>
                        <input type="number" step="any" class="form-control form-control-sm" name="ri" id="ri" value="<?php echo set_value('ri'); ?>" autofocus required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="na">Sodium (Na)</label>
                        <input type="number" step="any" class="form-control form-control-sm" name="na" id="na" value="<?php echo set_value('na'); ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mg">Magnesium (Mg)</label>
                        <input type="number" step="any" class="form-control form-control-sm" name="mg" id="mg" value="<?php echo set_value('mg'); ?>" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="al">Alumunium (Al)</label>
                        <input type="number" step="any" class="form-control form-control-sm" name="al" id="al" value="<?php echo set_value('al'); ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="si">Silicon (Si)</label>
                        <input type="number" step="any" class="form-control form-control-sm" name="si" id="si" value="<?php echo set_value('si'); ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="k">Potassium (K)</label>
                        <input type="number" step="any" class="form-control form-control-sm" name="k" id="k" value="<?php echo set_value('k'); ?>" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ca">Calcium (Ca)</label>
                        <input type="number" step="any" class="form-control form-control-sm" name="ca" id="ca" value="<?php echo set_value('ca'); ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ba">Barium (Ba)</label>
                        <input type="number" step="any" class="form-control form-control-sm" name="ba" id="ba" value="<?php echo set_value('ba'); ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fe">Iron (Fe)</label>
                        <input type="number" step="any" class="form-control form-control-sm" name="fe" id="fe" value="<?php echo set_value('fe'); ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="hasil_jenis">Hasil Jenis Kaca</label>
                        <input type="hidden" id="hasil" name="id_jenis" required readonly>
                        <input type="text" name="nama_jenis" class="form-control form-control-sm" id="hasil_jenis" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary btn-sm" onclick="testing()">Proses</button>
            <button type="reset" class="btn btn-dark btn-sm" id="reset">Reset</button>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
<!-- /.container-fluid -->
<?php $jumlah_data; ?>
<script>
    document.getElementById("reset").onclick = function() {
        document.getElementById('ri').value = "";
        document.getElementById('na').value = "";
        document.getElementById('mg').value = "";
        document.getElementById('al').value = "";
        document.getElementById('si').value = "";
        document.getElementById('k').value = "";
        document.getElementById('ca').value = "";
        document.getElementById('ba').value = "";
        document.getElementById('fe').value = "";
        document.getElementById("hasil").value = "";
        document.getElementById("hasil_jenis").value = "";
        console.clear();
    };

    function testing() {
        //mendapatkan datasets dan jenis kaca
        var lama = <?php echo json_encode($lama); ?>;
        var jumlah_data = <?php echo $jumlah_data; ?>;
        var jenis_kaca = <?php echo json_encode($jenis_kaca); ?>;

        //nilai bobot k
        var bobot_k = 6;

        //mendapatkan masukan data training
        var ri = document.getElementById('ri').value;
        var na = document.getElementById('na').value;
        var mg = document.getElementById('mg').value;
        var al = document.getElementById('al').value;
        var si = document.getElementById('si').value;
        var k = document.getElementById('k').value;
        var ca = document.getElementById('ca').value;
        var ba = document.getElementById('ba').value;
        var fe = document.getElementById('fe').value;

        //untuk ditampilkan di tag html pada id hasil dan hasil jenis
        var hasil = document.getElementById('hasil');
        var hasil_jenis = document.getElementById('hasil_jenis');

        //variabel bantu
        var jarak = [];
        var max = 0;
        var frequency = {};
        var i, j, temp_jarak, temp_jenis, jenis, result;

        if (ri == "" || na == "" || mg == "" || al == "" || si == "" || k == "" || ca == "" || ba == "" || fe == "") {
            alert("Seluruh parameter zat tidak boleh kosong!");
            return false;
        } else if (ri < 0 || na < 0 || mg < 0 || al < 0 || si < 0 || k < 0 || ca < 0 || ba < 0 || fe < 0) {
            alert("Seluruh parameter zat tidak boleh kurang dari nol (0)!");
            return false;
        } else {
            //menghitung jarak antara data training dengan setiap data sampel
            for (i = 0; i < jumlah_data; i++) {
                jarak[i] = Math.sqrt(
                    Math.pow(parseFloat(lama[i].ri) - parseFloat(ri), 2) +
                    Math.pow(parseFloat(lama[i].na) - parseFloat(na), 2) +
                    Math.pow(parseFloat(lama[i].mg) - parseFloat(mg), 2) +
                    Math.pow(parseFloat(lama[i].al) - parseFloat(al), 2) +
                    Math.pow(parseFloat(lama[i].si) - parseFloat(si), 2) +
                    Math.pow(parseFloat(lama[i].k) - parseFloat(k), 2) +
                    Math.pow(parseFloat(lama[i].ca) - parseFloat(ca), 2) +
                    Math.pow(parseFloat(lama[i].ba) - parseFloat(ba), 2) +
                    Math.pow(parseFloat(lama[i].fe) - parseFloat(fe), 2)
                );
            }

            //mengurutkan jarak dari yang terkecil (ascending)
            for (i = 0; i < jumlah_data; i++) {
                for (j = i + 1; j < jumlah_data; j++) {
                    if (jarak[j] < jarak[i]) {
                        temp_jarak = jarak[i];
                        jarak[i] = jarak[j];
                        jarak[j] = temp_jarak;

                        //menyesuaikan jarak dengan id_jenis
                        temp_jenis = lama[i].id_jenis;
                        lama[i].id_jenis = lama[j].id_jenis;
                        lama[j].id_jenis = temp_jenis;
                    }
                }
            }

            //mengambil jarak terdekat berdasarkan bobot_k dan mendapatkan hasil jenis kaca
            for (i = 0; i < bobot_k; i++) {
                console.log("jenis[" + i + "] = " + lama[i].id_jenis);
                frequency[lama[i].id_jenis] = (frequency[lama[i].id_jenis] || 0) + 1 //mendapatkan frekuensi
                console.log("frekuensi[" + i + "] = " + frequency[lama[i].id_jenis]);
                if (frequency[lama[i].id_jenis] > max) { //jika frekuensi levih besar dari max maka
                    max = frequency[lama[i].id_jenis]; //update max
                    console.log("max[" + i + "] = " + max);
                    result = lama[i].id_jenis; //update result
                    console.log("result[" + i + "] = " + result);
                }
                console.log("==========================");
            }
            hasil.value = result;

            //mendapatkan nama jenis kaca berdasarkan hasil id_jenis
            for (i = 0; i < jenis_kaca.length; i++) {
                if (result == jenis_kaca[i].kode_jenis) {
                    jenis = jenis_kaca[i].nama_jenis;
                };
            }
            hasil_jenis.value = jenis;
        }
    }
</script>