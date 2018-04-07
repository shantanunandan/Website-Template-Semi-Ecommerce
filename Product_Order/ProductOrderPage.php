
<!--
Designed and Developed By: Shantanu Nandan
Email- shantanu.nandan@outlook.com
       shantanunandan8@gmail.com
-->

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
                    <option value="Masoor Daal">Masoor Daal</option>
                    <option value="Chana Daal">Chana Daal</option>
                    <option value="Toor Daal">Toor Daal</option>
                    <option value="Makai(Bhutta)">Makai(Bhutta)</option>
				    <option value="Suryamukhi(Sunflower)">Suryamukhi(Sunflower)</option>
                    <option value="Sarso(Mustard)">Sarso(Mustard)</option>
                    <option value="Chawal(Rice)">Chawal(Rice)</option>
                    <option value="Gehu(Wheat)">Gehu(Wheat)</option>
					<option value="Aalu(Potato)">Aalu(Potato)</option>
                    <option value="Chana(Gram)">Chana(Gram)</option>
                    <option value="Pyaz(Onion)">Pyaz(Onion)</option>
                    <option value="Ganna(Sugercane)">Ganna(Sugercane)</option>
                    <option value="Ber">Ber</option>
                    <option value="Amrud(Guava)">Amrud(Guava)</option>
                    <option value="Aam(Mango)">Aam(Mango)</option>
                    <option value="Jamoon">Jamoon</option>
                    <option value="Murgi(Poultry)">Murgi(Poultry)</option>
                    <option value="Murga(Poultry)">Murga(Poultry)</option>
					<option value="Egg(Poultry)">Egg(Poultry)</option>
					<option value="Murgi(Desi)">Murgi(Desi)</option>
                    <option value="Murga(Desi)">Murga(Desi)</option>
					<option value="Egg(Desi)">Egg(Desi)</option>
                    <option value="Pigeon">Pigeon</option>
                    <option value="Cow">Cow</option>
                    <option value="Ox">Ox</option>
					<option value="Buffalo">Buffalo</option>
                    <option value="Buffalo Bull">Buffalo Bull</option>
                    <option value="Male Goat">Male Goat</option>
                    <option value="Female Goat">Female Goat</option>
                    <option value="Horse">Horse</option>
                    <option value="Bull">Bull</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="message">Message</label>
            <div class="controls">
                <textarea name="message" id="message" rows="8" class="span5" placeholder="The message you want to send to us."></textarea>
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


<!--
Designed and Developed By: Shantanu Nandan
Email- shantanu.nandan@outlook.com
       shantanunandan8@gmail.com
-->