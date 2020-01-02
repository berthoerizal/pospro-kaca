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


    <!-- DataTales Example -->
    <h1 class="h4 mb-2 text-gray-800"><?php echo $title1; ?></h1>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow col-md-12">
                <div class="card-header py-3">
                    <a href="<?php echo base_url('datasets'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="col-md-3 mb-3 border border-dark p-3">
                        <div class="form-group">
                            <label for="knn">K:</label>
                            <input type="number" id="knn" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-default btn-sm" id="reset">Reset</button>
                            <button type="submit" class="btn btn-dark btn-sm" onclick="testing()">Proses</button>
                        </div>
                    </div>
                    <?php echo form_open(base_url('datasets/store')); ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Ri</th>
                                    <th>Na</th>
                                    <th>Mg</th>
                                    <th>Al</th>
                                    <th>Si</th>
                                    <th>K</th>
                                    <th>Ca</th>
                                    <th>Ba</th>
                                    <th>Fe</th>
                                    <th>Class</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="hidden" name="ri" value="<?php echo $baru['ri']; ?>" readonly><?php echo $baru['ri']; ?></td>
                                    <td><input type="hidden" name="na" value="<?php echo $baru['na']; ?>" readonly><?php echo $baru['na']; ?></td>
                                    <td><input type="hidden" name="mg" value="<?php echo $baru['mg']; ?>" readonly><?php echo $baru['mg']; ?></td>
                                    <td><input type="hidden" name="al" value="<?php echo $baru['al']; ?>" readonly><?php echo $baru['al']; ?></td>
                                    <td><input type="hidden" name="si" value="<?php echo $baru['si']; ?>" readonly><?php echo $baru['si']; ?></td>
                                    <td><input type="hidden" name="k" value="<?php echo $baru['k']; ?>" readonly><?php echo $baru['k']; ?></td>
                                    <td><input type="hidden" name="ca" value="<?php echo $baru['ca']; ?>" readonly><?php echo $baru['ca']; ?></td>
                                    <td><input type="hidden" name="ba" value="<?php echo $baru['ba']; ?>" readonly><?php echo $baru['ba']; ?></td>
                                    <td><input type="hidden" name="fe" value="<?php echo $baru['fe']; ?>" readonly><?php echo $baru['fe']; ?></td>
                                    <td>
                                        <input type="hidden" id="hasil" name="id_jenis" required readonly>
                                        <!-- <span id="hasil_jenis">???</span> -->
                                        <input type="text" class="form-control form-control-sm" id="hasil_jenis" required>
                                    </td>
                                    <td><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <h1 class="h4 mb-2 text-gray-800"><?php echo $title2; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow col-md-12">
                <!-- <div class="card-header py-3">
                    <h6>Tabel Hasil Jarak</h6>
                </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Jarak</th>
                                    <th>Ri</th>
                                    <th>Na</th>
                                    <th>Mg</th>
                                    <th>Al</th>
                                    <th>Si</th>
                                    <th>K</th>
                                    <th>Ca</th>
                                    <th>Ba</th>
                                    <th>Fe</th>
                                    <th>Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datasets as $datasets) { ?>
                                    <tr>
                                        <td><?php echo $datasets->jarak; ?></td>
                                        <td><?php echo $datasets->ri; ?></td>
                                        <td><?php echo $datasets->na; ?></td>
                                        <td><?php echo $datasets->mg; ?></td>
                                        <td><?php echo $datasets->al; ?></td>
                                        <td><?php echo $datasets->si; ?></td>
                                        <td><?php echo $datasets->k; ?></td>
                                        <td><?php echo $datasets->ca; ?></td>
                                        <td><?php echo $datasets->ba; ?></td>
                                        <td><?php echo $datasets->fe; ?></td>
                                        <td><?php echo $datasets->id_jenis; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    document.getElementById("reset").onclick = function() {
        document.getElementById("knn").value = "";
        document.getElementById("hasil").value = "";
        document.getElementById("hasil_jenis").value = "";
        // document.getElementById('hasil_jenis').innerHTML = "???";
        console.clear();
    };

    function testing() {
        var obj = <?php echo json_encode($data_js); ?>;
        var jenis_kaca = <?php echo json_encode($jenis_kaca); ?>;
        var knn = document.getElementById('knn').value;
        var hasil = document.getElementById('hasil');
        var hasil_jenis = document.getElementById('hasil_jenis');

        if (knn == null || knn == "") {
            alert("Please Fill All Required Field");
            return false;
        } else {
            var i;
            var frequency = {};
            var max = 0;
            var result;
            for (i = 0; i < knn; i++) {

                console.log("jenis[" + i + "] = " + obj[i].id_jenis);
                frequency[obj[i].id_jenis] = (frequency[obj[i].id_jenis] || 0) + 1 //mendapatkan frekuensi
                console.log("frekuensi[" + i + "] = " + frequency[obj[i].id_jenis]);
                if (frequency[obj[i].id_jenis] > max) { //jika frekuensi levih besar dari max maka
                    max = frequency[obj[i].id_jenis]; //update max
                    console.log("max[" + i + "] = " + max);
                    result = obj[i].id_jenis; //update result
                    console.log("result[" + i + "] = " + result);
                }
                console.log("==========================");
            }

            hasil.value = result;

            var jenis;
            for (i = 0; i < jenis_kaca.length; i++) {
                if (result == jenis_kaca[i].kode_jenis) {
                    jenis = jenis_kaca[i].nama_jenis;
                };
            }

            hasil_jenis.value = jenis;
            // document.getElementById('hasil_jenis').innerHTML = jenis;
        }
    }
</script>