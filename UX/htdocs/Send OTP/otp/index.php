<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Here give your own title</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    
<form name="form1" action="" method="post">
Enter Mobile Number<input type="text" name="text1"><br>
Enter SMS<textarea cola="10" rows="10" name="text2"></textarea><br>
<input type="submit" name="submit1" value="send sms">
</form>
    
<?php
if(isset($_POST["submit1"]))
{
$_objSmsProtocolGsm = new Com("ActiveXperts.SmsProtocolGsm");
	
	
	
	

		//create the nessecairy com objects
		$objMessage   = new Com ("ActiveXperts.SmsMessage");
		$objConstants = new Com ("ActiveXperts.SmsConstants");
		
		//get the submitted information
		$device       = "HUAWEI Mobile Connect - 3G Modem #2";
		$speed = "Default";       
		$pincode      ="";
		
		
		$recipient    = "+91" . $_POST["text1"];
		$message      = $_POST["text2"];
		
		
		$unicode      = "";
		
$_objSmsProtocolGsm->Logfile = "C:\SMSMMSToolLog.txt";
		
		//Clear the messageobject first
		$objMessage->Clear();
		
		$objMessage->Clear();
		
			if( $recipient == "" ) die("No recipient address filled in."); 
		$objMessage->Recipient = $recipient;
		
		
		if( $unicode != "" ) $objMessage->Format = $objConstants->asMESSAGEFORMAT_UNICODE;
		
			$objMessage->Data = $message;
			$_objSmsProtocolGsm->Clear();
			
			
			
			
			
			
			
			$_objSmsProtocolGsm->Device = $device;
		
		//fill in the devicespeed
		if( $speed == "Default" ) $_objSmsProtocolGsm->DeviceSpeed = 0;
		if( $speed != "Default" ) $_objSmsProtocolGsm->DeviceSpeed = $speed;
		
			if( $pincode != "" ) $_objSmsProtocolGsm->EnterPin( $pincode );
			
				if( $_objSmsProtocolGsm->LastError == 0 ){
        	$_objSmsProtocolGsm->Send( $objMessage );
			}
			
			$LastError        = $_objSmsProtocolGsm->LastError;
		$ErrorDescription = $_objSmsProtocolGsm->GetErrorDescription( $LastError );
		
		
		
}


?>


</body>

</html>