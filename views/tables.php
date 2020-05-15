<?php 
    include_once('Main.php');
    include_once '../controllers/tableController.php';
    $tables=getAllTable();
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

<form class="product_form" onsubmit="return valid()" action="../controllers/tableController.php" method="post">
     <b> Table Name </b><br> 
     <input type="text" name="name" id="name" placeholder="Enter Table Name"> <br>
     <span class="text-danger font-weight-bold" id="err_name"></span>
     <br>
     <b>Status </b> <br> 
        <select name="status" class="active" id="status">
			<option disabled selected>Choose</option>
			<option>Active</option>
            <option>Deactivate</option>
        </select><br>
        <span class="text-danger font-weight-bold" id="err_status"></span><br>
    
	<input class="storesave" style="color:White" type="submit" name="add_table" value="Add Table"></p>
</form>
    
    <div align="left">
			
			<table class="table table-striped">
				<thead>
					<th>Sl#</th>
                    <th>Table Name</th>
					<th>Status</th>
					<th></th>
					<th></th>
                </thead>  
                <?php
                    foreach($tables as $table) 
                    {
                        echo "<tr>";
                            echo "<td>".$table["tableId"]."</td>";
                            echo "<td>".$table["tableName"]."</td>";
                            echo "<td>".$table["status"]."</td>";
                            echo '<td> <a href="edittable.php?id='.$table["tableId"].'" class="btn btn-success">Edit </a> </td>';
                            echo '<td> <a href="deletetable.php?id='.$table["tableId"].'" class="btn btn-danger" style="color:white"> Delete </a></td>';
                        echo "</tr>";
                    }
                ?>
            </table>
    </div>
</div>


<?php include_once('Adminfooter.php') ?>