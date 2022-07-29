<?php

var_dump($_POST['phone']); 

?><script type="text/javascript"> alert($_POST["phone"]); window.history.back(); </script> 
<?php
// Phone
if (empty($_POST["phone"])) {

   

   ?><script type="text/javascript"> alert("Phone Missing."); window.history.back(); </script> 
   <?php
} else{
    $phone = $_POST["phone"];

    
}

// Name
if (empty($_POST["name"])) {
    ?><script type="text/javascript"> alert("Name Missing."); window.history.back(); </script> 
    <?php
 } else{
    $name = $_POST["name"];
}

$EmailTo = "play@alpham.co.zw";

$Subject = "Website Enquiries";

$message = " ".$name." is requesting for a call back on  ".$phone." ";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
// $Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body);

// redirect to success page
if ($success){

    ?><script type="text/javascript"> alert("Call back was success."); window.history.back(); </script> 
    <?php
 
}else{

    ?><script type="text/javascript"> alert("Something went wrong,  try again ."); window.history.back(); </script> 
    <?php
   
}

?>
<!-- alpham.co.zw 3.0 -->