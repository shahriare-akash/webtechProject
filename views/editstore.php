<?php 
    include_once('Main.php');
    include_once '../controllers/storeController.php';
    $store=getStore($_GET['id']);
?>

<div class="storeinner">
    <h1 class="storeh1"> <b>Store Information </b> </h1>

<form class="product_form" onsubmit="return valid()" action="../controllers/storeController.php" method="post">
    <input type="hidden" name="id" value= "<?php echo $_GET['id'];?>">
    <b> Store Name </b><br>
    <input class="form form-control" type="text" name="name" id="name" placeholder="Enter Store Name" value="<?php echo $store['storeName'];?>"> <br>
    <span class="text-danger font-weight-bold" id="err_name"></span>
    <br>

    <b>Status </b> <br>
    <select class="form form-control" name="status" id="status">
	    <option disabled selected><?php echo $store['status'];?></option>
		<option>Active</option>
        <option>Deactivate</option>
    </select><br>
    <span class="text-danger font-weight-bold" id="err_stat"></span>
        <br>
    <div align="center">
	<input class="btn btn-primary" type="submit" id="add" name="update_store" value="Add Store"></p>
    </div> <br><br><br>
</form>
<script>
    function valid()
    {
        name=document.getElementById("name").value;
        status=document.getElementById("status").value;
        var valid=true;

        if(name=="")
        {
            document.getElementById("err_name").innerHTML="*Required Store Name!";
            valid=false;
        }

        else if(!isNan(name))
        {
            document.getElementById("err_name").innerHTML="*Invalid Store Name!";
            valid=false;
        }

        else
        {
            document.getElementById("err_name").innerHTML="";
        }

        if(status=="Choose")
        {
            document.getElementById("err_stat").innerHTML="*Select Store Name!";
            valid=false;
        }

        else
        {
            document.getElementById("err_stat").innerHTML="";
        }

        return valid;

    }
</script>

</div>

<?php include('Adminfooter.php') ?>