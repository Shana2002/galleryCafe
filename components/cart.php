<div class="cart-tab" id="cart-tab">
    <div class="closebtn" onclick="opencart()"><i class="fa-solid fa-xmark"></i></div>
    <div class="favourite">
        <div class="fav-head-container"><i class="fa-solid fa-cart-shopping"></i>
            <h1>CART</h1>
        </div>
        <div class="cart-container">
            <?php
            $subtotal = 0;
            if (!isset($_SESSION['cartArray'])) {
                ?>
                <div class="nofav">
                    <h1>No Add item to cart</h1>
                </div>
                <?php
            } else {
                foreach ($_SESSION['cartArray'] as $row) {
                    $id = $row['id'];
                    $qty = $row['qty'];
                    $menudetails = $menuClass->menuSelectedview($id);
                    $name = $menudetails['name'];
                    $price = $menudetails['price'];
                    $image = $menudetails['image'];
                    $tot = $price * $qty;
                    $subtotal = $subtotal + $tot;
                    ?>
                    <div class="cart-item">
                        <img src="images/menu/<?php echo $image ?>" alt="">
                        <div class="name-container">
                            <h1><?php echo $name ?></h1>
                            <div>
                                <h3>LKR <?php echo $price ?></h3>
                                <h2>QTY <?php echo $qty ?></h2>
                                <h2>Total LKR <?php echo $tot ?></h2>
                                <span class="cart-action">
                                    <a href="Actions/add-cart.php?addcart=<?php echo $id ?>"><i
                                            class="fa-regular fa-square-plus"></i></a>
                                    <a href="Actions/add-cart.php?minescart=<?php echo $id ?>"><i
                                            class="fa-regular fa-square-minus"></i></a>
                                    <a href="Actions/add-cart.php?delCart=<?php echo $id ?>"><i
                                            class="fa-solid fa-trash"></i></a>
                                </span>

                            </div>
                        </div>
                    </div>
                    <?php
                    
                }
            }
            ?>



            <!-- <div class="cart-item">
                <img src="Assest/pizza2.jpg" alt="">
                <div class="name-container">
                    <h1>pizza</h1>
                    <div>
                        <h3>LKR 1300</h3>
                        <h2>QTY 4</h2>
                        <h2>Total LKR 5200</h2>
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div> -->


        </div>
        <?php  
            if(isset($_SESSION['cusid'])&& isset( $_SESSION['cartArray'])){
                $_SESSION['subtot']=$subtotal;
                ?>
                <a class="check-container" href="actions/add-order.php?order=1">Conform and pay LKR <?php echo $subtotal ?></a>
                <?php
            }else{
                ?>
                <p class="check-container disabled-check">Conform and pay LKR <?php echo $subtotal ?></p>
                <?php
            }
        ?>
        

    </div>

</div>