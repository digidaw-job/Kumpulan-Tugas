<?php
// Pembuatan Class Manusia
class Manusia
{

    // Pendefinisian Static Property $nama
    public static $nama = 'Wahyu';

    // Pendefinisian Static Property Method berjalan()
    public static function berjalan()
    {
        return 'menggunakan kaki kanan dan kiri secara ber - iringan';
    }
}
?>

<p>Hai, nama saya <?= Manusia::$nama ?>, saya berjalan dengan <?= Manusia::berjalan() ?>.</p>


<?php
// Pembuatan Class Manusia
class Manusia1
{

    // Pendefinisian Static Property $nama
    public static $nama = 'Wahyu';

    // Pendefinisian Static Property Method berjalan()
    public static function namaSaya()
    {
        // Memanggil Property $nama yang di definisikan secara Static
        return self::$nama;
    }
}
?>