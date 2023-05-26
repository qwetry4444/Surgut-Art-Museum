<?php
    require('../get_event.php');
    require('../connect.php');
    $db_conn = connect();
    $event_id = $_GET['event_id'];
    $event = get_event($db_conn, $event_id);

?>

<div class="container">
    <div>
        <?php  echo($event['count_like'])?>
    </div>
    <div>
        <?php  echo($event['count_dislike'])?>
    </div>
    
</div>