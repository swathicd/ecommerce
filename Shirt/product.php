
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<head>
  
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript"> 
        var selected = new Array();
    $(document).ready(function() {
    
    
                $( "#submit" ).click( function(){
                    $("input:checkbox[name=prcheck]:checked").each(function() {
                         selected.push($(this).val());
                     });
              
         
                $.post("product_db.php", {item:selected}, function(data)
                                      {
                                            alert('Update Successful');
                                      });
                                  });    

    });
   
    </script>
   

  
<style type="text/css">
    ul.products li {
    width: 200px;
    display: inline-block;
    vertical-align: top;
    *display: inline;
    *zoom: 1;
}
</style>
<h3> Product Listings </h3>

</head>   
<body>
<?php include_once 'product_list.php'; ?>
  
<div id="contentwrapper" class="product_page">
    
    <div class="main_content">
      
        <ul class="ov_boxes">

            <li> <a href="cart.php">
              Shopping Cart
            </a> </li>   


            <li> <a href="index.php">
             Logout
            </a> </li>    
         
        </ul>
        
      </div>
    
    <div>
       
        <form id="plist">
                  
                 <ul class="products">
                  
                <?php foreach( $result as $v):?>
                    <li>
		   
                          <h4><?php echo ($v['name']);?></h4>
                          <p><?php echo ($v['cost']);?></p>
                          <input type='checkbox' name="prcheck" id="<?php echo ($v['id']);?>" value=""/>
                   
                    </li>
		<?php endforeach;?>  
                  
                </ul>
            <button  id="submit">Cart Item</button>
                </form>
        </div>

<p class="footer">@exclusive on <?php echo date('Y');?></p>

</div>
</body>
</html>

