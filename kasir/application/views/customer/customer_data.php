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
            <h3 class="box-title">Data Customer</h3>
            <div class="pull-right">
                <a href="<?= site_url('customer/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-users"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Jeni Kelamin</th>
                        <th> No Telepon </th>
                        <th>Alamat</th>
                        <th>Tanggal Buat</th>
                        <th>Tanggal Update</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?> .</td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->gender ?></td>
                            <td><?= $data->phone ?></td>
                            <td><?= $data->address ?></td>
                            <td><?= $data->created ?></td>
                            <td><?= $data->updated ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('customer/edit/' . $data->customer_id) ?>" onclick=" return confirm('Apakah Anda Yakin Akan Mengubah Data Ini ?') " class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="<?= site_url('customer/del/' . $data->customer_id) ?>" onclick=" return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?') " class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>