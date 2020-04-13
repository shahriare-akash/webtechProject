<?php include('Main.php');?>


<?php    
$err_uname="";
$uname="";
$err_fname="";
$fname="";
$err_lname="";
$lname="";
$err_email1="";
$email2="";
$err_email3="";
$email4="";
$err_Pnumber1="";
$err_Pnumber2="";
$err_Pnumber3="";
$Pnumber="";
$err_pass1="";
$err_pass2="";
$pass="";
$pass3="";
$err_cpass1="";
$err_cpass2="";
$cpass="";
$cpass3="";
$err_gender="";
$gendervalue;

if(isset($_POST['Save']))
		{  	
            
            if(empty($_POST['uname']))
			{
				$err_uname="*Username Required";
			}
			else
			{			
				$uname=htmlspecialchars($_POST['uname']);
			
			}
            
            if(empty($_POST['fname']))
			{
				$err_fname="*firstName Required";
			}
			else
			{			
				$fname=htmlspecialchars($_POST['fname']);
			
			}
			
				if(empty($_POST['lname']))
			{
				$err_lname="*lastName Required";
			}
			else
			{			
				$lname=htmlspecialchars($_POST['lname']);
			
			}
			if(empty($_POST['email']))
			{
				$err_email1="*Email is Required";
			}
			

            else if (strpos($_POST['email'], '@')!== false && strpos($_POST['email'], '.')!== false) 
            {
                $email2=htmlspecialchars($_POST['email']);
			    $email4="*Email is Valid";
		    }
			else
			{		
				$err_email3="*Invalid email ,try again";
			
			}
			
			if(empty($_POST['Pnumber']))
			{
				$err_Pnumber1="*PhoneNo Required";
			}
			elseif(!is_numeric($_POST['Pnumber']))
			{
				$err_Pnumber2="*only number input";
			}
			elseif(strlen($_POST['Pnumber'])!=11)
			{
				$err_Pnumber3="*only input 11 digits number";
			}
			
			else
			{			
				$Pnumber=htmlspecialchars($_POST['Pnumber']);
			
			}
            if(empty($_POST['pass']))
			{
				$err_pass1="*Lave empty if you dont want to change";
			}
            elseif(strlen($_POST['pass'])!=6)
			{
				$err_pass2="*only input 6 digits number";
			}
			else
			{			
				$pass=htmlspecialchars($_POST['pass']);
			  $pass3="*Password is Valid";

			
			}
			if(empty($_POST['confirmpass']))
			{
				$err_cpass1="*confirm password Required";
			}
			elseif(($_POST['pass'])!=($_POST['confirmpass']))
			{
				$err_cpass2="*Invalid  Confirm password";
			}
			else
			{			
				
			  $cpass3="*Confirm Password is Valid";

			
			}
            
            if(isset($_POST['gender']))
            {
				$gendervalue=htmlspecialchars($_POST['gender']); 
            }
            else
            {	
				if(empty($_POST['gendervalue']))
				{
					$err_gender="You must select a gender!"; 
				}
            }
            
        

        }
        
        

?>

<div class="setting_info">
<h1 class="settingh1">Update Information </h1>

<div>

<form  action="" method="post">
       
    Username <br> <input id="uname"  type="text" value="<?php echo $uname;?>"name="uname" ><br>
    <span style="color:red"><?php echo $err_uname;?></span>  <br> 
    
    Email <br> <input id="email"  type="text" value="<?php echo $email2;?>"name="email" ><br>
    <span  > <?php echo "" ;?></span>
    <span style="color:green"><?php echo $email4;?></span>
    <span style="color:red"><?php echo $err_email1;?></span>   
    <span style="color:red"><?php echo $err_email3;?></span><br>

    First name <br> <input class="input" type="text" value="<?php echo $fname;?>" name="fname" ><br>
                    <span style="color:red"><?php echo $err_fname;?></span> <br> 
    
    Last name <br><input class="input" type="text" value="<?php echo $lname;?>"name="lname" ><br>
				    <span style="color:red"><?php echo $err_lname;?></span> <br> 
    
    Phone No <br> <input class="input"  type="text" value="<?php echo $Pnumber;?>" name="Pnumber" ><br>
				 	<span style="color:red"><?php echo $err_Pnumber1;?></span> 
				   	<span style="color:red"><?php echo $err_Pnumber3;?></span> <br>
		  
    Password <br> <input  type="password" value="<?php echo $pass;?>"  name="pass"> <br> 
					<span style="color:blue"><?php echo $err_pass1;?></span> 
					<span style="color:green"><?php echo $pass3;?></span> 
					<span style="color:red"><?php echo $err_pass2;?></span> <br> 
    
    Confirm Password <br> <input type="password"  value="<?php echo $cpass;?>"  name="confirmpass"> <br> 
					<span style="color:red"><?php echo $err_cpass1;?></span> 
					<span style="color:red"><?php echo $err_cpass2;?></span>
					<span style="color:red"><?php echo $cpass;?></span>
					<span style="color:green"><?php echo $cpass3;?></span> <br> 
    
    Gender <br> <br><input class="inputradio" type="radio" name="gender" value="<?php echo $gendervalue;?>"> Male <input  class="inputradio" type="radio" name="gender" value="<?php echo $gendervalue;?>"> Female
    <br><span style="color:red"><?php echo $err_gender;?></span> <br >
           
           
           
           
    <p><input class="save" type="submit" name="Save" value="Save"></p> <br><br><br>
			
</form>
</div>
</div>

<?php include('Adminfooter.php') ?>