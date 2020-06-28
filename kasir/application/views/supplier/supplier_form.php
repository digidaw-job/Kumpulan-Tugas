<section class="content-header">
    <h1>
        SUPPLIER
        <small>Welcome To our Syirkah</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-plus"></i></a></li>
        <li class="active">Supplier</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page) ?> Data Supllier</h3>
            <div class="pull-right">
                <a href="<?= site_url('supplier') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body ">
            <div class="row">

                <div class="col-md-4 col-md-offset-2">
                    <?php //echo validation_errors(); 
                    ?>
                    <form action="<?= site_url('supplier/process') ?>" method="POST">
                        <div class="form-group">
                            <label>Nama Supplier</label>
                            <input type="hidden" name="id" value="<?= $row->supplier_id ?>">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <input type="text" name="supplier_name" value="<?= $row->name ?>" placeholder="Nama Supplier" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>No Telpon</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="number" name="phone" value="<?= $row->phone ?>" placeholder="No Telepon" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat Supllier</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-map"></i>
                                </div>
                                <textarea name="address" placeholder="Alamat Supplier" class="form-control" required><?= $row->address ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <textarea name="description" placeholder="Isikan Deskripsi Jika Ada" class="form-control"><?= $row->description ?></textarea>
                            </div>
                        </div>

                        <div class="form_group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-danger btn-flat">
                                <i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>