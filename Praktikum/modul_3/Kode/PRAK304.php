<!DOCTYPE html>
<html>
    <body>
        <?php
            $bintang = isset($_POST['bintang']) ? $_POST['bintang'] : '';
            $showForm = true;

            if (isset($_POST["tambah"])) {
                $bintang++;
            } elseif (isset($_POST["kurang"])) {
                if ($bintang > 0) {
                    $bintang--;
                }
            }

            if (isset($_POST["submit"])) {
                $showForm = false;

                echo "Jumlah Bintang $bintang<br><br>";

                for ($i = 1; $i <= $bintang; $i++) {
                    echo "<img src='star.png' alt='Image' style='width:75px; height: 75px;'>";
                }
        ?>
            <form action="" method="post">
                <input type="hidden" name="bintang" value="<?= $bintang ?>">
                <button type="submit" name="tambah"> Tambah </button>
                <button type="submit" name="kurang"> Kurang </button>
            </form>
        <?php
            }
        ?>

        <?php if ($showForm): ?>
            <form action="" method="post">
                Jumlah Bintang : <input type="number" name="bintang" value="<?= $bintang ?>"><br>
                <button type="submit" name="submit"> Submit </button>
            </form>
        <?php endif; ?>
    </body>
</html>
