<?php
include_once(__DIR__ . '/../config/db_connector.php');
abstract class Users
{
    abstract public function login($username, $password);
    abstract public function logout();
    abstract public function addUser($name, $email, $mobile, $address, $username, $password, $type);
    abstract public function changePassword($username, $password);
}


class Customers extends Users
{
    // db connection
    private $db;
    private $connector;
    // constructon
    public function __construct()
    {
        $this->connector = new Db_connector();
        $this->db = $this->connector->getConnection();
    }
    // loging function
    public function login($username, $password)
    {
        // sql query and return user Id
        $sql = "SELECT * FROM customers WHERE cusUsername = '$username' AND cusPassword = '$password'";
        $result = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $userId = $row["cusId"];
            return $userId;
        } else {
            return false;
        }
    }
    public function logout()
    {
        $this->logout();
    }

    public function addUser($name, $email, $mobile, $address, $username, $password, $type)
    {
        // add customer
        // INSERT INTO `customers`(`cusId`, `cusname`, `cusEmail`, `cusAddress`, `cusMobile`, `cusUsername`, `cusPassword`)

        $sql = "INSERT INTO `customers`(`cusname`, `cusEmail`, `cusAddress`, `cusMobile`, `cusUsername`, `cusPassword`) VALUES 
                        ('$name', '$email', '$address','$mobile', '$username', '$password')";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }

    }
    public function customerDetails($id)
    {
        $sql = "SELECT * FROM customers WHERE cusid = '$id'";
        $result = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            // (`id`, `name`, `email`, `mobile`, `address`, `username`, `password`)
            $userId = $row["id"];
            $name = $row["name"];
            $phone = $row["mobile"];
            $email = $row["email"];
            $address = $row["address"];
            $username = $row["username"];

            $cusDeatils = array(
                "id" => $userId,
                "name" => $name,
                "phone" => $phone,
                "email" => $email,
                "address" => $address,
                "username" => $username,
            );
            return $cusDeatils;
        }
    }
    public function cusname($id){
        $sql = "SELECT * FROM customers WHERE cusid = '$id'";
        $result = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $name = $row["name"];
            return $name;
        }
    }
    public function changePassword($id, $password)
    {
        // UPDATE `customers` SET `id`='[value-1]'
        $sql = "UPDATE customers SET password = '$password' WHERE id = '$id'";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

class Staff extends Users
{
    public $db;
    public $connector;
    public function __construct()
    {
        $this->connector = new Db_connector();
        $this->db = $this->connector->getConnection();
    }
    public function login($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = '$username' and  password = '$password'";
        $result = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $id = $row["if"];
            return $id;
        } else {
            return "false";
        }
    }
    public function logout()
    {

    }
    public function addUser($name, $email, $mobile, $address, $username, $password, $type)
    {
        try {
            // INSERT INTO `users`(`id`, `name`, `email`, `username`, `password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
            $sql = "INSERT INTO `users`( `name`, `email`, `username`, `password`, `type`) VALUES ('$name','$email','$username','$password','$type')";
            $res = mysqli_query($this->db, $sql);
            if (!$res) {
                // Throw an exception with the SQL error message
                throw new Exception("Failed to execute query: " . mysqli_error($this->db));
            }
            return "true";
        } catch (Exception $e) {
            // Return the exception message
            return $e->getMessage();
        }

    }
    public function changePassword($id, $password)
    {
        $sql = "UPDATE users SET password = '$password' WHERE id = '$id'";
        $result = mysqli_query($this->db, $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function staffdetails($id)
    {
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            // `users`(`id`, `name`, `email`, `username`, `password`)
            $userId = $row["id"];
            $name = $row["name"];
            $email = $row["email"];
            $username = $row["username"];
            $usertype = $row["type"];

            $cusDeatils = array(
                "id" => $userId,
                "name" => $name,
                "email" => $email,
                "username" => $username,
                "type" => $usertype,
            );
            return $cusDeatils;
        }
    }
}

