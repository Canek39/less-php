<?php
define("MAXFILESIZE", "5000000");

function upload($file){
    if ($file['name'] == '') {
		echo 'Файл не выбран!';
		return; 
	}
    if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/png' || $file['type'] == 'image/pjpeg' || $file['type'] == 'image/gif') {
		if ($file['size'] <= MAXFILESIZE) {
        $path = "images/".$_FILES['photo']['name'];
            if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)):?>
                <p><?= $_FILES['photo']['name']." успешно загружен!"; ?></p>
            <?php endif; 
        } else {
            echo "Файл не должен превышать размер в 5 Мб!"; return;	}
    } else {
        echo "Файл должен иметь одно из известных расширений графических изображений (gif, jpeg или png)!";
        return;    
    }
}
$files = scandir("images");
for($i=2; $i < count($files); $i++){?>
    <a target="_blank" href="images/<?= $files[$i]?>"><img width="200" src="images/<?= $files[$i]?>" alt=""></a>
<?php }?>
<h2>Загрузите свой файл</h2>
<?php if (isset($_FILES['photo'])) {
	upload($_FILES['photo']);
}
?>

<form method="post" enctype="multipart/form-data">
     <p>Выберите файл</p>
     <input type="file" name="photo"><br><br>
     <input type="submit" value="Загрузить">
</form>