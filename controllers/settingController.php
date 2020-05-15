<?php   
    include_once '../models/database.php';
    
    if(isset($_POST["updateInfo"]))
    {   
        $userId=$_POST['abc'];
        updateInfo($userId);
        
       
    }
   
    function getUinfo($id)
    {   
        $query="SELECT * FROM userinfo WHERE userId=$id";
        $group=get($query);
        return $group[0];
    }

    function updateInfo($id)
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phnNo=$_POST['Pnumber'];
        $pass=$_POST['confirmpass'];

        $query="UPDATE userinfo SET firstName='$fname',lastName='$lname',email='$email',password='$pass',phoneNo=$phnNo WHERE userid=$id";
        execute($query);
        header("Location:../views/profile.php?id=$id");
        
        
    }

    
?>