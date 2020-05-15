<?php 
    include_once '../models/database.php';
    
    if(isset($_POST["add_user"]))
    {
       insertUser();
    }

    function getAllUser()
    {
        $query="SELECT * FROM userinfo";
        $users=get($query);
        return $users;
    }

    function getUserinfo($id)
    {
        $query="SELECT * FROM userinfo WHERE userId=$id";
        $user=get($query);
        return $user[0];
    }

    function insertUser()
    {   
        
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $confirmpass=$_POST["confirmpass"];
        $groupId=$_POST["groupId"];
        $gender=$_POST["gender"];
        $pnumber=$_POST["pnumber"];


        $query="INSERT INTO userinfo VALUES (NULL,'$fname','$lname','$email','$confirmpass',$groupId,'$gender',$pnumber)";
        execute($query);
        header("Location:../views/ManageUser.php");
        
        
    }


?>