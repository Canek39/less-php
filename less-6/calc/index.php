<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
</head>
<body>
    <h2> Калькулятор 1 </h2>
    <form action="handler.php" method="post">
        <p>
            Введите первое число: <input type="text" name="numb1" required>
        </p>
        <p>
            Введите второе число: <input type="text" name="numb2" required>
        </p>
        <label for="action">Выберете действие</label> 
            <select name="action">
                <option value="sum">+</option>
                <option value="sub">-</option>
                <option value="mult">*</option>
                <option value="share">/</option>
            </select><br>
        <input type="submit" value="Выполнить">
    </form><hr>
    
    <h2> Калькулятор 2 </h2>
    <form action="twohandler.php" method="post">
        <p>
            Введите первое число: <input type="text" name="numb1" required>
        </p>
        <p>
            Введите второе число: <input type="text" name="numb2" required>
        </p>
        <p>Выберете действие</p> 
            <input name="sum" type="submit" value="Сложение">
            <input name="sub" type="submit" value="Вычетание">
            <input name="mult" type="submit" value="Умножение">
            <input name="share" type="submit" value="Деление">
    </form>
    <?php 
    if(isset($_GET['answer'])):?>
        <hr>
        <h2>Ответ: <?= $_GET['answer']?></h2>
    <?php endif; ?>
</body>
</html>