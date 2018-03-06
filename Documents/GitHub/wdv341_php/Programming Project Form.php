<!DOCTYPE HTML>
<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Programming Project Form</title>
</head>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href= "style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<body>
<h1></h1>
<h2>Programming Project - Contact Form</h2>
<form name="form1" class="topBefore" method="post" action="processForm.php">
  <p>&nbsp;</p>
  <p>
    <label>Your Name:
      <input type="text" name="yourName" id="yourName">
    </label>
  </p>
  <p>Your Email:
    <input type="text" name="yourEmail" id="yourEmail">
  </p>
  <p>Reason for contact:
    <label>
      <select name="select2" id="select2">
        <option value="default">Please Select a Reason</option>
        <option value="product">Product Problem</option>
        <option value="return">Return a Product</option>
        <option value="billing">Billing Question</option>
        <option value="technical">Report a Website Problem</option>
        <option value="other">Other</option>
      </select>
    </label>
  </p>
  <p>
    <label>Comments:
      <textarea name="comments" id="comments" cols="45" rows="5"></textarea>
    </label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="mailingList" id="mailingList" checked>
      Please put me on your mailing list.</label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="moreInformation" id="moreInformation" checked>
      Send me more information</label>
  about your products.  </p>
  <p>
    <input type="hidden" name="hiddenField" id="hiddenField" value="application-id:US447">
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit">
    <input type="reset" name="button2" id="button2" value="Reset">
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>
