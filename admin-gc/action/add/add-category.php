<?php
    include_once('../../../config/constant.php');
    include_once('../../../class/Category.php');
    $category = new Category();
    if(isset($_POST["add-cat"])){
        $catTitle = $_POST["cat-name"];
        if(isset($_FILES['image']['name']))
        {   
            

            //upload the image
            // to uplaod to we need image  , source path and destination path
            $image_name = $_FILES['image']['name'];
            
            // auto renaming  our image

            $source_path = $_FILES['image']['tmp_name'];
            
            $destination_path = "../../../images/category".$image_name;
            
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
        if($category->addCatgory( $catTitle ,$image_name)){
            $_SESSION['cat-menu-done']="1";
            
            
        }else{
            $_SESSION['cat-menu-error']="1";
            
        }
        $_SESSION['cat-menu']='2';
        header("location:".SITEURL."admin-gc");

    }
    
    

?>