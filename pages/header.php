<header class="header">
    <div class="container">
        <div class="header__img">
            <a href="main.php?page=home"><img src="../img/logo.png" alt="Логотип"></a>
            
            <a href="main.php?page=events">
                <div class="header__comments">
                    Оценки и отзывы
                </div>
            </a>

            <div href="" class="header__avtorizatsia_group">
                <?php
                    session_start(["use_strict_mode" => true]);
                    if (isset($_SESSION['user_id']))
                    {
                        echo("<div><a href='../login.php?logout=1' class='header__avtorizatsia'><p class='header__auth_text'>Выйти</p><img src='../img/exit.png' alt='Выход'></a></div>");
                    }
                    else
                        echo("<div><a href='main.php?page=login' class='header__avtorizatsia'><p class='header__auth_text'>Авторизация</p><img src='../img/avtoriacia.png' alt='Авторизация'></a></div>");
                ?>
            </div>    
        </div>
    </div>
</header> 