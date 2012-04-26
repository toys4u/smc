<html>
<body>
<table border="0">
	<tr>
		<td width="70"><?php echo $month. "/". $day; ?>
		<td colspan="3"><?php echo "Cash"; ?>
		<td align="right"><?php echo "P ". number_format($cash_s, 2, '.', ','); ?>
	</tr>
	<tr>
		<td>&nbsp;
		<td colspan="3"><?php echo "Brokerage Commission"; ?>
		<td align="right"><?php echo number_format($BC, 2, '.', ','); ?>
	</tr>
	<tr>
		<td>&nbsp;
		<td colspan="3"><?php echo "SCCP Fee"; ?>
		<td align="right"><?php echo number_format($SCCP, 2, '.', ','); ?>
	</tr>
	<tr>
		<td>&nbsp;
		<td colspan="3"><?php echo "Cancellation Fee"; ?>
		<td align="right"><?php echo number_format($CF, 2, '.', ','); ?>
	</tr>
	<tr>
		<td>&nbsp;
		<td colspan="3"><?php echo "Stock Transaction Tax"; ?>
		<td align="right"><?php echo number_format($tax, 2, '.', ','); ?>
	</tr>
	<tr>
		<td>&nbsp;
		<td>&nbsp;
		<td colspan="2"><?php echo $stock. " Stocks"; ?>
		<td>&nbsp;
		<td align="right"><?php echo "P ". number_format($BV, 2, '.', ','); ?>
	</tr>
	<tr>
		<td>&nbsp;
		<td>&nbsp;
		<td colspan="2"><?php echo "Capital Gain"; ?>
		<td>&nbsp;
		<td align="right"><?php
if($CG < 0) {
	$CG *= -1;
	echo "(". number_format($CG, 2, '.', ','). ")";
}
else {
	echo number_format($CG, 2, '.', ',');
}
?>
	</tr>
	<tr>
		<td>&nbsp;
		<td>&nbsp;
		<td>&nbsp;
		<td colspan="3"><?php echo "Sold ". number_format($volume). " shares @ P ". number_format($price, 2, '.', ','). " (". $hr. ":". $min. ")"; ?>
	</tr>
</table>
<table border="0">
	<tr>
		<td><a href="show.php"><font color="#0000FF">Perform another computation.</font></a>
	</tr>
</table>
</body>
</html>
