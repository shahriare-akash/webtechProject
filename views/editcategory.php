<?php 
    include_once('Main.php');
    include_once '../controllers/categoryController.php';
    $category=getCategory($_GET['id']);
?>
<script>
    function validate()
    {
        var name=document.getElementById("name").value;
        var status=document.getElementById("status").value;
        var valid=true;
        if(name=="")
        {
            document.getElementById("err_name").innerHTML="*Name Required";
            valid=false;
        }

        else if(!isNaN(name))
        {
            document.getElementById("err_name").innerHTML="*Name Required";
            valid=false;
        }

        else
        {
            document.getElementById("err_name").innerHTML="";
           
        }
        if(status=="Choose")
        {
            document.getElementById("err_stat").innerHTML="*Select Status";
            valid=false;
        }
        else
        {
            document.getElementById("err_stat").innerHTML="";
        }

        return valid;
    }
</script>


<div class="storeinner">
    <h1 class="storeh1"> <b><Table></Table> Category </b> </h1>

    <form class="product_form" action="../controllers/categoryController.php" onsubmit="return validate()" method="post">
    <input type="hidden" name="id" value= "<?php echo $_GET['id'];?>">
        <b> Category Name </b><br> <input type="text" name="name" id="name" placeholder="Enter Category Name" value="<?php echo $category['categoryName'];?>"> <br>
        <span class="text-danger font-weight-bold" id="err_name"></span><br>
        <b>Status </b> <br> 
        <select name="status" class="active" id="status">
			<option disabled selected><?php echo $category['status'];?></option>
			<option>Active</option>
            <option>Deactivate</option>
        </select><br><span class="text-danger font-weight-bold" id="err_stat"></span><br>
    
	    <input class="storesave" style="color:White" type="submit" name="update_category" value="Update" ></p>
    </form>

</div>
<?php include_once('Adminfooter.php') ?>