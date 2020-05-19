<?php 
    include_once '../models/database.php';

    if(isset($_POST['add']))
    {
        insertCart();
    }

    if(isset($_POST["orderinfo"]))
    {
        deleteCart();
    }

    function getAllCart()
    {
        $query="SELECT * FROM cart";
        $carts=get($query);
        return $carts;
    }

    // function insertOrder()
    // {
    //     $name=$_POST['cname'];
    //     $email=$_POST['email'];
    //     $totalprice=$_POST["totalprice"];

    //     $query="INSERT into orderinfo values(NULL,'$name','$email',$totalprice)";
    //     execute($query);
    //     header("Location:../views/order.php");

    // }

    function insertCart()
    {
         $pid=$_POST["productId"];
         $qty=$_POST["qty"];
         $totalprice=$_POST["price"]*$qty;
        

         $query="INSERT INTO cart VALUES (NULL,$pid,$qty,$totalprice)";
         execute($query);
         header("Location:../views/cart.php");
    }

    function deleteCart()
    {
        $query="DELETE FROM cart";
        get($query);
        header("Location:../views/menu.php");
    }
?>