<?php




$name = $_POST['name'];

$email = $_POST['email'];

$tel = $_POST['tel'];

$message = $_POST['message'];




	
$to = "future@nxtventura.com";
$subject = " Website Enquiry";

$message = "
<html>
<head>
<title> Details</title>
<style>
table{
	width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    text-align: center;
}
</style>
</head>
<body>
<h1> Contact Info</h1>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Message</th>

</tr>
<tr>
<td>$name</td>
<td>$email</td>
<td>$tel</td>
<td>$message</td>


</tr>
</table>
<h4></h4>
</body>
</html>
";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@nxtventura.com>' . "\r\n";


mail($to,$subject,$message,$headers);




header("location:index.html");
exit;

?>