<?php 
    include_once '../models/database.php';

    if(isset($_POST["add_product"]))
    {
        insertProduct();
    }
    if(isset($_POST["update_product"]))
    {
        updateProduct($_POST['id']);
    }

    function getAllProduct()
    {
        $query="SELECT * FROM products";
        $products=get($query);
        return $products;
    }

    function getProduct($id)
    {
        $query="SELECT * FROM products WHERE productId=$id";
        $product=get($query);
        return $product[0];
    }


    function insertProduct()
    {
        $name=$_POST["pname"];
        $price=$_POST["price"];
        $description=$_POST["description"];
        $cid=$_POST["categoryId"];
        $sid=$_POST["storeId"];
        $status=$_POST["status"];


        $query="INSERT INTO products VALUES (NULL,'$name',$price,'$description',$cid,$sid,'$status')";
        execute($query);
        header("Location:../views/ManageProduct.php");
    }

    function updateProduct($id)
    {
        $name=$_POST["pname"];
        $price=$_POST["price"];
        $description=$_POST["description"];
        $cid=$_POST["categoryId"];
        $sid=$_POST["storeId"];
        $status=$_POST["status"];

        $query="UPDATE products SET productName='$name',price=$price,productDescription='$description',categoryId=$cid,storeId=$sid,status='$status' where productId=$id";
        execute($query);
        header("Location:../views/ManageProduct.php");
    
    }

    function deleteProduct($id)
    {
       $query="DELETE FROM products WHERE productId=$id";
       get($query);
       header("Location:../views/ManageProduct.php");
        
    }
?>