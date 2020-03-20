<html>

<head>
    <meta charset="UTF-8">
    <title>Perhitungan Diskon</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Harga</td>
                <td> <input type="text" name="harga" placeholder="Masukkan Harga"></td>
            </tr>
                <tr>
                <td></td>
                <td> <input type="submit" name="submit" value="Submit"> </td>
                </tr>
        </table>
    </form>
    <?php
    
if (isset($_POST["submit"])){
    $harga =$_POST['harga'];
 


        function belanja($harga) {
             $diskon;
            if ($harga >= 4000000) {
                $diskon = 0.1 * $harga;
                $hargaDiskon = $harga - $diskon;
                

            } else {
                echo("maaf anda tidak mendapatkan diskon");
                echo "<p>";
            }
            return $hargaDiskon;


        }
        
        echo "Harga :$harga";
        echo "<p>";

       echo "Harga Setelah diskon 10% Menjadi : Rp.".belanja($harga);
}else{
    echo "";
}

    ?>
</body>

</html>