<a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#editModal<?php echo $jenis_kaca->id; ?>">
    <i class="fa fa-edit"></i>
    Edit
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="editModal<?php echo $jenis_kaca->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?php $attribut = 'class="form-horizontal"';
            echo form_open(base_url('jenis_kaca/update/' . $jenis_kaca->id), $attribut);
            ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_jenis">Edit Jenis Kaca</label>
                    <input type="text" class="form-control form-control-sm" name="nama_jenis" id="nama_jenis" value="<?php echo $jenis_kaca->nama_jenis; ?>" required>
                </div>
                <div class="form-group">
                    <label for="kode_jenis">Kode Jenis</label>
                    <input type="number" class="form-control form-control-sm" name="kode_jenis" id="kode_jenis" value="<?php echo $jenis_kaca->kode_jenis; ?>" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>