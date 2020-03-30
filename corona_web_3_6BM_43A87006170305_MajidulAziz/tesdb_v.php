<?php
//running query
$sql = "SELECT * FROM kitab";
$query = $this->db->query($sql);
$dataku = $query->result();

foreach ($dataku as $row) {
    echo $row->judul . "<br>";
}
echo "<hr>";
echo "queri binding : <br>";
echo "<br>";
//queri binding
$sql = "SELECT * FROM kitab where id = ? ";
$query = $this->db->query($sql, 2);
$dataku = $query->result();

foreach ($dataku as $row) {
    echo $row->judul . "<br>";
}

echo "<hr>";
echo "Active Record : <br>";
echo "<br>";
$this->db->select('judul,harga');
$this->db->from('kitab');
$query = $this->db->get();
$dataku = $query->result();

foreach ($dataku as $row) {
    echo $row->harga . "-" . $row->judul . "<br>";
}

echo "<hr>";
echo "active record grup_by dengan result dalam bentuk array.

: <br>";
echo "<br>";
$this->db->select('katagori,sum(harga) as total');
$this->db->from('kitab');
$this->db->group_by('katagori');
$query = $this->db->get();
$dataku = $query->result_array();

foreach ($dataku as $row) {
    echo $row['katagori'] . "-" . $row['total'] . "<br>";
}
echo "<hr>";

$this->db->select('deskripsi,katagori,sum(harga) as total');
$this->db->from('kitab a');
$this->db->join('katagori b', 'a.katagori = b.kode', 'inner');
$this->db->group_by('katagori');
$query = $this->db->get();
$dataku = $query->result_array();

foreach ($dataku as $row) {
    echo $row['deskripsi'] . "-" . $row['katagori'] . "-" . $row['total'] . "<br>";
}
echo "<hr>";


$query = $this->db->query("select * from kitab where katagori = 'sejarah'");
if ($query->num_rows() > 0) {
    $row = $query->row();
    echo $row->pengarang;
    echo "-";
    echo $row->judul;
} else {
    echo " tidak ada";
}
