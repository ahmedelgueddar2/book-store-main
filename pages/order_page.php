<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/order_page.css">
    <title>Payment</title>
</head>
<body>
     <div class="left">
         <a href="book_page.php">Back</a>
     <p class="title">BOOK STORE</p>
    <p class="dis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis corrupti corporis. Et eius at sapiente cum fugit odit eligendi rerum ipsum. Accusamus reiciendis autem ipsum asperiores rerum facere odit.</p>
     </div>

     <form class="right" action="../php/order.php" method="POST">
         <p>Confirm Order</p>

         <p class="pay">Payment Information</p>

         <div>
            <input type="text" name="name" placeholder="Name of the card">
         </div>
         
         <div>
         <input type="text" name="number" placeholder="Credit Card Number">
         </div>
         
         <div class="bottom">
            <input type="text" name ="date" placeholder="MM/YY">
            <input type="text" name="cvc" placeholder="CVC">
         </div>

         <input type="submit" name="submit" value="Order">

         <?php
            if(isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error']; ?></p>
       <?php } ?>
    </form>
</body>
</html>