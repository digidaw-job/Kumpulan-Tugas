<section class="content-header">
    <h1>
        PENGGUNA
        <small>Welcome To our Syirkah</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-plus"></i></a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h2 class="box-title">
                Edit Users
            </h2>
            <div class="pull-right">
                <a href="<?= site_url('user_c') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body ">
            <div class="row">

                <div class="col-md-4 col-md-offset-2">

                    <form action="" method="POST">
                        <div class="form-group  <?= form_error('fullname') ? 'has-error' : null ?>">
                            <label>Nama</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input type="text" name="fullname" value="<?= $this->input->post('fullname') ? $this->input->post('fullname') : $row->name ?>" class="form-control">
                            <?= form_error('fullname') ?>
                        </div>

                        <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                            <label>Username</label>
                            <input type="text" name="username" value="<?= $this->input->post('username') ? $this->input->post('userame') : $row->username ?>" class="form-control">
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                            <label>Password</label> <small> *Tidak wajib di isi jika tidak ingin diganti</small>
                            <input type="password" name="password" value="<?= $this->input->post('password')  ?>" placeholder="Your Password" class="form-control">
                            <?= form_error('password') ?>
                        </div>
                        <div class="form-group <?= form_error('passwordconf') ? 'has-error' : null ?>">
                            <label>Repeat Password</label>
                            <input type="password" name="passwordconf" value="<?= $this->input->post('passwordconf')  ?>" placeholder="Your Repeat Password" class="form-control">
                            <?= form_error('passwordconf') ?>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" placeholder="Adreess" class="form-control"><?= $this->input->post('address') ? $this->input->post('address') : $row->address ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                <option value="1">Admin</option>
                                <option value="2" <?= $level == 2 ? "selected" : null ?>>Kasir</option>
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