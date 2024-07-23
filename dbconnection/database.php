<!-- <php
class Database {
    private $host = "localhost";
    private $db_name = "crud_db";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            echo "db connection";
            return $this->conn;
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        
    }
}
?> -->

<?php
$dsn = 'mysql:host=localhost;dbname=crud_db';
$username = 'root';
$password = "";

try {
    $conn = new PDO($dsn, $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $conn->exec("set names utf8");
    // return $conn;
    //echo "Connected success"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
