<?php
  include 'tools.php';
  receiptRedirectCheck();
  receiptArray();
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    .item1{grid-area: banner;}
    .item2{grid-area: details;}
    .item3{grid-area: order;}
    .item4{grid-area: message;}

    .grid-container
    {
      display: grid;
      grid-template-areas:
      'banner banner banner banner banner'
      /* 'banner banner banner banner banner' */
      'message message message details details'
      'message message message details details'
      'message message message details details'
      'message message message details details'
      'message message message details details'
      'order order order order order'
      'order order order order order'
      'order order order order order'
      'order order order order order'
      'order order order order order'
      'order order order order order';
      background-color: black;
    }
    .grid-container > .item1{
      background-color: black;
      color: white;
      margin: auto;
      font-size: 40px;
    }
    .item1 > div{
      text-align: center;
    }
    .grid-container > .item2
    {
      background-color: rgb(255, 255, 255);
      text-align: right;
      padding: 10px;
    }
    .item2 > p
    {
      font-size: 15px;
    }
    .grid-container > .item3
    {
      background-color: rgb(255, 255, 255);
      text-align: center;
      font-size: 30px;
      padding: 10px;
    }
    .grid-container > .item4
    {
      background-color: rgb(255, 255, 255);
      text-align: left;
      padding: 10px;
    }
    .item4 > p
    {
      font-size: 20px;
      position: absolute;
      left: auto;
    }
    body{
      background-color: grey;
    }
    body > div{
      width: 21cm;
      height: 29.7cm;
      margin:0 auto;
      border: solid;
      background-color: white;
    }

    </style>
  </head>
  <body>
    <div class="grid-container">
      <div class="item1">
        <div>Lunardo Cinema</div>
        <div>Your Order</div>
      </div>
      <div class="item2"> <?php printDetails(); ?> </div>
      <div class="item3"><?php printTicket(); ?></div>
      <div class="item4">
        <p> Dear <?php printMessage(); ?>,
          <br> Thank you for recent purchase from Lunardo Cinema.
        <br><br>Your order and ticket's details are listed below:</p>
      </div>
    </div>
  </body>
</html>
<?php
preShow($_POST); // ie echo a string
preShow($_SESSION);
$aaarg = preShow($_SESSION['movie'], true); // ie return as a string
printMyCode(); // prints all lines of code in this file with line numbers
?>
