<?php
class News {

    // Get the last 10 news articles
    public static function getLast10News() {
        $query = "SELECT * FROM news ORDER BY id DESC LIMIT 10";  // Fixed query syntax
        $db = new Database();  // Assuming Database class is correctly set up
        $arr = $db->getAll($query);  // Corrected method and variable naming
        return $arr;  // Return the result as an array
    }

    // Get all news articles
    public static function getAllNews() {
        $query = "SELECT * FROM news ORDER BY id DESC";  // Corrected query syntax
        $db = new Database();
        $arr = $db->getAll($query);  // Corrected variable name
        return $arr;
    }

    // Get news articles by category ID
    public static function getNewsByCategoryID($id) {
        $query = "SELECT * FROM news WHERE category_id = " . (int)$id . " ORDER BY id DESC";  // Corrected query syntax and casting
        $db = new Database();
        $arr = $db->getAll($query);  // Corrected variable name
        return $arr;
    }

    // Get news article by its ID
    public static function getNewsByID($id) {
        $query = "SELECT * FROM news WHERE id = " . (int)$id;  // Corrected query syntax and casting
        $db = new Database();
        $news = $db->getOne($query);  // Corrected method call
        return $news;
    }
}
?>
