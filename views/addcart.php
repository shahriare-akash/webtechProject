<?php
    include_once 'Main.php';
    include_once '../controllers/productsController.php';
    $product=getProduct($_GET['id'])

?>

<div class='groupinner'>
    <h1 class="grouph1"> <b>Add Cart </b> </h1>
    
<form class="product_form" onsubmit="return valid()" action="../controllers/cartController.php" method="post">
    <input type="hidden" name="productId" value= "<?php echo $_GET['id'];?>">
    <b> Product Name </b> <br>
    <input type="text" id="name" name="name" value="<?php echo $product['productName']?>" ><br>
    
    <b> Price </b> <br>
    <input type="text" id="price" name="price" value="<?php echo $product['price']?>" ><br>

    <b> Quantity </b> <br>
    <input type="text" id="qty" name="qty" placeholder="Enter Quantity"><br>
    <span class="text-danger font-weight-bold" id="err_qty"></span>   <br> 

    <span><input id="save1" type="submit" name="add" value="Save"></span> <br><br><br>
</form>

<script>
    function valid()
    {
        var qty=document.getElementById('qty').value;

        var valid=false;

        if(qty=="")
        {
            document.getElementById("err_qty").innerHTML="*Required Quantity!";
            valid=false;
        }

        else if(isNaN(qty))
        {
            document.getElementById("err_qty").innerHTML="*Only Integer Number Contains!";
            valid=false;
        }

        else
        {
            document.getElementById("err_qty0").innerHTML="";
        }

        return valid;
    }
</script>
</div>

<?php include_once('Adminfooter.php'); ?>