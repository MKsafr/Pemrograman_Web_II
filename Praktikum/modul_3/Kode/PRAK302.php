<!DOCTYPE html>
<html>
    <head>
        <style>
            .white-text {
                color: white;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            Tinggi : <input type="number" name="tinggi" value="<?=isset($_POST['tinggi']) ? $_POST['tinggi'] : ''?>"><br>
            Alamat Gambar : <input type="text" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"><br>
            <button type="submit" name="cetak"> Cetak </button>
        </form>

        <div>
            <?php
                if (isset($_POST["cetak"])) {
                    $tinggi = $_POST["tinggi"];
                    $alamat = $_POST["alamat"];

                    $i = $tinggi;
                    while ($i >= 1) {
                        $j = $i;
                        $k = $tinggi - $i;
                        while ($k >= 1) {
                            echo "<span class='white-text'>_ _</span>";
                            $k--;
                        }
                        while ($j >= 1) {
                            echo "<img src='$alamat' alt='Image' style='width:20px; height:20px;'>";
                            $j--;
                        }
                        echo "<br>";
                        $i--;
                    }
                }
            ?>
        </div>
    </body>
</html>