<?php
if(isset($_POST['submit'])) {

   if(!empty($_POST['name'] && !($_POST['asunto']) && !empty($_POST['email']))) {
      
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email, $asunto, $name, $phone, $header);
        if($mail) {
            echo ('<h4>Mail enviado exitosamente</h4>');
        }
   }
}
