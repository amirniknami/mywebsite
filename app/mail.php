<?php
         $to = "amirnweb@gmail.com";
         $subject = "mail from" .$_POST['name'] ."and email : " .$_POST['email'];
         $message = $_post['message'];
         $msg = wordwrap($message,70);

               if(mail($to,$subject,$msg)){

                                 header("Location:http://amirniknami.herokuapp.com");
                          }
                             else{
                                  echo "could not send message";
                               }
         
?>
