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

		if ($newval->format('%R%m') < 1)
		{
			echo "Invalid expiry date";
		}
	}


}

?>
