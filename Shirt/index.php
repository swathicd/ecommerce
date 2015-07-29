<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/general.css" type="text/css">
	<title>SHIRT</title>
        
      
</head>
<body>

<div id="container">
    <div class="intro"><b> <h3 > <font color="white">LOGIN </font></h3></b></div>

	<div id="body">
            
            <form id ="login_form"  method="post" action="model/checklogin.php" >
						<fieldset>
							<table>
								<tr>
									<td><label>User ID</label></td>
									<td><input  type="text" id="uid" name="uid" ></input></td>
								</tr>
								<tr>
									<td><label>Password</label></td>
									<td><input type="text" id="pass" name="pass" ></input></td>
								</tr>
                                                                <tr>
                                                                    <td><button  id="submit">Login</button></td>
                                                               </tr>
							</table>
							
							
							
						</fieldset>
					</form>
	</div>

    <div class="footer"><p ><b>@exclusive on <?php echo date('Y');?></b></p></div>
</div>

 
    
    
</body>
</html>


  