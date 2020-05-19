<?php 
    include_once('stuffMain.php');
    include_once '../controllers/categoryController.php';
    $categories=getAllCategory();
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

    <form  action="../controllers/categoryController.php" onsubmit="return validate()" method="post">
        <b> Category Name </b><br> <input class="form form-control" type="text" name="name" id="name" placeholder="Enter Category Name"> <br>
        <span class="text-danger font-weight-bold" id="err_name"></span><br>
        <b>Status </b> <br> 
        <select class="form form-control" name="status" class="active" id="status">
			<option disabled selected>Choose</option>
			<option>Active</option>
            <option>Deactivate</option>
        </select><br><span class="text-danger font-weight-bold" id="err_stat"></span><br>
    
	<input class="btn btn-primary" type="submit" name="add_category" value="Add Category" >
    </form>
    <br>
    
    <div align="left">
			
    <table class="table table-striped">
	    <thead>
		    <th>Sl#</th>
                <th>Category Name</th>
				<th>Status</th>
				<th></th>
				<th></th>
        </thead>  
        <?php
            foreach($categories as $category) 
            {
                echo "<tr>";
                echo "<td>".$category["categoryId"]."</td>";
                echo "<td>".$category["categoryName"]."</td>";
                echo "<td>".$category["status"]."</td>";
                echo '<td> <a href="editcategory.php?id='.$category["categoryId"].'" class="btn btn-success">Edit </a> </td>';
                echo '<td> <a href="deletecategory.php?id='.$category["categoryId"].'" class="btn btn-danger" style="color:white"> Delete </a></td>';
                echo "</tr>";
            }
        ?>
    </table>
    </div>
</div>


<?php include_once('Adminfooter.php') ?>