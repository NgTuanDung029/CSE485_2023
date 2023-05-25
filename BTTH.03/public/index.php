<?php 
    $route = isset($_GET['route']) ? $_GET['route'] : 'article';

    if ($route == 'article') {
        require_once ('../app/Controllers/ArticleController.php');
        $articleController = new ArticleController();
        $articleController->index();
    }
    else {
        echo "hello";
    }
?>