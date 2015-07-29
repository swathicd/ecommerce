<?php

        session_start();
        $host="127.0.0.1"; // Host name 
        $username="root"; // Mysql username 
        $password=""; // Mysql password 
        $db_name="shirt"; // Database name 
        $tbl_name="cart"; // Table name 
        $id=0;
        $status=1;

        $DBH = new PDO("mysql:host=$host;dbname=$db_name",$username,$password);
      
       $selected_items=$_POST['prcheck'];   
     
       
       $STH = $DBH->query("SELECT cartid FROM cart order by cartid desc limit 1");
       $STH->setFetchMode(PDO::FETCH_ASSOC);
       $result = $STH->fetchAll();
       	
			foreach ($result as $row) 
			{
			$id=$row['cartid'];
                        }
       $count= $id+1; 
       $user=$_SESSION['user'];
       
    
       foreach($selected_items as $value)
       {
         
        $nt_sql=$DBH->prepare("insert into $tbl_name(cartid,pid,usid,status) 
        values(?,?,?,?)");
        $nt_sql->bindParam(1, $count);
        $nt_sql->bindParam(2, $value);
        $nt_sql->bindParam(3, $user);
        $nt_sql->bindParam(4, $status); 
        $nt_sql=$nt_sql->execute();
        $count= $id+1; 
       }		
        
        $DBH=null;
         header("location:../view/cart.php");

?>
