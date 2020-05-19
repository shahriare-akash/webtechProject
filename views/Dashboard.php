<?php
 
  include_once 'Main.php';
  include_once '../controllers/productsController.php';
  include_once '../controllers/groupsController.php';
  include_once '../controllers/userController.php';
  include_once '../controllers/storeController.php';
  $products=getAllProduct();
  $prodcount=0;
  foreach($products as $product)
  {
    $prodcount++;
  }
  $groups=getAllGroup();
  $grpcount=0;

  foreach($groups as $group)
  {
    $grpcount++;
  }

  $users=getAllUser();
  $usrcount=0;

  foreach($users as $user)
  {
    $usrcount++;
  }

  $stores=getAllStore();
  $strcount=0;
  foreach($stores as $store)
  {
    $strcount++;
  }


?>



<section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-5">
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common pro-color">
                  <div class="card-body">
                    <div class="d-flex justify-content-between ">
                      <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                      <div class="text-right text-secondary">
                        <h5 style="color:white">Total Products</h5>
                        <h3 style="color:white"><?php echo $prodcount;?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="ManageProduct.php" style="color:white">More Info</a>
                    <i style="color:white" class="fas fa-arrow-alt-circle-right mr-3"></i>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common p-color">
                  <div class="card-body">
                    <div class="d-flex justify-content-between ">
                      <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                      <div class="text-right text-secondary">
                        <h5 style="color:white">Total Groups</h5>
                        <h3 style="color:white"><?php echo $grpcount; ?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="ManageGroup.php" style="color:white">More Info</a>
                    <i style="color:white"class="fas fa-arrow-alt-circle-right mr-3"></i>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common t-color">
                  <div class="card-body">
                    <div class="d-flex justify-content-between ">
                      <i class="fas fa-users fa-3x text-info"></i>
                      <div class="text-right text-secondary">
                        <h5 style="color:white">Total Users</h5>
                        <h3 style="color:white"><?php echo $usrcount; ?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="ManageUser.php" style="color:white">More Info</a>
                    <i style="color:white" class="fas fa-arrow-alt-circle-right mr-3"></i>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common s-color">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-home fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5 style="color:white">Total Stores</h5>
                        <h3 style="color:white"><?php echo $strcount;?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="store.php" style="color:white">More Info</a>
                    <i style="color:white" class="fas fa-arrow-alt-circle-right mr-3"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include_once('Adminfooter.php') ?>