<?php 
    include_once '../models/database.php';
    $id=$_COOKIE['name'];
    function GetUser($id)
    {
        $query="SELECT * FROM userinfo WHERE userId=$id";
        $user=get($query);
        return $user[0];
    }
    
    $user=GetUser($id);
    $userName=$user["firstName"].' '.$user["lastName"];
   
    
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="styles/Adduser.css">
    <link rel="stylesheet" href="styles/companyinfo.css">
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="styles/setting.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/Addproduct.css">
    <link rel="stylesheet" href="styles/AddGroup.css">
    <link rel="stylesheet" href="styles/ManageGroup.css">
    <link rel="stylesheet" href="styles/ManageUser.css">
    <link rel="stylesheet" href="styles/store.css">
    


    <title>Admin Dashboard</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse"
            data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="container-fluid">
                <div class="row">
                    <!-- sidebar -->
                    <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                        <a href="#"
                            class="navbar-brand text-white d-block mx-auto text-center py-2 mb-3 bottom-border">ABC
                            Restaurent</a>
                        <div class="bottom-border pb-2">
                            <img src="images/admin.jpg" width="50" class="rounded-circle mr-3">
                            <span class="text-white"> 
                            <?php   
                               
                                echo $userName;
                            ?> 
                            </span>
                        </div>

                        <ul class="menu-ul flex-column mt-4">
                            <li class="nav-item"><a href="Dashboard.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                            <li id="user-nav"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link ">
                              <i class="fas fa-user text-light fa-lg mr-3"></i>Users<span
                                        class="sub-arrow"></span></a>
                                <div class="sub-menu-1">
                                    <ul>
                                        <li class="nav-item"><a href="Adduser.php"
                                                class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                    class="text-light fa-lg mr-3"></i>Add User</a></li>
                                        <li class="nav-item"><a href="ManageUser.php"
                                                class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                    class="text-light fa-lg mr-3"></i>Manage User</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li id="Group-nav"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                    class="fas fa-comments text-light fa-lg mr-3"></i>Groups<span
                                    class="sub-arrow"></span></a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li class="nav-item"><a href="AddGroup.php"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Add Group</a></li>
                                    <li class="nav-item"><a href="ManageGroup.php"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Manage Group</a> </li>
                                </ul>
                            </div>
                            </li>
                            <li class="nav-item"><a href="store.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-home text-light fa-lg mr-3"></i>Stores</a></li>
                            <li class="nav-item"><a href="tables.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-file-alt text-light fa-lg mr-3"></i>Tables</a></li>
                            <li class="nav-item"><a href="category.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-table text-light fa-lg mr-3"></i>Category</a></li>
                            <li id="product-nav"><a href="#" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-table text-light fa-lg mr-3"></i>Products<span
                                        class="sub-arrow"></span></a>
                            <div class="sub-menu-1">
                                <ul>
                                    <li class="nav-item"><a href="Addproduct.php"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Add Product</a></li>
                                    <li class="nav-item"><a href="ManageProduct.php"
                                            class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                                class="text-light fa-lg mr-3"></i>Manage Product</a> </li>
                                </ul>
                            </div>
                          
                            <li class="nav-item"><a href="menu.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-file-alt text-light fa-lg mr-3"></i>Menu</a></li>
                            <li class="nav-item"><a href="cart.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-file-alt text-light fa-lg mr-3"></i>Cart</a></li>


                            <li class="nav-item"><a href="companyinfo.php" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-file-alt text-light fa-lg mr-3"></i>Company Info</a></li>
                            <li class="nav-item"><a href="profile.php?id=<?php echo $id; ?>" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-user text-light fa-lg mr-3"></i>Profile</a></li>
                            <li class="nav-item"><a href="setting.php?id=<?php echo $id; ?>" class="nav-link text-white p-2 mb-1 sidebar-link"><i
                                        class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>

                        </ul>
                    </div>
                    <!-- end of sidebar -->

                    <!-- top-nav -->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-0 top-navbar">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h5 class="text-light text-uppercase mb-0">Dashboard</h5>
                            </div>
                            <div class="col-md-5">
                                <form>
                                    <div class="input-group">
                                                              
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- modal -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Want to leave?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Press logout to leave
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-success" data-dismiss="modal" name="stay">Stay Here</a>
            <a href="Login.php" class="btn btn-danger" name="logout">Logout</a>

          </div>
        </div>
      </div>
    </div>
   
    <!-- cards -->
    
    <!-- end of cards -->
   


  
   