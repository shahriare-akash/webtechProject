<?php 
    include_once 'Main.php';
    include_once '../controllers/edituserController.php';
    include_once '../controllers/groupsController.php';
    $groups=getAllGroup();
	
    $uId=$_GET['id'];
    $user=getinfo($uId);
    $grp=getGroup($user['groupId']);

	
?>

<div class='orderinner'>
   
   <h1 class="userh1"> <b> Edit Information </b> </h1>
   <form name="userform" onsubmit="return validate_adduser()" class="user_form" action="../controllers/edituserController.php" method="post">
        <br>  
        <input type="hidden" name="uid" value= "<?php echo $uId;?>">

        Group:<br>			
			<select name="groupId" id="groupId" class="form-control">
                <option disabled selected> <?php echo $grp['groupName'];?> </option>
                <?php 
                    foreach($groups as $group)
                    {
                        echo "<option value='".$group["groupId"]."' >".$group["groupName"]."</option>";
                    }
                ?>
                
            </select> <br><br><br>

        First name <br> <input class="form-control" type="text" id="fname" name="fname"   placeholder="Enter First Name" value="<?php echo $user['firstName'];?>">
        <br><span class="text-danger font-weight-bold" id="err_fname"></span>
        
        <br><br>
        
        Last name <br><input class="form-control" type="text" id="lname" name="lname"  placeholder="Enter Last Name" value="<?php echo $user['lastName'];?>"><br>
        <span class="text-danger font-weight-bold" id="err_lname"></span><br><br>
        
        Email <br> <input class="form-control" id="email"  type="text" name="email" id="email"  placeholder="Enter Email" value="<?php echo $user['email'];?>">
        <br><span class="text-danger font-weight-bold" id="err_email"></span><br><br>
				
       
        Phone No <br> <input class="form-control"  type="text" name="pnumber" id="pnumber"  placeholder="Enter Phone Number" value="<?php echo $user['phoneNo'];?>" ><br>
        <span class="text-danger font-weight-bold" id="err_number"></span><br><br>
       
		
        
		<div align="center">			
        <p>	<input type="submit" name="add_user" class="btn btn-primary" value="Edit User"></p> <br>
        </div>
        <br><br><br>
        

                      
	</form>

    <script type="text/javascript">
        function validate_adduser()
        {   
            firstName=document.getElementById("fname").value;
            lastName=document.getElementById("lname").value;
            email=document.getElementById("email").value;
            number=document.getElementById("pnumber").value;
            var valid=true;
         

            if(firstName=="")
            {
                document.getElementById("err_fname").innerHTML="*Required Firstname!";
                valid= false;    
            
            }
            else if(!isNaN(firstName))
            {
                document.getElementById("err_fname").innerHTML="*Name contain letters only!";
                valid= false; 
            }
            else if((firstName.length<=2))
            {
                document.getElementById("err_fname").innerHTML="*Invalid Name";
                valid= false;
            }


            else
            {
                document.getElementById("err_fname").innerHTML="";
            }

        

            if(lastName=="")
            {
                document.getElementById("err_lname").innerHTML="*Required Lastname!";
                valid= false;
            
            }

            else if(!isNaN(lastName))
            {
                document.getElementById("err_lname").innerHTML="*Name contain letters only!";
                valid= false; 
            }
            else if((lastName.length<=2))
            {
                document.getElementById("err_lname").innerHTML="*Invalid Name!";
                valid= false;
            }

            else
            {
                document.getElementById("err_lname").innerHTML="";
            }



            if((email.includes("@")) && (email.includes(".")))
            {
                document.getElementById("err_email").innerHTML="";
            }

            else
            {
                document.getElementById("err_email").innerHTML="*Invalid Email!";
                valid= false;
            } 

        
            if(number=="")
            {
                document.getElementById("err_number").innerHTML="*Required Phone Number!";
                valid= false;
            }

            else if(isNaN(number))
            {
                document.getElementById("err_number").innerHTML="*Invalid Phone Number!";
                valid= false;
            }
            else if(number.length>11)
            {
                document.getElementById("err_number").innerHTML="*Invalid Phone Number!";
                valid= false;
            }

            else
            {
                document.getElementById("err_number").innerHTML="";
            }

            return valid;
        }
        
</script>



    
   
        </div>

<?php include_once('Adminfooter.php') ?>