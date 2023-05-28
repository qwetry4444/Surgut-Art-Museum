<?php
    require('../get_event.php');
    require('../connect.php');
    require('../get_comments.php');
    $db_conn = connect();
    $event_id = $_GET['event_id'];
    $event = get_event($db_conn, $event_id);
    $comments = get_event_comments($db_conn, $event_id);
?>

<div class="main_container">
    <div class="about_event">
        <div class="event_head">
            <div><?php echo($event['type'])?></div>
            <div><?php echo($event['name'])?></div>
        </div>
        <div class="rating">
            <div class="event_like">
                <img src="../img/like_white.png" alt="Like"> 
                Количество лайков: <?php  echo($event['count_like'])?>
            </div>
            <div class="event_dislike">
                <img src="../img/dislike_white.png" alt="Dislike">
                Количество дислайков: <?php  echo($event['count_dislike'])?>
            </div>
        </div>
    </div>

    
    <div class="comments_block">
        <div class="comments_head">
            <h3>Комментарии</h3>
        </div>
        <div class="comments">
            <?php foreach($comments as $comment){?>
                <div class="comment">
                    <div class="type_comment">
                        <?php if($comment['type'] == 1) 
                                echo("<img src='../img/like_white.png' alt='Like'>");
                              else if($comment['type'] == 0) 
                                echo("<img src='../img/dislike_white.png' alt='Dislike'>");?>
                    </div>
                    <div class="text_comment">
                        <?php echo($comment['text'])?>
                    </div>
                </div>
            <?php }?>

        </div>
    </div>
    
    
</div>