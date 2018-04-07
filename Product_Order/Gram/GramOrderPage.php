<?php

 $name= $_POST['name'];
   $email= $_POST['email'];
    $message= $_POST['message'];
	 $subject= $_POST['subject'];
	  $contact= $_POST['contact'];
	   if($name==''){
	   if($email==''){
		   if($message==''){
			   if($contact==''){
				   
			   }
		   }
	   }
   }else{
	 $to=" shantanunandan8@gmail.com , subhanpur@outlook.com , subhanpurvillage@gmail.com , shankarsheo55@gmail.com ";
      $from="";
	   $subject="New query from customer :$subject";
        $body = "Customer name : $name\n\n";
		   $body .= "Customer Contact : $contact\n\n"; 
			$body .= "Customer Message : $message\n\n";
		     $body .= "Customer email id : $email\n\n";
		   
	 ini_set("SMTP","mail.teciexsolutions.com");
	 mail($to,$subject,$from,$body);
   } 
 
?>

<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<title>Subhanpur Product Order</title>
<script src="js/ajax1.js" type="text/javascript"></script>
<script src="js/ajax2.js" type="text/javascript"></script>
<script src="js/ajax3.js" type="text/javascript"></script>
<link href="css/bootstrap_validate.css" type="text/css" rel="stylesheet"></link>
<script src="js/boot.js" type="text/javascript"></script>
<style type="text/css"></style>
<script src="js/newJS.js" type="text/javascript"></script>
<style>
body {
    background: white;
}
</style>
</head>
<body>
<!--body-->
 <div class="hero-unit">
     <h1>Place your Order for this product by filling the below form</h1> 
    </br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" id="contact-form">
        <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
                <input type="text" name="name" id="name" placeholder="Your name">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Email Address</label>
            <div class="controls">
                <input type="text" name="email" id="email" placeholder="Your email address">
            </div>
        </div>
		 <div class="control-group">
            <label class="control-label" for="contact">Contact Number</label>
            <div class="controls">
                <input type="text" name="contact" id="contact" placeholder="Your contact number">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="subject">Subject</label>
            <div class="controls">
                <select id="subject" name="subject">
                    <option value="na" selected="">Choose Product:</option>
                    <option value="Chana(Gram)">Chana(Gram)</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="message">Order Quantity and Message</label>
            <div class="controls">
                <textarea name="message" id="message" rows="8" class="span5" placeholder="Order Quantity and the message you want to send to us."></textarea>
            </div>
        </div>
		<div class="grid_12_left">
        <div class="form-actions">
            <input type="hidden" name="save" value="contact">
            <button type="submit" id="submit" class="btn btn-success">Submit Message</button>
            <button type="reset" class="btn">Cancel</button>
        </div>
		</div>
    </form>
	</div>
</body>
</html>