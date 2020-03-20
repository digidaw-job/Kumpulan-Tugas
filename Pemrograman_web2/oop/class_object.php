<?php
class Manusia{
    // property declaration
    public $mata = 'hitam';

    // method declaration
    public function berjalan() {
        echo 'berjalan';
    }
}
$Amir 	 = new Manusia;
$Hasan  = new Manusia;
?>

<p>Hai, nama saya Hasan, saya bermata <?= $Hasan->mata ?>, saya dapat <?= $Hasan->berjalan() ?>.</p>
<p>Hai, nama saya Amir, saya bermata <?= $Amir->mata ?>, saya dapat <?= $Hasan->berjalan() ?>.</p>
