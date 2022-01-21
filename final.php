
<?php
// error_reporting(0);

require "vendor/autoload.php";
 $name=$_POST["name"];
 $emaill=trim($_POST["email"]);
 $sub=$_POST["subject"];
 $msg=$_POST["message"];
 $email = new \SendGrid\Mail\Mail();
 $email->setFrom("sonidev7250@gmail.com");
 $email->setSubject($sub);
 $email->addTo("divyasoniworld@gmail.com");
 $email->addContent("text/html","<div>".$name."<br>".$emaill."<br>".$msg."</div>");

 $sendgrid = new SendGrid("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
 ");
 


 if($sendgrid->send($email))
 {
     
     
     echo '<script>alert("Mail Sent Successfully");
     window.location.replace("https://divyasoniworld.github.io/Portfolio-divyadarshan/");</script>';


    
}
 else{ echo '<script>alert("Something Went Wrong")</script>';}

?>
