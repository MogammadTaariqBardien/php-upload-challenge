<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php Upload Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <!-- Challenge 1 -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
    </form>

    <!-- Challenge 2 -->
    <form action="upload2.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="file" name="image2">
    <input type="file" name="image3">
    <input type="submit">
    </form>

</body>
</html>