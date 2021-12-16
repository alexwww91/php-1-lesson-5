<?php
  //ini_get("MAX_POST_SIZE"); 	

  include_once 'models/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Работа с файлами</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


  <div class="image_big">
                <a href="/">Вернуться в галерею</a>

                <?php

                $idImage = $_GET['id'];
                $sqlImg = "SELECT * FROM images WHERE id='$idImage'";
               
                

                if (mysqli_query($connect, $sqlImg)) {
                    $image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImg));
                    $update = "UPDATE images SET viewings = viewings + 1 WHERE id=$idImage";
                    mysqli_query($connect, $update);
                }
                ?>

                <img src="/images/<?= $image['name'] ?>" alt="image<?= $idImage ?>">

                <h2 class="count">Количество просмотров: <?= ++$image['viewings'] ?></h2>
            </div>
</body>
</html>
