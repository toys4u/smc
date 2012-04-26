<html>
<?php include('header.php'); ?>
<body>
<table align="center" width="75%" bgcolor="#C2FFC2" border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td>Fill out the following and click submit.
	</tr>
	<tr>
		<td>
			<form action="calc.php" method="post">
			Date of transaction:
<select name="month">
	<option>-Month-
	<option>01
	<option>02
	<option>03
	<option>04
	<option>05
	<option>06
	<option>07
	<option>08
	<option>09
	<option>10
	<option>11
	<option>12
</select>
<select name="day">
	<option>-Day-
	<option>01
	<option>02
	<option>03
	<option>04
	<option>05
	<option>06
	<option>07
	<option>08
	<option>09
	<option>10
	<option>11
	<option>12
	<option>13
	<option>14
	<option>15
	<option>16
	<option>17
	<option>18
	<option>19
	<option>20
	<option>21
	<option>22
	<option>23
	<option>24
	<option>25
	<option>26
	<option>27
	<option>28
	<option>29
	<option>30
	<option>31
</select>
Time:<select name="hr">
	<option>-hr-
	<option>01
	<option>02
	<option>03
	<option>04
	<option>05
	<option>06
	<option>07
	<option>08
	<option>09
	<option>10
	<option>11
	<option>12
</select>
<select name="min">
	<option>-min-
	<option>00
	<option>01
	<option>02
	<option>03
	<option>04
	<option>05
	<option>06
	<option>07
	<option>08
	<option>09
	<option>10
	<option>11
	<option>12
	<option>13
	<option>14
	<option>15
	<option>16
	<option>17
	<option>18
	<option>19
	<option>20
	<option>21
	<option>22
	<option>23
	<option>24
	<option>25
	<option>26
	<option>27
	<option>28
	<option>29
	<option>30
	<option>31
	<option>32
	<option>33
	<option>34
	<option>35
	<option>36
	<option>37
	<option>38
	<option>39
	<option>40
	<option>41
	<option>42
	<option>43
	<option>44
	<option>45
	<option>46
	<option>47
	<option>48
	<option>49
	<option>50
	<option>51
	<option>52
	<option>53
	<option>54
	<option>55
	<option>56
	<option>57
	<option>58
	<option>59
</select>
<br>
			Type of transaction: Buy<input type="radio" name="transaction" value="buy">Sell<input type="radio" name="transaction" value="sell"><br>
			Stock symbol:<input type="text" name="stock">(e.g. AB, SCC, ABS)<br>
			Book value of stock:<input type="text" name="BV">(<i><b>*For selling transaction only</b></i>)<br>
			Price per share:<input type="text" name="price"><br>
			Volume of shares:<input type="text" name="volume"><br>
			<input type="submit">
			</form>
	</tr>
</table>
<?php include ('footer.php'); ?>
</body>
</html>
