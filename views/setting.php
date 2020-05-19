<?php 
    include_once 'Main.php';
    include_once '../controllers/settingController.php';
	
    $userId=$_GET['id'];
    
	$user=getUinfo($userId);

	
?>

<script>
    function valid()
    {
        firstName=document.getElementById("fname").value;
        lastName=document.getElementById("lname").value;
        email=document.getElementById("email").value;
        pass=document.getElementById("pass").value;
        cpass=document.getElementById("confirmpass").value;
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

            if(pass=="")
            {
                document.getElementById("err_pass").innerHTML="*Required Password!";
                valid= false;
            
            }
            else if((pass.length<=4) || (pass.length>=50))
            {   
                document.getElementById("err_pass").innerHTML="*Invalid Password!";
                valid= false;
            }

            else
            {
                document.getElementById("err_pass").innerHTML="";
            }


            if(cpass=="")
            {
                document.getElementById("err_cpass").innerHTML="*Field cannot be empty!";
                valid= false;
            
            }
            else if(cpass!=pass)
            {
                document.getElementById("err_cpass").innerHTML="*Password Doesn't match!";
                valid= false;
            }
            else
            {
                document.getElementById("err_cpass").innerHTML="";
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

<div class="setting_info">
<h1 class="settingh1">Update Information </h1>

<div>

<form  action="../controllers/settingController.php" onsubmit="return valid()" method="post">
    <input type="hidden" name="abc" value= "<?php echo $userId;?>">
	First name <br> <input class="form form-control" class="input" type="text" name="fname" id="fname" value="<?php echo $user['firstName'];?>"> <br>
    <span class="text-danger font-weight-bold" id="err_fname"></span><br>
                     
    
    Last name <br><input class="form form-control" class="input" type="text" name="lname" id="lname" value="<?php echo $user['lastName'];?>" ><br>
    <span class="text-danger font-weight-bold" id="err_lname"></span><br>
				    
    
    Email <br> <input class="form form-control" id="email"  type="text" name="email" id="email" value="<?php echo $user['email'];?>" ><br>
    <span class="text-danger font-weight-bold" id="err_email"></span><br>
    

    
    
    Phone No <br> <input class="form form-control"  type="text" name="Pnumber" id="pnumber" value="<?php echo $user['phoneNo'];?>"  ><br>
    <span class="text-danger font-weight-bold" id="err_number"></span><br>
				 	
		  
    Password <br> <input class="form form-control" type="password" name="pass" id="pass" value="<?php echo $user['password'];?>"> <br>
    <span class="text-danger font-weight-bold" id="err_pass"></span><br> 
					
    
    Confirm Password <br> <input class="form form-control" type="password"  name="confirmpass" id="confirmpass" > <br>
    <span class="text-danger font-weight-bold" id="err_cpass"></span><br> 
	<div align="center">
    <p><input class="btn btn-primary" type="submit" name="updateInfo" value="Save"></p>
    </div> <br><br><br>
			
</form>
</div>
</div>

<?php include_once('Adminfooter.php') ?>