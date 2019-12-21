<a class="btn btn-dark btn-sm" href="#" data-toggle="modal" data-target="#testingModal">
    <i class="fa fa-circle"></i>
    Pengujian
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="testingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pengujian</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <?php echo form_open(base_url('pengujian')); ?>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-dark btn-sm">Proses</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>