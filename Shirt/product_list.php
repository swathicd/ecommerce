<?php

        $host="127.0.0.1"; // Host name 
        $username="root"; // Mysql username 
        $password=""; // Mysql password 
        $db_name="shirt"; // Database name 
        $tbl_name="product"; // Table name 


        $DBH = new PDO("mysql:host=$host;dbname=$db_name",$username,$password);

        $STH = $DBH->query("SELECT * FROM $tbl_name");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->fetchAll();

        $DBH=null;

?>
