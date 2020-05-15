<?php 
    include_once '../models/database.php';
    
    if(isset($_POST["add_user"]))
    {
       updateUser($_POST['uid']);
    }

    function getinfo($id)
    {
        $query="SELECT * FROM userinfo WHERE userId=$id";
        $user=get($query);
        return $user[0];
    }

    function updateUser($id)
    {   
        $groupId=$_POST["groupId"];
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $groupId=$_POST["groupId"];
        $pnumber=$_POST["pnumber"];


        $query="UPDATE userinfo SET firstName='$fname',lastName='$lname',email='$email',groupId=$groupId,phoneNo=$pnumber where userid=$id";
        execute($query);
        header("Location:../views/ManageUser.php");
        
        
    }

    function deleteUser($id)
    {
       $query="DELETE FROM userinfo WHERE userid=$id";
       get($query);
       header("Location:../views/ManageUser.php");
        
    }
?>