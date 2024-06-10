<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            <input type="text" name="isi" value="<?=isset($_POST['isi']) ? $_POST['isi'] : ''?>">
            <button type="submit" name="submit"> Submit </button>
        </form>

        <?php
            if (isset($_POST["submit"])) {
                $hurufArray = str_split($_POST["isi"]);

                echo "<h1> Input : <h1>";
                foreach ($hurufArray as $huruf) {
                    echo $huruf;
                }

                echo "<h1> Output : </h1>";
                foreach ($hurufArray as $huruf) {
                    for ($i = 1; $i <= count($hurufArray); $i++) {
                        if ($i == 1) {
                            echo strtoupper($huruf);
                        } else {
                            echo strtolower($huruf);
                        }
                    }
                }
            }
        ?>
    </body>
</html>
