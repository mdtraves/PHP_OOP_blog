<?php 
   include('db.php'); 


if(isset($_POST['title']) && isset($_POST['post'])){
    $sql = "INSERT into posts(post_title, post_body, created_date) VALUES('" .$_POST['title']."','".$_POST['post']."','". $timestamp ."')";
    $conn->query($sql);
    header( "Location: index.php?create_success=1");
}

else{
    header( "Location: index.php?create_success=0");
}