<?php 
include_once(__DIR__ . '/../config/db_connector.php');
include_once(__DIR__ . '/Users.php');
include_once(__DIR__ . '/Menu.php');
class Order{
    public $db;
        public $connector;

        public function __construct(){
            $this->connector = new Db_connector();
            $this->db = $this->connector->getConnection();
        }
        public function displayBills($type){
            if($type == 'all'){
                $sql = "SELECT * FROM bills ORDER BY billId DESC";
            }else{
                $sql = "SELECT * FROM bills WHERE billStatus = 'get order' or billStatus = 'start cooking' or billStatus = 'order done'";
            }
            $res = mysqli_query($this->db, $sql);
            // `billId`, `cusId`, `subTotal`, `billdate`, `billtime`, `billStatus`
            if(mysqli_num_rows($res)>0){
                $count = 0;
                while($row = mysqli_fetch_array($res)){
                    $billid = $row["billId"];
                    $cusId = $row["cusId"];
                    $customer = new Customers();
                    $cusname = $customer->cusname($cusId);
                    $billdatetime = $row['billdate']." ".$row['billtime'];
                    $billStatus = $row['billStatus'];
                    $subtotal = $row['subTotal'];
                    
                    $categoryDetails[$count]=["id"=>$billid,"cusname"=>$cusname,"subtot"=>$subtotal,"date"=>$billdatetime,"billstatus"=>$billStatus];
                    $count++;
                    
                }
                return $categoryDetails;
            }
        }
        
        public function displayAllperporder(){
            $sql = "SELECT * FROM `billorder` WHERE orderStatus = 'start prepairing'";
            $res = mysqli_query($this->db, $sql);
            if(mysqli_num_rows($res)> 0){
                // `orderId`, `billId`, `menuId`, `qty`, `orderStatus`
                $count = 0;
                while($row = mysqli_fetch_array($res)){
                    $orderId = $row["orderId"];
                    $menuid = $row["menuId"];
                    $billid = $row["billId"];
                    $menu = new Menu();
                    $menudetails = $menu->menuSelectedview($menuid);
                    $menuName = $menudetails['name'];
                    $menuPrice = $menudetails['price'];
                    $qty = $row['qty'];
                    $orderStatus = $row['orderStatus'];
                    
                    $categoryDetails[$count]=["id"=>$orderId,"menuName"=>$menuName,"bill"=>$billid,"qty"=>$qty,"subtot"=>$menuPrice*$qty,"orderstatus"=>$orderStatus];
                    $count++;
                    
                }
                return $categoryDetails;
            }
        }
        public function displayOrder($billId){
            $sql = "SELECT * FROM `billorder` WHERE billId = '$billId'";
            $res = mysqli_query($this->db, $sql);
            if(mysqli_num_rows($res)> 0){
                // `orderId`, `billId`, `menuId`, `qty`, `orderStatus`
                $count = 0;
                while($row = mysqli_fetch_array($res)){
                    $orderId = $row["orderId"];
                    $menuid = $row["menuId"];
                    $menu = new Menu();
                    $menudetails = $menu->menuSelectedview($menuid);
                    $menuName = $menudetails['name'];
                    $menuPrice = $menudetails['price'];
                    $qty = $row['qty'];
                    $orderStatus = $row['orderStatus'];
                    
                    $categoryDetails[$count]=["id"=>$orderId,"menuName"=>$menuName,"qty"=>$qty,"subtot"=>$menuPrice*$qty,"orderstatus"=>$orderStatus];
                    $count++;
                    
                }
                return $categoryDetails;
            }
        }
        public function statusuoBill($id,$string){
            $sql = "UPDATE bills SET billStatus ='$string' WHERE billId = '$id'";
            $res = mysqli_query($this->db, $sql);
            return $res;
        }
        public function statusuoorder($id,$string){
            $sql = "UPDATE billorder SET orderStatus ='$string' WHERE orderId = '$id'";
            $res = mysqli_query($this->db, $sql);
            return $res;
        }
        public function totalOrders(){
            $sql = "SELECT * FROM billorder";
            $res = mysqli_query($this->db, $sql);
            return mysqli_num_rows($res);
        }
        public function totalOrderToday(){
            $sql = "SELECT SUM(subTotal) AS total_amount_today FROM Bills WHERE billdate = CURDATE()";
            $res = mysqli_query($this->db, $sql);
            if ($res) {
                return mysqli_fetch_assoc($res)['total_amount_today'];
            }
        }
}
?>