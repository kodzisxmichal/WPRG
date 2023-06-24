<?php

class User
{
    private static $instance = null;
    private $db_connection;
    private $logged = false;
    private $username = "Guest";
    private $user_id = null;
    private $user_role = 2;
    public function __wakeup(){
        $db_connection = mysqli_connect("localhost", "root", "", "phpproject");

        if ($db_connection) {
            $this->db_connection = $db_connection;
        }
        else
            echo "database connection error";
    }

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new User();
        }

        return self::$instance;
    }
    public function question($query){
        return mysqli_query($this->db_connection,$query);

    }

    public function addItemToDatabase($imagePath, $title, $price, $amount, $description){

        $query = "INSERT INTO items(image_path,title,price,amount,description) VALUES ('$imagePath','$title','$price','$amount','$description')";
        $result = mysqli_query($this->db_connection,$query);
    }
    public function login($login,$password){
        $query = 'SELECT * FROM users WHERE username ="'.$login.'"';
        $dataArray = $this->question($query);
        $row = mysqli_fetch_row($dataArray);

        if($row[2]==$password){
            $this->logged = true;
            $this->username = $row[1];
            $this->user_id = $row[0];
            $this->user_role = $row[3];
        }
    }

    public function logout(){
        $this->logged =false;
        $this->username = "Guest";
        $this->user_id = null;
        $this->user_role = 2;
    }

    /**
     * @return int
     */
    public function getUserRole()
    {
        return $this->user_role;
    }

    /**
     * @return null
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return bool
     */
    public function isLogged()
    {
        return $this->logged;
    }


}