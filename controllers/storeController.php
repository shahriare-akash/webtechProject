<?php 
    include_once '../models/database.php';

    if(isset($_POST["add_store"]))
    {   
        insertStore();
    }

    if(isset($_POST["update_store"]))
    {
        updateStore($_POST["id"]);
    }

    function getAllStore()
    {
        $query="SELECT * FROM store";
        $stores=get($query);
        return $stores;
    }

    function getStore($id)
    {
        $query="SELECT * from store where storeId=$id";
        $store=get($query);
        return $store[0];
    }

    function updateStore($id)
    {
        $name=$_POST["name"];
        $status=$_POST["status"];

        $query="UPDATE store SET storeName='$name', status='$status' where storeId=$id";
        execute($query);
        header("Location:../views/store.php");
    }

    function insertStore()
    {
        $name=$_POST["name"];
        $status=$_POST["status"];

        $query="INSERT INTO store VALUES (NULL,'$name','$status')";
        execute($query);
        header("Location:../views/store.php");
    }

    function deleteStore($id)
    {
       $query="DELETE FROM store WHERE storeId=$id";
       get($query);
       header("Location:../views/store.php");
        
    }

?>