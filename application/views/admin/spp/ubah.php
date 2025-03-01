<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card col-12">
        <div class="card-header h4 text-primary">
            Ubah Data SPP
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $spp['id_spp']; ?>">
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $spp['tahun']; ?>">
                    <small class="form-text text-danger"><?= form_error('tahun'); ?></small>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal</label>
                    <input type="text" class="form-control" id="nominal" name="nominal" value="<?= $spp['nominal']; ?>">
                    <small class="form-text text-danger"><?= form_error('nominal'); ?></small>
                </div>
                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->