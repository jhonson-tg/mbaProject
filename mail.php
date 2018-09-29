<?php


function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


$pass=randomPassword();
echo $pass;
$mymail=$_POST['mail'];

$to = $mymail;
$subject = "Hello User";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Your Password is 123564</p>
<p>AIMIT IT Department</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <maheshamin282@gmail.com>' . "\r\n";

mail($to,$subject,$message,$headers);
?>