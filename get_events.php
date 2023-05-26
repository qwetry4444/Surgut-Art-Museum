<?php
    function get_events($db_conn){
        $sql = 'SELECT * FROM public.events';
        $reqiure_result = pg_query($db_conn, $sql);
        $events = pg_fetch_all($reqiure_result);
        return $events;
    }
?>