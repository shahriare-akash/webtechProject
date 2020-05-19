<?php
	require_once "../models/database.php";
	$uid="";
	$err_uid="";
	$pass="";
	$err_pass="";
	$err_invalid="";
	$has_error=false;
	$err_login="";
	
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['uid']))
		{
			$err_uid="*UserID Required";
			$has_error=true;
		}
		else
		{
			$uid=$_POST['uid'];

		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
		}
		else
		{
			$pass=$_POST['pass'];
		}

		if(!$has_error)
		{
			$query="SELECT * FROM userinfo WHERE userid='$uid' AND password='$pass'";
			$result=get($query);
			
			if(count($result)>0)
			{
				$rs=$result[0];
				//session_start();
				//$_SESSION['loggedinuser'] = $uname;
				setcookie('name',$uid,time()+3600*60);
				if($rs["groupId"]==1)
				{
					header("Location:Dashboard.php");
				}

				else
				{
					header("Location:staffDashboard.php");
				}
				
			}
			else
			{
				echo "invalid";
				$err_login="Login Failed!!!";
            }
		}
		
	}


?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Website </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" herf="css/font-awesome.min.css">

    <link rel="stylesheet" href="styles/login.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="js/script.js" ></script>
    <script src="js/fontawesome.min.js" ></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
  
</head>
<body>
    <section >  
        <div class="loginbox">
        <img src="images/img8.jpg"  class="Log">
        <br>
        <h4> ABC Restaurent </h4>
        <br>
        <form method="post" action="">
            <p>UserID</p>
            <input type="text" name="uid" id="uid" value="<?php echo $uid;?>" placeholder="Enter UserID">
            <span style="color:red"> <?php echo $err_uid;?> </span> <br>
            
            <p>Password</p>
            <input type="password" name="pass" id="pass" value="<?php echo $pass;?>" placeholder="Enter Password"><br>
            <span style="color:red"> <?php echo $err_pass;?> </span> <br>
            &nbsp; <br>
        
            <input type="submit" name="submit" id="submit" value="Login">
			<span style="color:red"> <?php echo $err_login;?> </span>
            <a href=""><br>Forget password?</a> <br>
            
    
        </form>
        </div>
          
    </section>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>