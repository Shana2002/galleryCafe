<?php
    include_once('../../../config/constant.php');
    include_once('../../../class/Menu.php');
    $menu = new Menu();
    if(isset($_POST["add-menu"])){
        $menuName = $_POST["name"];
        $categoryName = $_POST["category"];
        $menuDescription = $_POST["description"];
        $menuPrice = $_POST["price"];
        if(isset($_FILES['image']['name']))
        {   
            

            //upload the image
            // to uplaod to we need image  , source path and destination path
            $image_name = $_FILES['image']['name'];
            
            // auto renaming  our image

            $source_path = $_FILES['image']['tmp_name'];
            
            $destination_path = "../../../images/menu/".$image_name;
            
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
        if($menu->menuAdd($menuName,$menuDescription, $categoryName , $menuPrice , $image_name)){
            $_SESSION['menu-done']="1";
            
            
        }else{
            $_SESSION['menu-error']="1";
            
        }
        $_SESSION['menu-view']='2';
        header("location:".SITEURL."admin-gc");

    }
    
    

?>