<?php

include_once("bd.php");

$sql = "select * from images order by count desc";
$res = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gallery</title>
</head>

<body>
    <div class="wrap">
        <h1 class="heading">Галлерея</h1>
        <div class="gallery">
            
            <?php 
                while($data = mysqli_fetch_assoc($res)):?>
                    
                        <a href="view.php?id=<?= $data['id']?>" target="blank">
                            <img class="gallery__img-mini" src="gallery/small/<?= $data['url']; ?>" alt="<?= $data['title']; ?>" >
                        </a>
                    
            <?php endwhile;
            ?>
        </div>
    </div>
</body>

</html>