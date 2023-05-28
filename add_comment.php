<?php
require('connect.php');
session_start(["use_strict_mode" => true]);
$db_conn = connect();
if(isset($_POST['comment_text']))
{
    $comment_text = $_POST['comment_text'];
    if($_POST['comment_rate'] == "yes")
        $rate = 1;
    else if($_POST['comment_rate'] == "no")
        $rate = 0;

    $sql = "INSERT INTO public.comments(
        user_id, event_id, type, text)
        VALUES (%d, %d, %d, '%s');";
    $sql = sprintf($sql, $_SESSOIN['user_id'], $_GET['event_id'], $rate, $comment_text);
    $result_query = pg_query($db_conn, $sql);

    unset($_SESSION['comment_message']);
    $location = "Location: pages/main.php?page=comment_form&event_id=%d";
    $location = sprintf($location, $_GET['event_id']);
    if($result_query)
        $_SESSION['comment_message'] = "Ваш комментарий успешно сохранен";
    else
        $_SESSION['comment_message'] = $sql;
    header($location);
}
?>