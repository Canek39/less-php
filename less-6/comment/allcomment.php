<?php
    include_once('db.php');

    $sql = "select * from comment order by id desc";
    $res = mysqli_query($connect,$sql);

    while($data = mysqli_fetch_assoc($res)):?>
    <div class="comment">
        <h3 class="comment__name">
            <?= $data['name']; ?>
        </h3>
        <p><?= $data['date']; ?></p>
        <p class="comment__text">
            <?= $data['comment']; ?>
        </p>
    </div>

    <?php endwhile;
?>