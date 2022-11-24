<?php

require 'function.php';

$massages = selectPesan("SELECT * FROM data");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menu Admin ( Kyura Dev ) </title>
</head>
<body>
    <?php if(isset($massages)) : ?>
        <div class="boxmodel">
            <?php foreach($massages as $massage) :?>
                <div class="container">
                    <div class="media_card">
                        <h1>From: <?=$massage["nama_pengirim"]?></h1>
                    </div>
                    <div class="media_descr">
                        <h1><?=$massage["pesan"]?></h1>
                    </div>
                    
                </div>
                <?php endforeach?>
            </div>
    <?php endif?>
    <h1></h1>
</body>
</html>