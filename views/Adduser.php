<?php 
include_once 'Main.php';
include_once '../controllers/groupsController.php';
$groups=getAllGroup();


?>



<div class='orderinner'>
   
   <h1 class="userh1"> <b>Add User </b> </h1>
   <form name="userform" onsubmit="return validate_adduser()" class="user_form" action="../controllers/userController.php" method="post">
        <br>  

        Group:<br>			
			<select name="groupId" id="groupId" class="form-control">
                <option disabled selected> Choose </option>
                <?php 
                    foreach($groups as $group)
                    {
                        echo "<option value='".$group["groupId"]."' >".$group["groupName"]."</option>";
                    }
                ?>
                
            </select> <br> <span class="text-danger font-weight-bold" id="err_group"></span> <br><br>

        First name <br> <input class="form-control" type="text" id="fname" name="fname"   placeholder="Enter First Name">
        <br><span class="text-danger font-weight-bold" id="err_fname"></span>
        
        <br><br>
        
        Last name <br><input class="form-control" type="text" id="lname" name="lname"  placeholder="Enter Last Name"><br>
        <span class="text-danger font-weight-bold" id="err_lname"></span><br><br>
        
        Email <br> <input class="form-control" id="email"  type="text" name="email" id="email"  placeholder="Enter Email">
        <br><span class="text-danger font-weight-bold" id="err_email"></span><br><br>
				
        Password <br>   <input  class="form-control" type="password" name="pass" id="pass"  placeholder="Enter Password"> <br> 
        <span class="text-danger font-weight-bold" id="err_pass"></span><br><br> 
        
        Confirm Password <br>   <input class="form-control" type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password"  > <br> 
		<span class="text-danger font-weight-bold" id="err_cpass"></span><br><br>
       
        Phone No <br> <input class="form-control" class="input"  type="text" name="pnumber" id="pnumber"  placeholder="Enter Phone Number" ><br>
        <span class="text-danger font-weight-bold" id="err_number"></span><br><br>
                      
        Gender <br>
        <input class="inputradio" type="radio" name="gender" id="gender" value="Male" > Male <input  class="inputradio" type="radio" id="gender" name="gender" value="Female"  > Female
        <br><span class="text-danger font-weight-bold" id="err_gender"></span><br> 
		
        
		<div align="center">			
            <span><br><br><input class="btn btn-primary" type="submit" name="add_user" value="Add User"></span><br>
        </div>
        
        <br><br><br><br>

	</form>

    <script type="text/javascript">
        function validate_adduser()
        {   
            group=document.getElementById("groupId").value;
            firstName=document.getElementById("fname").value;
            lastName=document.getElementById("lname").value;
            email=document.getElementById("email").value;
            pass=document.getElementById("pass").value;
            cpass=document.getElementById("confirmpass").value;
            number=document.getElementById("pnumber").value;
            gender=document.getElementById("gender").checked;
            var valid=true;
            if(group=="Choose")
            {
                document.getElementById("err_group").innerHTML="*Required Group Name!";
                valid= false; 
            }

            else
            {
                document.getElementById("err_group").innerHTML="";
            }

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



    
   
        </div>
<?php include_once('Adminfooter.php') ?>














            



