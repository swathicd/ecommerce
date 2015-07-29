
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/general.css" type="text/css">
    
    <title>PRODUCT</title>
            <style type="text/css">
                ul.products li {
                width: 250px;
                display: inline-block;
                margin: 10px;
                border: 10px solid #D0D0D0;
                vertical-align: top;
                *display: inline;
                *zoom: 1;
            }
            </style>
    <h3> PRODUCT LISTINGS </h3>

 </head>   
<body>
    <?php include_once '../model/product_list.php'; ?>
  
        <div id="contentwrapper" class="product_page">

            <div class="header">

                <ul class="ov_boxes">

                    <li> <a href="cart.php">
                      Shopping Cart
                    </a> </li>   


                    <li> <a href="../index.php">
                     Logout
                    </a> </li>    

                </ul>

              </div>

            <div id="body">
                <form id="plist" method="post" action="../model/product_db.php">
                         <ul class="products">
                                <?php foreach( $result as $v):?>

                                    <li>

                                          <h4><?php echo ($v['name']);?></h4>
                                          <p><?php echo '$'.($v['cost']);?></p>
                                          <img src="../img/<?php echo ($v['id']);?>.jpg" />
                                          <input type='checkbox' name="prcheck[]" id="<?php echo ($v['id']);?>" value="<?php echo ($v['id']);?>"/>

                                    </li>

                                <?php endforeach;?>  
                        </ul>
                    
                    <input  type="submit" value="Cart Item"/>
                   
                 </form>
             </div>

            <div  class="footer">
                <p ><b>@exclusive on <?php echo date('Y');?></b></p>
            </div>
        </div>
</body>
</html>

