<?php 
    include_once 'Main.php';
    include_once '../controllers/groupsController.php';
    $group=getGroup($_GET['id']);
?>

<div class='groupinner'>
    <h1 class="grouph1"> <b>Add Group </b> </h1>
    
<form class="product_form" onsubmit="return valid()" action="../controllers/groupsController.php" method="post">
    <input type="hidden" name="id" value= "<?php echo $_GET['id'];?>">
    
    <b> Group Name </b> <br>
    <input type="text" id="gname" name="gname" placeholder="Enter Group Name" value="<?php echo $group['groupName'];?>"> 
    <br><span class="text-danger font-weight-bold" id="err_grp"></span>
    <br>
    
    
    <b> Description </b> <br>  
    <textarea id="description" type="text" name="description" cols="51" rows="6"><?php echo $group['description'];?></textarea> 
    <br><span class="text-danger font-weight-bold" id="err_des"></span>
    <br>

    <b> Status </b> 
    <br> 
    <select id="status" name="status" class="active">
		<option disabled selected><?php echo $group['status'];?></option>
		<option>Active</option>
        <option>Deactivate</option>
    </select><br><span class="text-danger font-weight-bold" id="err_stat"></span><br>
    

    <span><input id="save1" type="submit" name="update_group" value="Save"></span> <br><br><br>
</form>

<script>
    function valid()
    {
        group=document.getElementById("gname").value;
        des=document.getElementById("description").value;
        status=document.getElementById("status").value;
        var valid=true;
        if(group=="")
        {
            document.getElementById("err_grp").innerHTML="*Required Group Name!";
            valid=false;
        }

        else if(!isNaN(group))
        {
            document.getElementById("err_grp").innerHTML="Invalid Group Name!";
            valid=false;
        }

        else
        {
            document.getElementById("err_grp").innerHTML="";
        }

        

        if(des=="")
        {
            document.getElementById("err_des").innerHTML="*Required Description!";
            valid=false;
        }

        else
        {
            document.getElementById("err_des").innerHTML="";
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

</div>

<?php include_once('Adminfooter.php') ?>