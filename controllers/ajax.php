<?php
    $conn=mysqli_connect('localhost','root','','wt_project');
    if(!$conn)
    {
        echo "Database Error!";
    }

    $query="SELECT sum(totalprice) as `totalprice` from cart";
    $res=mysqli_query($conn, $query);
    $data=mysqli_fetch_array($res);

    
?>

<b><?php echo $data['totalprice'];?></b>