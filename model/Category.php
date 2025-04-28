<?php
class Category {

    // Get all categories
    public static function getAllCategory() {
        $query = "SELECT * FROM category";  // Fixed SQL query syntax
        $db = new Database();  // Assuming Database class is correctly set up
        $arr = $db->getAll($query);  // Corrected variable naming
        return $arr;  // Return the result as an array
    }
}
?>
