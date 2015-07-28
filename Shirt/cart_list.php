<?php
        session_start();
        $host="127.0.0.1"; // Host name 
        $username="root"; // Mysql username 
        $password=""; // Mysql password 
        $db_name="shirt"; // Database name 
        $tbl_name="cart"; // Table name 
        $tbl_name1="product";

        
        $DBH = new PDO("mysql:host=$host;dbname=$db_name",$username,$password);
          $user=$_SESSION['user']; 
        $STH = $DBH->query("SELECT a.name,a.cost,a.id  FROM $tbl_name1 as a,$tbl_name as b where a.id=b.pid and b.usid='$user' ");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $cart_list = $STH->fetchAll();

        $DBH=null;

?>
