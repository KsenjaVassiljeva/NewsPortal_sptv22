<?php 
class Database {
    private $conn;
    private $host;
    private $user;
    private $password;
    private $baseName;

    // Constructor
    public function __construct() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->baseName = 'newsportal';
        $this->connect();
    }

    // Destructor
    public function __destruct() {
        $this->disconnect();
    }

    // Database connection
    private function connect() {
        try {
            $this->conn = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->baseName,
                $this->user,
                $this->password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
            );
            // Set PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Disconnect from the database
    private function disconnect() {
        $this->conn = null;
    }

    // Fetch a single result from the database
    public function getOne($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);  // Bind parameters dynamically
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $response = $stmt->fetch();
            return $response;
        } catch (Exception $e) {
            die("Error fetching single result: " . $e->getMessage());
        }
    }
    
    // Fetch all results from the database
    public function getAll($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);  // Bind parameters dynamically
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $response = $stmt->fetchAll();
            return $response;
        } catch (Exception $e) {
            die("Error fetching all results: " . $e->getMessage());
        }
    }

    // Execute a query without returning a result (INSERT, UPDATE, DELETE)
    public function executeRun($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);  // Bind parameters dynamically
            return $stmt->rowCount();  // Return the number of affected rows
        } catch (Exception $e) {
            die("Error executing query: " . $e->getMessage());
        }
    }
}
?>
