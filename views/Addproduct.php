<?php 
    include_once('Main.php');
    include_once '../controllers/categoryController.php';
    include_once '../controllers/storeController.php';

    $stores=getAllStore();
    $categories=getAllCategory();
    

?>

<script>
    function valid()
    {
        name=document.getElementById("pname").value;
        price=document.getElementById("price").value;
        cat=document.getElementById("category").value;
        store=document.getElementById("store").value;
        status=document.getElementById("status").value;

        var valid=true;

        if(name=="")
        {
            document.getElementById("err_pname").innerHTML="*Required Product Name!";
            valid=false;
        }

        else if(!isNaN(name))
        {
            document.getElementById("err_pname").innerHTML="*Required Product Name!";
            valid=false;
        }

        else
        {
            document.getElementById("err_pname").innerHTML="";
        }

        if(price=="")
        {
            document.getElementById("err_price").innerHTML="*Required Product Price!";
            valid=false;
        }

        else if(isNaN(price))
        {
            document.getElementById("err_price").innerHTML="*Only Number Contains!";
            valid=false;
        }

        else
        {
            document.getElementById("err_price").innerHTML="";
        }

        if(cat=="Select Category")
        {
            document.getElementById("err_cat").innerHTML="*Select Category!";
            valid=false;
        }
       
        else
        {
            document.getElementById("err_cat").innerHTML="";
        }

        if(store=="Select Store")
        {
            document.getElementById("err_store").innerHTML="*Select Store!";
            valid=false;
        }
       
        else
        {
            document.getElementById("err_store").innerHTML="";
        }

        if(status=="Choose")
        {
            document.getElementById("err_status").innerHTML="*Select Status!";
            valid=false;
        }
       
        else
        {
            document.getElementById("err_status").innerHTML="";
        }

        return valid;

    }
</script>

<div class='orderinner'>
    <h1 class="userh1"> <b>Add Product </b> </h1>
    
    <form  onsubmit="return valid()" action="../controllers/productsController.php" method="post">
        
        <b> Product Name </b> <br> <input class="form form-control" type="text" name="pname" id="pname" placeholder="Enter Product Name"> <br>
        <span class="text-danger font-weight-bold" id="err_pname"></span>
        <br>


        <b> Price </b> <br> <input class="form form-control" type="text" name="price" id="price" placeholder="Enter Price"> <br> 
        <span class="text-danger font-weight-bold" id="err_price"></span>
        <br>
        <b> Description </b> <br>  <textarea class="form form-control" id="des" name="description" rows="6" cols="60">  </textarea> <br>
        <br>
        <b> Category </b> <br> 
        <select class="form form-control" name="categoryId" class="category" id="category">
			<option  disbled selected>Select Category</option>
            <?php 
                foreach($categories as $category)
                {
                    echo "<option value='".$category["categoryId"]."' >".$category["categoryName"]."</option>";
                }
            ?>
            
        </select><br><span class="text-danger font-weight-bold" id="err_cat"></span> <br>

        <b> Store </b> <br> 
        <select class="form form-control" name="storeId" id="store" class="store">
            <option  disabled selected>Select Store</option>
            <?php 
                foreach($stores as $store)
                {
                    echo "<option value='".$store["storeId"]."' >".$store["storeName"]."</option>";
                }
            ?>
			
        </select><br> <span class="text-danger font-weight-bold" id="err_store"></span><br> 

        <b> Status </b> <br> 
        <select class="form form-control" name="status" class="active" id="status">
            <option disabled selected>Choose</option>
            <option>Active</option>
			<option>Deactive</option>
        </select><br><span class="text-danger font-weight-bold" id="err_status"></span><br>
        <div align="center">
        <span><input class="btn btn-primary" type="submit" name="add_product" value="Add Product"></span>
        </div <br><br><br>


    </form> 
</div>
<?php include_once('Adminfooter.php') ?>