<?php 
    require_once ('../app/Services/ArticleService.php');

    class ArticleController {
        public function index() {
            $articleService = new ArticleService();
            $articles = $articleService->getAllArticles();

            require_once ('../app/views/article.php');
        }
    }

?>