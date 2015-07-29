
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/general.css" type="text/css">
    <link rel="stylesheet" href="../css/table.css" type="text/css">
    
    <title>ADMIN PRODUCT</title>
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
    <h3> PRODUCT MAINTAIN PAGE</h3>

 </head>   
<body>
    <?php include_once '../model/admin_list.php'; ?>
  
        <div id="contentwrapper" class="product_page">

            <div class="header">

                <ul class="ov_boxes">

                    <li> <a href="../index.php">
                     Logout
                    </a> </li>    

                </ul>

              </div>

            <div id="body">
                <form id="plist">
                              <table class="imagetable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product </th>
                                    <th>Cost</th>
                                    <th>Description</th>
                                </tr> 
                            </thead>
                            <tbody>

                             <?php foreach( $prod_list as $v):?>
                                <tr id="<?php echo $v['id']; ?>">

                                    <td><?php echo ($v['id']);?></td>
                                    <td><?php echo ($v['name']);?></td>
                                    <td><?php echo ($v['cost']);?></td>
                                    <td><?php echo ($v['des']);?></td>
                             
                            </tr>
                            <?php endforeach;?>

                            </tbody>

                        </table>
                   
                 </form>
             </div>

            <div  class="footer">
                <p ><b>@exclusive on <?php echo date('Y');?></b></p>
            </div>
        </div>
</body>
</html>

