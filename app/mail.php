<?php
         $to = "amirnweb@gmail.com";
         $subject = "mail from" .$_POST['name'] ."and email : " .$_POST['email'];
         $message = $_post['message'];
         $header = "";
         $retval = mail ($to,$subject,$message,$header);

         if( $retval == true ) {
            header("Location: http://www.amirniknami.info");
         }else {
            echo "Message could not be sent...";
         }
      ?>
