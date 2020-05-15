<?php include_once '../models/database.php';
    
    
    function UserInfo($id)
    {   
        $query="SELECT * FROM userinfo WHERE userId=$id";
        $group=get($query);
        return $group[0];
    }

    
?>