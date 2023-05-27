<?php 


 include('class.phpmailer.php');

    /**function email($fromEmail, $fromName, $subject, $html){
        $mail2 = new PHPMailer;
        $mail2->isSMTP();

        $mail->CharSet="UTF-8";
    $mail->SMTPSecure = 'tls';

        $mail2->From = "avengersconta@gmail.com";
        $mail2->FromName = "Lucas";

        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true; 
       
        $mail->Port  = 465;
        $mail2->Username = "lucasfanjos0022@gmail.com";
        $mail2->Password = "eu gosto de tortas1";

        $mail2-> AddAddress($fromEmail, $fromName);
        
        $mail2->Subject = $subject;

        $mail2->AltBody = "Para ver essa mensagem, use um programa compatível com HTML!";

        $mail2->MsgHTML($html);

        if($mail2->Send()){
            return "1";
        } else {
            return $mail2->ErrorInfo;
        }
        

    }

    $corpo_email = "<html><body><p>Olá! </p></body></html>";

    /**$email = email("avengersconta@gmail.com","lucas","teste",$corpo_email);

    if($email == "1"){
        echo "envio realizado";
    }else{
        echo $controle;
    }

    echo "funcionando";

    **/

    function email($fromEmail, $fromName, $html){
    $mail = new PHPMailer;
    $mail->isSMTP();  
    $mail->Host = 'smtplw.com.br';
    $mail->SMTPAuth = true; 
    $mail->Username = 'contatosite@wvpsolucoes.com.br';
    $mail->Password = '#0*3#7!?5(/)c!+D=&%$';  
    $mail->SMTPSecure = 'tls';    
    $mail->Port = 587;           
    $mail->From = $fromEmail;
    $mail->FromName = $fromName;
    $mail->AddAddress('contato@wvpsolucoes.com.br');

    $mail->IsHTML(true);
    $mail->Subject = "Email de WVPSoluções";
    $mail->AltBody = "Para ver essa mensagem, use um programa compatível com HTML!";
    $mail->Body    = $html;

    if(!$mail->Send())
    {
      echo "Erro ao enviar email: " . $mail->ErrorInfo;
    }
    else
    {
      echo "Mensagem enviada!";
    }
}

?>