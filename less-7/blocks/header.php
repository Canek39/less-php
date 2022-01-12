<header class="header">
    <div class="wrap">
        <section class="header__logo">
            <a class="logo__name" href="/less-7/index.php">
                LogoText
                <p class="logo__desc">Description website</p>
            </a>
        </section>
    </div>
</header>
<nav class="topMenu">
    <div class="wrap">
        <div class="topMenu-flex">
            <ul class="topMenu_link">
                <li><a href="/less-7/index.php">Главная</a></li>
                <li><a href="/less-7/review.php">Отзывы</a></li>
                <li><a href="/less-7/cart.php">Корзина</a></li>
                <?php
                    if($_SESSION['login']){
                        $login = $_SESSION['login'];
                        $sql = "select role from users where login = '$login'";
                        $res = mysqli_query($connect,$sql);
                        $role = mysqli_fetch_assoc($res)['role'];
                        if($role):?>
                            <li><a href="/less-7/admin/index.php">Админка</a><li>
                    <?php endif;
                    }
                ?>
            </ul>
            <div class="authorization">
                <?php
                    if($_SESSION['login']){?>
                        Привет, <a href="/less-7/profile.php"> <?= $_SESSION['login'] ?> </a> | <a href="/less-7/quit.php">Выйти</a>
                        <?php }else{ ?>
                            
                    <form action="/less-7/login.php" method="post">
                    <a href="registration.php">Зарегистрироваться</a> или
                        <input class="authorization_login" type="text" name="login" placeholder="login" value="<?= $_SESSION['login']?>" require>
                        <input class="authorization_pass" type="password" name="pass" placeholder="password" value="<?= $_SESSION['pass']?>" require>
                        <input class="authorization_btn" type="submit" value="Войти">
                    </form>
                            <?php } ?>
            </div>
        </div>
    </div>
</nav>