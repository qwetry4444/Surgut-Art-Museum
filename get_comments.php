<?php
function get_event_comments($db_conn, $event_id){
    $sql = 'SELECT * FROM public.comments WHERE event_id=%d';
    $sql = sprintf($sql, $event_id);
    $result_require = pg_query($db_conn, $sql);
    $event_comments = pg_fetch_all($result_require);
    return $event_comments;
}
?>