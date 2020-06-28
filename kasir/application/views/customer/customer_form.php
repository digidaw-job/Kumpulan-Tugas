<section class="content-header">
    <h1>
        Customers
        <small>| Pelanggan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-plus"></i></a></li>
        <li class="active">Customers</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page) ?> Data Customer</h3>
            <div class="pull-right">
                <a href="<?= site_url('customer') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body ">
            <div class="row">

                <div class="col-md-4 col-md-offset-2">
                    <?php //echo validation_errors(); 
                    ?>
                    <form action="<?= site_url('customer/process') ?>" method="POST">
                        <div class="form-group">
                            <label>Nama customer</label>
                            <input type="hidden" name="id" value="<?= $row->customer_id ?>">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="customer_name" value="<?= $row->name ?>" placeholder="Nama customer" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa  fa-users"></i>
                                </div>
                                <select name="gender" class="form-control" required>
                                    <option value="">Jenis Kelamin</option>
                                    <option value="L" <?= $row->gender == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                                    <option value="P" <?= $row->gender == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
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
                                <label>Alamat customer</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <textarea name="address" placeholder="Alamat customer" class="form-control" required><?= $row->address ?></textarea>
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