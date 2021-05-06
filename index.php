<?php
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $name = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $mesage = addslashes($_POST['mesage']);
        $to = 'daianeucceli@gmail.com';
        $subject = 'este é o resultado do formulario: ';
        $body = 'Nome: ' .$name. '\n'.
                'E-mail: ' .$email. '\n'.
                'Mensagem: ' .$mesage. '\n';
        $header = "From: lorranoliveir@gmail.com ".'\r\n'.
                "Reply-To:" .$email.'\r\n'.
                'X=Mailer:PHP/'.phpversion();
        if(mail($to,$subject,$body,$header)){
            echo("E-mail enviado!");
        }else{
            echo("E-mail não enviado!");
        }
    }
?>