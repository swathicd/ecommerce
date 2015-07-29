
<!DOCTYPE html>
<html lang="en">

<head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>CART</title>
            <h3> SHOPPING CART </h3>
            <link rel="stylesheet" href="../css/general.css" type="text/css">
            <link rel="stylesheet" href="../css/table.css" type="text/css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
            <script type="text/javascript">
                $(document).ready(function(){
                $(".remove").click(function(){
                        var cartid=this.id;
                        alert(cartid);
                         $.ajax({
                                method: "POST",
                                url: "cart_maintain.php",
                                data: { cartid:cartid }
                              })
                                .done(function( msg ) {
                                 location.reload();
                             });
                  });
            });

            </script>  

</head>   
<body>
            <?php include_once '../model/cart_list.php'; ?>

            <div id="contentwrapper" class="cart_page">

                <div class="header">

                    <ul class="ov_boxes">

                        <li> <a href="product.php">
                         Products
                        </a> </li>   
                        <li> <a href="../index.php">
                         Logout
                        </a> </li>    

                    </ul>
                  </div>

                <div id="body">

                    <form id="clist" method="post" action="../model/finish.php">

                        <table class="imagetable">
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
                                  <!--  <td><button class="remove" id="<?php echo $v['cartid'];?>" >Remove</button></td> --> 
                            </tr>
                            <?php endforeach;?>

                            </tbody>

                        </table>
                       <?php
                         $sum=0;
                          foreach ($cart_list as $k)
                         {
                           $sum=$sum+$k['cost'];
                         } 
                          echo 'Total :'.$sum;
                          ?>

                        <input type="hidden" name="total" value="<?php echo $sum; ?>"/>
                      
                        <br> <br> <br>
                        <input type="submit" class="style_b" value="Finish"/>

                    </form>
                </div>
            
            <div class="footer">    
                    <p ><b>@exclusive on <?php echo date('Y');?></b></p>
            </div>
            </div>
</body>
</html>

