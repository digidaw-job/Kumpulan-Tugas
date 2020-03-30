<?php
$this->db->select('a.kode_produk,b.nama_kat as katagori,a.nama_produk,a.harga,sum(a.harga) as total ');
$this->db->from('produk a');
$this->db->join('kategori b', 'a.id_kat = b.id_kat', 'inner');
$this->db->group_by('nama_produk ');
$this->db->order_by('katagori', 'DESC');
$query = $this->db->get();
$dataku = $query->result_array();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <center>
        <h3>Product Herbal</h3>
    </center>

    <table border="1" style="margin : 20px auto" cellpadding="5">
        <thead>
            <tr bgcolor="blue">
                <th>Kode Product</th>
                <th>kategori</th>
                <th>Nama Produk</th>
                <th>Harga</th>




            </tr>
        </thead>
        <tbody>
            <?php
            $sum = 0;
            foreach ($dataku as $row) { ?>
                <?php $sum += $row['total'] ?>
                <tr>
                    <td><?= $row['kode_produk'] ?></td>
                    <td><?= $row['katagori'] ?></td>
                    <td><?= $row['nama_produk'] ?></td>
                    <td><?= $row['harga'] ?></td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3" bgcolor="orange"><?php echo "Total          " ?></td>

                <td bgcolor="orange"><?php echo  $sum; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>

<!--======================================================================================================================= -->
<?php
$this->db->select('b.nama_kat as katagori,a.harga,sum(a.harga) as jumlah_harga,avg(a.harga) as rata,count(nama_kat) as jumlah');
$this->db->from('produk a');
$this->db->join('kategori b', 'a.id_kat = b.id_kat');
$this->db->group_by('katagori');
$this->db->order_by('katagori', 'DESC');
$query = $this->db->get();
$dataku = $query->result_array();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <table border="1" style="margin : 20px auto">
        <thead>
            <tr bgcolor="blue">
                <th>katagori</th>
                <th>Jumlah Harga</th>
                <th>Rata-Rata</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dataku as $row) { ?>
                <tr>

                    <td><?= $row['katagori'] ?></td>
                    <td><?= $row['jumlah_harga'] ?></td>
                    <td><?= $row['rata'] ?></td>
                    <td><?= $row['jumlah'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>