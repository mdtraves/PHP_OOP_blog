<?php 
   include('db.php'); 


if(isset($_POST['title']) && isset($_POST['post']) && isset($_POST['id'])){
    $sql = "UPDATE posts SET post_title='" .$_POST['title']."', post_body='".$_POST['post']."', created_date='".$timestamp."' WHERE id='" .$_POST['id']."'";
    $conn->query($sql);
 
    header( "Location: index.php?update_success=1");
}

else{
 header( "Location: index.php?update_success=0");
}