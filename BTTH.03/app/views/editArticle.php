<?php
    $id = $_GET['id'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h2 class="text-center">Edit article</h2>
<div class="container">
    <form action="update_article.php" method="POST">
        <input type="text" name="article_id" value="<?php echo $article['id']; ?>" readonly>
        <div class="mb-3">
            <label for="" class="form-label">Article Title</label>
            <?php 
            if (isset($article)) {
                echo '<input type="text" class="form-control" id="" name="title" value="' . $article->getTitle() . '" />';
            } else {
                echo '<input type="text" class="form-control" id="" name="title">';
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Article Summary</label>
            <?php 
            if (isset($article)) {
                echo '<input type="text" class="form-control" id="" name="summary" value="' . $article->getSummary() . '" />';
            } else {
                echo '<input type="text" class="form-control" id="" name="summary">';
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Article Content</label>
            <?php 
            if (isset($article)) {
                echo '<input type="text" class="form-control" id="" name="content" value="' . $article->getContent(). '">';
            } else {
                echo '<input type="text" class="form-control" id="" name="content">';
            }
            ?>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</div>
</body>
</html>