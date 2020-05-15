<?php 
    include_once '../models/database.php';

    if(isset($_POST["save"]))
    {
        updateCompanyInfo($_POST['id']);
    }

    function getComInfo()
    {
        $query="SELECT * FROM companyinfo";
        $com=get($query);
        return $com;
    }


    function updateCompanyInfo($id)
    {
        $name=$_POST["cname"];
        $amount=$_POST["amount"];
        $vat=$_POST["vat"];
        $address=$_POST["address"];
        $number=$_POST["phnNumber"];
        $country=$_POST["country"];
        $currency=$_POST["currency"];
        $message=$_POST["message"];


        $query="UPDATE companyinfo SET cName='$name',chargeAmount=$amount,vatCharge=$vat,cAddress='$address',cphoneNo=$number,country='$country',currency='$currency',message='$message' WHERE cId=$id";
        execute($query);
        header("Location:../views/companyinfo.php");
    }


?>