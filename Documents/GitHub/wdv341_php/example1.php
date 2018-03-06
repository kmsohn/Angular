<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Form Validation</title>
<META NAME="AUTHOR" CONTENT="QuiteWeb.com">
<style type="text/css">
td { 
	vertical-align:top;	
   }
.style1 {
  color: #8ebe51;
  font-weight: bold;
  text-decoration: none;
  }
</style>
</head>
<body>
<div align="center">
<h2><a href=""  class="style1" >Form Validation</a></h2>

<?php
require_once 'validation.class.php';
$form = new validation();
if(isset($_POST['submit']))
{
	$error = null;
	$get_error = null;
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$date = $_POST['date'];
	
	$fname_error = $form->name_validation($fname, 'First name');
	$lname_error = $form->name_validation($lname, 'Last name');
	$username_error = $form->username_validation($username, 'Username');
	$email_error = $form->email_validation($email, 'E-mail');
	$address_error = $form->address_validation($address, true, 'address');
	$password_error = $form->password_validation($password, 0, 'Password');
	$phone_error = $form->digits_validation($phone, 'phone number');
	$date_error = $form->date_validation($date, 'Date');
	
	$error = $fname_error.$lname_error.$username_error.$email_error.$address_error.$password_error.$phone_error.$date_error;
	if($error == null)
		echo '<h2><font color="green">Valid</font></h2>';
	else echo '<h2><font color="red">NOT Valid</font></h2>';
}	
?>

<form method="post" action=""  name="" target="" >
<table width="300" bgcolor="#e8fab6" >
	<tr>
		<td><label>First name: </label></td>
		<td>
			<input type="text" name="fname" value="<?php if(isset($fname)) echo $fname; ?>" size=""  />
			<?php if(isset($fname_error)) echo '<h5><font color="red">'.$fname_error.'</font></h5>	'; ?>
		</td>
	</tr>
	<tr>
		<td><label>Last name: </label></td>
		<td>
			<input type="text" name="lname" value="<?php if(isset($lname)) echo $lname; ?>" size=""  />
			<?php if(isset($lname_error)) echo '<h5><font color="red">'.$lname_error.'</font></h5>	'; ?>
		</td>
	</tr>
	<tr>
		<td><label>Username: </label></td>
		<td>
			<input type="text" name="username" value="<?php if(isset($username)) echo $username; ?>" size=""  />
			<?php if(isset($username_error)) echo '<h5><font color="red">'.$username_error.'</font></h5>	'; ?>
		</td>
	</tr>
	<tr>
		<td><label>E-mail: </label></td>
		<td>
			<input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>" size=""    />
			<?php if(isset($email_error)) echo '<h5><font color="red">'.$email_error.'</font></h5>	'; ?>
		</td>
	</tr>
	<tr>
		<td><label>Password: </label></td>
		<td>
			<input type="password" name="password" value="<?php if(isset($password)) echo $password; ?>" size=""  MAXLENGTH="21"  />
			<?php if(isset($password_error)) echo '<h5><font color="red">'.$password_error.'</font></h5>	'; ?>
		</td>
	</tr>
	<tr>
		<td><label>Phone: </label></td>
		<td>
			<input type="text" name="phone" value="<?php if(isset($phone)) echo $phone; ?>" size=""    />
			<?php if(isset($phone_error)) echo '<h5><font color="red">'.$phone_error.'</font></h5>	'; ?>
		</td>
	</tr>
	<tr>
		<td><label>Date: </label></td>
		<td>
			<input type="text" name="date" value="<?php if(isset($date)) echo $date; ?>" size=""    />
			<?php if(isset($date_error)) echo '<h5><font color="red">'.$date_error.'</font></h5>	'; ?>
		</td>
	</tr>
	<tr>
		<td><label>Address: </label></td>
		<td>
			<textarea rows="7" cols="17" name="address" >Some thing</textarea>
			<?php if(isset($fname_error)) echo '<h5><font color="red">'.$fname_error.'</font></h5>	'; ?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Submit" style="height: 35px; width: 100px" /></td>
	</tr>

</table>
</form>
<i>Powered by <a href="http://www.quiteweb.com" class="style1" target="blanc" >QuiteWeb.com &#169;</a></i>
</div>
</body>
</html>

