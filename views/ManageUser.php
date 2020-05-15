<?php
  include_once 'Main.php';
  include_once '../controllers/userController.php';
  include_once '../controllers/groupsController.php';
  
  $users=getAllUser();
?>

<div class="manageuserinner">
			<h3 class="manageuserh1">All Users</h3>
			<table class="table table-striped">
				<thead>
					<th>Sl#</th>
          <th>First Name</th>
          <th>Last Name </th>
          <th>Email</th>
          <th>Gender</th>
          <th>Phone Number</th>
          <th>Group</th>
          <th></th>
					<th></th>
        </thead>  
          <?php
            foreach($users as $user) 
            {
              echo "<tr>";
                echo "<td>".$user["userid"]."</td>";
                echo "<td>".$user["firstName"]."</td>";
                echo "<td>".$user["lastName"]."</td>";
                echo "<td>".$user["email"]."</td>";
                echo "<td>".$user["gender"]."</td>";
                echo "<td>".$user["phoneNo"]."</td>";
                $group=getGroup($user["groupId"]);
                echo '<td>'.$group["groupName"].'</td>';
                
                
                echo '<td> <a href="edituser.php?id='.$user["userid"].'" class="btn btn-success">Edit </a> </td>';
                echo '<td> <a href="deleteUser.php?id='.$user["userid"].'"class="btn btn-danger" style="color:white"> Delete </a></td>';
              echo "</tr>";
            }
          ?>
          
        <tbody>
        </tbody>
      </table>
  </div>

<?php include_once('Adminfooter.php') ?>