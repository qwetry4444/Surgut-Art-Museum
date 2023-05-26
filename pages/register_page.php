<div class="login_container">
    <div class="wrapper">
        <div class="form-box register">
            <h2>Регистрация</h2>
            <form action="../register.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <input type="text" name="user_name" required>
                    <label>Имя пользователя</label> 
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" name="password" required>
                    <label>Пароль</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                        Я принимаю все что-то там
                    </label>
                    
                </div>
                <button type="submit" class="btn">Зарегистрироваться</button>
                <div class="login-register">
                    <p>
                        Уже имеете аккаунт?
                        <a href="main.php?page=login" class="login-link">Войти в аккаунт</a>
                    </p>
                </div>
                <div class="status">
                        <?php 
                        if(isset($_SESSION['message']))
                            echo($_SESSION['message']);                            
                        ?>
                </div>
            </form>
        </div>
    </div>
</div>