<?php
class User {
    private $conn;
    private $table_name = "users";

    public $id;
    public $name;
    public $email;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    // public function read() {
    //     $sql = 'SELECT * FROM '. $this->table_name;
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute();
    //     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $data;
    // }

    public function UserRegister($request){
        $query = 'INSERT INTO '.$this->table_name.'(name,email,phone, birthday, address, password, profile) VALUES("'.$request['name'].'", "'.$request['email'].'","'.$request['phone'].'", "'.$request['birthday'].'","'.$request['address'].'", "'.$request['password'].'","'.$request['profile'].'")';
        return $query;
        die();
        // $result = $this->conn->exec($query);
        // return $result;
    }

    // public function update($request) {
    //     $query = "UPDATE " . $this->table_name . " SET name='".$request['name']."', email='".$request['email']."' WHERE id=".$request['id'];
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute();
    //     if ($stmt) {
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    // public function delete($request) {
    //     $query = "DELETE FROM " . $this->table_name ." WHERE id=".$request['id'];
    //     $stmt = $this->conn->prepare($query);
    //     if ($stmt->execute()) {
    //         return true;
    //     }
    //     return false;
    // }

    // public function readOne($request) {
    //     $query = "SELECT * FROM " . $this->table_name . " WHERE id =".$request['id'];
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute();
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $row;
    // }
}
?>