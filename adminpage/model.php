<?php
    class Model{
        private $server = 'localhost';
        private $username = 'root';
        private $password;
        private $database = 'userdb';
        private $conn;

        public function __construct(){
            try{
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            }catch(Exception $ex){
                echo 'connection failed' .$ex->getMessage();
            }       
        }

        //INSERT, FETCH, EDIT, DELETE

        public function insert(){
            if(isset($_POST['submit'])){

                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwordhash = password_hash($_POST["password"], PASSWORD_DEFAULT);

                $query = "INSERT INTO userinfo(username, email, password) VALUES ('$username','$email','$passwordhash')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('Inserted new user.');</script>";
                    echo "<script>window.location.href = 'adminpage.php';</script>";
                }else{
                    echo "<script>alert('Failed to add new user!');</script>";
                    echo "<script>window.location.href = 'adminpage.php';</script>";
                }
            }
        }

        
        public function fetch(){
            $data = null;
            $query = "SELECT * FROM userinfo";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
 
        public function delete($id){
 
            $query = "DELETE FROM userinfo where id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
 
        public function edit($id){
 
            $data = null;
 
            $query = "SELECT * FROM userinfo WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
 
        public function update($data){
 
            $query = "UPDATE userinfo SET username='$data[username]', email='$data[email]', password='$data[password]' WHERE id='$data[id] '";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
    }
?>