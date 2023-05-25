<?php 
    require_once "../app/Models/Article.php";
    require_once "../app/Models/Database.php";
    class ArticleService {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getAllArticles()
        {
            $sql = "SELECT * FROM article ORDER BY created DESC";
            $result = $this->db->executeQuery($sql);
            if($result)
            {
                $articles = [];
                while ($articleData = $result->fetch(PDO::FETCH_ASSOC))
                {
                    $article = new Article($articleData['id'], $articleData['title'], $articleData['summary'], $articleData['content']);
                    $articles[] = $article;
                }
                return $articles;
            }
            else {
                echo "Failed to get articles";
            }
        }
    }

?>