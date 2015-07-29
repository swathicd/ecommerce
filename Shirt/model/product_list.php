<?php
        session_start();    
        $host="127.0.0.1"; // Host name 
        $username="root"; // Mysql username 
        $password=""; // Mysql password 
        $db_name="shirt"; // Database name 
        $tbl_name="product"; // Table name 
        $tbl_name1="cart";

        $DBH = new PDO("mysql:host=$host;dbname=$db_name",$username,$password);

        $STH = $DBH->query("SELECT * FROM $tbl_name");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $result = $STH->fetchAll();
        
        $user=$_SESSION['user'];
        $STH = $DBH->query("SELECT pid FROM $tbl_name1 where usid='$user' and status='1' ");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $cart_id = $STH->fetchAll();
        

        $DBH=null;

?>
