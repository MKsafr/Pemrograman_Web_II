<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            Nama: 1 <input type="text" name="nama1" value="<?=isset($_POST['nama1']) ? $_POST['nama1'] : ''?>"><br>
            Nama: 2 <input type="text" name="nama2" value="<?=isset($_POST['nama2']) ? $_POST['nama2'] : ''?>"><br>
            Nama: 3 <input type="text" name="nama3" value="<?=isset($_POST['nama3']) ? $_POST['nama3'] : ''?>"><br>
            <button type="submit" name="urutkan"> Urutkan </button>
        </form>

        <?php
            if(isset($_POST["urutkan"])){
                $nama1 = $_POST["nama1"];
                $nama2 = $_POST["nama2"];
                $nama3 = $_POST["nama3"];

                $nama_array = array($nama1, $nama2, $nama3);
                sort($nama_array);

                foreach ($nama_array as $nama) {
                    echo "$nama <br>";
                }
            }
        ?>
    </body>
</html>
