<div class="main_container">
    <div class="events_head">
        <h2>
            Выберите событие, отзывы о котором хотите узнать.
        </h2>
    </div>
    
    <div class="events">
        <?php
        require('../connect.php');
        require('../get_events.php');

            $dbconn = connect();
            $events = get_events($dbconn);
            foreach($events as $event)
            {
                $event_id = $event['id'];
                $event_name = $event['name'];
                $event_type = $event['type'];
                $event_description = $event['description'];
                $event_link = sprintf('main.php?page=event&event_id=%d', $event_id);
        ?>
                <?php echo("<a href=$event_link class='event_link'>") ?>
                    <div class="event">
                        <div class="event_name event_property">
                            <?php echo($event_name)?>
                        </div>
                        <div class="event_type event_property">
                            <?php echo($event_type)?>
                        </div>
                        <div class="event_description event_property">
                            <?php echo($event_description)?>
                        </div>
                    </div>
                </a>

        <?php
            }
        ?>
    </div>
</div>