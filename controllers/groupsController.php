<?php 
    include_once '../models/database.php';


    if(isset($_POST["add_group"]))
    {
        insertGroup();
    }

    if(isset($_POST["update_group"]))
    {
        updateGroup($_POST["id"]);
    }

    function getAllGroup()
    {
        $query="SELECT * FROM usergroup";
        $groups=get($query);
        return $groups;
    }

    function getGroup($id)
    {
        $query="SELECT * FROM usergroup WHERE groupId=$id";
        $group=get($query);
        return $group[0];
    }

    function insertGroup()
    {
        $gname=$_POST["gname"];
        $des=$_POST["description"];
        $status=$_POST["status"];

        $query="INSERT INTO usergroup VALUES (NULL,'$gname','$des','$status')";
        execute($query);
        header("Location:../views/ManageGroup.php");
    }

    function updateGroup($id)
    {
        $gname=$_POST["gname"];
        $des=$_POST["description"];
        $status=$_POST["status"];

        $query="UPDATE usergroup SET groupName='$gname',description='$des',status='$status'";
        execute($query);
        header("Location:../views/ManageGroup.php");
    }

    function deleteGroup($id)
    {
       $query="DELETE FROM usergroup WHERE groupId=$id";
       get($query);
       header("Location:../views/ManageGroup.php");
        
    }
?>