
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Отзывы</title>
</head>
<body>
    <div class="wrap">
        <section class="allcomment">
            <?php include_once('allcomment.php'); ?>
        </section>
        <hr>
        <form class="formcomment"action="addcomment.php" method="post">
            <p>Ваше имя: </p>
            <input type="text" name="name" required>
            <p>Ваш отзыв </p>
            <textarea name="comment" required ></textarea><br>
            <input type="submit" value="Отправить"> 
        </form>
    </div>
</body>
</html>