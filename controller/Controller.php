<?php
class Controller {
    public static function Startseite() {
        // Fetch the last 10 news articles
        $arr = News::getLast10News();  // Corrected variable and method name
        include_once 'view/start.php';  // Corrected include_once
    }

    public static function AllCategory() {
        // Fetch all categories
        $arr = Category::getAllCategory();  // Corrected variable name
        include_once 'view/category.php';  // Corrected include_once
    }

    public static function AllNews() {
        // Fetch all news articles
        $arr = News::getAllNews();  // Corrected variable name
        include_once 'view/allnews.php';  // Corrected include_once
    }

    public static function NewsByCatID($id) {
        // Fetch news by category ID
        $arr = News::getNewsByCategoryID($id);  // Corrected variable name and method call
        include_once 'view/catnews.php';  // Corrected include_once
    }

    public static function NewsByID($id) {
        // Fetch news by ID
        $news = News::getNewsByID($id);  // Corrected variable and method call
        include_once 'view/readnews.php';  // Corrected include_once
    }

    public static function error404() {
        // Handle 404 error page
        include_once 'view/error404.php';  // Corrected include_once
    }
}
?>
