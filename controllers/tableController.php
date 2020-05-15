<?php 
    include_once '../models/database.php';

    if(isset($_POST["add_table"]))
    {   
        insertTable();
    }

    if(isset($_POST["update_table"]))
    {
        updateTable($_POST["id"]);
    }

    function getAllTable()
    {
        $query="SELECT * FROM storeTable";
        $tables=get($query);
        return $tables;
    }

    function getTable($id)
    {
        $query="SELECT * FROM storeTable where tableId=$id";
        $table=get($query);
        return $table[0];
    }

    function insertTable()
    {
        $name=$_POST["name"];
        $status=$_POST["status"];

        $query="INSERT INTO storeTable VALUES (NULL,'$name','$status')";
        execute($query);
        header("Location:../views/tables.php");
    }

    function updateTable($id)
    {
        $name=$_POST["name"];
        $status=$_POST["status"];

        $query="UPDATE storeTable SET tableName='$name',status='$status' WHERE tableId=$id";
        execute($query);
        header("Location:../views/tables.php");
    }


    function deleteTable($id)
    {
       $query="DELETE FROM storeTable WHERE tableId=$id";
       get($query);
       header("Location:../views/tables.php");
        
    }

?>