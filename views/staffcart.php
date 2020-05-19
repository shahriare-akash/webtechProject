<?php
  include_once 'stuffMain.php';
  include_once '../controllers/cartController.php';
  include_once '../controllers/productsController.php';
  $carts=getAllCart();
?>


<script>
    function call_ajax()
    {
      http=new XMLHttpRequest();
      http.onreadystatechange=function()
      {
        if(http.readyState ==4 && http.status== 200)
        {
          // alert(http.responseText);
          document.getElementById("totalprice").innerHTML=http.responseText;
        }
      }

      http.open("GET","../controllers/ajax.php",true);
      http.send();
    }
</script>

  <div class="manageinner">
			<h3 class="manageh1">Carts</h3>
    

			<table class="table table-bordered table-striped" id="order_data">
				<thead>
					<th>Product Name</th>
          <th>Product Price</th>
          <th>Product Quantity</th>
					<th>Total Price</th>
        </thead>  
          <?php
            foreach($carts as $cart) 
            {
              echo "<tr>";
                $product=getProduct($cart["productId"]);
                echo "<td>".$product["productName"]."</td>";
                echo "<td>".$product["price"]."</td>";
                echo "<td>".$cart["quantity"]."</td>";
                echo "<td>".$cart["totalprice"]."</td>";
              echo "</tr>";
            }
          ?>
          
        <tbody>
        </tbody>
        <tfoot>
            <td colspan="3"><button class="btn btn-success" onclick="call_ajax()">Total Price</button> &nbsp;</td>
         
            <td><button class="btn btn-default" type="text" name="totalprice" id="totalprice"></button></td>

        </tfoot>
      </table>
      <form method="post" action="../controllers/cartController.php">
        <span> <input class="btn btn-primary" type="submit" name="orderinfo" value="Save Order"></span><br><br><br> 
      </form>
  </div>
  


<?php include('Adminfooter.php') ?>