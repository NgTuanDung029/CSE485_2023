<?php 
    require_once ('../app/Services/ArticleService.php');

    class ArticleController {
        public function index() {
            $articleService = new ArticleService();
            $articles = $articleService->getAllArticles();

            require_once ('../app/views/article.php');
        }

        public function edit($id)
        {
            $articleService = new ArticleService();
            $article = $articleService->getArticle($id);
            require_once ('../app/services/editArticle.php');
        }
    }

?>