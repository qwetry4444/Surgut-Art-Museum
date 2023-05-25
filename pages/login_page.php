<div class="login_container">
    <div class="wrapper">
        <div class="form-box login">
            <h2>Вход</h2>
            <form action="../login.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" name="login" required>
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
                        Запомните меня
                    </label>
                    <a href="#">Забыли пароль?</a>
                </div>
                <button type="submit" class="btn">Войти</button>
                <div class="login-register">
                    <p>
                        Не имеете аккаунт?
                        <a href="main.php?page=register" class="register-link">
                            Зарегистрироваться
                        </a>
                    </p>
                    <div class="status">
                        <?php 
                        session_start(["use_strict_mode" => true]);
                        if(isset($_SESSION['message']))
                            echo($_SESSION['message']);                            
                        ?>
                             
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="form-box register">
            <h2>Регистрация</h2>
            <form action="personal account.html">
                
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <input type="text" required>
                    <label>Имя пользователя</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" required>
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
                        <a href="#" class="login-link">
                            Войти в аккаунт
                        </a>
                    </p>
                </div>
            </form>
        </div> -->
     </div>
</div>
    

     <script src="script.js"></script>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script  nomodulesrc="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 
