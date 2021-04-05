

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
                <a href='#'><h4 class='card-title mb-3'>" . $row["post_title"]. "</h4></a>
                <p class='card-text'> " . $row["post_body"]. "</p>
                <div class='btn-holder'>
                <form action='edit.php?id=" .  $row["id"] . "' method='post'>
                <input type='hidden' name='id' value='" . $row["id"] ."'>
                <input type='hidden' name='title' value='" . $row["post_title"] ."'>
                <input type='hidden' name='body' value='" . $row["post_body"] ."'>
                <button type='submit' ><img class='post-icon' src='/assets/images/edit.svg' />
                </form>
                <form action='deletePost.php' method='post'>
                <input type='hidden' name='id' value='" . $row["id"] ."'>
                <button type='submit'><img class='post-icon' src='/assets/images/delete.svg' />
                </button
                </form>
                </div>
            </div>
        </div>
    </div>
  ";
    } 
    
}

$post = new Post();