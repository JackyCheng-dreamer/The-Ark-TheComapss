<?php

$Client_number = $_POST["Client_number"];
$Google_drive_id = $_POST["Google_drive_id"];
$photos = (int) $_POST["photos"] +1;

print_r($_POST);
$date = date("F j, Y, g:i a");

require './send_gmail.php';

$subject_template = " [AUTOMATED] Personal Information for Case ".$Client_number;
$message_template = 
"A new application has been submitted via The Compass:<br><br>

Case number: <i>{$Client_number}</i> <br>
Time of submission: <i>{$date}</i> <br>
Number of documents submitted: <i>{$photos}</i> <br><br>

<strong> Please note that all the documents uploaded by the client are stored in the following link : </strong><br>
https://drive.google.com/drive/u/2/folders/{$Google_drive_id}<br><br>

<strong> Please note that Clio input reference is stored in the following link : </strong><br>
https://drive.google.com/drive/u/2/folders/1ZFuXznpnYhWjMIu3dV4PB9b6XtILW9Wy<br><br>

[***This email is automatically generated. Please DO NOT reply to this email.]<br>
";
/**
* @param $sender string sender email address
* @param $to string recipient email address
* @param $subject string email subject
* @param $messageText string email text
* @return Google_Service_Gmail_Message
*/
function createMessage($sender, $to, $subject, $messageText) {
    $message = new Google_Service_Gmail_Message();
   
    $rawMessageString = "From: <{$sender}>\r\n";
    $rawMessageString .= "To: <{$to}>\r\n";
    $rawMessageString .= 'Subject: =?utf-8?B?' . base64_encode($subject) . "?=\r\n";
    $rawMessageString .= "MIME-Version: 1.0\r\n";
    $rawMessageString .= "Content-Type: text/html; charset=utf-8\r\n";
    $rawMessageString .= 'Content-Transfer-Encoding: quoted-printable' . "\r\n\r\n";
    $rawMessageString .= "{$messageText}\r\n";
   
    $rawMessage = strtr(base64_encode($rawMessageString), array('+' => '-', '/' => '_'));
    $message->setRaw($rawMessage);
    return $message;
   }
   
   
   /**
* @param $service Google_Service_Gmail an authorized Gmail API service instance.
* @param $userId string User's email address or "me"
* @param $message Google_Service_Gmail_Message
* @return null|Google_Service_Gmail_Message
*/
function sendMessage($service, $userId, $message) {
    try {
      $message = $service->users_messages->send($userId, $message);
      print 'Message with ID: ' . $message->getId() . ' sent.';
    } catch (Exception $e) {
      print 'An error occurred: ' . $e->getMessage();
    }
   
   }


   $service = new Google_Service_Gmail( $GLOBALS['client'] );
   $mess_ready = createMessage("ark.litelab.hku@gmail.com", "hkuark.jchk@gmail.com", $subject_template, $message_template );
   
   sendMessage($service,"me",$mess_ready);

   ?>