<?php
        session_start();
        $host="127.0.0.1"; // Host name 
        $username="root"; // Mysql username 
        $password=""; // Mysql password 
        $db_name="shirt"; // Database name 
        // Table name 
      

        
        $DBH = new PDO("mysql:host=$host;dbname=$db_name",$username,$password);
        
        $STH = $DBH->prepare("select * from product ");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $exec = $STH->execute();
        $prod_list=$STH->fetchAll();
        
      
        $DBH=null;
     
?>
