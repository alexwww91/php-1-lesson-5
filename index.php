<?php
  include_once 'models/config.php';
  include_once 'models/photo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Работа с файлами</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>ГАЛЕРЕЯ ФОТО</h1>
  </header>

            <div class="gallery">
                <?php

                $sql = "SELECT * FROM images ORDER BY viewings DESC";
                $table = mysqli_query($connect, $sql);

                while ($data = mysqli_fetch_assoc($table)) : ?>
                    <a href='image.php?id=<?= $data['id'] ?>' class='product'>
                        <img class="product_img" src='/img/<?= $data['name'] ?>' alt='img"<?= $data['name'] ?>'>
                    </a>
                <?php endwhile; ?>
            </div>


  

  <div class="add_foto">
    <form action="" method="POST" enctype="multipart/form-data">
      <span> <b>Добавить файл: </b> </span>
      <input type="file" name="userfile"> 
      <button type="submit" name="send">ЗАГРУЗИТЬ</button> <br>
      <span><?=$message?></span>
    </form>
  </div>    
  
</body>
</html>
