<?php

{session_start();

	
    
//Do you stuff
$name=$_POST['name'];
$email=$_POST['email'];
$mobileno=$_POST['phone'];
$message=$_POST['message'];


//email working 

				$to="rainbow_industries@yahoo.co.in,nitin90099@gmail.com,";
				$subject="Rainbow enquiry";
				$msg="A Potential Client tried to  Contact Us. Here is the message : $message..\n\n
				Name Of Person : $name 
				Email 	: $email 
				Phone 	: $mobileno


			
				-------------------------------------------------------
				\n ";
				
					   
				$headers ='From: '.$name;
				
				
				$success=mail($to,$subject,$msg,$headers);
				//echo $success;
				if(!empty($success)||$success!=0)
				{
				
				echo '<script>alert ("Thank you for Contacting Us , We will revert back you soon")</script>';
				echo "<script>window.location.href='index.html'</script>";
				}
				else
					{
					
					echo '<script>alert ("Mail is not Sent.Please try again. ")</script>';
					echo "<script>window.location.href='index.html'</script>";
					
					}
				
			}
			
			
?>
