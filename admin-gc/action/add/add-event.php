<?php
    include_once('../../../config/constant.php');
    include_once('../../../class/Events.php');
    $event = new Events();
    if(isset($_POST["add-event"])){
        $title = $_POST['title'];
        $startDate = $_POST['sdate'];
        $sTime = $_POST['stime'];
        $description = $_POST['description'];

        if(isset($_FILES['image']['name']))
        {   
            

            //upload the image
            // to uplaod to we need image  , source path and destination path
            $image_name = $_FILES['image']['name'];
            
            // auto renaming  our image

            $source_path = $_FILES['image']['tmp_name'];
            
            $destination_path = "../../../images/event/".$image_name;
            
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
        if($event->addEvent($title,$description,$image_name,$startDate,$sTime)){
            $_SESSION['evt-add-done']="1";          
        }else{
            $_SESSION['evt-add-error']="1";
        }
        $_SESSION['evt-view']='2';
        header("location:".SITEURL."admin-gc");

    }
    
    

?>