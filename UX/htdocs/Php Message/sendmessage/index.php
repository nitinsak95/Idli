<?php
$username="Nitin";
$password="Nitinsak95";

//get form data
$number = $_POST['numberext'].$_POST['number'];
$from = $_POST['from'];
$message = $_POST['message'];

$vars=="http://txtlocal.com/sendsmspost.php?uname=".$username."pword=".$passsword;


?>

<form action="sms.php" method="POST">
Number:<br />
<input type="text" size="2" name="numberext"> - <input type="text" name="number">

<br /><br />

Sender:<br />
<input type="text" name="from">

<br /><br />

Message:<br />
<textarea name="message"></textarea>
    
    <br /><br />
    
<input type="hidden" name="submitted" value="true">
<input type="submit" name="submit" value="send">

</form>