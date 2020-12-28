<?php?><!DOCTYPE html>
<html>
<head>
<title>Address an Entry</title>
<body>
<form method="post"action="$_SERVER[PHP_SELF]">
<table>
<h3>Add an Entry</h3>
<tr>
<td colspan=3>FirstName:</td>
<td><input type="text" name="fname" size="40" placeholder="Enter first name" required/></td>
</tr>
<tr>
<td colspan=3>LastName:</td>
<td><input type="text" name="lname" size="40" placeholder="Enter last name" required/></td>
</tr>
<tr>
<td colspan=3>Street Address:</td>
<td><input type="text" name="fname" size="20" placeholder="Enter street"></td>
<td colspan=3>city:</td>
<td><input type="text" name="city" size="18" placeholder="Enter city"></td>
</tr>
<tr>
<td colspan=3>Zip Code:</td>
<td><input type="text" name="zipcode" size="18" placeholder="Enter city"></td>
<td colspan=3>State:</td>
<td><input type="text" name="state" size="18" placeholder="Enter state"></td>
</tr>
<tr>
<td colspan=3>Address Type:</td>
<td colspan=3><label>Home</label><input type="radio" name="address" value="home">
<label>Work</label><input type="radio" name="address" value="work" >
<label>other</label><input type="radio" name="address" value="other"></td>
</tr>
<tr>
<td colspan=3>Telephone Number </td>
<td><input type="text" name="telephone" size="15">
<td><label>Home</label><input type="radio" name="address" value="home">
<label>Work</label><input type="radio" name="address" value="work" >
<label>other</label><input type="radio" name="address" value="other"></td>
</tr>
<tr>
<td colspan=3>Fax Number </td>
<td><input type="text" name="fax" size="15">
<td><label>Home</label><input type="radio" name="address" value="home">
<label>Work</label><input type="radio" name="address" value="work" >
<label>other</label><input type="radio" name="address" value="other"></td>
</tr>
<tr>
<td colspan=3>Email-address </td>
<td><input type="text" name="email" size="20">
<td><label>Home</label><input type="radio" name="address" value="home">
<label>Work</label><input type="radio" name="address" value="work" >
<label>other</label><input type="radio" name="address" value="other"></td>
</tr>
<tr>
<td colspan=3><label>Personal Note</label></td>
<td><textarea name="note" rows="3" columns="30">
</textarea></td>
</tr>
<tr>
<td><button type="submit" name="submit" value="send">Add Entry</button></td>
</tr>
<table>
</form>
<body>
</html>
