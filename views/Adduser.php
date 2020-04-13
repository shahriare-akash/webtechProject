
<?php include('Main.php');?>


<?php
include("../models/database.php");
error_reporting(0);
?>
<?php



$err_uname="";
$username="";
$data="";
$pass="";
$err_pass1="";
$pass3="";
$query="";
$err_uname="";
$fname="";
$err_fname="";
$lname="";
$err_lname="";
$Pnumber="";
$err_Pnumber1="";
$err_Pnumber2="";
$error="";
$error1="";
$confirmpass="";
$err_cpass1="";
$err_cpass2="";
$email2="";
$err_email1="";
$email4="";
$err_email3="";
$gendervalue="";
$err_gender="";
$err_group="";
$group="";
$Group="";
if (isset($_POST['Save'])) {
    if (empty($_POST['group'])) {
        $err_group="*Group Required";
    } elseif ($selectOption = $_POST['group']) {
        $Group=$selectOption;
    }

         
            
    if (empty($_POST['uname'])) {
        $err_uname="*Username Required";
    } else {
        $username=htmlspecialchars($_POST['uname']);
        //apatoto user dia bujhassi tui group a boshaia nish
    }


    if (empty($_POST['fname'])) {
        $err_fname="*firstName Required";
    } else {
        $fname=htmlspecialchars($_POST['fname']);
    }
            
    if (empty($_POST['lname'])) {
        $err_lname="*lastName Required";
    } else {
        $lname=htmlspecialchars($_POST['lname']);
    }
    if (empty($_POST['email'])) {
        $err_email1="*Email is Required";
    } elseif (strpos($_POST['email'], '@')!== false && strpos($_POST['email'], '.')!== false) {
        $email2=htmlspecialchars($_POST['email']);
        $email4="*Email is Valid";
    } else {
        $err_email3="*Invalid email ,try again";
    }
            
    if (empty($_POST['Pnumber'])) {
        $err_Pnumber1="*PhoneNo Required";
    } elseif (!is_numeric($_POST['Pnumber'])) {
        $err_Pnumber2="*only number input";
    } else {
        $Pnumber=htmlspecialchars($_POST['Pnumber']);
    }
    if (empty($_POST['pass'])) {
        $err_pass1="*PhoneNo Required";
    } else {
        $pass=htmlspecialchars($_POST['pass']);
        $pass3="*Password is Valid";
    }
            
    if (empty($_POST['confirmpass'])) {
        $err_cpass1="*confirm password Required";
    } elseif (($_POST['pass'])!=($_POST['confirmpass'])) {
        $err_cpass2="*Invalid  Confirm password";
    } else {
        $confirmpass=htmlspecialchars($_POST['confirmpass']);
    }
             
    if (isset($_POST['gender'])) {
        $gendervalue=htmlspecialchars($_POST['gender']);
    } else {
        if (empty($_POST['gendervalue'])) {
            $err_gender="You must select a gender!";
        }
    }
    


    $query="insert into dbsign values('$Group','$username',' $email2','$pass','$confirmpass' ,' $fname',' $lname','$Pnumber','$gendervalue')";
        
    $data=mysqli_query($conn, $query);
    echo $data;
    
    if ($data==true) {
        echo "<script>window.location.href='/RS/ManageUser.php'</script>";
        // $error = "this is happeing!!!";
        // header("Location: Dashboard.php?msg=Please+Login+Again.");
        exit();
    } else {
        $error= "Data is not insert";
    }
}


    
     ?>
	
    <div class='orderinner'>
   
   <h1 class="userh1"> <b>Add User </b> </h1>
   <form class="user_form" action="" method="post">
        <br>  

        Group:<br>			
			<select name="group" class="Group">
                <option  disabled selected>Select A User.</option>
<option value="stuff"<?php if ($Group == 'stuff') { ?>selected="selected" <?php } ?>>Staff</option>
				<option value="members" <?php if ($Group== 'members') { ?>selected="selected" <?php } ?> >Members</option>
            </select><br> <br>
           Username <br>  <input id="uname"  type="text" value="<?php echo $username;?>"name="uname" placeholder="Enter Username"><br>
              <br>   <span style="color:red"><?php echo $err_uname;?></span> <br>
              
              

           Email <br> <input id="email"  type="text" value="<?php echo $email2;?>"name="email" placeholder="Enter Email">
                    <br> <br><span  > <?php echo "" ;?></span>
                    <span style="color:green"><?php echo $email4;?></span>
                    <span style="color:red"><?php echo $err_email1;?></span>   
                    <span style="color:red"><?php echo $err_email3;?></span>  <br>
				
                    Password <br>   <input  type="password" value="<?php echo $pass;?>"  name="pass" placeholder="Enter Password"> <br> 
                    <br> 	<span style="color:red"><?php echo $err_pass1;?></span> 
					<span style="color:green"><?php echo $pass3;?></span> 
					<br> 
                    Confirm Password <br>   <input type="password"  value="<?php echo $confirmpass;?>"  name="confirmpass" placeholder="Confirm Password" required> <br> 
					<br><span style="color:red"><?php echo $err_cpass1;?></span> 
					<span style="color:red"><?php echo $err_cpass2;?></span> <br>
					
		            First name <br>    <input class="input" type="text" value="<?php echo $fname;?>" name="fname" placeholder="Enter First Name"><br>
                    <br>   <span style="color:red"><?php echo $err_fname;?></span> <br>
		           	Last name <br>   <input class="input" type="text" value="<?php echo $lname;?>"name="lname" placeholder="Enter Last Name"><br>
                       <br>   <span style="color:red"><?php echo $err_lname;?></span> <br>
		           	Phone No <br> <input class="input"  type="text" value="<?php echo $Pnumber;?>" name="Pnumber"placeholder="Enter Phone Number" ><br>
                       <br><span style="color:red"><?php echo $err_Pnumber1;?></span> 
				   	<span style="color:red"><?php echo $err_Pnumber2;?></span> <br>
                      
                    Gender <br>
<input class="inputradio" type="radio" name="gender" value="male" <?php if ($gendervalue == 'male') { ?>checked <?php } ?>> Male <input  class="inputradio" type="radio" name="gender" value="female" <?php if ($gendervalue == 'female') { ?>checked <?php } ?>> Female
    				<br><span style="color:red"><?php echo $err_gender;?></span> 
					   
                       <br> <span style="color:red"><?php echo $error;?></span> 
                       <br> <span style="color:red"><?php echo $error1;?></span> 
					
					
                       <p>	<input class="save" type="submit" name="Save" value="Save"></p>

                      
		</form>
   
        </div>
<?php include('Adminfooter.php') ?>














            



