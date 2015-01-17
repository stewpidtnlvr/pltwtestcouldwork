<?php
    //Count number of replies for each topic
function replyCount($topic_id){
    $db = new Database;
    $db->query('select * from replies where topic_id = :topic_id');
    $db->bind(':topic_id',$topic_id);
    //Assign rows
    $rows = $db->resultset();
    //Get Count
    return $db->rowCount();
}

?>