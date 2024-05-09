<html>
    <head>
        <style>
            table, tr, td, th {
                border: solid 1px black;
                border-collapse: collapse;
                padding: 5px; }

            table {
                width:500px }

            th {
                text-align: left;
                background-color: lightgray; }
        </style>
    </head>

    <body>
        <table>
            <tr>
                <th> Nama </th>
                <th> NIM </th>
                <th> Nilai UTS </th>
                <th> Nilai UAS </th>
                <th> Nilai Akhir </th>
                <th> Huruf </th>
            </tr>

            <?php
                $data = [
                    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
                    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
                    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
                    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
                ];

                for ($i=0; $i < count($data); $i++) { 
                    $data[$i]["akhir"] = $data[$i]["uts"] * 0.4 + $data[$i]["uas"] * 0.6;
                    if ($data[$i]["akhir"] >= 80) {
                        $data[$i]["huruf"] = "A";
                    } elseif ($data[$i]["akhir"] > 70){
                        $data[$i]["huruf"] = "B";
                    } elseif ($data[$i]["akhir"] > 60){
                        $data[$i]["huruf"] = "C";
                    } elseif ($data[$i]["akhir"] > 50){
                        $data[$i]["huruf"] = "D";
                    } else {
                        $data[$i]["huruf"] = "E"; } }
            ?>

            <?php
                for ($i=0; $i < count($data); $i++) { 
                    echo "<tr>";
                    echo "<td>".$data[$i]["nama"]."</td>";
                    echo "<td>".$data[$i]["nim"]."</td>";
                    echo "<td>".$data[$i]["uts"]."</td>";
                    echo "<td>".$data[$i]["uas"]."</td>";
                    echo "<td>".$data[$i]["akhir"]."</td>";
                    echo "<td>".$data[$i]["huruf"]."</td>";
                    echo "</tr>"; }       
            ?>
        </table>
    </body>
</html>
