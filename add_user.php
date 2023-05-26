<?php
function add_user(){
    session_start(["use_strict_mode" => true]);
    if(isset($_POST['user_name']))
    {
        require('connect.php');
        $db_conn = connect();
        $dv = '123123123';
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = MD5($_POST['password']);
        $sql = "INSERT INTO public.users(
            user_name, email, password)
            VALUES ('%s', '%s', '%s');";
        $sql = sprintf($sql, $user_name, $email, $password);
        $result = pg_query($db_conn, $sql);

        if($result){
            $_SESSION['message'] = 'Вы удачно зарегестрированны!';
            echo $_SESSION['message'];
            header("Location: pages/main.php?page=home");
        }
        else{
            $_SESSION['message'] = $result;
            echo $_SESSION['message'];
            header("Location: pages/main.php?page=register");
        }
    }
}
?>