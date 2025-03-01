<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Nama Submenu</label>
                <input type="text" class="form-control" id="title" name="title">
                <small class="form-text text-danger"><?= form_error('title'); ?></small>
            </div>
            <div class="form-group">
                <select name="menu_id" id="menu_id" class="form-control">
                    <option value="">Select Menu</option>
                    <?php foreach ($menu as $m) : ?>
                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="url">Submenu Url</label>
                <input type="text" class="form-control" id="url" name="url">
                <small class="form-text text-danger"><?= form_error('url'); ?></small>
            </div>
            <div class="form-group">
                <label for="icon">Submenu Icon</label>
                <input type="text" class="form-control" id="icon" name="icon">
                <small class="form-text text-danger"><?= form_error('icon'); ?></small>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                    <label class="form-check-label" for="is_active">
                        Active?
                    </label>
                </div>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->