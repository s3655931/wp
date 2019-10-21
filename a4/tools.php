<?php
  session_start();

  function preShow( $arr, $returnAsString=false )
  {
    $fileName = basename($_SERVER["REQUEST_URI"], ".php");
    if($fileName == "index")
    {
      $ret = '<pre style="color:white">' . print_r($arr, true) . '</pre>';
      if ($returnAsString)
      return $ret;
      else
      echo $ret;
    }

    elseif ($fileName == "receipt")
    {
      $ret = '<pre>' . print_r($arr, true) . '</pre>';
      if ($returnAsString)
      return $ret;
      else
      echo $ret;
    }
  }

  function printMyCode() {
  $fileName = basename($_SERVER["REQUEST_URI"], ".php");
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  if($fileName == "index")
  {
    echo "<pre class='mycode'><ol>";
    foreach ($lines as $line)
    echo '<li style="color:white">'.rtrim(htmlentities($line)).'</li>';
    echo '</ol></pre>';
  }
  elseif ($fileName == "receipt")
  {
    echo "<pre class='mycode'><ol>";
    foreach ($lines as $line)
    echo '<li>'.rtrim(htmlentities($line)).'</li>';
    echo '</ol></pre>';
  }
  }

  function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "/* Generated with A4's php2js() function */";
  echo " var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
  }

  if (isset($_POST['session-reset'])) {
  foreach($_SESSION as $something => &$whatever) {
  unset($whatever);
  }
  }

  function sessionArray()
  {
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $_SESSION['cart'] = $_POST;
      // $_SESSION['movie'] = $_POST['movie'];
      // $_SESSION['seats'] = $_POST['seats'];
      // $_SESSION['cust'] = $_POST['cust'];
      // $_SESSION['order'] = $_POST['order'];
    }
  }
  function receiptRedirectCheck()
  {
    if (!isset($_SESSION["cart"]))
     {
        header("location: index.php");
     }
  }

  function receiptArray()
  {
    $fileName = basename($_SERVER["REQUEST_URI"], ".php");
    if($fileName == "receipt")
    {
      $ArrayReceipt = $_SESSION['cart'];
    }
  }
  function printMessage()
  {
    echo $_SESSION['cart']['cust']['name'];
  }
  function printDetails()
  {
    echo "<p>";
    echo "<strong><u>Company Details</u></strong><br>
    Owner: Sebastian LaCroix<br> Email: lunardocinema@hotmail.com<br>
    Phone No.: (03) 9536 4931<br> Address: 742 Evergreen Terrace, Sunshine<br>
    ABN number: 00 123 456 789";
    echo "<br><br>";
    echo "<strong><u>Customer Details</u></strong><br>";
    echo "Name: " .$_SESSION['cart']['cust']['name'];
    echo "<br>";
    echo "Email: " .$_SESSION['cart']['cust']['email'];
    echo "<br>";
    echo "Mobile No.: " .$_SESSION['cart']['cust']['mobile'];

    echo "</p>";
  }
  function printTicket()
  {
    if($_SESSION['cart']['movie']['id'] == 'ACT')
    {
      echo "Hi";
    }
    $total = 0;
  }
?>
