<?php include_once('Main.php');
        include_once '../controllers/profilerController.php';
        include_once '../controllers/groupsController.php';

	$userId=$_GET['id'];
        $user=UserInfo($userId);
        $group=getGroup($user['groupId']);
        

?>
<div class="profile_info">
        <h1 class="profile" > <b> User Profile </b> </h1>    
        

<div class="profile_table">
        <table>

                <tr>
                        <td ><b>First Name </b> <br> <br>  </td> 
                        <td > <b> <?php echo $user['firstName'];?></b> <br> <br>  </td>         
                </tr>
                
                <tr>
                        <td ><b>Last Name </b> <br> <br>  </td> 
                        <td ><b> <?php echo $user['lastName'];?></b> <br> <br>  </td>         
                </tr>
                                
                <tr>
                        <td > <b>Email </b> <br> <br>  </td> 
                        <td ><b> <?php echo $user['email'];?> </b> <br> <br>  </td>         
                </tr>

                
                
                <tr>
                        <td ><b>Gender</b> <br> <br>  </td> 
                        <td ><b> <?php echo $user['gender'];?></b> <br> <br>  </td>         
                </tr>

                <tr>
                        <td ><b>Phone </b> <br> <br>  </td> 
                        <td ><b> <?php echo $user['phoneNo'];?></b> <br> <br>  </td>         
                </tr>
                
                <tr>
                        <td ><b>Group</b> <br> <br>  </td> 
                        <td class="green"><b> <?php echo $group['groupName'];?></b> <br> <br>  </td>         
                </tr>
        </table>
</div>
</div>


<?php include_once('Adminfooter.php') ?>