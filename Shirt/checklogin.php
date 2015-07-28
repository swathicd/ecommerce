<?php
       session_start(); 
   
        $host="127.0.0.1"; // Host name 
        $username="root"; // Mysql username 
        $password=""; // Mysql password 
        $db_name="shirt"; // Database name 
        $tbl_name="login"; // Table name 


        // username and password sent from form 
        $myusername=$_POST['uid']; 
        $mypassword=$_POST['pass']; 

        //PHP Data Objects
        $DBH = new PDO("mysql:host=$host;dbname=$db_name",$username,$password);
        $STH = $DBH->query("SELECT * FROM $tbl_name WHERE uid='$myusername' and pass='$mypassword'");
        $result=$STH->setFetchMode(PDO::FETCH_ASSOC);

        //close the connection
         $DBH=null;
        // If result matched $myusername and $mypassword, table row must be 1 row
        if($result){
           $_SESSION['user']=$myusername;
            header("location:home.php");
        }
        else
         {
            echo "Wrong Username or Password";
        }
      
?>
