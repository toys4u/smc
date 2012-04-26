<html>
<?php include('header.php'); ?>
<body>
<?php
// input
$transaction = $_POST['transaction'];
$month = $_POST['month'];
$day = $_POST['day'];
$hr = $_POST['hr'];
$min = $_POST['min'];
$stock = strtoupper($_POST['stock']);
$BV = $_POST['BV'];
$price = $_POST['price'];
$volume = $_POST['volume'];
// process
$TC = $price*$volume;
$BC = ($TC*0.015)*1.12;
$SCCP = $TC*0.0001;
$TF = 112;
$CF = 22.4;
$tax = $TC*0.005;
$cash_b = $TC+$BC+$SCCP+$TF;
$cash_s = $TC-$BC-$SCCP-$CF-$tax;
$CG = $TC-$BV;
?>
<!-- output -->
<table align="center" width="75%" bgcolor="#C2FFC2" border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td>
<?php
// checking of variables
if (is_numeric($month) && is_numeric($day) && is_numeric($hr) && is_numeric($min)) {
	$checkpoint = 'false';
}
else {
	echo '<font color="#FF2525">Date and time is not properly set.</font>'. '<br />';
	$checkpoint = 'true';
}
if (!isset($transaction)) {
	echo '<font color="#FF2525">Type of transaction is not set.</font>'. '<br />';
	$checkpoint = "true";
}
else {
	if ($transaction == 'sell') {
		if (empty($BV)) {
			echo '<font color="#FF2525">Book value is not set.</font>'. '<br />';
		$checkpoint = "true";
		}
	}
}
if (empty($stock)) {
	echo '<font color="#FF2525">Stock symbol is not set.</font>'. '<br />';
	$checkpoint = "true";
}
if (empty($price)) {
	echo '<font color="#FF2525">Price per share is not set.</font>'. '<br />';
	$checkpoint = "true";
}
if (empty($volume)) {
	echo '<font color="#FF2525">Volume of shares is not set.</font>'. '<br />';
	$checkpoint = "true";
}
else {
	if (ctype_digit($volume)) {
		$checkpoint = 'false';
	}
	else {
		echo '<font color="#FF2525">Volume of shares is not properly set.</font>'. '<br />';
		$checkpoint = 'true';
	}
}
if ($checkpoint == "true") {
	echo '<br /><br /> Go back and fill out necessary fields.';
}
else {
	echo 'Copy and paste the following in the email that you would be submitting.'. '<br /><br />';
	switch ($transaction) {
		case 'buy':
			include('calc_buy.php');
		break;
		case 'sell':
			include('calc_sell.php');
		break;
		default:
			echo '<font color="#FF2525"><b>If you see this message there is something wrong with your session. Please send us a feedback with the details of your session before seeing this message.</b></font>';
	}
}
?>
	</tr>
</table>
<?php include ('footer.php'); ?>
</body>
</html>
