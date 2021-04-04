<?php 
   include('db.php'); 


if(isset($_POST['id'])){
    $sql = "DELETE FROM posts WHERE id = '" . $_POST['id'] . "'";
    $conn->query($sql);
    header( "Location: index.php?delete_success=1");
}

else{
    header( "Location: index.php?delete_success=0");
}