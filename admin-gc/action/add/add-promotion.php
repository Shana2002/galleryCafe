<?php
    include_once('../../../config/constant.php');
    include_once('../../../class/Promotion.php');
    $promotion = new Promotion();
    if(isset($_POST["add-promotion"])){
        $title = $_POST['title'];
        $startDate = $_POST['sdate'];
        $endDate = $_POST['edate'];
        $description = $_POST['description'];

        if(isset($_FILES['image']['name']))
        {   
            

            //upload the image
            // to uplaod to we need image  , source path and destination path
            $image_name = $_FILES['image']['name'];
            
            // auto renaming  our image

            $source_path = $_FILES['image']['tmp_name'];
            
            $destination_path = "../../../images/promotion/".$image_name;
            
            $upload = move_uploaded_file($source_path , $destination_path);
            
            // check wether image upload or not
            if($upload==false)
            {
                //redirect category
                // header('location'.SITEURL.'admin/category.php');
                die();
                // echo "wadada2";

            }
        }
        else{
            // cant upload image
            $image_name = "";
    }
        if($promotion->addpromotion($title,$description,$image_name,$startDate,$endDate)){
            $_SESSION['prom-add-done']="1";          
        }else{
            $_SESSION['prom-add-error']="1";
        }
        $_SESSION['prom-view']='2';
        header("location:".SITEURL."admin-gc");

    }
    
    

?>