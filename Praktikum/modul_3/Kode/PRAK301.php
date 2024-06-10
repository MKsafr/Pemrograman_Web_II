<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            Jumlah Peserta : <input type="number" name="peserta" value="<?=isset($_POST['peserta']) ? $_POST['peserta'] : ''?>"><br>
            <button type="submit" name="cetak"> Cetak </button>
        </form>
        
        <?php
            if (isset($_POST["cetak"])) {
                $peserta = $_POST["peserta"];

                for ($i = 1; $i <= $peserta; $i++) {
                    if ($i % 2 == 0) {
                        echo "<h1 style='color:green'>Peserta ke-$i</h1>";
                    } else {
                        echo "<h1 style='color:red'>Peserta ke-$i</h1>";
                    }
                }
            }
        ?>
    </body>
</html>