// JavaScript Document
<?php
	$contactName = $_POST("contactName");
	$contactEmail = $_POST("contactEmail");
	$contactReason = $_POST("contactReason");
	$contactComments = $_POST("contactComments");
	$mailingList = $_POST("mailingList");
	$moreInformation = $_POST("moreInformation");
	
	$to = "kathleensohn@hotmail.com";
	$subject = "Contact Form Assignment";
	$body = "Please don't reply to this email. \n\n $request";
	mail ($to, $subject, $body);
	
	echo "Message sent! "
?>


</head>

<body>
	<h1>Intro PHP</h1>
	
	<p>Recipient Email Address: <?php echo $contactEmail->getRecipient(); ?></p>
	<p>Sender Email Address: <?php echo $contactEmail->getSender(); ?></p>
	<p>Subject: <?php echo $contactEmail->getSubject(); ?></p>
	<p>Message: <?php echo $contactEmail->getMessage(); ?></p>
	
	
	<?php
	if ($emailStatus) {
		?>
				<h3><?php echo $contactEmail->getMessage(); ?></h3>
	<?php			
			}else{
	?>			
				<h3>There was an error sending your email!</h3>
	<?php			
			}
	?>
	</h3>	
	
</body>
</html>