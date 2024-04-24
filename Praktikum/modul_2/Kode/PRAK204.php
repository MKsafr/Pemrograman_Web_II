<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            Nilai : <input type="number" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>" min="0" required><br>
            <button type="submit" name="konversi">Konversi</button>
        </form>
        
        <?php
            if(isset($_POST["konversi"]) or empty($_POST["nilai"])){
                echo "<h1>";
                if (!empty($_POST["nilai"])) {
                    $nilai = $_POST["nilai"];
                    
                    if ($nilai >= 1 && $nilai <= 9) {
                        echo "Satuan";
                    } elseif ($nilai >= 11 && $nilai <= 19) {
                        echo "Belasan";
                    } elseif ($nilai >= 10 && $nilai <= 99) {
                        echo "Puluhan";
                    } elseif ($nilai >= 100 && $nilai <= 999) {
                        echo "Ratusan";
                    } elseif ($nilai >= 1000) {
                        echo "Anda Menginput Melebihi Limit Bilangan";
                    } else {
                        echo "Nol";
                    }
                }
            }
        ?>
    </body>
</html>