<?php
    $host='localhost';
    $db_name='meta';
    $db_user_name='root';
    $db_pass='';
    $db=new mysqli($host,$db_user_name,$db_pass,$db_name);
    if ($db -> connect_errno) {
        echo "Failed to connect to MySQL: " . $db -> connect_error;
        exit();
      }


      function query($sql){
          global $db;
        if (!$result=$db->query($sql)) {
            die ("Error: " . $sql . "<br>" . $db->error);
            } 
            
       // $db->close();
        return $result;
      }