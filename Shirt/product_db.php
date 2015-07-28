<?php

        session_start();
        $host="127.0.0.1"; // Host name 
        $username="root"; // Mysql username 
        $password=""; // Mysql password 
        $db_name="shirt"; // Database name 
        $tbl_name="cart"; // Table name 


        $DBH = new PDO("mysql:host=$host;dbname=$db_name",$username,$password);
      
       $selected_items=$POST['item'];   
       
       $STH = $DBH->query("SELECT cartid FROM cart order by cartid desc limit 1");
       $STH->setFetchMode(PDO::FETCH_ASSOC);
       $result = $STH->fetchAll();
       	
			foreach ($query as $row) 
			{
			$id=$row['cartid'];
                        }
       $count= $id++; 
       $user=$_SESSION['user'];
       for($i=1;$i<count($selected_items);$i++)
       {
         
        $nt_sql=$DBH->prepare("insert into $tbl_name(cartid,pid,usid) 
        values(?,?,?)");
        $nt_sql->bindParam(1, $count);
        $nt_sql->bindParam(2, $selected_items[$i]);
        $nt_sql->bindParam(3, $user);
       
        $nt_sql=$nt_sql->execute();
        $count= $id++; 
       }		
        
        $DBH=null;

?>
