<?php

function check_login()
{
    if(!$_SESSION['login_info']){
        echo 'login fail';
        header ("Location: /mergediy/login.php");
    }
}

// function query($sql, $data = [])
// {
//     global $db;

//     $query = $db->prepare($sql);

//     foreach ($data as $key => $value) {
//         $query->bindValue($key, $value, is_numeric($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
//     }

//     $query->execute();

//     return $query;
// }