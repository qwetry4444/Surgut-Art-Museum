<?php
    function get_event($db_conn, $event_id){
        $sql = 'SELECT * FROM public.events WHERE id = %d';
        $sql = sprintf($sql, $event_id);
        $query_result = pg_query($db_conn, $sql);
        $event = pg_fetch_all($query_result);
        return $event[0];
    }

    function get_event_comment($db_conn, $event_id){

    }
?>