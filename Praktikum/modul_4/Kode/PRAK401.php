<!DOCTYPE html>
<html>
    <head>
        <style>
            table, tr, td {
                border: solid 1px black;
                border-collapse: collapse;
                padding: 5px;
                text-align: center; }
        </style>
    </head>

    <body>
        <form action="" method="post">
            Panjang: <input type="text" name="panjang" value="<?= isset($_POST['panjang']) ? $_POST['panjang'] : '' ?>"> <br>
            Lebar: <input type="text" name="lebar" value="<?= isset($_POST['lebar']) ? $_POST['lebar'] : '' ?>"> <br>
            Nilai: <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"> <br>
            <button type="submit" name="cetak">Cetak</button>
        </form>

        <?php
            if (isset($_POST['cetak'])) {
                $nilaiArray = explode(' ', $_POST['nilai']);
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];

                if ($panjang * $lebar === count($nilaiArray)) {
                    $tampil = array();
                    $count = 0;

                    for ($i = 0; $i < $panjang; $i++) {
                        $tampil[$i] = array();
                        for ($j = 0; $j < $lebar; $j++) {
                            $tampil[$i][$j] = $nilaiArray[$count];
                            $count++; } }

                    echo '<table>';
                    for ($i = 0; $i < $panjang; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j < $lebar; $j++) {
                            echo '<td>' . $tampil[$i][$j] . '</td>'; }
                        echo '</tr>'; }

                    echo '</table>';
                } else {
                    echo 'Panjang nilai tidak sesuai dengan ukuran matriks'; } }
        ?>
    </body>
</html>