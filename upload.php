<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Display Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    
<?php

    $target_dir = "images/";

    foreach ($_FILES as $file) {
        $target_file = $target_dir . basename($file["name"]);
        move_uploaded_file($file["tmp_name"], $target_file);
        echo "<img src=\"$target_file\">";
    }
    
    ?>
</body>
</html>