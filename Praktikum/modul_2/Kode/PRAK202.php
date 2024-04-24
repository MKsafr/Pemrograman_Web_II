<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color: red;}
        </style>
    </head>
    
    <body>
        <?php
            $errors = array("nama" => "", "nim" => "", "gender" => "");
            $output = "";

            if(isset($_POST["submit"])){
                $errors["nama"] = empty($_POST["nama"]) ? "nama tidak boleh kosong" : "";
                $errors["nim"] = empty($_POST["nim"]) ? "nim tidak boleh kosong" : "";
                $errors["gender"] = empty($_POST["gender"]) ? "jenis kelamin tidak boleh kosong" : "";

                if (!array_filter($errors)) {
                    $output .= "<h1>Output:</h1>";
                    $output .= !empty($_POST["nama"]) ? $_POST["nama"]."<br>" : "";
                    $output .= !empty($_POST["nim"]) ? $_POST["nim"]."<br>" : "";
                    $output .= !empty($_POST["gender"]) ? $_POST["gender"] : "";
                }
            }
        ?>
    
        <form action="" method="post">
            Nama: <input type="text" name="nama" value="<?= isset($_POST['nama']) ? $_POST['nama'] : '' ?>">
            <span class="error">* <?= $errors["nama"] ?></span><br>

            Nim: <input type="text" name="nim" value="<?= isset($_POST['nim']) ? $_POST['nim'] : '' ?>">
            <span class="error">* <?= $errors["nim"] ?></span><br>
            
            Jenis Kelamin : <span class="error">* <?= $errors["gender"] ?></span><br>
            <input type="radio" name="gender" value="Laki-laki" <?= (isset($_POST["gender"]) and $_POST["gender"] == "Laki-laki") ? "checked" : "" ?>>Laki-laki<br>
            <input type="radio" name="gender" value="Perempuan" <?= (isset($_POST["gender"]) and $_POST["gender"] == "Perempuan") ? "checked" : "" ?>>Perempuan<br>
            <button type="submit" name="submit">Submit</button>
        </form>
    
        <?= $output ?>
    </body>
</html>
