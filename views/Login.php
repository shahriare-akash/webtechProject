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
    <?php
	    if(isset($_REQUEST['login']))
		{
		    $username = $_REQUEST['uname'];
			$pass= $_REQUEST["pass"];
			echo $username;
        }
        
        else
        {
    ?>
			
    <section >  
        <div class="loginbox">
        <img src="images/img8.jpg"  class="Log">
        <h1>Login Here</h1>
        <h4> ABC Restaurent </h4>
        <form>
            <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username">
            
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password"><br>
            &nbsp; <br>
        
            <input type="submit" name="submit" value="Login">
            <a href=""><br>Lost your password?</a> <br>
            
    
        </form>
        </div>
          
    </section>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <?php } ?>
</body>

</html>