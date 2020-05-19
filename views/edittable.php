<?php 
    include_once('Main.php');
    include_once '../controllers/tableController.php';
    $table=getTable($_GET['id']);
?>

<script>
    function valid()
    {
        name=document.getElementById("name").value;
        status=document.getElementById("status").value;
        var valid=true;
        if(name=="")
        {
            document.getElementById("err_name").innerHTML="*Required Table Name!";
            valid=false;
        }

        else if(!isNaN(name))
        {
            document.getElementById("err_name").innerHTML="*Invalid Table Name!";
            valid=false;
        }

        else
        {
            document.getElementById("err_name").innerHTML="";
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


<div class="storeinner">
    <h1 class="storeh1"> <b><Table></Table> Table Information </b> </h1>

<form onsubmit="return valid()" action="../controllers/tableController.php" method="post">
    <input type="hidden" name="id" value= "<?php echo $_GET['id'];?>">  

     <b> Table Name </b><br> 
     <input class="form form-control" type="text" name="name" id="name" placeholder="Enter Table Name" value="<?php echo $table["tableName"];?>"> <br>
     <span class="text-danger font-weight-bold" id="err_name"></span>
     <br>
     <b>Status </b> <br> 
        <select class="form form-control" name="status" class="active" id="status">
			<option disabled selected><?php echo $table["status"];?></option>
			<option>Active</option>
            <option>Deactivate</option>
        </select><br>
        <span class="text-danger font-weight-bold" id="err_status"></span><br>
    <div align="center">
	<input class="btn btn-primary" type="submit" name="update_table" value="Edit Table"></p>
    </div> <br><br><br>
</form>

</div>

<?php include('Adminfooter.php') ?>