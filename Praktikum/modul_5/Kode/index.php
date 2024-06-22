<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Menu Index</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background: url(background.jpg); 
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh; }

            .container {
                background-color: rgba(255, 255, 255, 0.85);
                padding: 30px;
                border-radius: 30px;
                box-shadow: 0 0 50px rgba(0, 0, 0);
                max-width: 500px;
                width: 100%;
                box-sizing: border-box; }

            a {
                text-decoration: none; }

            h1 {
                margin-top: 20px; }
        </style>
    </head>

    <body>
        <div class="container">
            <h1 class="text-center">Perpus Online</h1>
            <a href="Member.php"><button type="button" class="list-group-item list-group-item-action">Member</button></a>
            <a href="Buku.php"><button type="button" class="list-group-item list-group-item-action">Buku</button></a>
            <a href="Peminjaman.php"><button type="button" class="list-group-item list-group-item-action">Peminjaman</button></a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
