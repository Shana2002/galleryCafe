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
    public function cusname($id)
    {
        $sql = "SELECT * FROM customers WHERE cusid = '$id'";
        $result = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $name = $row["cusname"];
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
            // `adminusers`(`userName`, `userType`, `userImg`, `userPassword`, `userStates`)
        $sql = "SELECT * FROM adminusers WHERE username = '$username' and  userPassword = '$password'";
        $result = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function logout() {}
    public function addUser($name, $email, $mobile, $address, $username, $password, $type)
    {
        $defpsw = "123";
        $sql = "INSERT INTO `adminusers`(`userName`, `userEmail`, `userType`,`userPassword`) 
                            VALUES ('$name','$email','$type','$defpsw')";
        $res = mysqli_query($this->db, $sql);
        if ($res) {
            return true;
        } else {
            return false;
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
    public function staffdetails($username)
    {
        $sql = "SELECT * FROM adminusers WHERE userName = '$username'";
        $result = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
             // `adminusers`(`userName`, `userType`, `userImg`, `userPassword`, `userStates`)
            $image = $row["userImg"];
            $email = $row["userEmail"];
            $username = $row["userName"];
            $usertype = $row["userType"];

            $cusDeatils = array(
                "username" => $username,
                "type" => $usertype,
                "email"=> $email,
                "image"=> $image,
            );
            return $cusDeatils;
        }
    }
    public function listStaff()
    {
        $sql = "SELECT * FROM adminusers ";
        $result = mysqli_query($this->db, $sql);
        if (mysqli_num_rows($result) > 0) {
            $count = 0;
            // `adminusers`(`userName`, `userType`, `userImg`, `userPassword`, `userStates`)
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row["userName"];
                $type = $row["userType"];

                $menuDetails[$count] = ["name" => $name, "type" => $type];
                $count++;
            }
            return $menuDetails;
        }
    }
}
