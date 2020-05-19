<?php
  include_once 'Main.php';
  include_once '../controllers/productsController.php';
 
  $products=getAllProduct();
 
?>

<div class="manageuserinner">
			<h3 class="manageuserh1">Product Details</h3>
			<table class="table table-striped">
			<thead>
				<th>Sl#</th>
                <th>Product Name</th>
                <th> Price</th>
                <th></th>
            </thead>  
          <?php
            foreach($products as $product) 
            {
              echo "<tr>";
                echo "<td>".$product["productName"]."</td>";
                echo "<td>".$product["price"]."</td>";                
                echo '<td> <a href="addcart.php?id='.$product["productId"].'" class="btn btn-success">Add </a> </td>';
                
              echo "</tr>";
            }
          ?>
          
        <tbody>
        </tbody>
      </table>
  </div>

<?php include_once('Adminfooter.php') ?>