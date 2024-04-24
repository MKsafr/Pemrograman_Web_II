<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            Nilai : <input type="number" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>"><br>
            Dari : <br>
            <?php $suhu = ["celcius", "fahrenheit", "reamur", "kelvin"]; ?>
            <?php foreach ($suhu as $unit): ?>
                <input type="radio" name="dari" value="<?= $unit ?>" <?= (isset($_POST["dari"]) and $_POST["dari"] == $unit) ? "checked" : "" ?>><?= ucfirst($unit) ?><br>
            <?php endforeach; ?>
            
            Ke : <br>
            <?php foreach ($suhu as $unit): ?>
                <input type="radio" name="ke" value="<?= $unit ?>" <?= (isset($_POST["ke"]) and $_POST["ke"] == $unit) ? "checked" : "" ?>><?= ucfirst($unit) ?><br>
            <?php endforeach; ?>
            
            <button type="submit" name="konversi">Konversi</button>
        </form>

        <?php
        if (isset($_POST["konversi"])) {
            $nilai = $_POST["nilai"];
            $dari = $_POST["dari"];
            $ke = $_POST["ke"];

            if ($dari == $ke) {
                echo "<h1>Hasil Konversi: $nilai &deg" . ucfirst($dari) . "</h1>";
            } else {
                $converted_value;
                switch ("$dari-$ke") {
                    case "celcius-fahrenheit":
                        $converted_value = (9/5 * $nilai) + 32;
                        break;
                    case "celcius-reamur":
                        $converted_value = 4/5 * $nilai;
                        break;
                    case "celcius-kelvin":
                        $converted_value = $nilai + 273;
                        break;
                    case "fahrenheit-celcius":
                        $converted_value = 5/9 * ($nilai - 32);
                        break;
                    case "fahrenheit-reamur":
                        $converted_value = 4/9 * ($nilai - 32);
                        break;
                    case "fahrenheit-kelvin":
                        $converted_value = 5/9 * ($nilai - 32) + 273;
                        break;
                    case "reamur-celcius":
                        $converted_value = 5/4 * $nilai;
                        break;
                    case "reamur-fahrenheit":
                        $converted_value = (9/4 * $nilai) + 32;
                        break;
                    case "reamur-kelvin":
                        $converted_value = 5/4 * $nilai + 273;
                        break;
                    case "kelvin-celcius":
                        $converted_value = $nilai - 273;
                        break;
                    case "kelvin-fahrenheit":
                        $converted_value = 9/5 * ($nilai - 273) + 32;
                        break;
                    case "kelvin-reamur":
                        $converted_value = 4/5 * ($nilai - 273);
                        break;
                }
                echo "<h1>Hasil Konversi: " . number_format($converted_value, 1) . " &deg" . ucfirst($ke) . "</h1>";
            }
        }
        ?>
    </body>
</html>
