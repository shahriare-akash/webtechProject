<?php 
    include_once '../models/database.php';

    if(isset($_POST["add_category"]))
    {   
        insertCategory();
    }

    if(isset($_POST["update_category"]))
    {
        updateCategory($_POST['id']);
    }

    function getAllCategory()
    {
        $query="SELECT * FROM category";
        $category=get($query);
        return $category;
    }


    function getCategory($id)
    {
        $query="SELECT * FROM category where categoryId=$id";
        $category=get($query);
        return $category[0];
    }


    function insertCategory()
    {
        $name=$_POST["name"];
        $status=$_POST["status"];

        $query="INSERT INTO category VALUES (NULL,'$name','$status')";
        execute($query);
        header("Location:../views/category.php");
    }

    function updateCategory($id)
    {
        $name=$_POST["name"];
        $status=$_POST["status"];

        $query="UPDATE category SET categoryName='$name',status='$status' where categoryId=$id";
        execute($query);
        header("Location:../views/category.php");
    }

    function deleteCategory($id)
    {
       $query="DELETE FROM category WHERE categoryId=$id";
       get($query);
       header("Location:../views/category.php");
        
    }

?>