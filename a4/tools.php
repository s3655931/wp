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
      foreach($_SESSION['cart']['seats'] as $key => $value)
      {
        if($_SESSION['cart']['seats'][$key] == '')
        {
          $_SESSION['cart']['seats'][$key] = 0;
        }
      }
      header("location: receipt.php");
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
    echo "</p>";
  }
  function printCust()
  {
    echo "<p>";
    echo "<strong><u>Customer Details</u></strong><br>";
    echo "Name: " .$_SESSION['cart']['cust']['name'];
    echo "<br>";
    echo "Email: " .$_SESSION['cart']['cust']['email'];
    echo "<br>";
    echo "Mobile No.: " .$_SESSION['cart']['cust']['mobile'];
    echo "<br>";
    echo "Credit Card No.: " .$_SESSION['cart']['cust']['card'];
    echo "<br>";
    echo "Credit Card Expiry: " .$_SESSION['cart']['cust']['expiry'];
    echo "</p>";
  }

  function printTicketDetails()
  {
    echo "<p>";
    if($_SESSION['cart']['seats']['STA'] >= 1)
    {
      echo "Standard Adults<br>";
    }
    if($_SESSION['cart']['seats']['STP'] >= 1)
    {
      echo "Standard Concession<br>";
    }
    if($_SESSION['cart']['seats']['STC'] >= 1)
    {
      echo "Standard Child<br>";
    }
    if($_SESSION['cart']['seats']['FCA'] >= 1)
    {
      echo "First Class Adults<br>";
    }
    if($_SESSION['cart']['seats']['FCP'] >= 1)
    {
      echo "First class Concession<br>";
    }
    if($_SESSION['cart']['seats']['FCC'] >= 1)
    {
      echo "First Class Child";
    }
    echo "</p>";
  }

  function printTicketQuant()
  {
    echo "<p>";
    foreach($_SESSION['cart']['seats'] as $key => $value)
    {
      if($_SESSION['cart']['seats'][$key] > 0)
        echo $value."<br>";
    }
    echo "</p>";
  }

  function printIndividualPrice()
  {
    echo "<p>";
    foreach($_SESSION['cart']['seats'] as $key => $value)
    {
      if($_SESSION['cart']['seats'][$key] > 0)
      {
        if((($_SESSION['cart']['movie']['hour'] == 'T12') &&
        !($_SESSION['cart']['movie']['day'] == 'SUN'|| $_SESSION['cart']['movie']['day'] == 'SAT'))
        || $_SESSION['cart']['movie']['day'] == 'MON' || $_SESSION['cart']['movie']['day'] == 'WED')
        {
          switch ($key) {
            case 'STA':
              echo '$'.number_format((float)(14 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'STP':
              echo '$'.number_format((float)(12.50 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'STC':
              echo '$'.number_format((float)(11 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'FCA':
              echo '$'.number_format((float)(24 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'FCP':
              echo '$'.number_format((float)(22.50 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'FCC':
              echo '$'.number_format((float)(21 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            default:
              break;
          }
        }
        else
        {
          switch ($key) {
            case 'STA':
              echo '$'.number_format((float)(19.80 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'STP':
              echo '$'.number_format((float)(17.50 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'STC':
              echo '$'.number_format((float)(15.30 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'FCA':
              echo '$'.number_format((float)(30 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'FCP':
              echo '$'.number_format((float)(27 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            case 'FCC':
              echo '$'.number_format((float)(24 * $_SESSION['cart']['seats'][$key]), 2, '.', '');
              break;
            default:
              break;
            }
        }
        echo "<br>";
      }
    }
    echo "</p>";
  }

  function printPrice()
  {
    $price = 0;

    if((($_SESSION['cart']['movie']['hour'] == 'T12') &&
    !($_SESSION['cart']['movie']['day'] == 'SUN'|| $_SESSION['cart']['movie']['day'] == 'SAT'))
    || $_SESSION['cart']['movie']['day'] == 'MON' || $_SESSION['cart']['movie']['day'] == 'WED')
    {
      $price = 14 * $_SESSION['cart']['seats']['STA']
      + 12.50 * $_SESSION['cart']['seats']['STP']
      + 11 * $_SESSION['cart']['seats']['STC']
      + 24 * $_SESSION['cart']['seats']['FCA']
      + 22.50 * $_SESSION['cart']['seats']['FCP']
      + 21 * $_SESSION['cart']['seats']['FCC'];
    }
    else
    {
        $price = 19.80 * $_SESSION['cart']['seats']['STA']
        + 17.50 * $_SESSION['cart']['seats']['STP']
        + 15.30 * $_SESSION['cart']['seats']['STC']
        + 30 * $_SESSION['cart']['seats']['FCA']
        + 27 * $_SESSION['cart']['seats']['FCP']
        + 24 * $_SESSION['cart']['seats']['FCC'];
    }

    $price = number_format((float)$price, 2, '.', '');
    return $price;
  }


  function printGST()
  {
    $price = printPrice();
    $GST = number_format((float)($price/11), 2, '.', '');
    return $GST;
  }

  function printTotal()
  {
    $price = printPrice();
    $total = number_format((float)(printGST() + $price), 2, '.', '');
    return $total;
  }


  function dateTime()
  {
    $day = '';
    switch ($_SESSION['cart']['movie']['day']) {
      case 'MON':
        $day = 'Monday';
        break;
      case 'TUE':
        $day = 'Tuesday';
        break;
      case 'WED':
        $day = 'Wednesday';
        break;
      case 'THU':
        $day = 'Thursday';
        break;
      case 'FRI':
        $day = 'Friday';
        break;
      case 'SAT':
        $day = 'Saturday';
        break;
      case 'SUN':
        $day = 'Sunday';
        break;
      default:
        break;
    }
    $time = str_replace('T','',$_SESSION['cart']['movie']['hour']);
    echo $day.' '.$time.':00';
    return $day.' '.$time.':00';
  }

  function getMovie()
  {
    $yourMovie = '';
    if($_SESSION['cart']['movie']['id'] == 'ANM')
    {
      $yourMovie = 'Dumbo';
    }
    elseif($_SESSION['cart']['movie']['id'] == 'ACT')
    {
      $yourMovie = 'Avengers: Endgame';
    }
    elseif($_SESSION['cart']['movie']['id'] == 'RMC')
    {
      $yourMovie = 'Top End Wedding ';
    }
    elseif($_SESSION['cart']['movie']['id'] == 'AHF')
    {
      $yourMovie = 'The Happy Prince';
    }
    echo $yourMovie;
  }

  function individualTickets()
  {
    $custName = $_SESSION['cart']['cust']['name'];
    $dateTime = dateTime();

    if($_SESSION['cart']['movie']['id'] == 'ANM')
    {
      $imgLink = '../../media/dumbo.jpg';
      $yourMovie = 'Dumbo [PG]';
    }
    elseif($_SESSION['cart']['movie']['id'] == 'ACT')
    {
      $imgLink = '../../media/endgame.jpeg';
      $yourMovie = 'Avengers: Endgame [PG]';
    }
    elseif($_SESSION['cart']['movie']['id'] == 'RMC')
    {
      $imgLink = '../../media/top-end-wed.jpg';
      $yourMovie = 'Top End Wedding [M]';
    }
    elseif($_SESSION['cart']['movie']['id'] == 'AHF')
    {
      $imgLink = '../../media/happy-prince.jpg';
      $yourMovie = 'The Happy Prince [MA]';
    }

    foreach($_SESSION['cart']['seats'] as $key => $value)
    {
      if($_SESSION['cart']['seats'][$key] > 0)
      {
        switch ($key) {
          case 'STA':
            $tickType = "1 x Standard Adult Ticket";
            break;
          case 'STP':
            $tickType = "1 x Standard Concession Ticket";
            break;
          case 'STC':
            $tickType = "1 x Standard Child Ticket";
            break;
          case 'FCA':
            $tickType = "1 x First Class Adult Ticket";
            break;
          case 'FCP':
            $tickType = "1 x First Class Concession Ticket";
            break;
          case 'FCC':
            $tickType = "1 x First Class Child Ticket";
            break;
          default:
            break;
        }
        $j = $_SESSION['cart']['seats'][$key];
        for ($i=0; $i < $j; $i++) {
          echo "<div class=\"ticket\">";
            echo "<div class=\"item1\">";
              echo "<div>Lunardo Cinema</div>";
              echo "<div>Your Ticket</div>";
            echo "</div>";
            echo "<div class=\"title\">Show this ticket at the front then enter the cinema<br> Enjoy the Movie!</div>";
            // This quote was taken from the village cinema online ticket
            echo "<div class=\"mov-container\">";
              echo "<div class=\"ticketLayout\">";
                echo "<img class=\"img\" src=\"".$imgLink."\" width=\"200\" alt=\"movie poster\">";

                echo "<div class=\"mov\">".$yourMovie."</div>";

                echo "<div class=\"name\"><p>Name: ".$custName."</p>";
                echo "<p>When: ".$dateTime."</p>";
                echo "<p>Where: Lunardo cinema</p>";
                echo "<p>Ticket: ".$tickType."</p>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
            echo "</div>";

          echo "</div>";
        }
      }

    }
  }

function inputValid()
{
	$name = $_POST['cust']['name'];

	if (empty($name))
	{
		echo "No name entered\n";
	}
	else if (!preg_match("/^[a-zA-z]+ +[a-zA-z]+$/", $name))
	{
		echo "Invalid name\n";
	}

	$email = $_POST['cust']['email'];

	if (empty($email))
	{
		echo "No email entered\n";
	}

	$mobile = $_POST['cust']['mobile'];

	if (empty($mobile))
	{
		echo "No mobile entered\n";
	}
	else if (!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/", $mobile))
	{
		echo "Invalid mobile\n";
	}

	$card = $_POST['cust']['card'];

	if (empty($card))
	{
		echo "No credit card entered\n";
	}
	else if (!preg_match("/( ?\d){19}|( ?\d){14}/", $card))
	{
		echo "Invalid credit card number\n";
	}

	// Expiry validation

	$temp = $_POST['cust']['expiry'];

	if (!empty($temp))
	{
		$temp .= " 1";

		$exp = date_create_from_format('Y-n j', $temp);

		//$exp = date_format($exp, 'm-Y');

		//echo $exp;

		$today = date_create("now");

		//$today = date_format($today, 'm-Y');

		//echo $today;

		$newval = date_diff($today, $exp);
		
		//echo $newval->format('%R%m');

		if ($newval->format('%R%a') < 28)
		{
			echo "Invalid expiry date";
		}
	}


}

?>
