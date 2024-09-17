<?php
    include("../class/Category.php");
    include("../class/Events.php");
    include("../class/Menu.php");
    include("../class/Promotion.php");
    include("../class/Users.php");
    include("../config/constant.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-GalleryCafe</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Link Css -->
    <link rel="stylesheet" href="../style/admin.css?v=<?php echo time() ?>">
    <!-- fonts -->
    <script src="https://kit.fontawesome.com/e82ac91667.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <div class="container">
        <!-- navigations -->
        <?php include_once('components\nav-components.php') ?>
        <div class="content">
            <div class="content-1">
                <!-- Dashboard -->
                <?php include_once('components\content-1\dashboard-1.php') ?>
                <!-- Category -->
                <div class="sub-content-1 category-1">
                    <h1>Category</h1>
                    <h2>Add Category</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="cat-name">Category Name</label>
                            <input type="text" name="cat-name" id="cat-name">
                        </div>
                        <div>
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <input type="submit" value="Add Category">
                    </form>
                </div>
                <!-- Menu -->
                <div class="sub-content-1 category-1">
                    <h1>Menu</h1>
                    <h2>Add Category</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="ame">Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div>
                            <label for="cat-name">Category</label>
                            <Select name="category">
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Indian">Indian</option>
                            </Select>
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textArea name="description" id="description"></textArea>
                        </div>
                        <div>
                            <label for="Price">Price</label>
                            <input type="number" name="price" id="price">
                        </div>
                        <div>
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <input type="submit" value="Add Category">
                    </form>
                </div>
                <!-- Order -->
                <div class="sub-content-1 category-1">
                    <h1>Order</h1>
                    <h2>Now Prepairing</h2>
                    <div class="orderprp-container">
                        <div class="prep-card">
                            <h4>Chicken Mix Rice</h4>
                            <a href="">Done</a>
                        </div>
                        <div class="prep-card">
                            <h4>Chicken Mix Rice</h4>
                            <a href="">Done</a>
                        </div>
                        <div class="prep-card">
                            <h4>Chicken Mix Rice</h4>
                            <a href="">Done</a>
                        </div>
                        <div class="prep-card">
                            <h4>Chicken Mix Rice</h4>
                            <a href="">Done</a>
                        </div>
                    </div>
                </div>
                <!-- Reservation -->
                <div class="sub-content-1 category-1">
                    <h1>Reservation</h1>
                    <h2>Today Reservation</h2>
                    <div class="orderprp-container">
                        <div class="prep-card">
                            <h4>Mrs. Wasala</h4>
                            <h4>4.00pm</h4>
                        </div>
                    </div>
                </div>
                <!-- Promotion -->
                <div class="sub-content-1 category-1">
                    <h1>Promotion</h1>
                    <h2>Add Promotion</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div>
                            <label for="startDate">Start Date</label>
                            <input type="date" name="sdate" id="startDate">
                        </div>
                        <div>
                            <label for="endDate">End Date</label>
                            <input type="date" name="edate" id="endDate">
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea name="description" id="description"></textarea>
                        </div>
                        <div>
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <input type="submit" value="Add Promotion">
                    </form>
                </div>
                <!-- Events -->
                <div class="sub-content-1 category-1">
                    <h1>Events</h1>
                    <h2>Add Events</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div>
                            <label for="startDate">Date</label>
                            <input type="date" name="sdate" id="startDate">
                        </div>
                        <div>
                            <label for="startTime">End Date</label>
                            <input type="time" name="stime" id="startTime">
                        </div>
                        <div>
                            <label for="description">Description</label>
                            <textarea name="description" id="description"></textarea>
                        </div>
                        <div>
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                        <input type="submit" value="Add Description">
                    </form>
                </div>
                <!-- Users -->
                <div class="sub-content-1 category-1">
                    <h1>Users</h1>
                    <h2>Add Users</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div>
                            <label for="username">User Name</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div>
                            <label for="usertype">Type</label>
                            <select name="usertype" id="usertype">
                                <option value="staff">Staff</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <input type="submit" value="Add User">
                    </form>
                </div>
                <!-- Setting -->
                <div class="sub-content-1 category-1 setting">
                    <h1>Setting</h1>
                </div>
            </div>
            <!-- Content 2 -->
            <div class="content-2">
                <div class="profile-container">
                    <img src="../Assest/biriyani.jpeg" alt="">
                    <h5>Hansaka</h5>
                </div>
                <div class="sub-container-2 active-2 orverview-2 ">
                    
                    <div class="chart-container">
                        <h1>Weekly Sales</h1>
                        <canvas id="barChart" ></canvas>
                    </div>
                    <div class="recent-order">
                        <h2>Recent Order</h2>
                        <div class="table-container">
                            <table class="recent-order-tb">
                                <tr>
                                    <th>Customer</th>
                                    <th>Order Number</th>
                                    <th>Amount</th>
                                </tr>
                                <tr>
                                    <td>Kavishka</td>
                                    <td>#005583</td>
                                    <td>LKR 1000</td>
                                </tr>
                                <tr>
                                    <td>Kavishka</td>
                                    <td>#005583</td>
                                    <td>LKR 1000</td>
                                </tr>
                                <tr>
                                    <td>Kavishka</td>
                                    <td>#005583</td>
                                    <td>LKR 1000</td>
                                </tr>
                                <tr>
                                    <td>Kavishka</td>
                                    <td>#005583</td>
                                    <td>LKR 1000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <!-- categoty -->
                <div class="sub-container-2 category-2 ">
                    <div class="category-container">
                        <div class="cat-card">
                            <img src="../Assest/biriyani.jpeg" alt="">
                            <h3>Sri Lanka</h3>
                            <div class="cat-act">
                                <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                        <div class="cat-card">
                            <img src="../Assest/biriyani.jpeg" alt="">
                            <h3>Sri Lanka</h3>
                        </div>
                        <div class="cat-card">
                            <img src="../Assest/biriyani.jpeg" alt="">
                            <h3>Sri Lanka</h3>
                        </div>
                    </div>
                </div>
                <!-- Menu -->
                <div class="sub-container-2 category-2 ">
                    <div class="menu-container">
                        <div class="menu-card">
                            <img src="../Assest/biriyani.jpeg" alt="">
                            <div>
                                <h3>Sri Lanka</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam? Vero recusandae cum unde quo repellendus illo dolorem tempore? Totam nobis quibusdam molestias blanditiis accusantium fuga praesentium veritatis ullam quam.</p>
                                <div class="card-bottom">
                                    <h3>LKR 1750</h3>
                                    <span>
                                        <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </span> 
                                </div>                                               
                            </div>
                        </div>
                        <div class="menu-card">
                            <img src="../Assest/biriyani.jpeg" alt="">
                            <div>
                                <h3>Sri Lanka</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam? Vero recusandae cum unde quo repellendus illo dolorem tempore? Totam nobis quibusdam molestias blanditiis accusantium fuga praesentium veritatis ullam quam.</p>
                                <div class="card-bottom">
                                    <h3>LKR 1750</h3>
                                    <span>
                                        <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </span> 
                                </div>                                               
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Order -->
                <div class="sub-container-2 category-2 ">
                    <div class="order-container">
                        <table class="oreder-table">
                            <tr>
                                <th>Bill No</th>
                                <th>Customer name</th>
                                <th>Item Name</th>
                                <th>States</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Hansaka Ravishan</td>
                                <td>Chicken Mix Rice</td>
                                <td>Prepairing</td>
                                <td>
                                    <a href="">Prepairing</a>
                                    <a href="">Deliverd</a>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </div>

                <!-- Reservation -->
                 <div class="sub-container-2 category-2 ">
                    <div class="order-container">
                        <table class="oreder-table">
                            <tr>
                                <th>No</th>
                                <th>Customer name</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Hansaka Ravishan</td>
                                <td>C2024/07/23</td>
                                <td>4.00pm</td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
                <!-- Promotion -->
                <div class="sub-container-2 category-2 ">
                    <div class="menu-container">
                        <div class="menu-card">
                            <img src="../Assest/biriyani.jpeg" alt="">
                            <div>
                                <h3>Sri Lanka</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam? Vero recusandae cum unde quo repellendus illo dolorem tempore? Totam nobis quibusdam molestias blanditiis accusantium fuga praesentium veritatis ullam quam.</p>
                                <div class="card-bottom">
                                    <div><h5>Start Date: 2024/03/07</h5><h5>End Date: 2024/03/07</h5></div>
                                    <span>
                                        <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </span> 
                                </div>                                               
                            </div>
                        </div>
                        <div class="menu-card">
                            <img src="../Assest/biriyani.jpeg" alt="">
                            <div>
                                <h3>Sri Lanka</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam? Vero recusandae cum unde quo repellendus illo dolorem tempore? Totam nobis quibusdam molestias blanditiis accusantium fuga praesentium veritatis ullam quam.</p>
                                <div class="card-bottom">
                                    <div><h5>Start Date: 2024/03/07</h5><h5>End Date: 2024/03/07</h5></div>
                                    <span>
                                        <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </span> 
                                </div>                                               
                            </div>
                        </div>
                        <div class="menu-card">
                            <img src="../Assest/biriyani.jpeg" alt="">
                            <div>
                                <h3>Sri Lanka</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam? Vero recusandae cum unde quo repellendus illo dolorem tempore? Totam nobis quibusdam molestias blanditiis accusantium fuga praesentium veritatis ullam quam.</p>
                                <div class="card-bottom">
                                    <div><h5>Start Date: 2024/03/07</h5><h5>End Date: 2024/03/07</h5></div>
                                    <span>
                                        <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </span> 
                                </div>                                               
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <!-- events -->
                <div class="sub-container-2 category-2 ">
                    <div class="menu-container">
                        <div class="menu-card">
                            <img src="../Assest/biriyani.jpeg" alt="">
                            <div>
                                <h3>Sri Lanka</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam? Vero recusandae cum unde quo repellendus illo dolorem tempore? Totam nobis quibusdam molestias blanditiis accusantium fuga praesentium veritatis ullam quam.</p>
                                <div class="card-bottom">
                                    <div><h5>Start Date: 2024/03/07</h5><h5>Start Time: 4.00pm</h5></div>
                                    <span>
                                        <a href=""><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href=""><i class="fa-solid fa-trash"></i></a>
                                    </span> 
                                </div>                                               
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- Users -->
                <div class="sub-container-2 category-2 ">
                    <div class="order-container">
                        <table class="oreder-table">
                            <tr>
                                <th>User Name</th>
                                <th>User Type</th>
                                <th>Action</th>
                                
                            </tr>
                            <tr>
                                <td>001</td>
                                <td>Hansaka Ravishan</td>
                                <td>
                                    <a href="">Delete</a>
                                    <a href="">Reset Password</a>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
                <!-- Setting -->
                <div class="sub-container-2 category-2 ">
                    <div class="setting-container-2">
                        <img src="../Assest/biriyani.jpeg" alt="">
                        <div>   
                            <h1>Hansaka Ravishan</h1>
                            <h3>Admin</h3>
                            <button>Change Password</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="../script/admin.js?v=<?php echo time() ?>"></script>
</body>

</html>