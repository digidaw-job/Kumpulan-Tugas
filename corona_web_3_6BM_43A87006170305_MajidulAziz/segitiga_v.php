<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    Luas Segitiga
    <?php
    $this->load->helper('form');
    echo form_open("segitiga_c/hitung");
    $data1 = array(
        "name " => "alas", "id" => "alas",
        "maxlenght" => "64", "size" => "30",

    );

    $data2 = array(
        "name " => "tinggi", "id" => "tinggi",
        "maxlenght" => "64", "size" => "30"
    );

    echo $jdl1;
    echo form_input($data1);
    echo $jdl2;
    echo form_input($data2);

    echo form_submit("Submit", "Hitung");
    echo form_close();
    ?>
</body>

</html>