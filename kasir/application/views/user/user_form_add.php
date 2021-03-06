<section class="content-header">
    <h1>
        PENGGUNA
        <small>Welcome To our Syirkah</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-plus"></i></a></li>
        <li class="active">User</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add Users</h3>
            <div class="pull-right">
                <a href="<?= site_url('user_c') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body ">
            <div class="row">

                <div class="col-md-4 col-md-offset-2">
                    <?php //echo validation_errors(); 
                    ?>
                    <form action="" method="POST">
                        <div class="form-group  <?= form_error('fullname') ? 'has-error' : null ?>">
                            <label>Nama</label>
                            <input type="text" name="fullname" value="<?= set_value('fullname') ?>" placeholder="Nama" class="form-control">
                            <?= form_error('fullname') ?>
                        </div>

                        <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                            <label>Username</label>
                            <input type="text" name="username" value="<?= set_value('username') ?>" placeholder="Uername/Email Address" class="form-control">
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                            <label>Password</label>
                            <input type="password" name="password" value="<?= set_value('password') ?>" placeholder="Your Password" class="form-control">
                            <?= form_error('password') ?>
                        </div>
                        <div class="form-group <?= form_error('passwordconf') ? 'has-error' : null ?>">
                            <label>Repeat Password</label>
                            <input type="password" name="passwordconf" value="<?= set_value('passwordconf') ?>" placeholder="Your Repeat Password" class="form-control">
                            <?= form_error('passwordconf') ?>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" placeholder="Adreess" class="form-control"><?= set_value('address') ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <option value="">-Level-</option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                            </select>
                        </div>
                        <div class="form_group">
                            <button type="submit" class="btn btn-danger btn-flat">
                                <i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>