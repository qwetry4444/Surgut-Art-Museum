<?php
    require('../get_event.php');
    require('../connect.php');
    require('../get_comments.php');
    $db_conn = connect();
    $event_id = $_GET['event_id'];
    $event = get_event($db_conn, $event_id);
    $comments = get_event_comments($db_conn, $event_id);
?>  

<div class="container">
    <div class="about_event">
        <div class="event_head">
            <div><?php echo($event['type'])?></div>
            <div><?php echo($event['name'])?></div>
        </div>
    </div>


        <form action="../add_comment.php?event_id=<?php echo($event_id);?>" method="post">
            <fieldset>
                <div class="form_box">
                    <legend>Вам понравилось это мероприятие?</legend>

                    <div class="rate_block">
                        <div>
                            <input type="radio" id="yes" name="comment_rate" value="1">
                            <label for="yes">Да</label>
                        </div>
                        <div>
                            <input type="radio" id="no" name="comment_rate" value="0">
                            <label for="no">Нет</label> 
                        </div> 
                    </div>
                    
                    <legend>Напишите ваш комментарий</legend>
                    <div>
                        <textarea name="comment_text" id="comment_text" cols="50" rows="15"></textarea>   
                    </div>
  
                    <button type="submit" class="btn">Отправить</button>

                    <div>
                        <?php 
                        if(isset($_SESSION['comment_message']))
                            echo($_SESSION['comment_message']);
                        ?>
                    </div>
                </div>
            </fieldset>
        </form>

</div>