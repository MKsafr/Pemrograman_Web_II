<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            Batas Bawah : <input type="number" name="bawah" value="<?=isset($_POST['bawah']) ? $_POST['bawah'] : ''?>"><br>
            Batas Atas : <input type="number" name="atas" value="<?=isset($_POST['atas']) ? $_POST['atas'] : ''?>"><br>
            <button type="submit" name="cetak"> Cetak </button>
        </form>

        <?php
            if (isset($_POST["cetak"])) {
                $bawah = $_POST["bawah"];
                $atas = $_POST["atas"];

                for ($i = $bawah; $i <= $atas; $i++) {
                    $j = $i + 7;
                    if ($j % 5 == 0) {
                        echo "<img src='star.png' alt='Image' style='width:20px; height:20px;'>";
                    } else {
                        echo "$i ";
                    }
                }
            }
        ?>
    </body>
</html>