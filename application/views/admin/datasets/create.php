<a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#tambahModal">
    <i class="fa fa-plus"></i>
    Tambah
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?php echo form_open(base_url('datasets/store')); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ri">Refractive Index (Ri)</label>
                            <input type="number" step="any" class="form-control form-control-sm" name="ri" id="ri" value="<?php echo set_value('ri'); ?>" required>
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
                </div>
                <div class="form-group">
                    <label for="id_jenis">Jenis Kaca</label>
                    <select class="form-control form-control-sm" id="id_jenis" name="id_jenis">
                        <?php foreach ($jenis_kaca as $jenis_kaca) { ?>
                            <option value="<?php echo $jenis_kaca->kode_jenis; ?>"><?php echo $jenis_kaca->nama_jenis; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>