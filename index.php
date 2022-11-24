<?php

require 'assets/function.php';



if (isset($_POST["submit"])) {
    $namaSamaran = $_POST['username'];
    $pesanSamaran = $_POST['pesanPengirim'];
    insertPesan("INSERT INTO data VALUES 
    ('$namaSamaran', '$pesanSamaran')
    ");

};



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Rahasia</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="Container">
        <div class="card1 shadow-lg">
            <div class="form1">
                <h1>PESAN RAHASIA</h1>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Nama Samaran" aria-label="Username" aria-describedby="basic-addon1" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="pesanPengirim" rows="3"></textarea>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>