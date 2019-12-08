<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('excel'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-file-alt"></i> Import Data</a>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>Username</label><br>
                <input list="data_excel" class="form-control" type="text" name="username" id="username" placeholder="Username" onchange="return autofill();" style="max-width: 300px;">
            </div>
            <div class="form-group">
                <label>Nama</label><br>
                <input type="text" name="nama" id="nama" class="form-control" style="max-width: 300px;">
            </div>

            <datalist id="data_excel">
                <?php
                foreach ($record->result() as $b) {
                    echo "<option value='$b->username'>$b->username</option>";
                }
                ?>
            </datalist>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<script src="<?php echo base_url(); ?>asset/autofill/ajax.js"></script>
<script>
    function autofill() {
        var username = document.getElementById('username').value;
        $.ajax({
            url: "<?php echo base_url(); ?>autofill/cari",
            data: '&username=' + username,
            success: function(data) {
                var hasil = JSON.parse(data);
                $.each(hasil, function(key, val) {
                    document.getElementById('username').value = val.username;
                    document.getElementById('nama').value = val.nama;
                });
            }
        });

    }
</script>