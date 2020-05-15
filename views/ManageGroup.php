<?php
  include_once 'Main.php';
  include_once '../controllers/groupsController.php';
  $groups=getAllGroup();
?>

  <div class="manageinner">
			<h3 class="manageh1">All Groups</h3>
			<table class="table table-striped">
				<thead>
					<th>Sl#</th>
          <th>Group Name</th>
          <th>Description </th>
					<th>Status</th>
					<th></th>
					<th></th>
        </thead>  
          <?php
            foreach($groups as $group) 
            {
              echo "<tr>";
                echo "<td>".$group["groupId"]."</td>";
                echo "<td>".$group["groupName"]."</td>";
                echo "<td>".$group["description"]."</td>";
                echo "<td>".$group["status"]."</td>";
                echo '<td> <a href="editgroups.php?id='.$group["groupId"].'" class="btn btn-success">Edit </a> </td>';
                echo '<td> <a href="deletegroups.php?id='.$group["groupId"].'" class="btn btn-danger" style="color:white"> Delete </a></td>';
              echo "</tr>";
            }
          ?>
          
        <tbody>
        </tbody>
      </table>
  </div>

<?php include('Adminfooter.php') ?>