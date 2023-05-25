<?php
function add_user(){
    session_start(["use_strict_mode" => true]);
    if(isset($_POST['login']))
    {
        include('connect.php');
        $db_conn = connect();
        $sql = "INSERT INTO public.users(
            user_name, email, password)
            VALUES ('%s', '%s', '%s');";
        $sql = sprintf($sql, $_POST['user_name'], $_POST['email'], MD5($_POST['password']));
        $result = pg_query($db_conn, $sql);
    }   
    if($result){
        $_SESSION['message'] = 'Вы удачно зарегестрированны!';
        echo $_SESSION['message'];
        header("Location: pages/main.php?page=home");
    }
    else{
        $_SESSION['message'] = 'Не удалось зарегестрироваться!';
        echo $_SESSION['message'];
        header("Location: pages/main.php?page=register_page");
    }
}
?>