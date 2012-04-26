<html>
<body>
<table border="0">
	<tr>
		<td width="70"><?php echo $month. "/". $day; ?>
		<td colspan="3"><?php echo $stock. " Stocks"; ?>
		<td align="right"><?php echo "P ". number_format($TC, 2, '.', ','); ?>
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
		<td colspan="3"><?php echo "Transfer Fee"; ?>
		<td align="right"><?php echo number_format($TF, 2, '.', ','); ?>
	</tr>
	<tr>
		<td>&nbsp;
		<td>&nbsp;
		<td colspan="2"><?php echo "Cash"; ?>
		<td>&nbsp;
		<td align="right"><?php echo "P ". number_format($cash_b, 2, '.', ','); ?>
	</tr>
	<tr>
		<td>&nbsp;
		<td>&nbsp;
		<td>&nbsp;
		<td colspan="3"><?php echo "Bought ". number_format($volume). " shares @ P ". number_format($price, 2, '.', ','). " (". $hr. ":". $min. ")"; ?>
	</tr>
</table>
<table border="0">
	<tr>
		<td><a href="show.php"><font color="#0000FF">Perform another computation.</font></a>
	</tr>
</table>
</body>
</html>
