

<?php 

class Post {
    public $title;
    public $body;
    public $row;
    public $test = "Yo im a test!";
    
    public function showAllPosts($row){
 echo "
    <div class='col'>
        <div class='card my-2'>
            <div class='card-body'>
                <h2 class='card-title'>" . $row["post_title"]. "</h2>
                <p class='card-text'> " . $row["post_body"]. "</p>
                <form action='deletePost.php' method='post'>
                <input type='hidden' name='id' value='" . $row["id"] ."'>
                <input type='submit' class='btn-danger' value='delete'>
                </form>
                <form action='edit.php?id=" .  $row["id"] . "' method='post'>
                <input type='hidden' name='id' value='" . $row["id"] ."'>
                <input type='hidden' name='title' value='" . $row["post_title"] ."'>
                <input type='hidden' name='body' value='" . $row["post_body"] ."'>
                <input type='submit' class='btn-info' value='edit'>
                </form>
                
            </div>
        </div>
    </div>
  ";
    } 
    
}

$post = new Post();