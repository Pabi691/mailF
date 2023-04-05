<?php


if (isset($_POST['done'])){

  //getting user data
  $name=$_POST['name'];
  $class=$_POST['class'];
  $email=$_POST['email'];

  //recipient mail
  $mailTo='pabitra691@gmail.com';

  //email Subject
  $subject="A new massage from" .$name;


  //email massage body

  $htmlContent='<h2> Email Request Received </h2>
  <p> <b>Clint Name:</b> '.$name .' </p>
  <p> <b>Class:</b> '.$class .' </p>
  <p> <b>Email:</b> '.$email .' </p>
  ';

  //header for sendewr info
   $headers = "From:" .$name . "<" .$email. ">";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


   //php mailer function

    $result= mail($mailTo, $subject, $htmlContent, $headers);

    //error

    if($result){
      $success ="success";
    }else{
      $failed="Failed";
    }

}


 ?>
