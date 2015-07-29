<?php

        session_start();
        $host="127.0.0.1"; // Host name 
        $username="root"; // Mysql username 
        $password=""; // Mysql password 
        $db_name="shirt"; // Database name 
        $tbl_name="transaction";
         $tbl_name1="cart";// Table name 
        $id=0;

       $DBH = new PDO("mysql:host=$host;dbname=$db_name",$username,$password);
      
    
       $sum=$_POST['total'];
       $user=''.$_SESSION['user'].'';
      
       $STH = $DBH->query("SELECT id FROM transaction order by id desc limit 1");
       $STH->setFetchMode(PDO::FETCH_ASSOC);
       $result = $STH->fetchAll();
       	
			foreach ($result as $row) 
			{
			$id=$row['id'];
                        }
       if($id)
                        $count= $id+1; 
       else
            $id=1;
       
    
        $nt_sql=$DBH->prepare("insert into $tbl_name(id,total,usid) 
        values(?,?,?)");
        $nt_sql->bindParam(1, $count);
        $nt_sql->bindParam(2, $sum);
        $nt_sql->bindParam(3, $user);
       
        $nt_sql=$nt_sql->execute();
      
          if($nt_sql)
         {
            $nt_sql=$DBH->prepare("update  $tbl_name1 set status=0 where usid='$user' ");
            $nt_sql=$nt_sql->execute();
           header("location:../index.php");
         }
         
         else
         {
            echo 'Error in completion';
         }
        $DBH=null;

?>
