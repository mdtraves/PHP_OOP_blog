<?php require "classes/Post.php";
  include('db.php');
  $sql = "SELECT * FROM posts order by id DESC";
  $result = $conn->query($sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="/assets/images/logo.svg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css"/>

    <title>CMS</title>
</head>
<body class="bg-dark">
  
<?php include('nav.php'); ?>

<section>
  <div class="container">
    <div class="card p-4">
    <h1 class="mb-4">PHP OOP CRUD</h1>
    <form method="post" action="addPost.php">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control mb-4" id="title" aria-describedby="title" name="title">
      </div>
      <div class="mb-3">
        <label for="post" class="form-label">Post</label>
        <textarea class="form-control mb-4" id="post" name="post" rows="4" cols="50"></textarea>
 
      </div>
      <button type="submit" class="btn btn-primary">Add post</button>
      <br>
      <?php 
      if(isset($_GET['create_success'])){
          if($_GET['create_success'] == 1){echo '<div class="alert alert-success" role="alert">
            Post added successfully
          </div>';} 
          if($_GET['create_success'] == 0){echo '<div class="alert alert-danger" role="alert">
            Error: Post failed      </div>';} 
       }
       if(isset($_GET['delete_success'])){
        if($_GET['delete_success'] == 1){echo '<div class="alert alert-success" role="alert">
          Post deleted successfully
        </div>';} 
        if($_GET['delete_success'] == 0){echo '<div class="alert alert-danger" role="alert">
          Error: Post delete failed
          </div>';} 
     }
      ?>
      <h4 class></h4>
  </div>
  </form>
  </div>
  </div>
</section>


<section class="pt-0">
<div class="container">
<div class='row row-cols-1 row-cols-md-2 g-4'>
<?php 
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $post->showAllPosts($row);
    }
$conn->close();
}  
?>

</div>
 </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>