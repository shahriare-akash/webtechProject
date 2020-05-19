<?php
  include_once 'stuffMain.php';
  include_once '../controllers/productsController.php';
  include_once '../controllers/categoryController.php';
  include_once '../controllers/storeController.php';
  $products=getAllProduct();
 
?>

<div class="manageuserinner">
			<h3 class="manageuserh1">Product Details</h3>
			<table class="table table-striped">
				<thead>
					<th>Sl#</th>
          <th>Product Name</th>
          <th> Price</th>
          <th>Description</th>
          <th>Category</th>
          <th>Store</th>
          <th>status</th>
          <th></th>
					<th></th>
        </thead>  
          <?php
            foreach($products as $product) 
            {
              echo "<tr>";
                echo "<td>".$product["productId"]."</td>";
                echo "<td>".$product["productName"]."</td>";
                echo "<td>".$product["price"]."</td>";
                echo "<td>".$product["productDescription"]."</td>";
                $cat=getCategory($product["categoryId"]);
                echo "<td>".$cat["categoryName"]."</td>";
                $store=getStore($product["storeId"]);
                echo "<td>".$store["storeName"]."</td>";
                echo "<td>".$product["status"]."</td>";
                
                echo '<td> <a href="editproduct.php?id='.$product["productId"].'" class="btn btn-success">Edit </a> </td>';
                echo '<td> <a href="deleteproduct.php?id='.$product["productId"].'" class="btn btn-danger" style="color:white"> Delete </a></td>';
              echo "</tr>";
            }
          ?>
          
        <tbody>
        </tbody>
      </table>
  </div>

<?php include_once('Adminfooter.php') ?>