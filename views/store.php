<?php 
    include_once('Main.php');
    include_once '../controllers/storeController.php';
    $stores=getAllStore();
?>


<div class="storeinner">
    <h1 class="storeh1"> <b>Store Information </b> </h1>

<form class="product_form" onsubmit="return valid()" action="../controllers/storeController.php" method="post">
    <b> Store Name </b><br>
    <input class="form form-control" type="text" name="name" id="name" placeholder="Enter Store Name"> <br>
    <span class="text-danger font-weight-bold" id="err_name"></span>
    <br>

    <b>Status </b> <br>
    <select class="form form-control" name="status" id="status">
	    <option disabled selected>Choose</option>
		<option>Active</option>
        <option>Deactivate</option>
    </select><br>
    <span class="text-danger font-weight-bold" id="err_stat"></span>
    
	<input class="btn btn-primary"  type="submit" id="add" name="add_store" value="Add Store">
</form>
<br>
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

    <div align="left">
			
			<table class="table table-striped">
				<thead>
					<th>Sl#</th>
                    <th>Store Name</th>
					<th>Status</th>
					<th></th>
					<th></th>
                </thead>  
                <?php
                    foreach($stores as $store) 
                    {
                        echo "<tr>";
                            echo "<td>".$store["storeId"]."</td>";
                            echo "<td>".$store["storeName"]."</td>";
                            echo "<td>".$store["status"]."</td>";
                            echo '<td> <a href="editstore.php?id='.$store["storeId"].'" class="btn btn-success">Edit </a> </td>';
                            echo '<td> <a href="deletestore.php?id='.$store["storeId"].'" class="btn btn-danger" style="color:white"> Delete </a></td>';
                        echo "</tr>";
                    }
                ?>
            </table>
    </div>
</div>


<?php include('Adminfooter.php') ?>