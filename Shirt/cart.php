
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<head>
  
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript"> 
       
    $(document).ready(function() {
          $( "#pay" ).click( function(){
                         $.post("finish.php", {}, function(data)
                                      {
                                            alert('Thanks for the visit');
                                      });
                                  });  
                     
                     });
    
           });
   
    </script>

<h3> Shopping Cart </h3>

</head>   
<body>
<?php include_once 'cart_list.php'; ?>
  
<div id="contentwrapper" class="cart_page">
    
    <div class="main_content">
      
        <ul class="ov_boxes">

            <li> <a href="product.php">
             Products
            </a> </li>   
            <li> <a href="index.php">
             Logout
            </a> </li>    
         
        </ul>
      </div>
    
    <div>
      
        <form id="clist">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product </th>
                        <th>Cost</th>
                    </tr> 
                </thead>
                <tbody>
                               
                 <?php foreach( $cart_list as $v):?>
		    <tr id="<?php echo $v['cartid']; ?>">
			 
                        <td><?php echo ($v['id']);?></td>
                        <td><?php echo ($v['name']);?></td>
                        <td><?php echo ($v['cost']);?></td> 
                       
                </tr>
		<?php endforeach;?>
                    
                    
                </tbody>
            </table>
        
            <button id="pay"> </button>
        </form>
    </div>

<p class="footer">@exclusive on <?php echo date('Y');?></p>

</div>
</body>
</html>

