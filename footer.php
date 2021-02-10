<?php

$EmailFrom = $_REQUEST['email']; 
$EmailTo = "viruscovid19d@gmail.com"; 
$Subject = "Message From Hacking-World";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Number = Trim(stripslashes($_POST['tel']));
$Message = Trim(stripslashes($_POST['description'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "\n";
$Body .= "Number: ";
$Body .= $Number;
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  echo "Success";
}
else{
  echo "Error";
}

?>
<center><strong>
<a href="https://hacking-world.github.io/Hacking-World/" class="style9"><img src="img/thanks.png" /></a><br />
<a href="index.html">We will get back to you soon...Back To The Homepage</a></strong>
</center>
