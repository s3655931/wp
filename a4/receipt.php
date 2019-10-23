<?php
  include 'tools.php';
  //writeToFile();
  receiptRedirectCheck();
  receiptArray();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    .item1{grid-area: banner;}
    .item2{grid-area: details;}
    .item3{grid-area: order;}
    .item4{grid-area: message;}
    .item5{grid-area: custDetails;}

    .itemItem{grid-area: item;}
    .quantityItem{grid-area: quantity;}
    .PriceItem{grid-area: price;}
    .eventItem{grid-area: event;}
    .quantNoItem{grid-area: quantNo;}
    .princeNoItem{grid-area: priceNo;}
    .GSTItem{grid-area: GST;}
    .GSTNoItem{grid-area: GSTNo;}
    .TotalItem{grid-area: Total;}
    .TotalNoItem{grid-area: TotalNo;}
    .blank{grid-area: blank;}
    .ticketList{grid-area: ticketList;}
    .Subtotal{grid-area: Subtotal;}
    .SubtotalNo{grid-area: SubtotalNo;}

    .grid-container
    {
      display: grid;
      grid-template-areas:
      'banner banner banner banner banner'
      'custDetails custDetails custDetails details details'
      'message message message message message'
      'message message message message message'
      'order order order order order'
      'order order order order order'
      'order order order order order'
      'order order order order order'
      'order order order order order'
      'order order order order order';
      background-color: black;
    }

    .grid-priceDetails
    {
      display: grid;
      grid-template-areas:
      'item item item item item quantity price'
      'event event event event event blank blank'
      'ticketList ticketList ticketList ticketList ticketList quantNo priceNo'
      'Subtotal Subtotal Subtotal Subtotal Subtotal Subtotal SubtotalNo'
      'GST GST GST GST GST GST GSTNo'
      'Total Total Total Total Total Total TotalNo';
      border: solid;
    }
     .item1{
      background-color: black;
      color: white;
      font-size: 40px;
      padding: 30px 0px 0px 0px;
      text-align: center;
    }
    .grid-container > .item2
    {
      background-color: rgb(255, 255, 255);
      text-align: right;
      padding: 10px;
    }
    .grid-container > .item5
    {
      background-color: rgb(255, 255, 255);
      text-align: left;
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
      margin: auto;
    }
    .body{
      background-color: grey;
    }
    .body > div{
      width: 21cm;
      height: 29.7cm;
      margin: 46px auto;
      background-color: white;
    }
    .itemItem
    {
      background-color: #9c9c9c;
      /* border: solid; */
    }
    .quantityItem
    {
      background-color: #9c9c9c;
      /* border: solid; */
    }
    .PriceItem
    {
      background-color: #9c9c9c;
      /* border: solid; */
    }
    .ticketList
    {
      text-align: left;
      margin: auto;
    }
    .img{
      grid-area: image;
      margin: 20px 20px 0px 50px;
    }
    .mov{
      grid-area: mov;
      text-align: center;
      font-size: 40px;
      margin: 20px 40px 0px 0px;
    }
    .name{
      grid-area: Name;
      margin: 50px 40px 50px 40px;
      font-size: 30px;
    }
    .title
    {
      margin: 50px 50px 0px 50px;
      grid-area: title;
      text-align: center;
      font-size: 30px;
    }
    .ticket
    {
      display: grid;
      grid-template-areas:
      'banner banner banner banner banner banner'
      'blank blank blank blank blank blank '
      'title title title title title title '
      'layout layout layout layout layout layout'
      'layout layout layout layout layout layout'
      'layout layout layout layout layout layout'
      'layout layout layout layout layout layout'
      'layout layout layout layout layout layout';
    }

    .mov-container{
      grid-area: layout;
      background-color:  #d2d2d2;
      margin: 50px 150px 150px 150px;
    }

    .ticketLayout
    {
      display: grid;
      grid-template-areas:
      'image image image mov mov mov'
      'Name Name Name Name Name Name'
      'Name Name Name Name Name Name'
      'Name Name Name Name Name Name'
      'Name Name Name Name Name Name'
      'Name Name Name Name Name Name';
    }
    </style>
  </head>
  <body class="body">
    <div class="grid-container">
      <div class="item1">
        <div>Lunardo Cinema</div>
        <div>Your Order</div>
      </div>
      <div class="item2"> <?php printDetails(); ?> </div>
      <div class="item3">
        <div class=grid-priceDetails>
          <div class=itemItem>Item(s)</div>
          <div class=quantityItem>Quantity</div>
          <div class=PriceItem>Price</div>
          <div class=eventItem><?php getMovie(); echo "<br>"; echo dateTime();?></div>
          <div class=quantNoItem><?php printTicketQuant();?></div>
          <div class=princeNoItem><?php printIndividualPrice();?></div>
          <div class=GSTItem>GST:</div>
          <div class=GSTNoItem>$<?php echo printGST();?></div>
          <div class=TotalItem>Total:</div>
          <div class=TotalNoItem>$<?php echo printTotal();?></div>
          <div class=ticketList><?php printTicketDetails();?></div>
          <div class="Subtotal">Subtotal:</div>
          <div class="SubtotalNo">$<?php echo printPrice(); ?></div>
        </div>
      </div>
      <div class="item4">
        <p> Dear <?php printMessage();?>,
          <br> Thank you for recent purchase from Lunardo Cinema.
        <br><br>Your invoice and ticket's details are listed below:</p>
      </div>
      <div class="item5"><?php printCust();?></div>
    </div>
    <?php individualTickets(); ?>
    <!-- <div class="ticket">
      <div class="item1">
        <div>Lunardo Cinema</div>
        <div>Your Ticket</div>
      </div>
      <img class="img" src="../../media/endgame.jpeg" width="200" alt="avengers poster">
      <div class="mov">Avenger [PG]</div>
      <div class="name"><p>Name: dasd dsa</p><p>When: Tuesday 12:00</p>
        <p>Where: Lunardo cinema</p>
        <p>Ticket: Standard Adult</p>
      </div>
      <div class="title">Show this ticket at the front then enter the cinema<br> Enjoy the Movie!</div>
    </div> -->
  </body>
</html>
<?php
preShow($_POST); // ie echo a string
preShow($_SESSION);
$aaarg = preShow($_SESSION['movie'], true); // ie return as a string
printMyCode(); // prints all lines of code in this file with line numbers
?>
